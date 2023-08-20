laravel minimum 8.1


open terminal

type => git clone https://github.com/mfzeref17/template-auth-laravel-blade.git

type => cd template-auth-laravel-blade

copy file .env.example

rename to .env

type => composer update

type => php artisan key:generate

type => php artisan migrate

type => php artisan db:seed --class=UserRoleSeeder
