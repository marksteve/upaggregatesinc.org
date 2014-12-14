FROM wordpress
ADD wp-content /var/www/html/wp-content
RUN chown -R www-data: /var/www/html/wp-content
