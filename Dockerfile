# Use an official PHP image as the base image
FROM php:8.2-apache

# Update the package repository and install necessary packages
RUN apt-get update && apt-get install -y \
    apache2 \
    curl \
    && a2enmod rewrite \
    && apt-get clean

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the PHP application files to the container (adjust the source path as needed)
COPY . /var/www/html/

# Change ownership of the application files for Apache
RUN chown -R www-data:www-data /var/www/html
RUN rm -f /var/www/html/index.html

# Expose port 80 to allow external connections
EXPOSE 80

# Start Apache service in the foreground
ENTRYPOINT ["apache2-foreground"]

