#!/bin/bash

depot_git="/var/www/git/"
depot_site="/var/www/site/"

mdp_user=$1
nom_user=$2
nom_projet=$3
mdp_projet=$4

sudo echo "####Création du groupe Unix pour le projet####"
sudo addgroup $nom_projet

sudo echo "####Création du compte Unix du chef de projet####"
#if grep -q ^$nom_user /etc/passwd; then
#        sudo echo "User $nom_user already exist in /etc/passwd !"
#else
        sudo usermod -s /usr/bin/mysecureshell -g sftpusers $nom_user
		#sudo useradd -p $mdp_user -s /usr/bin/mysecureshell $nom_user -g sftpusers 
        sudo echo "User $nom_user added in passwd,shadow and sftpusers group affected !"

        #changing to encrypted password
    sudo echo "$nom_user:$mdp_user" | sudo chpasswd
		sudo mkdir $depot_site$nom_user
        sudo chown -R $nom_user:www-data $depot_site$nom_user
#fi
sudo usermod -G $nom_projet $nom_user

sudo echo "####Création de l'Alias mail du projet####"
sudo echo "$nom_projet@codshare.itinet.fr $nom_user@codshare.itinet.fr" >> /etc/postfix/virtual
sudo postmap /etc/postfix/virtual
sudo postfix reload

sudo echo "####Création du dossier Cloud du projet####"
cd /var/www/owncloud
./add_user_owncloud.sh $nom_user $mdp_projet $nom_projet

sudo echo "####Création du Depôt Git du projet####"
sudo mkdir $depot_git$nom_projet
cd $depot_git$nom_projet
git init --bare
chmod -R 770 $depot_git$nom_projet
chown -R $nom_user:$nom_projet $depot_git$nom_projet


