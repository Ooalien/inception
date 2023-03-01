FROM debian:buster

EXPOSE 9000
RUN mkdir -p /var/www/wordpress/
WORKDIR /var/www/wordpress/

ARG MYSQL_DB_NAME="alidb"
ARG MYSQL_USER="abayar"
ARG MYSQL_PASSWORD="qwerty"
ARG MYSQL_HOST="localhost"

RUN apt-get update && \
    apt-get install -y php7.3-fpm php7.3-mysql wget sudo mariadb-client \
    && wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -O /usr/bin/wp \
    && chmod +x /usr/bin/wp \
    && wp core download --allow-root \
    && chown -R www-data:www-data /var/www/wordpress 

# RUN mkdir /var/www/wordpress/wp-content/themes/inspiro

COPY ./tools/script.sh /usr/bin/script
COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d
# COPY ./tools/inspiro /var/www/wordpress/wp-content/themes/inspiro/

RUN chmod +x /usr/bin/script

ENTRYPOINT ["script"]

CMD ["php-fpm7.3", "-R", "-F"]
