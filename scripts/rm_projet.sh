#! /bin/bash
projet=$1
utilisateur=$2
sudo rm -r /var/www/git/$projet
sudo rm -r /var/www/site/$projet
sudo a2dissite $projet.conf
sudo service apache2 reload
sudo rm /etc/apache2/sites-avaliable/$projet.conf
sudo sed -i /"$projet@codshare.itinet.fr"/d /etc/postfix/virtual
if sudo grep -q =$projet.codshare.itinet.fr /etc/tinydns/root/data; then
		sudo sed -i /"=$projet.codshare.itinet.fr"/d /etc/tinydns/root/data
	else
		sudo echo "Ce fqdn n'existe pas encore !"
fi
cd /etc/tinydns/root/
sudo make
cd /var/www/owncloud/
sudo -u www-data php occ user:delete $utilisateur
sudo groupdel $projet
sudo sftp-user delete $utilisateur