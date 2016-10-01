#Vidage des caches
echo "Vidage des caches.."
php bin/console cache:clear --env=prod
php bin/console cache:clear