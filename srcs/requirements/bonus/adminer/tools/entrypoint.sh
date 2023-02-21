#!/bin/bash

a2enconf adminer;
mkdir /run/php/
wget "http://www.adminer.org/latest.php" -O /var/www/html/adminer.php
chown -R www-data:www-data /var/www/html/
chmod 755 /var/www/html/adminer.php

exec "$@"