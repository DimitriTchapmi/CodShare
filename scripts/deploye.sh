#!/bin/bash


#echo "entrez le nom du projet"

#read nom_projet

nom_projet=$1


depot_git="/var/www/git/"
depot_site="/var/www/site/" 

if [ -f $depot_site$nom_projet ]
	then
	echo " le fichier existe "
	git pull 
else 
	echo " Creation du fichier en cours... "
	cd $depot_site
	git clone $depot_git$nom_projet
fi


#cp -r /var/www/git/$nom_projet /var/www/site/
