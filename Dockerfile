# Base Image
FROM php:8.2-fpm

# Install System Dependencies
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    unzip \
    git \
    nano \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set Working Directory
WORKDIR /var/www

# Copy Laravel Files
COPY . .

# Install Dependencies
RUN composer install --no-dev --optimize-autoloader

# Set Permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose Port 10000
EXPOSE 10000

# Start PHP-FPM
CMD ["php", "-S", "0.0.0.0:10000", "-t", "public"]
