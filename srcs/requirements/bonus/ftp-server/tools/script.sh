#!/bin/bash

useradd ali
echo "ali" | tee -a /etc/vsftpd.userlist
echo "ali:1234" | chpasswd
usermod -aG www-data ali

mkdir -p /home/ali/empty

exec vsftpd