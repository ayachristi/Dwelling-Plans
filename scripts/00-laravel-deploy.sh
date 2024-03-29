#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Running seeders"
php artisan db:seed --class=CartsTableSeeder --force
php artisan db:seed --class=OrderCartsTableSeeder --force
php artisan db:seed --class=OrderProductsTableSeeder --force
php artisan db:seed --class=OrdersTableSeeder --force
php artisan db:seed --class=ProductsTableSeeder --force
php artisan db:seed --class=StoreyTableSeeder --force
php artisan db:seed --class=VariantsTableSeeder --force
php artisan db:seed --class=UsersTableSeeder --force