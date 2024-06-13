FROM arm64v8/php:7.4-apache

# Install required packages and dependencies
RUN apt-get update && \
    apt-get install -y git unzip wget && \
    docker-php-ext-install pdo_mysql

# Download PrestaShop
RUN wget https://download.prestashop.com/download/releases/prestashop_1.7.7.0.zip -O prestashop.zip && \
    unzip prestashop.zip -d /var/www/html && \
    rm prestashop.zip

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
