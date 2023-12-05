FROM php:7.4-fpm

RUN ls

RUN apt-get update

RUN docker-php-ext-install mysqli

RUN apt-get install -y libssh2-1-dev libssh2-1 \
    && pecl install ssh2-1.3.1 \
    && docker-php-ext-enable ssh2


RUN apt-get install -y \
    libpng-dev \
    && docker-php-ext-install -j$(nproc) gd
