# Use an official PHP image with FPM
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies, including nodejs prerequisites
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
    curl \
    gnupg \
    ca-certificates

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite mbstring exif pcntl bcmath gd

# Install Node.js 18.x and npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy only package.json and package-lock.json first for caching npm installs
COPY package*.json ./

# Install npm dependencies
RUN npm install

# Copy the rest of the Laravel project files
COPY . .

# Create SQLite database file if not exists
RUN mkdir -p database && touch database/database.sqlite

# Build Vite assets (Tailwind CSS, JS, etc)
RUN npm run build

# Install PHP dependencies via Composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Run migrations
RUN php artisan migrate --force

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database/database.sqlite

# Expose port 8000 for Laravel app
EXPOSE 8000

# Start Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
