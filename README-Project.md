# Laravel Basic App

This is a simple Laravel application setup using the latest version.

## Prerequisites

Ensure you have the following installed before setting up the project:

- **PHP 8.1+**
- **Composer** (PHP dependency manager)
- **Node.js & npm** (for frontend assets)
- **MySQL or PostgreSQL** (Database)

## Installation

### 1. Clone the repository (if applicable)
```sh
# Replace with actual repository URL if needed
git clone https://github.com/your-repo/your-project.git
cd your-project
```

### 2. Install Laravel via Composer
```sh
composer create-project laravel/laravel myapp
cd myapp
```

### 3. Setup Environment Variables
Copy `.env.example` to `.env`:
```sh
cp .env.example .env
```

Generate an application key:
```sh
php artisan key:generate
```

### 4. Configure Database
Edit the `.env` file and update database credentials:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myapp
DB_USERNAME=root
DB_PASSWORD=
```
Run database migrations:
```sh
php artisan migrate
```

### 5. Start Development Server
```sh
php artisan serve
```
Visit `http://127.0.0.1:8000` in your browser.

## Project Structure
```
myapp/
├── app/                 # Application logic
├── bootstrap/           # Bootstrapping files
├── config/              # Configuration files
├── database/            # Database migrations & seeders
├── public/              # Public assets (index.php, CSS, JS)
├── resources/           # Views & frontend assets
├── routes/              # Route definitions
├── storage/             # Logs & cache
├── tests/               # PHPUnit tests
└── vendor/              # Composer dependencies
```

## Routing & Controllers

### Define Routes
Modify `routes/web.php`:
```php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
```

### Create a Controller
```sh
php artisan make:controller PageController
```
Modify `app/Http/Controllers/PageController.php`:
```php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
```

## Frontend Setup (Optional)
To use Vite and TailwindCSS, install dependencies:
```sh
npm install && npm run dev
```

## License
This project is open-source and available under the [MIT License](LICENSE).

