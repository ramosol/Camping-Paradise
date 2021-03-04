#!/bin/bash
#Shewi-bit

sudo docker exec -t -i camping_paradise bash -c "mysqldump -u root -p"camping" camping > dump.sql;";
sudo docker cp camping_paradise:/dump.sql ./
echo "DB Extraction Success - dump.sql"