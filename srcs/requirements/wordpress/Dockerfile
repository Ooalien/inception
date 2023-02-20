FROM debian:buster

EXPOSE 9000

RUN apt-get update && \
    apt-get install -y php7.3-fpm php7.3-mysql wget sudo mariadb-client && \
    wget https://wordpress.org/latest.tar.gz && \
    tar xvf latest.tar.gz && \
    rm latest.tar.gz
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN mkdir /var/www &&  \
	mv -f wordpress /var/www/ 	&& chmod 755 -R /var/www/wordpress &&\
    chown -R www-data:www-data /var/www/wordpress
RUN sudo mv /wp-cli.phar /usr/local/bin/wp && chmod 777 /usr/local/bin/wp



ARG MYSQL_DB_NAME="alidb"
ARG MYSQL_USER="abayar"
ARG MYSQL_PASSWORD="qwerty"
ARG MYSQL_HOST="localhost"

RUN mkdir /var/www/wordpress/wp-content/themes/inspiro

COPY ./tools/script.sh .
COPY ./tools/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools/inspiro /var/www/wordpress/wp-content/themes/inspiro/

RUN wp core download --allow-root
RUN chmod 777 script.sh

RUN mv script.sh /var/www/wordpress/
WORKDIR /var/www/wordpress/
ENTRYPOINT ["bash", "script.sh"]

CMD ["php-fpm7.3", "-R", "-F"]
