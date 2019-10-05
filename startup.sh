#! /bin/bash
rm -rf .git
cp .env.example .env
composer install
npm install
php artisan key:generate
echo "Envoy.blade.php" >> .gitignore
git init
git status
echo "GIT CONFIG USER.NAME - type in name to use:"
read var1
git config user.name $var1
echo "GIT CONFIG USER.EMAIL - type in email to use:"
read var2
git config user.email $var2
git add -A .
git commit -m "initial commit"
echo "TODO ... git remote add / and push to your repo ... "
echo "Deleting startup.sh"
