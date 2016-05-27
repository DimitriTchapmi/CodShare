#! /bin/bash
nomuser=$1
	mkdir /var/www/$nomuser
	touch /var/www/$nomuser/index.html

	echo "<!DOCTYPE html>" >> /var/www/$nomuser/index.html
	echo "<html>" >> /var/www/$nomuser/index.html
	echo "<head>" >> /var/www/$nomuser/index.html
	echo "<title>$nomuser</title>" >> /var/www/$nomuser/index.html
	echo "</head>" >> /var/www/$nomuser/index.html
	echo "<body>" >> /var/www/$nomuser/index.html
	echo "<h1>$nomuser</h1>" >> /var/www/$nomuser/index.html
	echo "</body>" >> /var/www/$nomuser/index.html
	echo "</html>" >> /var/www/$nomuser/index.html
