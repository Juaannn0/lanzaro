FROM php:7.4-apache

# Instalar extensiones necesarias para CI3 (pdo_mysql, mysqli, etc.)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite para Apache (para URLs limpias)
RUN a2enmod rewrite

# Copiar tu código al contenedor
COPY . /var/www/html

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html

# Configuración de Apache para permitir .htaccess de CI3
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
