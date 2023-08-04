# Use the official PHP image as the base image
FROM php:latest

# Install additional PHP extensions if needed
# For example, if your application requires mysqli extension:
# RUN docker-php-ext-install mysqli

# Copy the PHP application files into the container
COPY app/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 for the PHP server
EXPOSE 80
