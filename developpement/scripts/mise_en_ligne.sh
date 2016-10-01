#Vidage des caches
echo "Vidage des caches.."
php bin/console cache:clear --env=prod
php bin/console cache:clear

#Envoi sur GitHub
echo "Envoi sur GitHub.."
git add *
git commit
git pull
git push

#Recuperation sur le serveur
ssh root@vps322568.ovh.net /var/www/html/ateliers/developpement/scripts/update_server.sh
