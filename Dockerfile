# Use the official PHP image with needed extensions
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libsqlite3-dev \
    sqlite3 \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_sqlite

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create .env file and Laravel app key
RUN cp .env.example .env \
    && php artisan key:generate \
    && mkdir -p storage/framework/{sessions,views,cache} \
    && chmod -R 775 storage \
    && chmod -R 775 bootstrap/cache \
    && touch database/database.sqlite

# Expose the port Laravel uses
EXPOSE 8000

# Start the Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8000
