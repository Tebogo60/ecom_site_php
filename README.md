# ecom_site_php - E-Commerce Website

## Project Overview

**ecom_site_php** is a lightweight, user-friendly e-commerce website built with PHP 8+, MySQL, and a custom MVC framework using **simple-mvc-php-framework** with **FastRoute** for routing. It allows users to browse products, manage their shopping cart, and checkout securely using PayFast. The project emphasizes simplicity, maintainability, and ease of deployment.

## Features

-   User registration, login, and logout
-   Browse products by categories
-   Search and filter products
-   Product detail pages with images, price, and stock status
-   Shopping cart management (add, remove, update items)
-   Checkout with PayFast payment integration
-   Order history and tracking
-   Responsive design (mobile-first) with Bootstrap/Tailwind

## Technical Stack

-   **Backend:** PHP 8+ with simple-mvc-php-framework and FastRoute
-   **Frontend:** HTML5, CSS3, JavaScript, Bootstrap/Tailwind
-   **Database:** MySQL / MariaDB
-   **Payment Gateway:** PayFast
-   **Server:** Apache/Nginx, Linux (Ubuntu)
-   **Version Control:** Git + GitHub

## File Structure

```
.
├── app
│   ├── Controller
│   │   └── FormController.php
│   ├── Model
│   │   └── UserModel.php
│   └── View
├── composer.json
├── composer.lock
├── config
│   └── config.php
├── core
│   ├── Controller.php
│   ├── Model.php
│   └── View.php
├── database
│   ├── create_tables.php
│   ├── delete_data.php
│   ├── insert_data.php
│   └── update_data.php
├── ecom_site_php_instructions.md
├── LICENSE
├── public
│   ├── index.php
│   └── static
│       ├── css
│       ├── imgs
│       └── js
├── README.md
└── routes
    └── routes.php
```

## Installation

1. Clone the repository:

```
git clone git@github.com:Tebogo60/ecom_site_php.git
```

2. Install dependencies via Composer:

```
composer install
```

3. Create the database and tables by importing SQL scripts:

```
mysql -u <username> -p <database_name> < database/create_tables.sql
```

4. Configure database connection in `config/config.php`.
5. Set up a local server (Apache/Nginx) pointing to the `public/` directory.

## Usage

-   Open the site in a browser via your local server.
-   Register a new user or log in.
-   Browse products, add items to your cart, and proceed to checkout.
-   Orders are tracked in your account history.

## Security Considerations

-   HTTPS recommended for all deployments
-   Input validation and sanitization
-   SQL injection prevention via prepared statements
-   CSRF tokens for forms
-   Passwords hashed using bcrypt

## Deployment

-   Host on a Linux server (Ubuntu) with Apache/Nginx
-   Import database scripts
-   Configure server to point to `public/`
-   Use Git + GitHub for version control and updates

## License

MIT License
