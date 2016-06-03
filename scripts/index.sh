#! /bin/bash
nomuser=$1

	mkdir /var/www/site/$nomuser
	touch /var/www/site/$nomuser/index.html

	echo "<!DOCTYPE html>" >> /var/www/$nomuser/site/index.html
	echo "<html>" >> /var/www/$nomuser/site/index.html
	echo "<head>" >> /var/www/$nomuser/site/index.html
	echo "<title>$nomuser</title>" >> /var/www/$nomuser/site/index.html
	echo "</head>" >> /var/www/$nomuser/site/index.html
	echo "<body>" >> /var/www/$nomuser/site/index.html
	echo "<h1>$nomuser</h1>" >> /var/www/$nomuser/site/index.html
	echo "</body>" >> /var/www/$nomuser/site/index.html
	echo "</html>" >> /var/www/$nomuser/site/index.html
