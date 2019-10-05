#! /bin/bash
rm -rf .git
cp .env.example .env
composer install
npm install
php artisan key:generate
echo "Envoy.blade.php" >> .gitignore
git init
git status
git config user.name jmist
git config user.email j@localhost
git add -A .
git commit -m "initial commit"
echo "TODO ... git remote add / and push to your repo ... "
echo "Deleting startup.sh"
