<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

This project is a web application built with Laravel.

## Installation

Clone the repository:
```
https://github.com/pinilDissanayaka/libraryManagement.git
```

Install dependencies:
```
composer install
```

Copy the .env.example file to .env:
```
cp .env.example .env
```

Generate application key:
```
php artisan key:generate
```

Configure your .env file with your database credentials and other settings.


Run database migrations:
```
php artisan migrate
```

Run database seeds:
```
php artisan db:seed
```

Install npm dependencies:
```
npm install
```

Compile assets:
```
npm run dev
```

Start the server:
```
php artisan serve
```
The project should now be running on http://localhost:8000.
