# Job Board

A full-stack job board web application developed with Laravel 12, demonstrating a clean and maintainable architecture following modern PHP and Laravel best practices. The application allows employers to create and manage job offers, and job seekers to browse listings and submit applications with CV uploads.

## Features

- Public job listings with filters (search, salary range, experience level, category)
- Employer profiles with a dedicated management panel
- Job offer management (create, edit, soft delete)
- Job applications with CV upload
- Role-based access control using Policies and custom Middleware
- Reusable Blade components
- Form validation using FormRequest classes
- Flash messaging for user feedback

## Concepts Covered

- Eloquent ORM — relationships, query scopes, soft deletes
- Resource controllers with separation between public and authenticated contexts
- FormRequest validation
- Policies for record-level authorization
- Custom Middleware for route-level access control
- Blade templating with anonymous and class-based components
- File storage with Laravel's private disk
- Route grouping with middleware stacks
- Manual authentication without packages

## Requirements

- PHP 8.2+
- Composer
- Node.js 18+
- MySQL

## Installation

```bash
# Clone the repo
git clone https://github.com/tahavvd/Job-Board.git
cd Job-Board

# Install PHP dependencies
composer install

# Install JS dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate
```

Then open `.env` and fill in your database credentials:
DB_DATABASE=job_board
DB_USERNAME=your_username
DB_PASSWORD=your_password

Then continue:

```bash
# Run migrations and seed demo data
php artisan migrate --seed

# Start the development server
php artisan serve

# In a separate terminal, start Vite
npm run dev
```

Visit `http://localhost:8000`

## Demo credentials

After seeding, you can log in with:

- **Email:** admin@example.com
- **Password:** password

## License

MIT
