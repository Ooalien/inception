FROM debian:buster

RUN apt-get update && apt-get install -y redis php7.3-redis

EXPOSE 6379

CMD [ "redis-server", "--protected-mode", "no"]