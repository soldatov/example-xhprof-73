FROM php:7.3-fpm

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN apt-get update && apt-get install \
    && install-php-extensions xhprof \
    && apt-get clean \
    && cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

COPY ./90-xhprof.ini /usr/local/etc/php/conf.d/90-xhprof.ini

WORKDIR /app