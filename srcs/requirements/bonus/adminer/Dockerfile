FROM debian:buster

RUN apt-get update \
    && apt-get install -y wget php adminer php-mysql mariadb-client 


COPY ./tools/entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh
WORKDIR /var/www/html/

ENTRYPOINT ["/entrypoint.sh"]


CMD php -S 0.0.0.0:9999