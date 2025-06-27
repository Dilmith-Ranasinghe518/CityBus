
# 🚌 Bus Management System – PHP Web Application

This is a PHP-based CRUD web application for managing a bus transportation system. It includes modules for managing routes, buses, users, reservations, and schedules. It supports three user types (Admin, User, Driver).

---

## ✨ Key Features

- **Bus Management** – Add, View, Update, Delete buses
- **Route Management** – Add, View, Update, Delete routes
- **User Management** – Admin/User/Driver types with role-based features
- **Reservation System** – Booking and cancellation for users
- **Schedule Management** – Assign schedules for drivers and routes

---

## 💻 Tech Stack

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Web Server:** Apache (XAMPP/WAMP)

---

## ⚙️ Setup Instructions

### Requirements

- [XAMPP](https://www.apachefriends.org/index.html) or WAMP
- PHP & MySQL
- Web browser

---

### 📦 Installation Steps

1. **Download and install XAMPP or WAMP**
2. **Extract this project** into your local server directory  
   `C:/xampp/htdocs/CityBus/`
3. **Start Apache and MySQL** from the XAMPP Control Panel
4. **Open phpMyAdmin**  
   - Go to: `http://localhost/phpmyadmin`
5. **Create the Database**
   - Click on `New` → Enter `iwtbus` → Click `Create`
6. **Import the Database Tables**
   - Select the `iwtbus` database
   - Click `SQL` tab
   - Paste the schema (provided below) and click **Go**
7. **Update `config.php`** with:
```php
$host = "localhost";
$user = "root";
$password = "";
$database = "iwtbus";
```
8. **Run the application**  
   In your browser: `http://localhost/CityBus/`

---

## 📃 License

This project is open-source for educational use. You are free to modify, reuse, and extend it.
