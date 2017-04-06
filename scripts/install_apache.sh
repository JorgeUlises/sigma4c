#!/bin/bash
echo 'Ejecutando: install_apache.sh'

# rationale: verificando instalacion apache
if httpd -v &> /dev/null
then
  echo 'HTTPD ya está instalado, nada que hacer.'
else
  sudo yum install -y httpd
  sudo systemctl enable httpd
  # change listen port
  sudo sed -i.bak 's/^Listen .*/Listen 8080/' /etc/httpd/conf/httpd.conf
  egrep '^Listen=' /etc/httpd/conf/httpd.conf
fi

# rationale: dar permisos al servidor web para acceder como usuario vagrant
file=/etc/httpd/conf.d/permisos.conf
if [ -f $file ]
then
  echo "El archivo $file ya existe. Nada que hacer."
else
  sudo tee $file << 'EOF'
User vagrant
Group vagrant
EOF
fi

# rationale: configurar symfony como raiz de apache
file=/etc/httpd/conf.d/sigma4c.conf
if [ -f $file ]
then
  echo "El archivo $file ya existe. Nada que hacer."
else
  sudo tee $file << 'EOF'
Alias "/" "/home/vagrant/src/sigma4c/web/"
<Directory "/home/vagrant/src/sigma4c/web/">
    Options Indexes FollowSymlinks MultiViews
    AllowOverride All
    Require all granted
</Directory>
EOF
fi

# rationale: iniciar apache
sudo systemctl start httpd
