symfony new sigma4c 2.8
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
sudo cp composer.phar /usr/local/bin/composer
cd sigma4c/
composer install
sudo vim /etc/php.ini 
composer install
composer require CrEOF/doctrine2-spatial
vim app/config/config.yml
vim app/config/parameters.yml
php app/console doctrine:mapping:import AppBundle annotation
php app/console doctrine:generate:entities AppBundle

