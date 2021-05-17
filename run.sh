#!/bin/bash
cp -r motion/ /var/lib/
cp -r 0/ /var/www/html/
./var/lib/motion/alert.sh
service apache2 start
service mysql start
sudo motion
service motion start
