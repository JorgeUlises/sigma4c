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

#Salida de la generacion de CRUD:
# [vagrant@localhost sigma4c]$ php app/console generate:doctrine:crud --entity=AppBundle:Lectura
#
#
#   Welcome to the Doctrine2 CRUD generator
#
#
#
# This command helps you generate CRUD controllers and templates.
#
# First, give the name of the existing entity for which you want to generate a CRUD
# (use the shortcut notation like AcmeBlogBundle:Post)
#
# The Entity shortcut name [AppBundle:Lectura]:
#
# By default, the generator creates two actions: list and show.
# You can also ask it to generate "write" actions: new, update, and delete.
#
# Do you want to generate the "write" actions [no]? yes
#
# Determine the format to use for the generated CRUD.
#
# Configuration format (yml, xml, php, or annotation) [annotation]:
#
# Determine the routes prefix (all the routes will be "mounted" under this
# prefix: /prefix/, /prefix/new, ...).
#
# Routes prefix [/lectura]:
#
#
#   Summary before generation
#
#
# You are going to generate a CRUD controller for "AppBundle:Lectura"
# using the "annotation" format.
#
# Do you confirm generation [yes]?
#
#
#   CRUD generation
#
#
# Generating the CRUD code: OK
#
#
#   [RuntimeException]
#   Unable to generate the LecturaType form class as it already exists under the /home/vagrant/src/sigma4c/src/A
#   ppBundle/Form/LecturaType.php file
#
#
# doctrine:generate:crud [--entity ENTITY] [--route-prefix ROUTE-PREFIX] [--with-write] [--format FORMAT] [--overwrite] [-h|--help] [-q|--qui
# et] [-v|vv|vvv|--verbose] [-V|--version] [--ansi] [--no-ansi] [-n|--no-interaction] [-s|--shell] [--process-isolation] [-e|--env ENV] [--no
# -debug] [--] <command> [<entity>]
#
# [vagrant@localhost sigma4c]$
