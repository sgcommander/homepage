# Base image
FROM koder/apache-php-5.3

LABEL maintainer="sgcommander"
LABEL version="1.0.0"

RUN apt-get update && apt-get install -y --force-yes \
    php-gettext \
    php-pear \
    php5-gd

#COPY ./ /var/www/web/
#RUN chown -R www-data:www-data /var/www/web