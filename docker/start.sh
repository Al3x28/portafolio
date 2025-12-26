#!/bin/sh

echo "🚀 Iniciando aplicación Laravel..."

# Crear directorios necesarios si no existen
mkdir -p /var/log/supervisor
mkdir -p /var/log/nginx
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/storage/framework/{cache,sessions,views}
mkdir -p /var/www/html/bootstrap/cache

# Asegurar permisos correctos
chown -R www-data:www-data /var/www/html/storage
chown -R www-data:www-data /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

echo "📦 Optimizando aplicación Laravel..."

# Cache de configuración para producción
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Aplicación lista. Iniciando servicios..."

# Iniciar Supervisor que manejará Nginx y PHP-FPM
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
