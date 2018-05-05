FROM wordpress:latest

RUN pecl install xdebug-2.5.0 \
    && docker-php-ext-enable xdebug

RUN apt-get update \
    && apt-get install -y zlib1g-dev \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install zip

