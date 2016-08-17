#!/bin/bash
sql1=userdbsigma4c.sql
sql2=sigma4c.sql
postgreshome=/var/lib/pgsql

scriptsql1=$postgreshome/$file
scriptsql2=$postgreshome/$file
sudo chown postgres:postgres $scriptsql1
sudo chown postgres:postgres $scriptsql2
sudo su postgres -c "
psql -f $scriptsql1
psql -f $scriptsql2 -d sigma4c
"

