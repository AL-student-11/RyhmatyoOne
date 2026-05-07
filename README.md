# Fictional Company's Website

## Overview

This project is a website developed for a fictional company as a student group project. The purpose of the project is to learn web development skills and learn how to use git and github.

## Technologies Used

HTML – Structure

CSS – Styling

JavaScript – browser interactivity

PHP – Server-side code

SQL – Database

## Image licenses
Fp and info images and images on guestbook from pixabay, open source under pixabay license.

## Deployment
### Prerequisites
  - Server side
    - Http server

    - PHP 7.0 or newer

    - MariaDB 10.6 or newer. Or MySQL 10.11 or newer

  - Client side
    - JavaScript enabled Browser

### Installation
  - Code

    Copy the contents of src folder to a location from which http server shares files.

    Copy connection folder to a location which is not shared by http server but PHP can access it.

    Edit connect.php
    - host  => "hostname/ip of your MariaDB server"
    - user  => "MariaDB server admin provided username"
    - pass  => "MariaDB server admin provided password"
    - db    => "database's name"

    Edit reguire "../connction/connect.php" lines to match direcroty structure on the server if needed.
    - pick_times.php
    - save_creds.php
    - savetimes.php
    - settimes.php


  - Hashes

    Instead of storing plain text username and password software stores hashed username and hashed password.
    Default username and password need to be in auth.php before running software.
    Tool for generating hashes is in tools directory if needed.

    Edit auth.php

    - Find line ```$sql .= 'name VARCHAR(512) NOT NULL UNIQUE DEFAULT "placeholder", ';``` Replace placeholder with hashed username
    - Find line ```$sql .= 'pass VARCHAR(512) NOT NULL DEFAULT "placeholder")';``` Replace placeholder with hashed password

### First run
Enter to admin page and login using default credentials and change password. Changing login name is not mandatory it is an option.
