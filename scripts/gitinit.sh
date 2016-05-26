#!/bin/bash

echo "Entrez le nom du projet"

read nomuser

#nomuser=$1

mkdir /var/www/$nomuser
cd /var/www/$nomuser
git init
