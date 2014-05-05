<?php

/**
 * @Author kewining (this version)
 * @link 
 * @license http://opensource.org/licenses/MIT MIT License
 * Based on The PHP-MVC project
 */

// load application config
require 'application/config/config.php';

// load application class, methods
require 'application/libs/application.php';
require 'application/libs/controller.php';

// start the application
$app = new Application();
