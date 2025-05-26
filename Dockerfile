# Use an official PHP image with FPM
FROM php:8.2-fpm

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip \
    git \
    sqlite3 \
    libsqlite3-dev \
    nodejs \
    npm

RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN mkdir -p database && touch database/database.sqlite

RUN composer install --no-interaction --optimize-autoloader --no-dev

# ✔️ Create storage link (ignore error if already exists)
RUN php artisan storage:link || true

RUN npm install && npm run build

RUN chown -R www-data:www-data \
    storage \
    bootstrap/cache \
    database/database.sqlite \
    public/storage

RUN chmod -R 775 storage bootstrap/cache
RUN chmod 664 database/database.sqlite

EXPOSE 8000

CMD bash -c "php artisan migrate --force && \
    php artisan db:seed --force && \
    php artisan storage:link || true && \
    php artisan serve --host=0.0.0.0 --port=8000"
