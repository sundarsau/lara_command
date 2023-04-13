# Laravel custom command to run controller method from command line

This Laravel application is to implement Laravel custom command and runs a controller method from the command line using the custom command. I created this project in Laravel 10. It creates a Laravel command and from the command I am calling a controller method to execute. Just for example, the controller method creates a row in a custom table and when our custom command is executed using php artisan from the terminal, the controller method gets executed and a row is inserted in the table.
A controller, a model, a command and a migration for a new table. No front end.

# How To Use

1) Download the repository from https://github.com/sundarsau/lara_command
2) Extract it into a folder
3) Create a Database in MySQL
4) copy .env.example to .env and update database name, username and password. For example, I used the database lara_command and updated database details as below:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=lara_command
    DB_USERNAME=root
    DB_PASSWORD=

5) Run composer install from project root
6) Run php artisan key:generate
7) Run php artisan migrate. This will create Laravel default tables and also will create a custom table called 'trainings'. 
8) From the terminal run php artisan create:course, it should give a message saying 'course created'. Verify a row is inserted in the 'trainings' table.



# License
This is an MIT license, you can modify the code according to your requirements
