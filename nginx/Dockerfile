FROM debian:buster

RUN apt-get update && apt-get install -y nginx

COPY mydomain.crt /etc/ssl/certs/
COPY mydomain.key /etc/ssl/private/

EXPOSE 443

COPY default.conf /etc/nginx/conf.d/

CMD ["nginx", "-g", "daemon off;"]

RUN chmod 777 /etc/nginx/conf.d/default.conf