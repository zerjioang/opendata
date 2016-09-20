FROM php:7.0.11-apache

RUN apt-get update \
    && docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite
