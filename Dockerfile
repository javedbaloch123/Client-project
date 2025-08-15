# Use official PHP image with required extensions
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Set Laravel permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Run Laravel optimize commands
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Start Laravel with PHP's built-in server
CMD php artisan serve --host=0.0.0.0 --port=$PORT
