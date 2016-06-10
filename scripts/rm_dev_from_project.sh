#!/bin/bash
nom_user=$1
nom_projet=$2
dossier_keys="/home/codshare-itinet/"

### suppression du mail du dev de l'alias ###
sudo grep ^$nom_projet@codshare.itinet.fr | sed -i 's/'", $nom_user@codshare.itinet.fr"'//g' /etc/postfix/virtual

### suppression de la key_user.pub dans authorized_keys du compte unix projet
key_user=$(sudo cat $dossier_keys$nom_user/$nom_user.pub)
sudo sed -i '/'"$key_user"'/d' /home/$nom_projet/.ssh/authorized_keys



	
