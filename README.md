# School Enrollment System

This project is a modern online enrollment system designed for an elementary school. The application provides a user-friendly interface for students to enroll and track their progress, as well as an admin section for teachers to monitor enrolled students. The system is built with the following technologies:

- **React** for the frontend.
- **Vite** for fast builds and development.
- **Tailwind CSS** for styling.
- **PostgreSQL** as the database.
- **PHP** for server-side operations.

## Features

### User Features
1. **Homepage**
   - A welcoming page for users with school information.
2. **Enrollment Portal**
   - Enables students to enroll in the school.
   - Tracks enrollment progress.

### Admin Features
1. **Admin Dashboard**
   - Allows teachers to view and monitor enrolled students.
2. **Student Management**
   - Provides a clear overview of enrollment data.

## Prerequisites

Ensure you have the following installed:

1. **Node.js** (v18 or higher)
2. **PHP** (v8.0 or higher)
3. **PostgreSQL** (v13 or higher)
4. **Vite** (installed via npm or yarn)

## Setup Instructions

### 1. Clone the Repository
```bash
$ git clone https://github.com/your-repository/school-enrollment-system.git
$ cd school-enrollment-system
```

### 2. Install Frontend Dependencies
```bash
$ cd frontend
$ npm install
```

### 3. Configure Backend
1. Go to the `backend` folder:
   ```bash
   $ cd ../backend
   ```
2. Install dependencies (if applicable):
   ```bash
   $ composer install
   ```
3. Configure your `.env` file for PostgreSQL connection:
   ```env
   DB_HOST=localhost
   DB_PORT=5432
   DB_DATABASE=school_enrollment
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```
4. Run database migrations:
   ```bash
   $ php artisan migrate
   ```

### 4. Start the Development Server

#### Frontend
```bash
$ cd ../frontend
$ npm run dev
```

#### Backend
```bash
$ cd ../backend
$ php -S localhost:8000
```


## Technologies Used

1. **React** - For building a dynamic and responsive user interface.
2. **Vite** - For faster builds and hot module replacement.
3. **Tailwind CSS** - For utility-first, responsive design.
4. **PostgreSQL** - A robust relational database system.
5. **PHP** - Backend logic and API integration.

## Contribution Guidelines

1. Fork the repository.
2. Create a feature branch:
   ```bash
   $ git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   $ git commit -m "Add feature description"
   ```
4. Push to the branch:
   ```bash
   $ git push origin feature-name
   ```
5. Open a pull request.

## License

This project is licensed under the North City Central School - Toledo

