#!/bin/bash
user=$1
OC_PASS=$2
export OC_PASS
group=$3
cd /var/www/owncloud/
sudo -u www-data php occ user:add --password-from-env --display-name="$user" --group="$group" $user 