// laravel is a php framework for web devlopment , just like express is a framework for node js .
// MVC architecture is used in laravel framwork .

// controller : used to handle the business logics. 
// it acts as a bridge between models and  views .

// models : used to handle Db releated operations. 
// controller takes request from user and process if data is needed , interect with DB .

// views : used to handle the front end part .
// controller takes data from models and sends it to views to display to user .
// in views html codes are written.

// wt is framework
frameworks are pre written codes and libraries which help us to build web applications easily and quickly .

<!-- installation of laravel -->
 1. xamp (php version 8+ and MYSql) or lampp is software which provides apache server and mysql server . 
 Through apache gives us local host server to run our web applications on our local machine .
 2. Install composer = its command line controller like npm. through composer we can install php packages and libraries .
 3. Install laravel
 4. Install Vs code editor 

<!-- Running commands -->
 1. check for XAMPP
cd /opt/lampp
ls
<!--  -->
sudo service apache2 stop            //Apache => it is a web srevre 
sudo /opt/lampp/lampp startapache            // a local server is created on system .

sudo service mysql stop
sudo /opt/lampp/lampp startmysql


Composer is a dependency manager for PHP. It allows you to declare the libraries your project needs and installs them for you.

<!-- project setup -->
 composer create-project laravel/laravel project_name "11."

 2.start the local dev server 
 php artisan server

3. open the project in vs code .

4. Database configuration 
 open .env file in root directory of project 
 <!-- Make sure you create the database manually in phpMyAdmin or MySQL Workbench. -->
 
 5.use migration to create tables in DB
 => php artisan migrate 
 when you run this command laravel will check the migrations folder in database folder and create the tables in DB as per the code written in migration files .

6. you can create your own migration file using command 
 => php artisan make:migration create_table_name_table

7. Create model with migration
=> php artisan make:model nameofmodel 
 this command will create a model file in app/models folder and migration file in database/migrations folder 

# with php artisan migrate:status   #we can check the status of migration

# Run all pending migrations
php artisan migrate

8. MVC flow 
controller 
  => php artisan make:controller ControllerName 
  this command will create a controller file in app/http/controllers folder

Routes setup 
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);


View setup 
  => create a folder in resources/views folder with name same as controller name in lowercase 
  => create a blade file with name same as function name in controller file with .blade.php extension

<!-- end -->










<!-- to check if db is connected or not -->
 php artisan migrate:status
