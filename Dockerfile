FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y nginx wget mariadb-server php-fpm php-mysql php-cli php php-cgi php-mbstring

COPY srcs ./root/

WORKDIR /root/

ENTRYPOINT [ "bash", "run.sh" ]