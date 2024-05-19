#Using PHP image with Apache
FROM php:7.4-apache
#Setting Working Directory
WORKDIR /var/www/html/

#Copying PHP files to working directory
COPY .  /var/www/html/
