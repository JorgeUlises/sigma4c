#!/bin/bash
echo 'Ejecutando: install_sigma4c.sh'

# rationale: se provee de vendor
dir=/home/vagrant/src/sigma4c
if [ -d $dir/vendor ]
then
  echo 'Sigma4c ya esta provisto por composer. Nada que hacer.'
else
  (
  cd $dir || exit
  export PATH=$PATH:/usr/local/bin
  echo 'Provision con Composer... Espere un momento.'
  composer install > /dev/null 2>&1 # Confiar en que se hace
  )
fi

# rationale: sigma4c symfony as service
file=/usr/lib/systemd/system/sigma4c.service
if [ -f $file ]
then
  echo "El archivo $file ya existe. Nada que hacer."
else

  sudo tee /usr/lib/systemd/system/sigma4c.service << 'EOF'
[Unit]
Description=geoserver
After=network.target
#After=network.target remote-fs.target nss-lookup.target

[Service]
Environment=SIGMA4C_ENV=DEVELOPMENT
ExecStart=/usr/bin/php /home/vagrant/src/sigma4c/app/console server:run 0.0.0.0
Type=simple
#ExecStop=/usr/lib/systemd/scripts/apachectl stop
#RemainAfterExit=yes

[Install]
WantedBy=default.target
EOF
  sudo systemctl enable sigma4c
  sudo systemctl start sigma4c

fi
