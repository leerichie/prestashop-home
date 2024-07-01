# Use a base image suitable for ARM64 architecture
FROM php:7.4-apache

LABEL maintainer="lee"
ENV TZ Europe/Warsaw

# Install dependencies and IonCube loader
RUN set -eux; \
    apt-get update; \
    apt-get install -y \
    wget \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    zlib1g-dev \
    libzip-dev \
    ; \
    rm -rf /var/lib/apt/lists/*; \
    cd /tmp && wget https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_arm64.tar.gz && \
    tar -zxvf /tmp/ioncube_loaders_lin_arm64.tar.gz && \
    mkdir -p /usr/local/ioncube && \
    cp /tmp/ioncube/ioncube_loader_* /usr/local/ioncube && \
    echo 'zend_extension = /usr/local/ioncube/ioncube_loader_lin_7.4.so' > /usr/local/etc/php/conf.d/00-ioncube.ini && \
    rm -rf /tmp/ioncube && rm /tmp/ioncube_loaders_lin_arm64.tar.gz; \
    docker-php-ext-configure gd --with-freetype --with-jpeg; \
    docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql zip

# Apache configuration
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
