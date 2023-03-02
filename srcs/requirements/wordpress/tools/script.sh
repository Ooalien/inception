#!/bin/bash
wp core download --allow-root
wp  config create --dbhost=${MYSQL_HOST} --dbname=${MYSQL_DB_NAME} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --allow-root
chmod 600 wp-config.php
chown www-data:www-data wp-config.php
wp config set --allow-root 'WP_REDIS_HOST' "${REDIS_HOST}";
wp config set --allow-root 'WP_REDIS_PORT' 6379;
wp core install --url=https://abayar.42.fr --title="Inception Project From Abayar" --admin_name=${WP_ADMIN} --admin_password=${WP_ADMIN_PASSWORD} --admin_email=alibayar750@gmail.com --allow-root
wp user create ${WP_USER} ${WP_USER_mail} --user_pass=${WP_USER_PASS} --role=${WP_USER_ROLE} --allow-root

mkdir -p /run/php/
touch /run/php/php7.3-fpm.sock
chown -R www-data:www-data /run/php/php7.3-fpm.sock
chmod 660 /run/php/php7.3-fpm.sock

wp plugin install --allow-root redis-cache --activate
wp redis enable --allow-root


exec $@