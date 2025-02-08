FROM php:8.2-fpm

ENV TZ Asia/Tokyo

COPY --from=composer:2.5.5 /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
    curl \
    apt-utils \
    git \
    zip \
    unzip \
    zlib1g-dev \
    libzip-dev \
    vim \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo_mysql bcmath

# Node.jsとnpmのインストール
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

COPY ./.docker/app/php.ini /usr/local/etc/php/php.ini

WORKDIR /var/www/src

# 依存関係のインストール
COPY ./src/package.json ./
RUN npm install
