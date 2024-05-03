FROM php:8.3-cli
ARG COMPOSER_VERSION

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y zip unzip git autoconf gcc make libzip-dev procps

# Composerのインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer || (echo "Failed to download composer" && exit 1)

# Xdebugのインストール
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Xdebug設定
RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# PHPの拡張機能をインストール (必要に応じて)
RUN docker-php-ext-install pdo
