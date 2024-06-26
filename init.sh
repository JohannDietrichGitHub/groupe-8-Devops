#!/bin/sh

# cp .env.example .env
# cp nginx/conf.d/laravel.conf.example nginx/conf.d/laravel.conf
# composer install
# npm install
chown -R www-data:www-data /var/www

# Attendre que la base de données soit prête
until nc -z -v -w30 db 3306; do
  echo 'Waiting for database connection...'
  sleep 1
done

php artisan migrate
php artisan db:seed --class=CategoriesSeeder
php artisan db:seed --class=EntreprisesSeeder
php artisan db:seed --class=GroupesSeeder
php artisan db:seed --class=QuestionsSeeder
php artisan db:seed --class=ReponsesSeeder

exec php-fpm
