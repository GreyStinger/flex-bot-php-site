<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/src/css/stylesheet.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <script>0</script>
    <div class="header">
        <li class="navi-bar">
            <ul class="nav-link <?php if ($GLOBALS['page'] == 'home') {echo "active-page"} ?>"><a href="<?php if ($GLOBALS['page'] == 'home') {echo '#';} else {echo $GLOBALS['site'];} ?>">Home</a></ul>
            <ul class="nav-link <?php if ($GLOBALS['page'] == 'about') {echo "active-page"} ?>"><a href="<?php if ($GLOBALS['page'] == 'about') {echo '#';} else {echo $GLOBALS['site'].'about';} ?>">About Flex</a></ul>
            <ul class="nav-link <?php if ($GLOBALS['page'] == 'contact') {echo "active-page"} ?>"><a href="<?php if ($GLOBALS['page'] == 'contact') {echo '#';} else {echo $GLOBALS['site'].'contact';} ?>">Contact Us</a></ul>
        </li>
        <li class="login-reg">
            <ul>login</ul>
            <ul>register</ul>
        </li>
    </div>
    <?php
        if ($GLOBALS['page'] !== NULL) {
            include $_SERVER['DOCUMENT_ROOT'].'/src/php/'.$GLOBALS['page'].'.php';
        }
    ?>
    <div class='footer'>
        <div class="footer-information-area">
            <p class='footer-60 center float-center'>Built with ♥ by Grey for <a class="footer-link" href="localhost:8080">FlexBot</a></p>
            <p class='footer-40 center float-right'><a class="footer-link" href="#">Back To Top</a></p>
        </div>
        <hr>
        <div class="copyright">
            <p>Copyright © 2021 Flex Bot Inc. All rights reserved.</p>
        </div>
    </div>
</body>
</html>