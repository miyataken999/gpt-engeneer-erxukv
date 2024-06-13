FROM php:7.4-fpm

# Set working directory to /app
WORKDIR /app

# Copy composer.lock and composer.json
COPY composer.lock composer.json /app/

# Install dependencies
RUN composer install --no-dev --prefer-dist

# Copy application code
COPY . /app/

# Expose port 80
EXPOSE 80

# Run command to start PHP FPM
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]