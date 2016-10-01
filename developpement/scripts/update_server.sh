echo "Recuperation sur le serveur.."
cd /var/www/html/ateliers
set +e
git pull
set -e
echo "Fin de la recuperation sur le serveur"
