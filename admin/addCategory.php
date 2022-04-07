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

                    <h2>Category Create</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-2">
                                <a href="categoryIndex.php" class="btn btn-secondary">Back to list</a>
                            </div>

                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $category_name    = $helper->validate($_POST['category_name']);
                                if (empty($category_name)) {
                                    $error['category'] = 'Category name is required';
                                } else {
                                    $data['category'] = $category_name;
                                }
                                if (empty($error['category'])) {
                                    $insertCategory =   $category->insertCategory($data);
                                    if (isset($insertCategory)) {
                                        echo  $insertCategory;
                                    }
                                }
                            }

                            ?>
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                                <div class="form-group">
                                    <label for="category_name">Category name</label>
                                    <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter category name">
                                    <div class="text-danger">
                                        <?php echo  $error['category'] ?? ""; ?>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

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