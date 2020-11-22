#!/bin/bash

echo "--------------------------"
echo "Subiendo a producción"
echo "--------------------------"
/usr/bin/rsync --progress -artzC --force --delete -e "/usr/bin/ssh -p 22" /var/www/* root@0.0.0.0:/var/www
echo "Subida terminada"



