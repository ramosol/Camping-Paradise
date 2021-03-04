#!/bin/bash
#Shewi-bit
# Update de la db , il faut necessairement avoir le dump.sql de bewatch dans le meme dossier.
# !!!! DROP DB -> CREATE DB -> IMPORT DB !!!

sudo docker cp ./dump.sql camping_paradise:./
docker exec -t -i camping_paradise bash -c "mysqladmin -u root -pcamping -f drop camping;";
docker exec -t -i camping_paradise bash -c "mysqladmin -u root -pcamping create camping;";
echo "DB Creation Ok"
docker exec -t -i camping_paradise bash -c "mysql -u root -pcamping camping < ./dump.sql;";
echo "DB Update Success"