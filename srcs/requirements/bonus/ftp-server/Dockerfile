FROM debian:buster

RUN apt-get update && \
    apt-get install -y vsftpd

RUN rm -rf /etc/vsftpd.conf && mkdir -p /var/run/vsftpd/empty

COPY ./tools/vsftpd.conf /etc/vsftpd.conf
COPY ./tools/script.sh /

CMD ["bash", "script.sh"]
