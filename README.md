# Ultainfinity-Test Laravel Project Setup and Testing Guide

Welcome to the documentation for setting up and testing the Ultainfinity-Test Laravel project. This guide will walk you through the process of cloning the Ultainfinity-Test Laravel project from a GitHub repository and testing it on your local environment.

## Prerequisites

Before you begin, make sure you have the following installed on your system:

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)

## Clone the Repository

Open your terminal and run the following command to clone the Ultainfinity-Test Laravel project from the GitHub repository:

```bash
git clone https://github.com/otech2018/Ultainfinity-Test.git
```


## Install Dependencies

Navigate to the project directory using the `cd` command:

```bash
cd Ultainfinity-Test
```

Now, use Composer to install the project dependencies:

```bash
composer install
```

## Configure Environment

Copy the `.env.example` file to create a new `.env` file:

```bash
cp .env.example .env
```

Open the `.env` file and update the database configuration and other settings as needed.

Generate the application key:

```bash
php artisan key:generate
```

## Migrate and Seed the Database

Run database migrations to create tables:

```bash
php artisan migrate
```

If the project has seeders, you can run them to populate the database:

```bash
php artisan db:seed
```

## Serve the Application

Start the Laravel development server:

```bash
php artisan serve
```

Open another terminal and run:

```bash
npm run dev
```

Visit `http://localhost:8000` in your web browser to see the Ultainfinity-Test Laravel application running.


## Additional Notes

- Ensure your system meets the Laravel [requirements](https://laravel.com/docs/8.x/installation#server-requirements).
- Check the Ultainfinity-Test project's documentation for any specific instructions or additional setup steps.

Now you have successfully cloned the Ultainfinity-Test Laravel project, set up the environment, and tested the application. If you encounter any issues, refer to the project's documentation or seek help from the community.


