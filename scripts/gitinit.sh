#!/bin/bash

#echo "Entrez le nom du projet"

#read nomuser

nom_projet=$1

mkdir $depot_git$nom_projet
cd $depot_git$nom_projet
git init
chmod -R 770 $depot_git
