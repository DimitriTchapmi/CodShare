#!/bin/bash

echo "Entrez le nom du projet"

read nomuser

#nomuser=$1

mkdir /home/dev/$nomuser
cd /home/dev/$nomuser
git init
