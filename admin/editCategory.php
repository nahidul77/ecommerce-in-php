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

                <h2>Category Edit</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="categoryIndex.php" class="btn btn-secondary">Back to list</a>
                        </div>

                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            $category_name    = $helper->validate($_POST['category_name']);
                            $status           = $helper->validate($_POST['status']);
                            $category_id      = $helper->validate($_POST['categoryId']);
                            if (empty($category_name)){
                                $error['category'] ='Category name is required';
                            }else{
                                $data['category'] = $category_name;
                                $data['status']   = $status;
                            }
                            if (empty($error['category'])){
                                $updateCategory =   $category->updateCategory($data,$category_id);
                                if (isset($updateCategory)){
                                    echo $updateCategory;
                                    echo '<meta http-equiv="refresh" content="1;url=categoryIndex.php" />';
                                }
                            }
                        }
                        if (isset($_GET['id']) && !empty($_GET['id'])){
                            $id = $_GET['id'];
                            $row = $category->edit($id);
                        }
                        ?>
                        <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                            <div class="form-group">
                                <label for="category_name">Category name</label>
                                <input type="text" name="category_name" class="form-control" value="<?php echo $row->name??''; ?>" id="category_name" placeholder="Enter category name">
                                <div class="text-danger">
                                    <?php echo  $error['category']??""; ?>
                                </div>
                                <input type="hidden" name="categoryId" value="<?php echo $row->id??''; ?>">
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" <?php echo $row->status==true?'checked':''; ?> type="radio" name="status" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" <?php echo $row->status==false?'checked':''; ?> type="radio" name="status" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Inactive</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
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