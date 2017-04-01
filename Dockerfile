FROM wordpress
ADD wp-content /var/www/html/wp-content
RUN chown -R www-data: /var/www/html/wp-content
ADD block-xmlrpc.conf /etc/apache2/conf-available/
RUN a2enconf block-xmlrpc
