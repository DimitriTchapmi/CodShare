#!/bin/sh
nomuser=$1
depot_site="/var/www/site/"
sudo touch etc/apache2/sites-available/$nomuser.conf
sudo echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/$nomuser.conf
sudo echo "ServerName $nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
sudo echo "ServerAlias www.$nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
sudo echo "</VirtualHost>" >> /etc/apache2/sites-available/$nomuser.conf
sudo a2ensite $nomuser.conf
sudo service apache2 reload 
