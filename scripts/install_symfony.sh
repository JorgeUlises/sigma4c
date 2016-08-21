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

if [ -f /usr/local/bin/symfony ]
then
  echo 'Symfony ya está instalado. Nada que hacer.'
else
  sudo mkdir -p /usr/local/bin
  sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony
  sudo chmod a+x /usr/local/bin/symfony
fi

#link: http://stackoverflow.com/a/11695165/4922405
if [ -f /etc/php.ini.bak ]
then
  echo 'php.ini.bak ya existe. Nada que hacer.'
else  
  sudo sed -i.bak '/^;date.timezone =$/s:$:\ndate.timezone = "America/Bogota";:' /etc/php.ini
fi
