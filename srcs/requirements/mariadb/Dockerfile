FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server

ARG MYSQL_ROOT_PASSWORD="qwerty"
ARG MYSQL_DB_NAME="alidb"
ARG MYSQL_USER="abayar"
ARG MYSQL_PASSWORD="qwerty"

EXPOSE 3306

COPY ./tools/script .

COPY ./tools/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

RUN chmod +x script

RUN ./script

ENTRYPOINT	["mysqld"]

