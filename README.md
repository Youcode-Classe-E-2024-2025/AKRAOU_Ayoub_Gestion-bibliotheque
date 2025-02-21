# Library Management System

This project is a Library Management System developed for the Bibliothèque Municipale de la ville de Saint-Marc. It is built using Laravel and TailwindCSS, focusing on authentication, book management, and borrow management.

## Features

- **Authentication**: User registration, login, and logout functionality.
- **Book Management**: Admins can add, edit, and delete books.
- **Borrow Management**: Users can borrow and return books.
- **Admin Dashboard**: Admins can view and manage all users.

## Routes

### Authentication
- `GET /`: Redirects to login page.
- `GET /login`: Displays the login form.
- `POST /login`: Handles login form submission.
- `POST /logout`: Logs out the user.
- `GET /register`: Displays the registration form.
- `POST /register`: Handles registration form submission.

### Book Management
- `GET /books`: Lists all available books.
- `GET /books/create`: Displays the form to add a new book.
- `POST /books`: Stores a new book.
- `GET /books/{book}/edit`: Displays the form to edit a book.
- `PUT /books/{book}`: Updates the book information.
- `DELETE /books/{book}`: Deletes a book.

### Borrow Management
- `GET /my-books`: Lists all books borrowed by the user.
- `POST /books/{book}/borrow`: Borrows a book.
- `POST /books/{book}/return`: Returns a borrowed book.

### Admin Dashboard
- `GET /admin/dashboard`: Displays the admin dashboard with all users.
- `DELETE /admin/users/{user}`: Deletes a user.

## Setup Instructions

1. Clone the repository.
2. Run `composer install` to install dependencies.
3. Copy `.env.example` to `.env` and configure your environment variables.
4. Run `php artisan key:generate` to generate the application key.
5. Run `php artisan migrate` to create the database tables.
6. Run `php artisan db:seed` to seed the database with initial data.
7. Start the development server with `php artisan serve`.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.