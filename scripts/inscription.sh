#!/bin/bash

# Définition des variables :
nom_user=$1
mdp_user=$2
verification=`sudo grep $nom_user /etc/postfix/vmailbox`
cheminUtil=/$nom_user/
dossier_keys="/home/codshare-itinet/"

sudo echo "###Création de l'utilisateur dans vmailbox..."
#Si $verification est vide on enregistre l'utilisateur
if [ -z "$verification" ]; then	
	sudo echo $nom_user	$cheminUtil >> /etc/postfix/vmailbox
	sudo postmap /etc/postfix/vmailbox
else
	sudo echo "Cette adresse mail existe déja"
	exit
fi
sudo echo "Création de la boite mail..."
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
/bin/echo "$mdp_user" | sudo userdbpw -md5 | sudo userdb $nom_user set systempw

#Compilation du fichier userdb
sudo makeuserdb

sudo echo "###Génération des clés ssh de conexion au dépôt git..."
sudo mkdir $dossier_keys$nom_user/
cd $dossier_keys$nom_user/
sudo ssh-keygen -t rsa -b 1024 -f $nom_user <<PASSPHRASE
$mdp_user
$mdp_user
PASSPHRASE




