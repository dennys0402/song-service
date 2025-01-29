FROM elrincondeisma/php-for-laravel:8.3.7

WORKDIR /app

# Copia el código fuente
COPY . .

# Instala las dependencias sin paquetes de desarrollo
RUN composer install --no-dev --optimize-autoloader

# Copia el archivo de entorno y genera la clave de Laravel
COPY .envExample .env
RUN php artisan key:generate
RUN php artisan config:clear

# Crea carpetas necesarias y asigna permisos correctos
RUN mkdir -p storage/logs bootstrap/cache
RUN chmod -R 777 storage bootstrap/cache

# Expone el puerto 8000
EXPOSE 8000

# Comando para iniciar Laravel con PHP
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
