appbase
=======

Base Application OOP and MVC in PHP (PDO), MySQL and jQuery - Based on PHP-MVC project

## Requirements
PHP 5.3+

## Installation
### Directories
Unzip to your project directory eg /opt/lampp/htdocs/ or /var/www/html/ ...

### Database

Review the content of the project (AppBase) in the ... /application/_install and run the 3 files (create db, create table and insert records in table)

### Set app
modify /.htaccess RewriteBase /appbase/
and in /application/config/config.php

```
error_reporting (E_ALL);
ini_set ("display_errors", 1);
```

```
define('URL', 'http://127.0.0.1/appbase/');
define('DIREC_BASE', '/opt/lampp/htdocs/AppBase');
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'AppBase');
define('DB_USER', 'root');
define('DB_PASS','');
define('DB_ENCODING', 'utf8');
define('APP_NAME', 'AppBase'); 

