#!/bin/sh
php-fpm


# Tunggu database siap
until php artisan migrate --force; do
  echo "Waiting for database to be ready..."
  sleep 3
done

# Lanjutkan proses utama container (php-fpm)
exec "$@"
