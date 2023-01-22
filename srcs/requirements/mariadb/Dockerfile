FROM debian:buster

RUN apt-get update && apt-get install -y mariadb-server

EXPOSE 3306

RUN service mysql start

CMD ["mysqld"]

# CMD ["sleep", "100"]
