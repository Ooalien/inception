FROM debian:buster

EXPOSE 9000

RUN apt-get update && \
    apt-get install -y php7.3-fpm php7.3-mysql wget && \
    wget https://wordpress.org/latest.tar.gz && \
    tar xvf latest.tar.gz && \
    rm latest.tar.gz
RUN mkdir /var/www &&  \
	mv -f wordpress /var/www/ 	&& chmod 755 -R /var/www/wordpress &&\
    chown -R www-data:www-data /var/www/wordpress
# RUN mkdir /var/www/html

ARG MYSQL_DB_NAME="alidb"
ARG MYSQL_USER="abayar"
ARG MYSQL_PASSWORD="qwerty"
ARG MYSQL_HOST="localhost"

COPY ./tools/wp-config.php /wordpress/wp-config.php
COPY ./tools/script.sh .
RUN chmod 777 script.sh

ENTRYPOINT ["bash", "script.sh"]

CMD ["php-fpm7.3", "-R", "-F"]
