# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|  
  config.vm.box = "ubuntu/trusty64"
  
  config.vm.provider "virtualbox" do |vb|
    vb.memory = 2048
    vb.cpus = 2
  end

  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.synced_folder ".", "/var/www/html", :mount_options => ["dmode=777", "fmode=666"]

  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y apache2
    #mysql
    #php
  SHELL
end
