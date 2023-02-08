service mysql start
sudo mysql -e "CREATE DATABASE IF NOT EXISTS  ${MYSQL_DB_NAME} "
sudo mysql -e "CREATE USER IF NOT EXISTS  ${MYSQL_USER} @'%' IDENTIFIED BY '${MYSQL_PASSWORD}'"
sudo mysql -e "GRANT ALL PRIVILEGES ON *.* TO  ${WP_ADMIN} @'%' IDENTIFIED BY '${WP_ADMIN_PASSWORD}'"
sudo mysql -e "GRANT ALL PRIVILEGES ON  ${MYSQL_DB_NAME} .* TO  ${MYSQL_USER} @'%'"
sudo mysql -e "FLUSH PRIVILEGES"
sudo service mysql stop
mysqld