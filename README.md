# MedSync - Patient Management System

MedSync is a clean and lightweight web-based Patient Management System built using PHP and the Laravel framework. It provides a simple, intuitive dashboard for healthcare professionals to register, edit, search, and manage patient health records.

## Features

- **User Authentication**: Secure login and registration powered by Laravel Breeze.
- **Patient Directory**: A comprehensive table showing all registered patients.
- **CRUD Operations**: Complete functionality to add, view, update, and delete patient records.
- **Real-time Search**: Quick search functionality to find patients by name.
- **Responsive Interface**: User interface styled with Bootstrap and Tailwind CSS.

## Requirements

- PHP >= 8.2
- Composer
- MySQL / SQLite / PostgreSQL
- Node.js & NPM

## Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com/workspace220106/First-PHP-project.git
   cd First-PHP-project
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment:**
   Copy the example environment file:
   ```bash
   cp .env.example .env
   ```
   Open `.env` and set up your database connection configuration.

4. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

5. **Run migrations and seed data:**
   ```bash
   php artisan migrate --seed
   ```

6. **Build assets:**
   ```bash
   npm run dev
   ```

7. **Start the local development server:**
   ```bash
   php artisan serve
   ```
   You can now access the app at `http://127.0.0.1:8000`.

## Access & Login

Once the local server is running and the database is seeded, you can log in using the following test credentials:

- **Email Address:** `test@example.com`
- **Password:** `password`

Alternatively, you can register a new account by clicking the **Register** link on the login page.

## License

This project is open-source and licensed under the [MIT license](LICENSE).
