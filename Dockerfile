# ============================================
# ETAPA 1: Builder - Construcción de Assets
# ============================================
# Aquí compilamos los assets de frontend (CSS/JS) con Vite usando pnpm
FROM node:20-alpine AS builder

# Establecer directorio de trabajo
WORKDIR /app

# Instalar pnpm globalmente (más rápido y eficiente que npm)
RUN npm install -g pnpm

# Copiar archivos de dependencias de Node
COPY package*.json pnpm-lock.yaml* ./

# Instalar dependencias de Node con pnpm
RUN pnpm install --frozen-lockfile

# Copiar archivos del proyecto
COPY . .

# Compilar assets para producción
RUN pnpm run build

# ============================================
# ETAPA 2: Producción - Runtime de PHP
# ============================================
# Esta es la imagen final que se ejecutará
FROM php:8.2-fpm-alpine

# Instalar dependencias del sistema necesarias para Laravel
RUN apk add --no-cache \
    nginx \
    supervisor \
    sqlite \
    git \
    zip \
    unzip \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev

# Instalar extensiones de PHP requeridas por Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    pdo_sqlite \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    opcache

# Instalar Composer (gestor de dependencias de PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Copiar assets compilados desde la etapa builder
COPY --from=builder /app/public/build ./public/build

# Instalar dependencias de PHP (sin dev dependencies)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Configurar permisos para Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copiar configuración de Nginx
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Copiar configuración de Supervisor (para manejar Nginx + PHP-FPM)
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copiar script de inicio
COPY docker/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Exponer puerto 8080 (Render.com requiere este puerto)
EXPOSE 8080

# Ejecutar script de inicio
CMD ["/usr/local/bin/start.sh"]
