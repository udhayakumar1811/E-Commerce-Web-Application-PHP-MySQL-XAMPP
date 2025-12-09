# Shopping Store – PHP & MySQL E-Commerce Web Application

A full-stack e-commerce web application developed using **PHP**, **MySQL**, **HTML5**, **CSS3**, and **JavaScript**, deployed on a **XAMPP local server (Apache + MySQL)**.  
This project demonstrates frontend UI design, backend form handling, and database integration readiness, suitable for academic use and professional portfolios.

---

## 📌 Project Overview

The **Shopping Store** project simulates a simple online shopping platform where users can browse products, view pricing, interact with a cart interface, sign in, and submit enquiries through a contact form.  
The application is designed with a modern dark-themed UI, clean navigation, and structured code organization.

---

## 🧰 Tech Stack

### Frontend
- HTML5  
- CSS3  
- JavaScript  

### Backend
- PHP (Core PHP)

### Database
- MySQL

### Server & Tools
- XAMPP (Apache + MySQL)
- phpMyAdmin
- Visual Studio Code
- Git & GitHub

---

## ✨ Features

- Responsive home page with hero banner  
- Product listing page with images, descriptions, and prices  
- Add-to-Cart user interface (UI simulation)  
- Sign-In page (UI implementation)  
- Contact form with PHP backend processing  
- Clean and professional dark UI design  
- Modular file and folder structure  
- Ready for MySQL data storage and extension  

---

## 📁 Project Structure

```text
Full Stack project/
│
├── index.html        # Home page
├── products.html     # Product listing page
├── cart.html         # Cart page
├── signin.html       # Sign-in page
├── contact.html      # Contact page
├── form.php          # PHP backend for contact form
│
├── index.css         # Home page styles
├── products.css      # Products page styles
├── cart.css          # Cart page styles
├── signin.css        # Sign-in page styles
├── contact.css       # Contact page styles
│
├── images/           # Images and assets
└── screenshots/      # Project screenshots

```
🏗️ Installation & Setup (XAMPP + PHP + MySQL)
Prerequisites

XAMPP (Apache + MySQL)

Web browser

Git (optional)

Setup Steps

Copy your project folder into:

C:\xampp\htdocs\


Example project path:

C:\xampp\htdocs\Full Stack project\


Open XAMPP Control Panel

Start Apache

Start MySQL

🗄️ Database Configuration (Optional but Recommended)

Open:

http://localhost/phpmyadmin


Create a database:

shopping_store


Create a table with fields:

id – INT, AUTO_INCREMENT, PRIMARY KEY

name – VARCHAR(100)

email – VARCHAR(100)

subject – VARCHAR(150)

message – TEXT

Update form.php:

Database name: shopping_store

Username: root

Password: "" (empty)

▶️ Run the Project

Ensure Apache and MySQL are running.

Open browser:

http://localhost/Full%20Stack%20project/index.html


Navigate using menu:
Home | Products | Contact | Sign In | Cart

🔐 Contact Form (PHP + MySQL)

contact.html provides the form UI.

form.php handles form submission using POST.

Performs server-side validation.

Stores data in MySQL (if configured).

Displays submission success or error message.

Form configuration:

<form action="form.php" method="POST">

🎯 Use Cases

Academic mini project

Beginner-level PHP & MySQL practice

Portfolio project for web developer roles

Demonstration of full-stack fundamentals

🚀 Future Enhancements

Database-based user authentication

Real shopping cart using PHP sessions

Admin dashboard (CRUD operations)

Order and checkout workflow

Improved UI responsiveness for mobile devices

