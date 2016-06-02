#!/bin/sh
nomuser=$1
depot_site="/var/www/site/"
touch etc/apache2/sites-available/$nomuser.conf
echo "<VirtualHost *:80>" >> /etc/apache2/sites-available/$nomuser.conf
echo "ServerName $nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
echo "ServerAlias www.$nomuser.codshare.itinet.fr" >> /etc/apache2/sites-available/$nomuser.conf
<<<<<<< HEAD
echo "DocumentRoot /var/www/site/$nomuser" >> /etc/apache2/sites-available/$nomuser.conf
=======
echo "DocumentRoot $depot_site$nomuser" >> /etc/apache2/sites-available/$nomuser.conf
>>>>>>> f0369a3c579a8da0cf52de75abca8ba80815c5bb
echo "</VirtualHost>" >> /etc/apache2/sites-available/$nomuser.conf
a2ensite $nomuser.conf
service apache2 reload 
