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

# Si existe la base de datos SQLite, asegurar permisos
if [ -f "/var/www/html/database/database.sqlite" ]; then
    chown www-data:www-data /var/www/html/database/database.sqlite
    chmod 664 /var/www/html/database/database.sqlite
fi

echo "📦 Optimizando aplicación Laravel..."

# Cache de configuración para producción
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🔧 Ejecutando migraciones de base de datos..."

# Ejecutar migraciones (crear tablas si no existen)
php artisan migrate --force --no-interaction

echo "✅ Aplicación lista. Iniciando servicios..."

# Iniciar Supervisor que manejará Nginx y PHP-FPM
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
