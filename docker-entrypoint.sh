#!/bin/sh
set -e

# Render assigns the listen port via $PORT (defaults to 10000 if unset)
PORT="${PORT:-10000}"
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

cd /var/www/html

php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force

exec "$@"
