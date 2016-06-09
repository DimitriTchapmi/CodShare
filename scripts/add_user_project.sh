#!/bin/bash

nom_user=$1
nom_projet=$2

dossier_keys="/home/codshare-itinet/"

#sudo echo "####Création du Cloud du dev####"
#export OC_PASS=$1
#cd /var/www/owncloud/
#su -s /bin/sh www-data -c "php /var/www/owncloud/occ user:add --password-from-env --display-name="$nom_user" --group="$nom_projet" $nom_user"

sudo echo "####Ajout a l'alias mail du projet####"
if grep -q ^$nom_projet@codshare.itinet.fr /etc/postfix/virtual; then
	sudo sed -i '/'"$nom_projet@codshare.itinet.fr"'/s/$/'", $nom_user@codshare.itinet.fr"'/' /etc/postfix/virtual
else
 	sudo echo "Alias inexistant !" 	
fi

###Ajout user key to authorized keys
sudo cat "$dossier_keys$nom_user/$nom_user.pub" >> /home/$nom_projet/.ssh/authorized_keys