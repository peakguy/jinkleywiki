FROM mediawiki:1.45.1

# Copy your LocalSettings.php into the container
COPY LocalSettings.php /var/www/html/LocalSettings.php

EXPOSE 80
