#!/bin/sh
mkdir /var/www/localhost
# cp index.html /var/www/localhost/index.html
cp localhost /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/
cp -r wordpress /var/www/localhost/wordpress
cp -r phpmyadmin /var/www/localhost/phpmyadmin
service mysql start
mariadb
bash create_db.sh
cd certificate
chmod +x mkcert
./mkcert -install
./mkcert localhost
chmod 777 *.pem
cd ..

bash autoindex.sh $AUTOINDEX
service nginx start
/etc/init.d/php7.3-fpm start
rm -rf wordpress
rm -rf phpmyadmin
tail -f /var/log/nginx/access.log /var/log/nginx/error.log;