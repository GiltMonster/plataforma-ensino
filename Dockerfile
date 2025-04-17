FROM php:8.2-apache

# Instala zip, git, etc.
RUN apt-get update && apt-get install -y \
    unzip zip git curl \
    && docker-php-ext-install pdo pdo_mysql

# Ativa mod_rewrite do Apache
RUN a2enmod rewrite

# Aponta o DocumentRoot para /public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Instala o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /var/www/html
COPY . /var/www/html

# Permissões
RUN chown -R www-data:www-data /var/www/html
