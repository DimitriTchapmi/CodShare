#!/bin/sh
touch etc/apache2/sites-available/$1.conf
echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/$1.conf
echo "ServerName $1.codshare.itinet.fr" >> /etc/apache2/sites-available/$1.conf
echo "ServerAlias www.$1.codshare.itinet.fr" >> /etc/apache2/sites-available/$1.conf
echo "DocumentRoot /var/www/codshare/$1" >> /etc/apache2/sites-available/$1.conf
echo "</VirtualHost>" >> /etc/apache2/sites-available/$1.conf
a2ensite $1.conf
service apache2 reload 
