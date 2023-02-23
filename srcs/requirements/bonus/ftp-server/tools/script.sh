#!/bin/bash

adduser --disabled-password --gecos '' ali
echo "ali" | tee -a /etc/vsftpd.userlist
echo "ali:1234" | chpasswd
usermod -aG www-data ali

mkdir -p /home/ali/empty
mkdir -p /home/ali/wordpress
chown ali:ali /home/ali/wordpress
chown ali:ali /home/ali/empty

exec vsftpd