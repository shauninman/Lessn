<?php

// LOGIN
define('USERNAME',  $_ENV['USERNAME']);
define('PASSWORD',  $_ENV['PASSWORD']);

// DATABASE
define('DB_NAME',     $_ENV['DB_NAME']);
define('DB_USERNAME', $_ENV['DB_USERNAME']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);

// FINE AS IS (UNLESS YOU KNOW OTHERWISE)
define('DB_SERVER',   'localhost');
define('DB_PREFIX',   'lessn_');
define('COOKIE_SALT', $_ENV['COOKIE_SALT'] || 'L35sS4L7M0R3PEPp3R');
define('API_SALT',    $_ENV['API_SALT'] || 'L35sm4K35M0U7hSAP1');
