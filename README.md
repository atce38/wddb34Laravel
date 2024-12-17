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
        ***composer require laravel/ui***
    2. **Generate Authentication Scaffolding**
    - Use Artisan to generate the authentication views and controllers:
        Run:
        ***php artisan ui bootstrap --auth***
    - Install NPM Dependencies and Compile Assets (if using frontend)
        Run:
        ***npm install***
        ***npm run build***

### Lecture 8 - PHP - Laravel: Implement Role-Based Authentication, Create Relations Between Departments and Users, and Data Retrieval Using Joins and Appends  
In this session, you will:
- Implement role-based authentication in Laravel using an **enum** field in the `users` table to differentiate between user roles (e.g., Admin, User).
- Create relationships between models using **Eloquent relationships**, particularly between `Department` and `User`.
- Retrieve data from the database using **joins** and **appends** in Eloquent queries.
- Use **Eloquent’s dynamic properties** to append related data to your queries without adding extra queries.

### Lecture 9 - PHP - Laravel: limit(), pagination, Filter Data  
In this session, you will:
- Learn how to use the `limit()` method in Laravel to limit the number of records retrieved from the database.
- Implement pagination in Laravel to display a large set of data across multiple pages, making it more manageable.
- Create filters to allow users to narrow down the displayed data based on certain criteria (e.g., by category, date, or status).
- Understand how to combine **limit()**, **where()** conditions, and **pagination** to build efficient and user-friendly data displays.
- Learn how to pass the filtered and paginated data to views, and how to customize pagination links using Blade.

### Lecture 10 - PHP - Laravel: Improve Search Filter, Populate View using Ajax Call, Implement Admin Panel in Laravel Project  
In this session, you will:
- **Improve Search Filter**: Enhance the search functionality by using query parameters or form submissions to filter data dynamically based on user input (e.g., search by name, date, or status).
- **Populate View Using Ajax**: Learn how to make asynchronous requests using **AJAX** to fetch filtered data without refreshing the page. This will improve the user experience by loading only the relevant data.
    - Implement an AJAX call using JavaScript/jQuery.
    - Update the view dynamically with the filtered data from the server.
- **Implement Admin Panel**: Set up an **Admin Panel** with role-based access control. The Admin Panel should allow the administrator to:
    - View and manage users.
    - View and manage content (posts, products, etc.).
    - Use AJAX-based dynamic features (e.g., live search, pagination).
    - Implement authorization checks to restrict access to the Admin Panel only for users with an admin role.

#### Steps for Implementing AJAX Search Filter:
1. **Add AJAX Search Functionality**
    - Use jQuery to capture search input and send an AJAX request to the backend.
    - Use Laravel's `Route` to create an endpoint that handles the AJAX request and returns data.
    - Return the filtered data as JSON and update the frontend dynamically.

2. **Implement Dynamic Content Population**
    - Use jQuery to handle the response and update the DOM with the filtered results without page reload.
    - Make sure the data is presented in an HTML table or grid for better UX.

3. **Set Up the Admin Panel**  
    - Create an Admin Dashboard view where the administrator can manage content and users.
    - Use Laravel’s **middleware** to restrict access to the admin dashboard, ensuring that only authorized users with the admin role can access it.
    - Implement features like CRUD operations for managing users and posts, and dynamic table updates using AJAX.

### Final Project:
# Title:Personal Blog or Portfolio

A simple blog or personal portfolio website where users can post articles, view posts, and display your projects. This project leverages Laravel for backend functionality and MySQL for database management, while utilizing Bootstrap for frontend design and responsiveness.

## Technologies Used:
- **Frontend**: HTML, Bootstrap
- **Backend**: Laravel
- **Database**: MySQL
- **Authentication**: Laravel UI for user registration and login
- **AJAX**: For dynamic content population and search functionality (optional)

## Key Features:
- **Blog Post Management**: Admin users can create, update, and delete blog posts.
- **User Authentication**: Admin panel requires authentication for adding and managing posts.
- **Categories and Tags**: Organize posts into categories and tags for easy navigation.
- **User Comments**: Allow visitors to Rate and leave comments on posts.
- **Pagination**: Display posts with pagination for better user experience.
