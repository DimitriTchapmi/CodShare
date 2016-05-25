#!/bin/bash

nomuser=$1
verification=`sudo grep $nomuser@codshare.itinet.fr /etc/postfix/vmailbox`

	if [ -z "$verification" ]; then
		sudo echo "Cette boite mail est inconnu"
		exit
	else
		sudo sed -i "/$nomuser@codshare.itinet.fr/d" /etc/postfix/vmailbox
		sudo postmap /etc/postfix/vmailbox
		sudo sed -i "/$nomuser@codshare.itinet.fr/d" /etc/courier/userdb
		sudo makeuserdb 
		sudo rm -R /var/mail/$nomuser/
	fi
sudo service postfix reload
