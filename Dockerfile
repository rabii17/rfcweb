FROM wordpress:latest
COPY ./wp-content /usr/src/wordpress/wp-content
COPY ./wp-config.php /usr/src/wordpress
EXPOSE 80