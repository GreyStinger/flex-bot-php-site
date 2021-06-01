<?php

use GreyStinger\Route;

include $_SERVER['DOCUMENT_ROOT'].'/src/core/Route.php';

define ('BASEPATH', '/');

$page = NULL;
$site = 'https://flexbotlite.herokuapp.com/';

Route::add('/', function() {
    $title = 'FlexBot';
    $GLOBALS['page'] = 'home';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

Route::add('/about', function() {
    $title = 'About Flex';
    $GLOBALS['page'] = 'about';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

Route::add('/contact', function() {
    $title = 'Contact Us';
    $GLOBALS['page'] = 'contact';
    include $_SERVER['DOCUMENT_ROOT'].'/src/php/base.php';
});

Route::pathNotFound(function($path) {
    header('HTTP/1.0 404 Not Found');
    echo 'Error 404 :-<br>';
    echo 'The requested path "'.$path.'" was not found!';
});

Route::run(BASEPATH)

?>