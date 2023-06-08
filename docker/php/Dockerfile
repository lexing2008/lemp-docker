FROM php:7.4-fpm

# установка расширения mysqli
RUN docker-php-ext-install mysqli

# установка композера
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# установка расширения
#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug

# копирование конфигов
COPY conf.d/* $PHP_INI_DIR/conf.d/

# права доступа на папки
#RUN groupadd -g 1001 myuser && \
#    useradd -u 1001 -g 1001 -s /bin/bash -m myuser && \
#    usermod -aG sudo myuser && \
#    echo 'myuser:mypass' | chpasswd
#
#USER myuser
