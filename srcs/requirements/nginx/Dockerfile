FROM debian:buster

RUN apt-get update && apt-get install -y nginx

COPY tools/mydomain.crt /etc/ssl/certs/
COPY tools/mydomain.key /etc/ssl/private/

EXPOSE 443

COPY default.conf /etc/nginx/conf.d/

RUN chmod 777 /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]
