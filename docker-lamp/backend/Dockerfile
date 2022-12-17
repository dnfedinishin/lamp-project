FROM php:7.1-fpm

COPY . .

RUN apt-get update

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli