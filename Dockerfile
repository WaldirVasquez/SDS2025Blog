FROM php:8.2-apache

# Instalar extensiones necesarias para Post
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql

# Habilitar mod_rewrite (para .htaccess y rutas amigables)
RUN a2enmod rewrite

# Permitir uso de .htaccess en /var/www/html
RUN printf "<Directory /var/www/html>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
  > /etc/apache2/conf-available/z-override.conf \
  && a2enconf z-override

# Directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copiar el CONTENIDO de cada carpeta, no las carpetas en sí
COPY ./blog_MVC/public/ /var/www/html/
COPY ./blog_MVC/app/ /var/www/app/
COPY ./blog_MVC/lib/ /var/www/lib/
COPY ./blog_MVC/layout/ /var/www/layout/
COPY ./blog_MVC/routes/ /var/www/routes/
COPY ./blog_MVC/conexionBD/ /var/www/conexionBD/
COPY ./blog_MVC/autoloader.php /var/www/autoloader.php

# Puerto que Render usará
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
