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

                <h2>Sub Category Create</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="subCategoryIndex.php" class="btn btn-secondary">Back to list</a>
                        </div>

                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                            $category_name        = $helper->validate($_POST['category_name']);
                            $sub_category_name    = $helper->validate($_POST['sub_category_name']);

                            if (empty($category_name)){
                                $error['category_err'] ='Category name is required';
                            }else{
                                $data['category'] = $category_name;
                            }
                            if (empty($sub_category_name)){
                                $error['sub_category_err'] ='Sub Category name is required';
                            }else{
                                $data['subCategory'] = $sub_category_name;
                            }

                            if (empty($error['category_err']) && empty($error['sub_category_err'])){
                                $insertSubCategory =   $subCategoryObj->store($data);
                                if ($insertSubCategory){
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Success!</strong> Sub Category insert successfully.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                    echo '<meta http-equiv="refresh" content="1;url=subCategoryIndex.php" />';
                                }else{
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Whoops!</strong> Sub Category insert failed.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                }
                            }
                        }

                        ?>
                        <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">

                            <div class="form-group">
                                <label for="category_name">Select Category</label>
                                <select name="category_name" class="form-control" id="category_name">
                                    <option value="" selected>Select category</option>
                                    <?php
                                    $categories = $category->index();
                                    if ($categories !=null){
                                        foreach ($categories as $category){?>
                                            <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                        <?php       }
                                    }
                                    ?>

                                </select>
                                <div class="text-danger">
                                    <?php echo  $error['category_err']??""; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sub_category_name">Sub Category name</label>
                                <input type="text" name="sub_category_name" class="form-control" id="sub_category_name" placeholder="Enter sub category name">
                                <div class="text-danger">
                                    <?php echo  $error['sub_category_err']??""; ?>
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