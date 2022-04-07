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

                <h2>Products List</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="addProduct.php" class="btn btn-success"><i class="fa fa-plus"></i> Add Product</a>
                        </div>
                        <?php
                        if (isset($_GET['delete']) && !empty($_GET['delete'])){
                            $id = $_GET['delete'];
                            $productDelete = $product->delete($id);
                            if (isset($productDelete)){
                                echo $productDelete;
                                echo '<meta http-equiv="refresh" content="1;url=subCategoryIndex.php" />';
                            }
                        }
                        ?>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>S/N</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>isFeatured</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $products = $product->index();
                                if ($products !=null){
                                    $i=1;
                                    foreach ($products as $product){?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $product->product_name; ?></td>
                                            <td><?php echo $product->categoryName; ?></td>
                                            <td><?php echo $product->subCategoryName; ?></td>
                                            <td><?php echo $product->brandName; ?></td>
                                            <td><?php echo $product->price; ?></td>
                                            <td><?php echo $product->quantity; ?></td>
                                            <td>
                                                <?php
                                                if ($product->is_featured ==true){
                                                    echo '<span class="badge badge-success">Yes</span>';
                                                }else{
                                                    echo '<span class="badge badge-warning">No</span>';
                                                }
                                                ?>

                                            </td>
                                            <td>
                                                <?php
                                                if ($product->status == true){
                                                    echo '<span class="badge badge-success">Published</span>';
                                                }else{
                                                    echo '<span class="badge badge-warning">Draft</span>';
                                                }
                                                ?>

                                            </td>

                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-danger dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-cog"></i>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="showProduct.php?id=<?php echo $product->id;?>">Show Product</a>
                                                        <a class="dropdown-item" href="editProduct.php?id=<?php echo $product->id;?>">Edit Product</a>
                                                        <a class="dropdown-item" href="productImage.php?id=<?php echo $product->id;?>">Product Images</a>
                                                        <a class="dropdown-item" onclick="deleteProduct(<?php echo $product->id;?>)">Delete Product</a>
                                                    </div>
                                                </div>
                                                <form id="trash-form-<?php echo $product->id; ?>" action="productDelete.php" method="post" style="display: none;">
                                                    <input type="hidden" name="productId" value="<?php echo $product->id; ?>">
                                                </form>

                                            </td>

                                        </tr>
                                        <?php
                                    }
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

<!-- Sweet Alerts js -->
<script src="assets/sweet-alert/sweetalert2.min.js"></script>
<!--datatable js files-->
<?php include "layouts/datatableJsFiles.php"; ?>
<!--custom js -->
<script>
    function deleteProduct(id) {

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
<!-- admin template js activation-->
<?php include "layouts/script_file_activate.php"; ?>
</body>
</html>