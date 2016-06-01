#!/bin/bash
user=$1
newpassword=$2
group=$3
cd /var/www/owncloud/
su -s /bin/sh www-data -c 'php occ user:add [--password-from-env=$newpassword] --display-name="$1" --group="$3" $1'