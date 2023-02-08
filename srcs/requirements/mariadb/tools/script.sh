service mysql start
sudo mysql -e "CREATE DATABASE IF NOT EXISTS  ${MYSQL_DB_NAME};"
# mysql -u root -e "create database ${MYSQL_DB_NAME};"
mysql -u root -e "CREATE USER '${MYSQL_USER}'@'localhost' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mysql -u root -e "GRANT ALL PRIVILEGES ON '${MYSQL_DB_NAME}'.* TO '${MYSQL_USER}'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
mysql -u root -p -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}';"
service mysql stop

mysqld
service mysql start
sudo mysql -e "CREATE USER IF NOT EXISTS  ${MYSQL_USER} @'%' IDENTIFIED BY '${MYSQL_PASSWORD}'"
sudo mysql -e "GRANT ALL PRIVILEGES ON *.* TO  ${WP_ADMIN} @'%' IDENTIFIED BY '${WP_ADMIN_PASSWORD}'"
sudo mysql -e "GRANT ALL PRIVILEGES ON  ${MYSQL_DB_NAME} .* TO  ${MYSQL_USER} @'%'"
sudo mysql -e "FLUSH PRIVILEGES"
sudo service mysql stop
mysqld