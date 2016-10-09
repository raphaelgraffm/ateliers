# Creation des assets
echo "Creation des assets.."
php bin/console assetic:dump
php bin/console assetic:dump --env=prod

# Pleeease
echo "Passage par Pleeease.."
pleeease compile
rm -f web/css/styles.css
mv -f web/css/styles2.css web/css/styles.css

# Vidage des caches
echo "Vidage des caches.."
php bin/console cache:clear --env=prod
