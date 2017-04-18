#!/bin/bash
echo 'Ejecutando: install_composer.sh'

if [ -f /usr/local/bin/composer ]
then
  echo 'Composer ya está instalado. Nada que hacer.'
else
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php composer-setup.php
  php -r "unlink('composer-setup.php');"
  sudo mv composer.phar /usr/local/bin/composer
fi
