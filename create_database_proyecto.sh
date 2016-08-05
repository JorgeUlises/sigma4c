#!/bin/bash
file=sigma4c.sql
postgreshome=/var/lib/pgsql

scriptsql=$file
sudo cp $scriptsql $postgreshome
scriptsql=$postgreshome/$file
sudo chown postgres:postgres $scriptsql
sudo su postgres -c "
psql -f $scriptsql
#rm -rf $scriptsql
"
