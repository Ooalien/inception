FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server

EXPOSE 3306

COPY ./tools/script.sh .

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x script.sh

ENTRYPOINT	["bash","script.sh"]

