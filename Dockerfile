FROM php:8.2-apache

# Copier tous les fichiers du projet dans le répertoire par défaut d'Apache
COPY . /var/www/html/

# Activer le module rewrite (si tu utilises .htaccess)
RUN a2enmod rewrite

# Optionnel : ajuster les permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Exposer le port 80 (Render utilisera le PORT variable d'environnement, mais Apache écoute sur 80)
# On va modifier le port d'écoute pour correspondre à $PORT
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Démarrer Apache
CMD ["apache2-foreground"]