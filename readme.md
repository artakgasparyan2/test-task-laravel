Installation

composer install
cp .env.example .env

Update .env and set your database credentials
php artisan key:generate
php artisan migrate
php artisan serve

In reCaptcha, the domain name is testtask.loc and you must also name your localhost so for reCaptcha to work
