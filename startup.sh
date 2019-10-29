#! /bin/bash
rm -rf .git
cp .env.example .env
composer install
npm install
php artisan key:generate
echo "Envoy.blade.php" >> .gitignore
git init
git status
echo "Deleting startup.sh"
echo " "
echo "All done!"
echo " "
echo "-------- YOU TODO ---------------"
echo "1. Edit .env file with your settings"
echo "2. add git remote"
echo "3. stage and commit changes & and push to your repo ... "

