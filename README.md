# PHP User Auth

A role-based authentication system built with PHP (OOP), MySQL, HTML/CSS, and JavaScript.

## Features
- User and admin registration/login with role-based access control
- Separate dashboards for users and admins
- Secure password hashing and session handling

## Setup
1. Clone the repository: `git clone https://github.com/sandip01234/phpuserauth.git`
2. Set up a MySQL database named `phpuserauth`.
3. Import the SQL schema from `database.sql` (create this file with the schema below).
4. Update `includes/config.php` with your database credentials.
5. Host on a PHP-enabled server (e.g., XAMPP, WAMP).
6. Access via `http://localhost/phpuserauth/`.

## Database Schema
```sql
CREATE DATABASE phpuserauth;
USE phpuserauth;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'admin') DEFAULT 'user'
);