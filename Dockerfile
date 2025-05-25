# Use an official PHP image with FPM
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
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

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy Laravel project files
COPY . .

# Create SQLite database file
RUN mkdir -p database && touch database/database.sqlite

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Install Node packages and build Vite assets
RUN npm install && npm run build

# Set proper permissions
RUN chown -R www-data:www-data storage bootstrap/cache database/database.sqlite

# Expose port
EXPOSE 8000

# Run migrations and serve the app
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
