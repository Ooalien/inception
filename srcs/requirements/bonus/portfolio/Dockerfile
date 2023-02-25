FROM debian:buster

RUN apt-get update
RUN mkdir -p /var/www/portfolio

COPY /tools/* /var/www/portfolio

RUN chown -R www-data /var/www/portfolio


