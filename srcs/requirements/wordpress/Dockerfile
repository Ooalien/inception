FROM debian:buster

RUN apt-get update && \
    apt-get install -y php-fpm php-mysql wget && \
    wget https://wordpress.org/latest.tar.gz && \
    tar xvf latest.tar.gz && \
    rm latest.tar.gz

COPY wp-config.php /wordpress/wp-config.php

CMD ["php-fpm"]
