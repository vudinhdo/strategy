# Sử dụng image PHP chính thức với các extension cần thiết
FROM php:8.2-cli

# Cài đặt các extension phổ biến cho Laravel
RUN apt-get update \
    && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Cài Composer
COPY --from=composer:2.8.9 /usr/bin/composer /usr/bin/composer

# Tạo thư mục làm việc
WORKDIR /var/www

# Copy mã nguồn vào container
COPY . /var/www

# Cài đặt các package PHP
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Phân quyền cho storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 80
EXPOSE 80

# Lệnh khởi động server Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"] 