#!/bin/sh
# This script installs the package to the system.
# chmod u+x YourScript.sh

PATH_BASE = "$(dirname "$0")/.."

echo "\nSetting up project... \n"

echo"\nClearing Cache ... \n"
php artisan clear
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "\nInstalling Composer Dependencies... \n"
composer install --no-interaction

#npm install
#create .env if not exists
if [ -f "$PATH_BASE/.env"]
then

echo "\n.env file already exists \n"

else
echo "\nCreating .env file \n"
cp .env.example .env
fi