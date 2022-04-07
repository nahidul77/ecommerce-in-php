<!DOCTYPE html>
<html lang="en">
<?php include "layouts/head.php"; ?>

<body data-sidebar="dark">
    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php include "layouts/header.php"; ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include "layouts/sidebar.php"; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                    <h2>Starter page</h2>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- footer -->
            <?php include "layouts/footer.php"; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    <!-- script file -->
    <?php include "layouts/_script.php"; ?>

    <?php include "layouts/script_file_activate.php"; ?>


</body>
</html>