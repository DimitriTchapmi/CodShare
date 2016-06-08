#! /bin/bash
nom_projet=$1
nom_chef=$2
###Suppression du depôt Git###
sudo rm -r /var/www/git/$nom_projet

###Suppression du site###
sudo rm -r /var/www/site/$nom_projet
sudo a2dissite $nom_projet.conf
sudo service apache2 reload
sudo rm /etc/apache2/sites-avaliable/$nom_projet.conf

###Suppression du mail###
sudo sed -i /"$nom_projet@codshare.itinet.fr"/d /etc/postfix/virtual
sudo rm -r /var/mail/$nom_projet

###Suppression du fqdn###
if sudo grep -q =$nom_projet.codshare.itinet.fr /etc/tinydns/root/data; then
		sudo sed -i /"=$nom_projet.codshare.itinet.fr"/d /etc/tinydns/root/data
	else
		sudo echo "Ce fqdn n'existe pas encore !"
fi
cd /etc/tinydns/root/
sudo make

###Suppression du Cloud###
cd /var/www/owncloud/
sudo -u www-data php occ user:delete $nom_chef
rm -r /home/dossiercloud/$nom_projet

###Suppression du Sftp###
sudo sftp-user delete $nom_chef