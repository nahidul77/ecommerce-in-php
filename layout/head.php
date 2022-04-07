<?php
$filepath = realpath(dirname(__FILE__));
include $filepath."/../admin/config/config.php";
include $filepath."/../admin/libraries/Database.php";
$db = new Database();

/*class autoloader*/
spl_autoload_register(function ($class) {
    global $filepath;
    if (file_exists($filepath.'/../controllers/' . $class . '.php')){
        include_once $filepath.'/../controllers/' . $class . '.php';
    }
});


$home    = new HomeController();
$product = new ProductController();

?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>Smart Tech - Ecommerce</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://jthemes.net/themes/f-html/smarttech/html/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://jthemes.net/themes/f-html/smarttech/html/images/favicon.ico" type="image/x-icon">

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- select 2 js css file-->
    <!-- StyleSheets -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Fonts Online -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">


    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>