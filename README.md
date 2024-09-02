# Student Management System
The Student Management System (SMS) is a web application designed to manage student records.\
This project provides functionalities to add, delete, and view student information efficiently. It utilizes a MySQL database to store and manage data, and it is built using HTML, CSS, PHP, and MySQL.
\
Features:\
1)Add New Student: Allows users to add new student records to the database.\
2)Delete Student: Enables users to remove student records by ID.\
3)View Records: Provides a feature to display all student records in a table format.
\
Technologies Used:
\
Frontend:\
1)HTML\
2)CSS
\
Backend:\
1)PHP\
2)MySQL
\
Development Tools:
\
1)XAMPP or similar local server environment.\
2)phpMyAdmin for database management.
\
Steps to execute:\
1)Install XAMPP/WAMP on your PC.\
2)Start the Apache and MySQL services.\
3)Place your PHP files in the htdocs folder (XAMPP/WAMP).\
4)Open phpMyAdmin (typically accessible via http://localhost/phpmyadmin/).
\
5)Create a new database named student_management_system.\
6)Open db_connect.php and update the database connection details (host, username, password, database name) to match your local environment.\
7)Access your HTML forms by opening your web browser and navigate to http://localhost/student-management-system/.You should see the homepage of the Student Management System.\
8)Submit the form to add a student, and view the records using http://localhost/student_management_system/display_students.php.You can see the data which should present in database.\

# Common Errors and Solutions for XAMPP and MySQL

1. Database Connection Error: Incorrect Username or Password.\
Error Message: "You must match the username and password for connecting to the database of MySQL."

Solution:\
1)Open your db_connect.php file.\
2)Ensure you have the correct MySQL username and password. By default, XAMPP uses:\
3)Your db_connect.php should look something like this:\
4)php code:

<?php
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = "Your password";     // MySQL password
$dbname = "student_management_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);\

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
\

2. Updating MySQL Password in phpMyAdmin Configuration.\
Error Message: "After installing XAMPP, open the folder xampp\phpMyAdmin\config.inc.php. After that, enter your MySQL password in place of $cfg['Servers'][$i]['password'] = 'yourpassword'; and $cfg['Servers'][$i]['controlpass'] = 'yourpassword';."
\
Solution:
\
1)Go to xampp\phpMyAdmin directory.\
2)Open config.inc.php in a text editor (like Notepad).\
3)Update the lines for the password with your MySQL password:\
4)php code:
\
$cfg['Servers'][$i]['password'] = 'yourpassword'; // Replace 'yourpassword' with your actual MySQL password\
$cfg['Servers'][$i]['controlpass'] = 'yourpassword'; // Replace 'yourpassword' with your actual MySQL password\


3. MySQL Not Starting: Port Conflict or Configuration Issue\
Error Message: "Another main error after clicking on the start button of MySQL in the control panel of XAMPP is unable to start. To fix this, click on the 'Config' button and select my.ini. After this opens in Notepad, enter your MySQL password and change the port number if necessary (e.g., 3307)."\

Solution:\
1)Open the XAMPP Control Panel.\
2)Click on the Config button next to MySQL and select my.ini.\

In the my.ini file, find the line that specifies the port. It may look like this:
ini code:
1)[mysqld]
port=3306
2)Change the port number if 3306 is being used by another application. For example:
port=3307
3)Save the my.ini file and close Notepad.
4)Restart MySQL from the XAMPP Control Panel.
5)If MySQL still doesn’t start, make sure the new port is not being used by another application and check that the port in phpMyAdmin settings matches the one defined in my.ini.
