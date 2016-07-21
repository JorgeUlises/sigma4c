#!/bin/bash
sudo yum install -y java-1.7.0-openjdk-devel
sudo yum install -y maven
wget http://downloads.sourceforge.net/project/gvnix/gvNIX-1.5.1.RC3.zip
sudo yum install -y unzip
unzip gvNIX-1.5.1.RC3.zip
mkdir proyecto1
cd proyecto1
cat << 'EOF' >> instrucciones
project --topLevelPackage org.sigma.core --projectName sigma4c
jpa setup --database POSTGRES --provider HIBERNATE --databaseName sigma4c --hostName localhost --userName sigma4c --password abc123
download status
download accept terms of use 
osgi obr url add --url http://spring-roo-repository.springsource.org/repository.xml
osgi obr deploy --bundleSymbolicName org.springframework.roo.wrapping.postgresql-jdbc4
database reverse engineer --schema "public" --activeRecord false --disableGeneratedIdentifiers false --disableVersionFields true --package ~domain
repository jpa --interface ~.repository.EmpresaRepository --entity ~.domain.Empresa
repository jpa --interface ~.repository.FuenteHidricaRepository --entity ~.domain.FuenteHidrica
repository jpa --interface ~.repository.MuestraRepository --entity ~.domain.Muestra
repository jpa --interface ~.repository.ParametroRepository --entity ~.domain.Parametro
repository jpa --interface ~.repository.ProyectoRepository --entity ~.domain.Proyecto
repository jpa --interface ~.repository.RolRepository --entity ~.domain.Rol
repository jpa --interface ~.repository.UserRepository --entity ~.domain.User
service all --interfacePackage ~.service --classPackage ~.service.impl
web mvc setup
web mvc all --package ~.web
web mvc jquery setup
web mvc jquery all
web mvc datatables setup
#web mvc datatables all
web mvc bootstrap setup
exit
EOF
cat instrucciones | sh ~/gvNIX-1.5.1.RC3/bin/gvnix.sh
mvn clean compile tomcat7:run

