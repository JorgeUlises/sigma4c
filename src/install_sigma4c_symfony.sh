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


#Para actualizar TODO de la base de datos:
#rm -rf src/AppBundle/Resources/config/doctrine/*.orm.xml
php app/console doctrine:mapping:import AppBundle
#rm -rf src/AppBundle/Entity/*.php~
#rm -rf src/AppBundle/Entity/*.php
rm src/AppBundle/Resources/config/doctrine/MigrationVersions.orm.xml
php app/console generate:doctrine:entities AppBundle
rm -rf src/AppBundle/Form/*.php
php app/console generate:doctrine:form "AppBundle:Empresa"
rm -rf src/AppBundle/Controller/*.php
php app/console generate:doctrine:crud --entity=AppBundle:Empresa

php app/console generate:doctrine:form "AppBundle:Proyecto"
php app/console generate:doctrine:crud --entity=AppBundle:Proyecto

php app/console generate:doctrine:form "AppBundle:Parametro"
php app/console generate:doctrine:crud --entity=AppBundle:Parametro

php app/console generate:doctrine:form "AppBundle:Rol"
php app/console generate:doctrine:crud --entity=AppBundle:Rol

php app/console generate:doctrine:form "AppBundle:Usuario"
php app/console generate:doctrine:crud --entity=AppBundle:Usuario

php app/console generate:doctrine:form "AppBundle:Muestra"
php app/console generate:doctrine:crud --entity=AppBundle:Muestra

php app/console generate:doctrine:form "AppBundle:PuntoControl"
php app/console generate:doctrine:crud --entity=AppBundle:PuntoControl

php app/console generate:doctrine:form "AppBundle:Lectura"
php app/console generate:doctrine:crud --entity=AppBundle:Lectura


#Para traer ¿O actualizar? SOLO una entidad de la base de datos:
php app/console doctrine:mapping:import AppBundle:Norma
php app/console generate:doctrine:entities AppBundle:Norma
#php app/console generate:doctrine:entities AppBundle:Norma --path="src"
php app/console generate:doctrine:form "AppBundle:Norma"
php app/console generate:doctrine:crud --entity=AppBundle:Norma

#Instrucciones de migraciones:
#https://symfonytricksandcheats.wordpress.com/category/migraciones/
