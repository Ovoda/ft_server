#!bin/sh
if [ "$1" = "on" ]
then
    sed -i "s/autoindex off/autoindex on/" /etc/nginx/sites-available/localhost
    echo "turning nginx on..."
    service nginx restart
fi
if [ "$1" = "off" ]
then
    sed -i "s/autoindex on/autoindex off/" /etc/nginx/sites-available/localhost
    echo "turning nginx off..."
    service nginx restart
fi
