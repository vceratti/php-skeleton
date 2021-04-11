FROM php:8-fpm-alpine as php-base

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

ENV TZ Europe/Berlin

WORKDIR /var/www

FROM php-base as php-xdebug

RUN apk add --no-cache --virtual .build-deps  $PHPIZE_DEPS \
    && pecl -d preferred_state=beta install xdebug \
    && apk del .build-deps \
    && docker-php-ext-enable xdebug