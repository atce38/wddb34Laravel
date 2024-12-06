<p align="center"><a href="https://edu.abidingtech.com" target="_blank"><img src="https://edu.abidingtech.com/assets/img/atcelogo.png" width="400" alt="Laravel Logo"></a></p>

## Lectures

### Lecture 1 - PHP - Laravel: Getting Started with Laravel  
In this lecture, you will:
- Set up a Laravel project and understand the framework structure.
- Create Routes and connect them to Controllers.
- Define functions in Controllers and call them via Routes.

### Lecture 2 - PHP - Laravel: Create View and Pass Data to View  
In this session, you will:
- Learn how to create and render views in Laravel.
- Pass data from controllers to views and display it.
- Use Blade templating to echo data, loop through data, and apply if conditions for dynamic content rendering.

### Lecture 3 - PHP - Laravel: Implement Bootstrap and More  
This lecture will cover:
- Integrating Bootstrap into your Laravel project for responsive layouts.
- Creating a master view layout and yielding content into the master view.
- Understanding and using route parameters, named routes, and route groups with prefixes.

### Lecture 4 - PHP - Laravel: Create Form and Submit Form Data to Route and Show It on Browser  
In this session, you will:
- Learn how to create forms using Blade templates in Laravel.
- Understand how to handle form submissions and validate data.
- Learn how to submit form data to a route and display the submitted data in the browser.
- Use Laravel's request handling to capture input and pass it back to the view.
- Understand basic form security in Laravel, such as CSRF protection.

### Lecture 5 - PHP - Laravel: Create Model with Migration, Create Migration to Create/Update Table Attributes, Create Data in Database and Read Data from Database Using Laravel Model, Create Route File Other than web.php  
In this session, you will:
- Create a model with migration in Laravel to set up the database table structure.
- Use Artisan commands to create and modify migrations for creating or updating table attributes.
- Insert data into the database using Laravel models and understand how to read data.
- Retrieve data from the database using Eloquent models and display it in views.
- Create a route file other than `web.php` for organizing routes in a modular way.

### Lecture 6 - PHP - Laravel: Edit, Update, Delete Object, Upload File and Save It to Database  
In this session, you will:
- Learn how to edit and update records in the database using Eloquent models.
- Implement functionality to delete objects from the database.
- Handle file uploads in Laravel and save the file to the public folder.
- Save the file path in the database to associate with other model data.
- Understand how to manage file validation and errors during uploads.

### Lecture 7 - PHP - Laravel: Implement Laravel Authentication and Customize Registration  
In this session, you will:
- Learn how to implement Laravel's built-in authentication system using **Laravel UI**.
- Install the `laravel/ui` package and use Artisan to generate authentication views and controllers.
- Customize the default authentication views (Login, Registration, Reset Password).
- Add additional fields to the registration process (e.g., username, phone number) and store them in the database.
- Use the `auth` middleware to protect routes and ensure that only authenticated users can access specific pages.
- Learn how to validate user input and store it in the database during registration.
- Understand the concept of **guards** and **providers** in Laravel authentication.

    #### Detailed Steps for Authentication using Laravel UI:

    1. **Install Laravel UI**  
    - Run the following command to install the Laravel UI package:
        composer require laravel/ui
    2. **Generate Authentication Scaffolding**
    - Use Artisan to generate the authentication views and controllers:
        Run:
        php artisan ui bootstrap --auth
    - Install NPM Dependencies and Compile Assets (if using frontend)
        Run:
        npm install
        npm run build
