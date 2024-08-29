<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



# Job Listings Website

This is a simple Laravel-based web application that allows users to add job listings. Each listing contains information about the employer, job position, and salary. The application also features user login and registration.

## Features

- Add job listings with details such as employer, job position, and salary.
- User authentication: login and registration.

## Requirements

- PHP >= 8.0
- Composer
- Node.js (with npm)
- Laravel 9.x
- MySQL or another supported database

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/Rafael-gorski/First-Laravel-Project.git
cd job-listings-website
```

### 2. Install dependencies
Install PHP dependencies via Composer:
```bash
composer install
```
Install Node.js dependencies via npm:
```bash
npm install
```

### 3. Configure the environment
Generate the application key:
```bash
php artisan key:generate
```

### 4. Configure Database
Update the .env file with your database credentials:
```bash
DB_CONNECTION=sqlite
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Run the migrations to create the necessary tables:
```bash
php artisan migrate
```

### 5. Set up Mailtrap (Optional)
If you want to test email functionalities, configure Mailtrap in the .env file:
```bash
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_mailtrap_username
MAIL_PASSWORD=your_mailtrap_password
MAIL_ENCRYPTION=null
```

### 6. Build Frontend Assets
Compile your frontend assets with Vite and Tailwind:
```bash
npm run build
```
For development, you can run:
```bash
npm run dev
```

### 7. Start the application
Serve the application using Laravel's built-in server:
```bash
php artisan serve
```

## Contact

- Linkedin: [rafael-gorski](https://www.linkedin.com/in/rafael-gorski/)


## Acknowledgements

- [Laracast](https://laracasts.com/) - For providing this tutorial and a lot of resources.
