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
echo "📦 Configurando permisos..."

# Asegurar permisos correctos (incluyendo public)
chown -R www-data:www-data /var/www/html
chmod -R 775 /var/www/html/storage
chmod -R 775 /var/www/html/bootstrap/cache

echo "📂 Verificando archivos (Debug)..."
ls -la /var/www/html/public

echo "📦 Limpiando cachés..."

# Limpiar cache primero
php artisan optimize:clear

# Cache solo de configuración (rutas a veces dan problemas si hay closures)
php artisan config:cache
# php artisan route:cache  <-- DESACTIVADO POR AHORA PARA DEBUG
php artisan view:cache

echo "✅ Aplicación lista. Iniciando servicios..."

# Iniciar Supervisor que manejará Nginx y PHP-FPM
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
