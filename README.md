# junior-software-assignment

This is an assignment for an entry PHP developer job @ **Epignosis**. It was quite the journey. I did not know that PHP had evolved so much, so there was basically a whole lot of learning on the fly. There's a few things I did not get to add like tests and a few edge-case handlers due to limited time so those will be later on.

## Installation 🛠
1. Download as .zip or clone this repo using  
`git clone https://github.com/Vagg-davios/junior-development-assignment.git`  
2. Install [XAMPP](https://www.apachefriends.org/)
    1. Fire up the control panel.
    2. Start up the Apache and MySQL modules. 

![image](https://user-images.githubusercontent.com/101106849/167217849-2433b1e9-6055-4c08-b857-2e476c5901df.png)

3. Locate your ```./htdocs``` folder ( ```C:\xampp\htdocs``` ) & extract the project there
4. Head over to [PHPMyAdmin](http://localhost/phpmyadmin/)
5. Import the `data/studentlibrary.sql` file to phpMyAdmin

- ![image](https://github.com/Vagg-davios/junior-development-assignment/assets/101106849/c47d50c4-3251-4607-94c2-c72d593ac1c6)

- ![image](https://github.com/Vagg-davios/junior-development-assignment/assets/101106849/374a5cc4-7bfb-425b-a7bc-dc8be118c32f)

- ![image](https://github.com/Vagg-davios/junior-development-assignment/assets/101106849/06b71d10-f5be-4538-b5dd-08b52ba70955)

6. Install composer  
https://getcomposer.org/download/
7. Open up a terminal and run `composer install`
8. Go to http://localhost/junior-development-assignment/public/
9. Log in using 
    - email: user1@gmail.com
    - password: 123456789
10. Or create your own account using the 'Register here' button

Enjoy! :)

## Project structure
As most MVC frameworks, this project flows through `public/index.php` and loads the correspondant page base on the URL
```
php-mvc/
    .idea/              # PHPStorm set-up
    data/               # SQL database file
    public/             # Accessible files. What final users see
        .htaccess       # Make src/ unaccessible for users
        index.php       # Starting point for the entire app
        robots.txt
    src/                # Application source code
        config/         # Database credentials, utility functions, routing table
        Controller/     # Controller folders (book & user controllers)
        Core/           # Middleware classes, Database class, Router class, Validator class
        Model/          # Model classes
        View/           # Views
        .htaccess       # Restrict access to /src
    vendor/             # Composer files, autoloader !ignored
    .gitignore          # Files/folders to be ignored by version control
    .htaccess           # Redirect everything to public/ folder
    composer.json       # Composer dependency file
```

## This project utilizes: ##
 - OOP principles
 - MVC file structure
 - Singleton pattern for database
 - Autoloading & Composer
 - RESTful structure
 - Middleware
 - XAMPP & PHPMyAdmin
 - TailwindCSS templates
 - Flowbyte components
 - HeroIcons SVGs

## Acknowledgements
Huge props to Laracasts. This course taught me a LOT.
- [PHP-For-Beginners-Series](https://github.com/laracasts/PHP-For-Beginners-Series) by Laracasts
