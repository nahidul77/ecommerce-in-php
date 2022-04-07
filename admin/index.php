<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . "/config/config.php";
include_once $filepath."/libraries/Session.php";
include_once $filepath . "/libraries/Database.php";
include_once $filepath . "/classes/Admin.php";
include_once $filepath . "/helpers/Helper.php";
Session::init();
$helper = new Helper();
$admin = new Admin();
if (Session::isAdmin() == true){
    header("Location:dashboard.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Login | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to eshop.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="">
                                <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                                $email    = $helper->validate($_POST['email']);
                                $password = $helper->validate($_POST['password']);

                                if (empty($email)){
                                    $error['email'] = "Email is required";
                                }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                     $error['email'] = "Email is not valid";
                                }else{
                                    $data['email'] = $email;
                                }
                                if (empty($password)){
                                    $error['password'] ='Password is required';
                                }else{
                                    $data['password'] = $password;
                                }
                                if (empty($error['email']) && empty($error['password'])){
                                        $admin->login($data);
                                }

                            }

                            ?>

                            <form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" autocomplete="off" method="post">

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo  $data['email']??""; ?>" placeholder="Enter email">
                                    <div class="text-danger">
                                        <?php echo  $error['email']??""; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control"  id="password" placeholder="Enter password">
                                      <div class="text-danger">
                                        <?php echo  $error['password']??""; ?>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                                <div class="mt-4 text-center">
                                    <a href="" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:08:04 GMT -->

</html>