FROM nanoninja/php-fpm:latest

LABEL maintainer="Anderson Corso <andersoncorso89@gmail.com>"

# Composer
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

### EXEMPLOS DE CMDS:
# Install selected extensions and other stuff
# RUN apt-get update \
#     && apt-get -y --no-install-recommends install  php7.2-mysql php7.2-intl \
#     && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# # Install git
# RUN apt-get update \
#     && apt-get -y install git \
#     && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*