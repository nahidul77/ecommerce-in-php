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

                <h2>Category List</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="addCategory.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Category</a>
                        </div>
                        <?php
                       if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                            $id = $_POST['categoryId'];
                            $categoryDelete = $category->delete($id);
                            if ($categoryDelete){
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                      <strong>Success!</strong> Category delete successfully.
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>';
                                echo '<meta http-equiv="refresh" content="1;url=categoryIndex.php" />';
                            }else{
                                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                      <strong>Whoops!</strong> Category delete failed.
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $categories = $category->index();
                                if ($categories !=null){
                                    $i=1;
                                    foreach ($categories as $category){?>
                                        <tr>
                                            <th scope="row"><?php echo $i++;?></th>
                                            <td><?php echo $category->name; ?></td>
                                            <td><?php echo $category->slug; ?></td>
                                            <td>0</td>
                                            <td>
                                                <?php
                                                if ( $category->status == true){
                                                    echo ' <span class="badge badge-success">Active</span>';
                                                }else{
                                                    echo ' <span class="badge badge-danger">Inactive</span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="editCategory.php?id=<?php echo $category->id; ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>

                                                <button onclick="deleteCategory(<?php echo $category->id; ?>)" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                <form id="trash-form-<?php echo $category->id; ?>" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" style="display: none;">
                                                    <input type="hidden" name="categoryId" value="<?php echo $category->id; ?>">
                                                </form>
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

<script>
    function deleteCategory(id) {

        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                event.preventDefault();
                if (result.value) {
                    document.getElementById('trash-form-' + id).submit();
                }
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<?php include "layouts/script_file_activate.php"; ?>
</body>
</html>