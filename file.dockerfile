# Usa l'immagine ufficiale PHP con Apache
FROM php:8.2-apache

# Copia tutti i file del progetto nella cartella web di Apache
COPY . /var/www/html/

# Espone la porta 10000 (Render richiede questa porta)
EXPOSE 10000

# Avvia Apache in foreground
CMD ["apache2-foreground"]
