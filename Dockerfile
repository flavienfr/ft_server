FROM debian:buster

MAINTAINER froussel <froussel@student.42.fr>

RUN apt-get update && apt-get upgrade \
&& apt-get -y install wget \
&& apt-get -y install nginx \
&& apt-get -y install php7.3-fpm php-mbstring php-zip php-gd \
&& apt-get -y install php-mysql \
&& apt-get -y install mariadb-server \
&& apt-get clean -y

COPY srcs/wordpress.tar.gz /var/www/wordpress.tar.gz
COPY srcs/db_wordpress.php /tmp/wp-config.php
COPY srcs/sites_enable /etc/nginx/sites-available/default
COPY srcs/phpmyadmin_config /tmp/config.inc.php
COPY srcs/launcher /tmp/launcher 

EXPOSE 80
#ENV MYSQL_ROOT_PASSWORD=root
#ENV MYSQL_USER=root
#ENV MYSQL_PASSWORD=password

CMD bash /tmp/launcher && bash




