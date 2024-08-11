FROM php:8.1

RUN apt-get update -y && apt-get install -y libonig-dev openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring pdo_mysql
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo_pgsql pgsql

WORKDIR  /app/backend

COPY . .

RUN composer install

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0
