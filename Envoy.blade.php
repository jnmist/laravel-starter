@servers([
    'prod' => [
        'user@example.com -p 11111'
    ],
    'local' => '127.0.0.1',
    'prod' => '127.0.0.1',
    'stage' => 127.0.0.1,
])

@task('clearall', ['on' => 'local'])
composer clear-cache
composer dump-autoload
composer install
composer dump-autoload
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan clear-compiled
@endtask

@task('teststage', ['on' => 'stage', 'confirm' => true])
cd /var/www/example.com
ls -la
git status
@endtask

@task('deploy', ['on' => 'stage'])
cd /var/www/example.com
git checkout master
git pull origin master
php artisan route:clear
php artisan view:clear
php artisan cache:clear
php artisan clear-compiled
composer dump-autoload
@endtask

@task('migrate', ['on' => 'stage'])
cd /var/www/example.com
php artisan migrate:fresh --seed
@endtask