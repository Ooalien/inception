# wp core download --allow-root
wp core config --dbhost=${MYSQL_HOST} --dbname=${MYSQL_DB_NAME} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --allow-root
chmod 600 wp-config.php
wp core install --url=https://localhost --title="AbayarIncEpTi0n" --admin_name=${WP_ADMIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=alibayar750@gmail.com --allow-root

mkdir -p /run/php/
touch /run/php/php7.3-fpm.sock
chown www-data:www-data /run/php/php7.3-fpm.sock
chmod 660 /run/php/php7.3-fpm.sock
exec $@