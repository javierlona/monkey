##Live Demo
Click for [Live Demo](http://onegreatapp.com/monkedia/public)

Username: monkey

Password: bananas

##Description
Web application with authorization that allows the end user to access/search a list of clients by ID and Company Name.

##Installation
Use the **create-db.sql** to create the database and tables. The file contains dummy data.
Inside the private directory populate the **db_credentials.php** with your database credentials.
```PHP
<?php
  define("HOST", "localhost");
  define("USERNAME", "");
  define("PASSWORD", "");
  define("DB_NAME", "MONKEDIA");
?>
```
##Technologies
AJAX Search Autosuggest, PHP, MySQL, Bootstrap 4, Vanilla JavaScript
