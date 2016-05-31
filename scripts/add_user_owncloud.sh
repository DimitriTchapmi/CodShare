#!/bin/bash
user=$1
PASS=$2
group=$3

export OC_PASS=$2
su -s /bin/sh www-data -c 'php occ user:add --password-from-env --display-name=$1 --group=$3 $1