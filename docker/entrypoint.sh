#!/bin/bash

# 1. Création des sous-dossiers indispensables s'ils manquent
mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/logs

# 2. Ajustement des permissions pour Apache (www-data)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 3. Exécuter les migrations de la base de données
php artisan migrate --force

# 4. Optimiser les performances
php artisan config:cache
php artisan route:cache
php artisan view:cache

# 5. Lancer le serveur Apache
apache2-foreground