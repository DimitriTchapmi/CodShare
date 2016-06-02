#! /bin/bash
nomuser=$1
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
