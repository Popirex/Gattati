# Usa l'immagine ufficiale PHP con Apache
FROM php:8.2-apache

# Abilita mod_rewrite (utile se userai URL più puliti in futuro)
RUN a2enmod rewrite

# Copia tutti i file del progetto nella cartella web di Apache
COPY . /var/www/html/

# Imposta la cartella di lavoro
WORKDIR /var/www/html/

# Espone la porta 10000 (Render la usa per il servizio web)
EXPOSE 10000

# Avvia Apache in foreground sulla porta 10000
CMD ["apache2-foreground"]
