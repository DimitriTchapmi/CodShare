#!/bin/bash

# Définition des variables :
nom_user=$1
mdp=$2
verification=`sudo grep $nom_user /etc/postfix/vmailbox`
cheminUtil=/$nom_user/

#Création du compte Unix du développeur
if grep -q ^$nom_user /etc/passwd; then
	sudo echo "User $nom_user already exist in /etc/passwd !"
else
	sudo useradd -p $mdp_user -d /home/$nom_user -s /usr/bin/mysecureshell $nom_user 
fi
#Création de l'utilisateur dans vmailbox :
#Si $verification est vide on enregistre l'utilisateur
if [ -z "$verification" ]; then	
	sudo echo $nom_user	$cheminUtil >> /etc/postfix/vmailbox
	sudo postmap /etc/postfix/vmailbox
else
	sudo echo "Cette adresse mail existe déja"
	exit
fi

#Création de son répertoire avec les bons droits :

sudo mkdir /var/mail/$nom_user
sudo mkdir /var/mail/$nom_user/cur
sudo mkdir /var/mail/$nom_user/new
sudo mkdir /var/mail/$nom_user/tmp
sudo chown -R codsharemail:codsharemail /var/mail/$nom_user

#Reload de postfix pour que les paramètres soit pris en compte :
sudo service postfix reload 

#Configuration IMAP 

#Inscription dans userdb :
sudo userdb $nom_user set uid=1007 gid=1007 home=/var/mail/$nom_user mail=/var/mail/$nom_user

#Mise en place du mot de passe :
/bin/echo "$mdp" | sudo userdbpw -md5 | sudo userdb $nom_user set systempw

#Compilation du fichier userdb
sudo makeuserdb


