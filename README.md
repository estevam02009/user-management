# User Management System

A Laravel-based user management system that provides functionality for managing users with different roles.

## Features

- User CRUD operations (Create, Read, Update, Delete)
- Role-based user management (Admin/User roles)
- Secure password handling
- Pagination for user listing
- User authentication
- Responsive interface using Tailwind CSS

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB
- XAMPP or similar local development environment
- Node.js and NPM (for frontend assets)

## Installation

1. Clone the repository:
```bash
git clone [your-repository-url]
```
2. Install PHP dependencies:
```bash
composer install
```
3. Create a copy of the .env file:
```bash
cp .env.example .env
```
4. Generate a new application key:
```bash
php artisan key:generate
```
5. Configure the database connection in the .env file.
6. Run database migrations:
```bash
php artisan migrate
```
7. Start the development server:
```bash
php artisan serve
```
8. Compile frontend assets:
```bash
npm run dev
