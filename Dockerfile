FROM php:8.2-fpm

WORKDIR /var/www/html

ENV APP_ENV=local
ENV APP_DEBUG=true
ENV APP_KEY=base64:/5IDEyYHd4vWiiVx+IuRXbXQv9Gv+dry9072wqWqWxk=

COPY . .

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
