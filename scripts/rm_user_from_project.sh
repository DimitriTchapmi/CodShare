#!/bin/bash
nom_user=$1
nom_projet=$2
###suppression du dev du groupe Unix du projet###
sudo gpasswd -d $nom_user $nom_projet
###suppression du mail du dev de l'alias ###
sudo  grep ^$nom_projet@codshare.itinet.fr /etc/postfix/virtual | sed -i 's/" $nom_user,"//g' /etc/postfix/virtual

	
