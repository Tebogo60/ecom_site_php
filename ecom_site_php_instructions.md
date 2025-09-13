# PHP E-Commerce Website Planning Document

**Project Name:** ecom_site_php
**Project Owner:** Tebogo Malebana
**Date:** 13 September 2025
**Version:** 1.7

---

## 1. Project Overview

Create a lightweight, user-friendly e-commerce website using PHP, MySQL, and modern front-end technologies. The site will focus on product browsing, user accounts, shopping carts, and checkout functionality, built with **simple-mvc-php-framework** and **FastRoute** for routing. It should be responsive, secure, and optimized for performance.

Goals:

-   Enable users to browse and purchase products online.
-   Support secure user authentication and authorization.
-   Keep the project simple, maintainable, and easy to extend.
-   Maintain a clear file structure for MVC components and routing.

---

## 2. Target Audience

-   Online shoppers looking for convenience.
-   Small businesses wanting to sell products online.

---

## 3. Functional Requirements

User Side:

-   User registration/login/logout (email/password).
-   Browse products by category, search products, and filter by price/popularity.
-   Product detail page with images, description, price, and stock status.
-   Add/remove products from shopping cart.
-   Checkout process with address input, shipping options, and PayFast payment integration.
-   Order history and tracking.
-   Wishlist/favorites (optional).

---

## 4. Non-Functional Requirements

-   Security: Use password hashing (bcrypt), prevent SQL injection, use HTTPS.
-   Performance: Optimized queries, caching frequently accessed data.
-   Scalability: Lightweight modular MVC design using simple-mvc-php-framework.
-   Responsiveness: Mobile-first design using Bootstrap or Tailwind.
-   Maintainability: Clear file structure and use Git + GitHub for version control.

---

## 5. Technical Stack

-   Backend: PHP 8+ with simple-mvc-php-framework and FastRoute for routing
-   Frontend: HTML5, CSS3, JavaScript, Bootstrap/Tailwind
-   Database: MySQL / MariaDB
-   Payment Gateway: PayFast
-   Server: Apache or Nginx, Linux (Ubuntu)
-   Version Control: Git + GitHub
-   Optional: Cloudinary/S3 for image storage

---

## 6. MVC File Details

### 6.1 Controllers

-   **FormController.php**: Handles form submissions, validation, and redirects for user input.
-   **ProductController.php**: Fetches product data from the ProductModel and passes it to views for listing and detail pages.
-   **CartController.php**: Manages adding/removing items, updating quantities, and preparing data for checkout.
-   **UserController.php**: Handles user registration, login, logout, and session management.

### 6.2 Models

-   **UserModel.php**: Handles CRUD operations for users, authentication, and password hashing.
-   **ProductModel.php**: Fetches product data, categories, and stock information.
-   **OrderModel.php**: Saves orders, retrieves order history, updates order status.
-   **CartModel.php**: Manages cart items for each user, calculates totals, and handles persistence.

### 6.3 Views

-   **layouts/main.php**: Base layout with header, footer, and dynamic content placeholder.
-   **home.php**: Displays featured products, categories, and search functionality.
-   **product.php**: Shows product details including images, description, price, and stock.
-   **cart.php**: Shows all items in the cart with options to update quantity or remove items.
-   **checkout.php**: Collects shipping info and integrates with PayFast payment.
-   **auth/login.php & auth/register.php**: Forms for user authentication and account creation.

### 6.4 Core Components

-   **Controller.php**: Base controller class providing shared methods for child controllers.
-   **Model.php**: Base model class with DB connection and common CRUD methods.
-   **View.php**: Handles rendering views with data passed from controllers.

### 6.5 Routes

-   **routes.php**: Maps URLs to specific controller methods using FastRoute.

### 6.6 Public Directory

-   **index.php**: Front controller that initializes the app and processes requests.
-   **static/**: Contains CSS, JS, and image assets.

---

## 7. Database Design (Simplified)

Tables:

users

-   id (PK)
-   name
-   email (unique)
-   password
-   created_at, updated_at

products

-   id (PK)
-   name
-   description
-   price
-   stock_quantity
-   category_id (FK)
-   image_url
-   created_at, updated_at

categories

-   id (PK)
-   name
-   description
-   created_at, updated_at

orders

-   id (PK)
-   user_id (FK)
-   total_amount
-   status (pending, completed, canceled)
-   created_at, updated_at

order_items

-   id (PK)
-   order_id (FK)
-   product_id (FK)
-   quantity
-   price
-   created_at, updated_at

cart_items

-   id (PK)
-   user_id (FK)
-   product_id (FK)
-   quantity

---

## 8. Features Roadmap / Milestones

| Phase   | Tasks                                                                           | Deadline |
| ------- | ------------------------------------------------------------------------------- | -------- |
| Phase 1 | Project setup, database schema, simple-mvc-php-framework routing with FastRoute | Week 1   |
| Phase 2 | User registration/login, product listing, product detail pages                  | Week 2   |
| Phase 3 | Shopping cart & checkout                                                        | Week 3   |
| Phase 4 | PayFast integration                                                             | Week 4   |
| Phase 5 | Testing & security enhancements                                                 | Week 5   |
| Phase 6 | Deployment to server with Git + GitHub                                          | Week 6   |

---

## 9. Wireframes / UI Sketches

-   Home page: featured products, categories, search bar
-   Product page: product details, add-to-cart button
-   Cart page: product list, quantities, total price, checkout button
-   Login/Register pages for user authentication
-   Checkout page with shipping and payment information

---

## 10. Security Considerations

-   Use HTTPS for all pages
-   Input validation and sanitization
-   SQL injection prevention (prepared statements)
-   CSRF tokens for forms
-   Password hashing (bcrypt)
-   Basic access control for user accounts

---

## 11. Deployment Plan

-   Host on a Linux server (Ubuntu) with Apache/Nginx
-   MySQL database setup
-   Use Git + GitHub for version control and deployment
