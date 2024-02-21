# Use Ubuntu 20.04 as the base image
FROM ubuntu:20.04

# Update package lists and install necessary packages
RUN apt-get update && \
    apt-get install -y \
        apache2 \
        mysql-server \
        php \
        php-mysql \
        && \
    rm -rf /var/lib/apt/lists/*

# Copy Apache configuration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Enable Apache modules
RUN a2enmod rewrite

# Set up MySQL root password (replace 'password' with your desired password)
RUN echo "mysql-server mysql-server/root_password password password" | debconf-set-selections && \
    echo "mysql-server mysql-server/root_password_again password password" | debconf-set-selections

# Expose ports
EXPOSE 80
EXPOSE 3306

# Start services
CMD ["apachectl", "-D", "FOREGROUND"]
