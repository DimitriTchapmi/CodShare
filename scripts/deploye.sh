#!/bin/bash

depot_git="/var/www/git"
depot_site="/var/www/site/" 

if [ -f $depot_site$nom_projet ]
	then
	echo " le fichier existe deja "
	git pull 
else 
	echo " Creation du fichier en cours... "
	cd $depot_site
	git clone $nomuser@10.8.96.3:/$depot_git$nom_projet
	echo " Le fichier a bien ete cree "
fi


#cp -r /var/www/git/$nom_projet /var/www/site/
