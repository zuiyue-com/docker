FROM php:8.1-fpm

RUN ls

RUN apt-get update

RUN docker-php-ext-install mysqli

RUN apt-get install -y libssh2-1-dev libssh2-1 \
    && pecl install ssh2-1.3.1 \
    && docker-php-ext-enable ssh2
