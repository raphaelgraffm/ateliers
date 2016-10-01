echo "Recuperation sur le serveur.."
cd /var/www/html/ateliers
rm -rf var/*
set +e
git pull
set -e
echo "Fin de la recuperation sur le serveur"

#Installation des dependances
php /var/www/html/ateliers/composer.phar update

#Mise a jour des caches
echo "Mise à jour des caches.."
php /var/www/html/ateliers/bin/console cache:clear --env=prod
