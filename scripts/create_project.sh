#!/bin/bash

depot_git="/var/www/git/"
depot_site="/var/www/site/"

nom_user=$1
nom_projet=$2


sudo echo "####Création du groupe Unix pour le projet####"
sudo addgroup $nom_projet

sudo mkdir $depot_site$nom_user
sudo chown -R $nom_user:www-data $depot_site$nom_user

sudo usermod -G $nom_projet $nom_user

sudo echo "####Création de l'Alias mail du projet####"
sudo echo "$nom_projet@codshare.itinet.fr $nom_user@codshare.itinet.fr" >> /etc/postfix/virtual
sudo postmap /etc/postfix/virtual
sudo postfix reload

sudo echo "####Création du dossier Cloud du projet####"
export OC_PASS=$1
cd /var/www/owncloud/
su -s /bin/sh www-data -c "php /var/www/owncloud/occ user:add --password-from-env --display-name="$nom_user" --group="$nom_projet" $nom_user"

sudo echo "####Création du Depôt Git du projet####"
sudo mkdir $depot_git$nom_projet
cd $depot_git$nom_projet
git init --bare
chmod -R 770 $depot_git$nom_projet
chown -R $nom_user:$nom_projet $depot_git$nom_projet


