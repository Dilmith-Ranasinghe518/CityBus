-- Database: iwtbus
CREATE DATABASE IF NOT EXISTS iwtbus;
USE iwtbus;

-- Table: users
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL UNIQUE,
    user_fullname VARCHAR(100) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    user_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table: bus
CREATE TABLE IF NOT EXISTS bus (
    busid INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    busno VARCHAR(50) NOT NULL UNIQUE,
    bustype VARCHAR(50) NOT NULL
);

-- Table: drivers
CREATE TABLE IF NOT EXISTS drivers (
    driver_id VARCHAR(20) PRIMARY KEY,
    driver_name VARCHAR(100) NOT NULL,
    driver_username VARCHAR(50) NOT NULL UNIQUE,
    driver_password VARCHAR(255) NOT NULL,
    driver_contact VARCHAR(20),
    driver_email VARCHAR(100),
    bus_no VARCHAR(50),
    start_location VARCHAR(100),
    end_location VARCHAR(100),
    departure_time TIME
);

-- Table: passengern
CREATE TABLE IF NOT EXISTS passengern (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    contact VARCHAR(20)
);

-- Table: scedule
CREATE TABLE IF NOT EXISTS scedule (
    SchelduleID INT AUTO_INCREMENT PRIMARY KEY,
    estTime TIME NOT NULL,
    `from` VARCHAR(100) NOT NULL,
    `to` VARCHAR(100) NOT NULL,
    Bus_No VARCHAR(50),
    Route_No VARCHAR(50)
);

-- Table: reservation1
CREATE TABLE IF NOT EXISTS reservation1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL,
    contact VARCHAR(20),
    reservation_datetime DATETIME NOT NULL,
    reservation_type VARCHAR(50),
    seats_reserved INT
);

-- Table: contactrequest
CREATE TABLE contactrequest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    FullName VARCHAR(100),
    Salutation VARCHAR(10),
    Email VARCHAR(100),
    Telephone VARCHAR(20),
    Message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
