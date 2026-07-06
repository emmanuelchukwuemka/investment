#!/bin/sh
set -e

# Render assigns the listen port via $PORT (defaults to 10000 if unset)
PORT="${PORT:-10000}"
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

cd /var/www/html

# Ensure writable storage directories exist
mkdir -p storage/framework/views \
         storage/framework/cache/data \
         storage/framework/sessions \
         storage/logs \
         bootstrap/cache

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run migrations — if they fail (e.g. stale tables from a broken previous run),
# wipe and start fresh. After a successful first deploy this path won't trigger.
if ! php artisan migrate --force; then
    echo "==> migrate failed (stale DB state) — running migrate:fresh..."
    php artisan migrate:fresh --force
fi

php artisan db:seed --force || echo "==> seed failed (non-fatal), continuing..."

exec "$@"
