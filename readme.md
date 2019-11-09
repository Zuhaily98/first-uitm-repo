## CLI
    git status
    git add .
    git commit -m "any changes"
    git push -u origin master

to create fake users
    php artisan tinker
    factory(App\User::class,10)->create()
    
    in seeder: php artisan make:seeder UsersTableSeeder
    
## Database
    php artisan migrate
    php artisan migrate:rollback
    php artisan migrate:refresh
    php artisan db:seed
