#!/bin/bash

# Install dependencies
composer install

# Run the application
php artisan serve --host=0.0.0.0 --port=80
