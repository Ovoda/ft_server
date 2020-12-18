#!bin/sh

echo "CREATE DATABASE wordpress;" | mariadb -u root
echo "CREATE USER 'admin'@'localhost';" | mariadb -u root
echo "SET password FOR 'admin'@'localhost' = password('password');" | mariadb -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'admin'@'localhost' IDENTIFIED BY 'password';" | mariadb -u root
echo "FLUSH PRIVILEGES;" | mariadb -u root