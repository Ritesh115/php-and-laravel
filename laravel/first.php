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
sudo service apache2 stop
sudo /opt/lampp/lampp startapache

sudo service mysql stop
sudo /opt/lampp/lampp startmysql

<!-- project setup -->
 composer create-project laravel/laravel myapp "11."

 2.start the local dev server 
 php artisan server
 3.

