<?php

use GreyStinger\Route;

include $_SERVER['DOCUMENT_ROOT'].'/src/core/Route.php';

define ('BASEPATH', '/');

$page = NULL;
$site = 'https://flexbotlite.herokuapp.com/';

// Register Home Page
Route::add('/', function() {
    $title = 'FlexBot';
    $GLOBALS['page'] = 'home';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

// Register About Page
Route::add('/about', function() {
    $title = 'About Flex';
    $GLOBALS['page'] = 'about';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

// Register Contact Page
Route::add('/contact', function() {
    $title = 'Contact Us';
    $GLOBALS['page'] = 'contact';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

// Register Login Page
Route::add('/login', function() {
    $title = 'Login';
    $GLOBALS['page'] = 'login';
    include $_SERVER['DOCUMENT_ROOT'].'src/php/base.php';
});

// Register Register Page
Route::add('/register', function() {
    $title = 'Register';
    $GLOBALS['page'] = 'register';
    include $_SERVER['DOCUMENT_ROOT'].'src/php/base.php';
});

// Register 404 Not Found Page
Route::pathNotFound(function($path) {
    header('HTTP/1.0 404 Not Found');
    echo 'Error 404 :-<br>';
    echo 'The requested path "'.$path.'" was not found!';
});

Route::run(BASEPATH)

?>