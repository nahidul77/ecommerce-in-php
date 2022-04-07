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

                <h2>Brand List</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="addBrand.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Brand</a>
                        </div>
                        <?php
                        if (isset($_GET['delete']) && !empty($_GET['delete'])){
                            $id = $_GET['delete'];
                            $brandDelete = $brandObj->delete($id);
                            if ($brandDelete){
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Success!</strong> Brand delete successfully.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                echo '<meta http-equiv="refresh" content="1;url=categoryIndex.php" />';
                            }else{
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Whoops!</strong> Brand delete failed.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                            }
                        }
                        ?>

                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Brand Name</th>
                                    <th>Slug</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $brands = $brandObj->index();
                                if ($brands !=null){
                                    $i=1;
                                    foreach ($brands as $brand){?>
                                        <tr>
                                            <th scope="row"><?php echo $i++;?></th>
                                            <td><?php echo $brand->name; ?></td>
                                            <td><?php echo $brand->slug; ?></td>
                                            <td>0</td>
                                            <td>
                                                <?php
                                                if ( $brand->status == true){
                                                    echo ' <span class="badge badge-success">Active</span>';
                                                }else{
                                                    echo ' <span class="badge badge-danger">Inactive</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="editBrand.php?id=<?php echo $brand->id; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="?delete=<?php echo $brand->id; ?>" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                                    <?php       }
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>

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
<!--datatable js files-->
<?php include "layouts/datatableJsFiles.php"; ?>
<?php include "layouts/script_file_activate.php"; ?>
</body>
</html>