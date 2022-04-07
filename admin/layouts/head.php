<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath."/../config/config.php";
include_once $filepath."/../libraries/Session.php";
include_once $filepath."/../libraries/Database.php";
include_once $filepath . "/../helpers/Helper.php";
include_once $filepath . "/../helpers/SlugHelper.php";
include_once $filepath . "/../helpers/Notify.php";

/*class autoloader*/
spl_autoload_register(function ($class) {
    global $filepath;
    if (file_exists($filepath.'/../classes/' . $class . '.php')){
        include_once $filepath.'/../classes/' . $class . '.php';
    }
});

$db              = new Database();
$helper          = new Helper();
$category        = new Category();
$subCategoryObj  = new SubCategory();
$brandObj        = new Brand();
$product         = new Product();
$productImage     = new ProductImage();
$slider           = new Slider();
Session::init();
if (Session::isAdmin() == false){
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:06:42 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Dashboard | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
<!--    select 2 css-->
    <link rel="stylesheet" href="assets/libs/select2/css/select2.min.css">
    <!-- Summernote css -->
    <link href="assets/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert-->
    <link href="assets/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/dropify/css/dropify.min.css">
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>
