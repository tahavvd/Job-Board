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

## Setup

```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
npm run dev
```

## License

MIT
