#!/bin/bash
echo 'Ejecutando: install_gvnix.sh'
if [ -f gvNIX-1.5.1.RC3.zip ]
then
  echo 'gvNIX instalado. Nada que hacer.'
else
sudo yum install -y java-1.7.0-openjdk-devel
sudo yum install -y maven
wget http://downloads.sourceforge.net/project/gvnix/gvNIX-1.5.1.RC3.zip
sudo yum install -y unzip
unzip gvNIX-1.5.1.RC3.zip
sudo chown -R vagrant:vagrant gvNIX-1.5.1.RC3*
fi
