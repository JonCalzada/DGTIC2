FROM php:8.1.0-fpm

# Argumentos definidos en docker-compose.yml
ARG user
ARG uid

RUN echo /etc/*release

# Instalación de dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

RUN echo $user

# Limpiar la cache después de la instalación
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar exteniones de PHP
RUN docker-php-ext-install mbstring exif pcntl bcmath gd

# Obtener la última versión de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# ADD 

# Crear el usuario de sistema para ejecutar los comandos de Composer y Artisan
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Fijar el directorio del despliegue de aplicaciones
WORKDIR /var/www

USER $user
