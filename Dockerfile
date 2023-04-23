FROM mysql:5
FROM php:fpm
FROM phpmyadmin:5.2.0-apache
RUN apt-get update && apt upgrade -y
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli
COPY init_db.sql /docker-entrypoint-initdb.d/
ADD ./app /var/www/html 
EXPOSE 8080
EXPOSE 3306
EXPOSE 443
