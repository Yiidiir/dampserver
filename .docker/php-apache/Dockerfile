FROM php:7.2-apache
COPY ./php.ini /usr/local/etc/php/
COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf
COPY ./php.ext.txt /var/dampserver/
RUN cd /var/dampserver/ && docker-php-ext-install $(cat php.ext.txt | tr -s '\n\r' ' ')
EXPOSE 80