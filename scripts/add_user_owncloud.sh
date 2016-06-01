#!/bin/bash
user=$1
newpassword=$2
group=$3
cd /var/www/owncloud/
sudo -u www-data php occ user:add --display-name="$user" --group="$group" $user << HERE
$newpassword
$newpassword
HERE