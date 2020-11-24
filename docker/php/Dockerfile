# Base image
FROM koder/apache-php-5.3

LABEL maintainer="sgcommander"
LABEL version="1.0.0"

# Install dependencies
RUN apt-get update && apt-get install -y --force-yes \
    php-gettext \
    php-pear \
    php5-gd

# Permissions
RUN chmod 777 -R /var/www/templates/default/cache