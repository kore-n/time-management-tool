FROM php:8.1-fpm

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql gd

# Composer をインストール
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# 作業ディレクトリ
WORKDIR /var/www/html

# Laravel プロジェクトをマウント
COPY . /var/www/html

# Laravelの権限設定
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Laravelサーバーを自動実行
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]