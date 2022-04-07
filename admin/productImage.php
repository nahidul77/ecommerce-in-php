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

                        <div class="row">
                            <div class="col-md-7">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>S/N</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    if (isset($_GET['id']) && !empty($_GET['id'])) {
                                        $id = $helper->validate($_GET['id']);
                                        $productImages = $productImage->getImages($id);
                                        if ($productImages != null){
                                            $i =1;
                                            foreach ($productImages as $productImage){?>
                                                <tr>
                                                    <td><?php echo $i++;?></td>
                                                    <td>
                                                        <img class="w-25" src="uploads/products/<?php echo $productImage->product_image ;?>" alt="">
                                                    </td>
                                                    <td>
                                                        <a  href="productImageDelete.php?id=<?php echo $productImage->id; ?>&productId=<?php echo $productImage->product_id; ?>" class="btn btn-danger" title="Delete Product Image"><i class="fa fa-trash"></i></a>
                                                    </td>

                                                </tr>

                                            <?php      }
                                        }
                                    }

                                    ?>

                                </table>
                            </div>
                            <div class="col-md-5">
                                <?php
                                if (isset($_POST['submit'])){

                                    $productId              = $_POST['productId'];
                                    $productImageName       = $_FILES['product_image']['name'];
                                    $productImageTmpName    = $_FILES['product_image']['tmp_name'];
                                    $productImageSize       = $_FILES['product_image']['size'];
                                    $ext        = strtolower(pathinfo($productImageName, PATHINFO_EXTENSION));
                                    $newImage   = time().'-'.uniqid().'.'.$ext;
                                    $uploadDir  = "uploads/products/";

                                    $extension = array('jpeg','jpg','png');

                                    if (empty($productImageName)){
                                        $error['product_image_error'] ='Product Image  is required';
                                    }elseif(!in_array($ext,$extension)){
                                         $error['product_image_error'] ='Product Image  only jpg jpeg & png allow';
                                    }elseif($productImageSize > 1048576){
                                         $error['product_image_error'] ='Product Image less then 1mb';
                                    } else{
                                        $data['productImageName'] = $productImageName;
                                    }

                                    if (empty($error['product_image_error'])){

                                        move_uploaded_file($productImageTmpName,$uploadDir.$newImage);

                                         $sql = "INSERT INTO product_images(product_id,product_image)VALUES (:productId,:productImage)";
                                          $db->query($sql);
                                          $db->bind(':productId',$productId);
                                          $db->bind(':productImage',$newImage);

                                        if (  $db->execute()){?>
                                             Product Image Upload Successfully
                                            <script>
                                                function reloadIt() {
                                                    if (window.location.href.substr(-2) !== "?r") {
                                                        window.location = window.location.href + "";
                                                    }
                                                }
                                                setTimeout('reloadIt()', 1000)();

                                                </script>

                                       <?php   }

                                    }
                                }

                                ?>

                                <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="product_image">Product Image <span class="text-danger">*</span></label>
                                        <input type="file" name="product_image" id="product_image" class="form-control dropify" data-allowed-file-extensions="jpg jpeg png"  data-max-file-size="2M" />
                                        <div class="text-danger">
                                            <?php echo  $error['product_image_error'] ?? ""; ?>
                                        </div>
                                    </div>
                                    <input type="hidden" name="productId" value="<?php echo  $id; ?>">
                                    <div>
                                        <button type="submit" name="submit" class="btn btn-primary w-md">Upload</button>
                                    </div>
                                </form>
                            </div>
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

</body>
</html>