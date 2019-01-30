#Prereqs
apt-get update
apt-get upgrade

#Basics
apt-get install -y git
apt-get install -y apache2
a2enmod rewrite

#PHP
apt-add-repository ppa:ondrej/php
apt-get update
apt-get install -y php7.1
apt-get install -y libapache2-mod-php7.1
service apache2 restart
apt-get install -y php7.2-common

# MySQL
debconf-set-selections <<< 'mysql-server mysql-server/root_password password root'
debconf-set-selections <<< 'mysql-server mysql-server/root_password_again password root'
apt-get install -y mysql-server
apt-get install -y php7.2-mysql
sudo service apache2 restart

#Provision MySQL DB/Users
#mysql -u 