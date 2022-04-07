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

                <h2>Brand Edit</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="brandIndex.php" class="btn btn-secondary">Back to list</a>
                        </div>

                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST'){

                            $brand_name            = $helper->validate($_POST['brand_name']);
                            $data['status']        = $_POST['status'];
                            $data['brandId']       = $_POST['brandId'];
                            if (empty($brand_name)){
                                $error['brand_err'] ='Brand name is required';
                            }else{
                                $data['brand_name'] = $brand_name;
                            }
                            if (empty($error['brand_err'])){
                                $updateBrand =   $brandObj->update($data, $data['brandId']);
                                if ($updateBrand){
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Success!</strong> Brand update successfully.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                    echo '<meta http-equiv="refresh" content="1;url=brandIndex.php" />';
                                }else{
                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Whoops!</strong> Brand update failed.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                }
                            }
                        }
                        if (isset($_GET['id']) && !empty($_GET['id'])){
                            $id = $_GET['id'];
                            $row = $brandObj->edit($id);
                        }
                        ?>
                        <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                            <div class="form-group">
                                <label for="brand_name">Brand name</label>
                                <input type="text" name="brand_name" class="form-control" id="brand_name" value="<?php echo $row->name;?>" placeholder="Enter brand name">
                                <div class="text-danger">
                                    <?php echo  $error['brand_err']??""; ?>
                                </div>
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
                            <input type="hidden" name="brandId" value="<?php echo $row->id; ?>">
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
<!-- admin template js activation-->
<?php include "layouts/script_file_activate.php"; ?>
</body>
</html>