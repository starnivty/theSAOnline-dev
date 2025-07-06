# Gunakan image PHP + Apache
FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan CodeIgniter
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql mysqli

# Copy project ke direktori web server
COPY . /var/www/html

# Ubah hak akses
RUN chown -R www-data:www-data /var/www/html

# Aktifkan mod_rewrite untuk .htaccess CI4
RUN a2enmod rewrite

# Ubah konfigurasi Apache agar .htaccess bekerja
RUN sed -i 's|AllowOverride None|AllowOverride All|g' /etc/apache2/apache2.conf

# Set working directory
WORKDIR /var/www/html/public
