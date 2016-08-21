#!/bin/bash
echo 'Ejecutando: install_symfony.sh'

list=(php php-pgsql php-xml php-pdo)
install=installed
for p in ${list[*]}
do
  if yum list installed $p &>/dev/null
  then
    echo "$p ya está instalado."
  else
    install=no_installed
  fi
done

if [ "$install" = "installed" ]
then
  echo 'PHP y dependencias de Symfony ya están instalados. Nada que hacer.'
else
  sudo yum install -y ${list[*]}
fi

if which symfony &> /dev/null
then
  echo 'Symfony ya está instalado. Nada que hacer.'
else
  sudo mkdir -p /usr/local/bin
  sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
  sudo chmod a+x /usr/local/bin/symfony
fi
