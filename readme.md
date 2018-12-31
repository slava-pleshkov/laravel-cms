<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://laravel.com/assets/img/components/logo-laravel.svg" height="100px">
    </a>
    <a href="https://eshop.slavapleshkov.com" target="_blank">
        <img src="https://eshop.slavapleshkov.com/icons/mstile-310x310.png" height="100px">
    </a>
    <h1 align="center">laravel-e-shop</h1>
    <br>
</p>
<p align="center">The online store was created using the Laravel Framework</p>
## Installation Dev

1. Clone the repo and `cd` into it
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `true`
1. Set your `STRIPE_SECRET` in your `.env` file
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Run this command `npm install`
1. Run this command `npm run dev`
1. Run this command `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser

## Installation Production

1. Clone the repo and `cd` into it
1. Create users and table in MySQL
1. Configure Nginx with these settings `nginx.conf`
1. Run this command `composer install`
1. Rename or copy `.env.example` file to `.env`
1. Run this command `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your mail credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file
1. Set your `APP_DEBUG` in your `.env` file with the value `false`
1. Set your `STRIPE_SECRET` in your `.env` file
1. Run this command `php artisan config:cache`
1. Run this command `php artisan db:seed`
1. Run this command `npm install`
1. Run this command `npm run production`