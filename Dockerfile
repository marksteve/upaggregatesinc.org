FROM wordpress
RUN rm /var/www/html/index.html
ADD wp-content /var/www/html/wp-content
RUN chown -R www-data: /var/www/html/wp-content
