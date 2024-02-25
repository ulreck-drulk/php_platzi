#FROM php:7.4-apache
FROM php:8.1-apache
#COPY arcoda.php /app/arcoda.php
WORKDIR /app
CMD ["php", "ahorcado.php"]
