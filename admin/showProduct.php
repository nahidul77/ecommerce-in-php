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

                <h2>Product Details</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <div class="text-right mb-2">
                                <a href="productIndex.php" class="btn btn-danger">Back to list</a>
                            </div>
                        </div>
                        <?php
                          if (isset($_GET['id']) && !empty($_GET['id'])) {
                              $id = $helper->validate($_GET['id']);
                              $product = $product->show($id);

                        }
                        ?>
                        <div class="media">
                            <img class="mr-3 w-25" src="<?php echo $product->feature_image;?>" alt="Generic placeholder image">
                            <div class="media-body">
                                <h3 class="mt-0"><?php echo  $product->product_name;?></h3>
                                <h3 class="mt-0">Price: <span class="text-danger font-weight-bolder"> <?php echo  $product->price;?></span></h3>
                                <p>Category:<?php echo  $product->categoryName;?></p>
                                <p>Sub Category:<?php echo  $product->subCategoryName;?></p>
                                <p>Brand:<?php echo  $product->brandName;?></p>
                                <p>Stock :<?php echo  $product->quantity;?></p>
                            </div>
                        </div>
                        <h4>Product Details</h4>
                        <hr>
                        <p>
                            <?php echo html_entity_decode($product->description); ?>
                        </p>

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

</body>
</html>