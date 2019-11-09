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
    
## Make Auth
    composer require laravel/ui --dev

    php artisan ui vue --auth

    npm install

    npm run dev
    
## Database Seeder

    php artisan make:seeder ModelTableSeeder

    php artisan db:seed

## Factory

    php artisan make:factory ModelFactory

    php artisan tinker

    factory(App\Model::class,50)->create();

## Migrations

    php artisan make:migration create_models_table
    php artisan migrate
    php artisan migrate:rollback
    php artisan migrate:refresh
    
## Controller
    php artisan make:controller ModelController
    
## Model
    php artisan make:model Model
    
## Route
    Route::method('uri','ModelController@method')->name(method);
