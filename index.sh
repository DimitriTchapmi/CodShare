#! /bin/bash

	mkdir /var/www/codshare/$1
	touch /var/www/codshare/$1/index.html

	echo "<!DOCTYPE html>" >> /var/www/codshare/$1/index.html
	echo "<html>" >> /var/www/codshare/$1/index.html
	echo "<head>" >> /var/www/codshare/$1/index.html
	echo "<title>$1</title>" >> /var/www/codshare/$1/index.html
	echo "</head>" >> /var/www/codshare/$1/index.html
	echo "<body>" >> /var/www/codshare/$1/index.html
	echo "<h1>$1</h1>" >> /var/www/codshare/$1/index.html
	echo "</body>" >> /var/www/codshare/$1/index.html
	echo "</html>" >> /var/www/codshare/$1/index.html
