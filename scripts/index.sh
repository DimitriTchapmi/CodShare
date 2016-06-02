#! /bin/bash
nomuser=$1
<<<<<<< HEAD
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
=======
depot_site="/var/www/site/"
	mkdir $depot_site$nomuser
	touch $depot_site$nomuser/index.html

	echo "<!DOCTYPE html>" >> $depot_site$nomuser/index.html
	echo "<html>" >> $depot_site$nomuser/index.html
	echo "<head>" >> $depot_site$nomuser/index.html
	echo "<title>$nomuser</title>" >> $depot_site$nomuser/index.html
	echo "</head>" >> $depot_site$nomuser/index.html
	echo "<body>" >> $depot_site$nomuser/index.html
	echo "<h1>$nomuser</h1>" >> $depot_site$nomuser/index.html
	echo "</body>" >> $depot_site$nomuser/index.html
	echo "</html>" >> $depot_site$nomuser/index.html
>>>>>>> f0369a3c579a8da0cf52de75abca8ba80815c5bb
