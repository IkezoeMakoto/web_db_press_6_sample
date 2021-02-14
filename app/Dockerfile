FROM php:8-fpm-alpine

WORKDIR /app
COPY src /app

RUN apk add --update --no-cache make git libzip-dev autoconf gcc g++ \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip pdo_mysql
