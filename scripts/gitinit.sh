#!/bin/bash


nomuser=$1
sudo mkdir /var/www/$nomuser
cd /var/www/$nomuser
git init
