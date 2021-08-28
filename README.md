<p align="center">
  <a href="" rel="noopener">
 <!-- <img width=200px height=200px src="https://i.imgur.com/6wj0hh6.jpg" alt="Project logo"></a> -->
 <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400">
</p>

<h3 align="center">Gourmet</h3>

<div align="center">

<!-- [![Status](https://img.shields.io/badge/status-active-success.svg)]() -->
<!-- [![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/sergi-s/RMZ/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/sergi-s/RMZ/pulls) -->

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

<p align="center"> An E-commerce web application, made with laravel, for ordering Home made Food
    <br> 
</p>

## 📝 Table of Contents

-   [About](#about)
-   [Getting Started](#getting_started)
-   [Usage](#usage)
-   [Authors](#authors)

## 🧐 About <a name = "about"></a>

<!-- Write about 1-2 paragraphs describing the purpose of your project. -->

RMZ Training porject

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

### Installing

Clone the repository

    git clone git@github.com:sergi-s/RMZ.git

Switch to the repo folder

    cd RMZ

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## 🔧 Adding data <a name = "tests"></a>

To use the application with all types of user use this steps to add predefined sets of data

### First: add independent Models

In the CMD, we are going to make use of Seeders

    php artisan db:seed --class=CategorySeeder
    php artisan db:seed --class=UserSeeder

### Second: add dependent Models

using the id, of users and categories created by the 2 previous commands
we can add

    php artisan db:seed --class=ChefProfileSeeder
    php artisan db:seed --class=MealSeeder

## ✍️ Authors <a name = "authors"></a>

-   [@Karim elhosseiny](https://github.com/karimelhosseiny) - Idea
-   [@Sergi Samir](https://github.com/sergi-s) - Initial work
-   [@Mahmoud Reda](https://github.com/Mahmoud-Reda29) -

See also the list of [contributors](https://github.com/sergi-s/RMZ/contributors) who participated in this project.

<!--
## 🎉 Acknowledgements <a name = "acknowledgement"></a>

-   Hat tip to anyone whose code was used
-   Inspiration
-   References -->
