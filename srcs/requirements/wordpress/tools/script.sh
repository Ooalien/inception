# service php7.3-fpm start
mkdir -p /run/php/
touch /run/php/php7.3-fpm.sock
chown www-data:www-data /run/php/php7.3-fpm.sock
chmod 660 /run/php/php7.3-fpm.sock
exec $@