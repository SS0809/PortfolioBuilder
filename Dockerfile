# Use the official PHP image as the base image
FROM php:latest

# Install any additional PHP extensions your application needs.
# For example, if your application requires mysqli extension:
# RUN docker-php-ext-install mysqli

# Copy the PHP application files into the container
COPY app/ /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80 for the PHP server
EXPOSE 80

# Install and configure MySQL client inside the container
RUN apt-get update && apt-get install -y default-mysql-client
