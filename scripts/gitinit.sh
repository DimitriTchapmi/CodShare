#!/bin/bash

echo "Entrez le nom du projet"

read nomuser

#nomuser=$1

mkdir /d/codshare/var/www/$nomuser
cd /d/codshare/var/www/$nomuser
git init
