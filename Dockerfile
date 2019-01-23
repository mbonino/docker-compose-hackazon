FROM alpine:3.7


RUN apk add --update \
    apache2 \
    php5-apache2 \
    php5-cli \
    php5-json \
    php5-openssl \
    php5-ctype \
    php5-dom \
    php5-phar \
    php5-pdo \
    php5-pdo_mysql \
    php5-bcmath && \
    wget -q https://github.com/rapid7/hackazon/archive/master.zip && \
    cd /var/www && \
    unzip -q /master.zip && \
    rm /master.zip && \
    mv hackazon-master/ hackazon/ && \
    cd hackazon && \
    php5 composer.phar self-update && \
    php5 composer.phar install -o --prefer-dist && \
    mkdir /run/apache2 && \
    sed -i '/LoadModule rewrite_module/s/^#//g' /etc/apache2/httpd.conf && \
    sed -i '/Listen 80/s//Listen 0.0.0.0:80/' /etc/apache2/httpd.conf && \
    chown -R apache.apache /var/www/hackazon
    
COPY vhost.conf /etc/apache2/conf.d/
COPY hackazon_init/db.sql /var/www/hackazon/database/db.sql
COPY hackazon_init/db.php /var/www/hackazon/assets/config/db.php
COPY hackazon_init/email.php /var/www/hackazon/assets/config/email.php
COPY hackazon_init/parameters.php /var/www/hackazon/assets/config/parameters.php
COPY hackazon_init/rest.php /var/www/hackazon/assets/config/rest.php
COPY hackazon_init/vuln/*.php /var/www/hackazon/assets/config/vuln/

EXPOSE 80

CMD ["/usr/sbin/httpd","-D","FOREGROUND"]
 
