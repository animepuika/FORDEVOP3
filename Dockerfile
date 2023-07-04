FROM php:apache
# Install dependencies
RUN apt-get update && \
apt-get install -y \
libzip-dev \
zip \
unzip \
curl
# Enable mod_rewrite
RUN a2enmod rewrite
# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip
# Install Node.js and npm
RUN curl -L https://deb.nodesource.com/setup_14.x | bash - && \
apt-get install -y nodejs
# Set Apache ServerName
RUN echo "ServerName laravel-app.local" >> /etc/apache2/apache2.conf
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
# Set the working directory
WORKDIR /var/www/html
# Copy the application code
COPY . /var/www/html
# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --installdir=/usr/local/bin --filename=composer
# Install project dependencies
COPY --from=composer /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install
# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
