#!/bin/bash

# Définition des variables :
nom=$1
mdp=$2
verification=`sudo grep $nom /etc/postfix/vmailbox`
cheminUtil=/$nom/

#Création de l'utilisateur dans vmailbox :
#Si $verification est vide on enregistre l'utilisateur
if [ -z "$verification" ]; then	
	sudo echo $nom	$cheminUtil >> /etc/postfix/vmailbox
	sudo postmap /etc/postfix/vmailbox
else
	sudo echo "Cette boîte mail existe déja"
	exit
fi

#Création de son répertoire avec les bons droits :

sudo mkdir /var/mail/$nom
sudo mkdir /var/mail/$nom/cur
sudo mkdir /var/mail/$nom/new
sudo mkdir /var/mail/$nom/tmp
sudo chown -R vmail:vmail /var/mail/$nom

#Reload de postfix pour que les paramètres soit pris en compte :
sudo service postfix reload 

#Configuration IMAP 

#Inscription dans userdb :
sudo userdb $nom set uid=1007 gid=1007 home=/var/mail/$nom mail=/var/mail/$nom

#Mise en place du mot de passe :
/bin/echo "$mdp" | sudo userdbpw -md5 | sudo userdb $nom set systempw

#Compilation du fichier userdb
sudo makeuserdb


