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

                <h2>Slider Create</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="text-right mb-2">
                            <a href="sliderIndex.php" class="btn btn-secondary">Back to list</a>
                        </div>

                        <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $data =array(
                            'product_id'    => $helper->validate($_POST['product']),
                            'sub_title'    => $helper->validate($_POST['sub_title']),
                            'title'        => $helper->validate($_POST['title']),
                            'price'        => $helper->validate($_POST['product_price']),
                            'status'       => $helper->validate($_POST['status'])
                            );

                            if (empty($data['product_id'])) {
                                $error['product'] = 'Please select product first';
                            }

                            if (empty($error['product'])) {

                                $insertSlider =   $slider->store($data,$_FILES);
                                if ($insertSlider){
                                    echo $insertSlider;
                                }

                            }
                        }

                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="product">Select Product</label>
                                        <select name="product" class="form-control" id="product" required>
                                            <option value="" selected>Select product</option>
                                            <?php
                                            $products = $product->getProductForSlider();
                                            if ($products !=null){
                                                foreach ($products as $product){?>
                                                    <option value="<?php echo $product->id; ?>"><?php echo $product->product_name; ?></option>
                                                <?php       }
                                            }
                                            ?>

                                        </select>
                                        <div class="text-danger">
                                            <?php echo  $error['product']??""; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sub_title">Sub title </label>
                                        <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Enter sub title">
                                        <div class="text-danger">
                                            <?php echo  $error['sub_title'] ?? ""; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title/Product Name</label>
                                        <input type="text" name="title" required class="form-control" id="title" placeholder="Enter product name">
                                        <div class="text-danger">
                                            <?php echo  $error['title'] ?? ""; ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="product_price">Product Price </label>
                                        <input type="text" name="product_price" required class="form-control" id="product_price" placeholder="Enter product price for slider">
                                        <div class="text-danger">
                                            <?php echo  $error['product_price'] ?? ""; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Select Slider image <span class="text-danger">(Slider image must bd trans bg)</span></label>
                                        <input type="file" name="slider_image" required data-max-file-size="2M" data-allowed-file-extensions="png jpg jpeg" class="form-control dropify">
                                    </div>
                                    <div class="d-inline-block">
                                        <label for="" class="d-block">Status:</label>
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" checked name="status" id="inlineRadio3" value="1">
                                                <label class="form-check-label" for="inlineRadio3">Active</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="inlineRadio4" value="0">
                                                <label class="form-check-label" for="inlineRadio4">Inactive</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center pt-2 pb-2">
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
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/dropify/js/dropify.min.js"></script>
<!--custom js-->
<script>
    $(document).ready(function() {
        $('#product').select2();

        $('.dropify').dropify({
            height:200
        });
    });

    $(document).ready(function() {
        $('#product').on('change', function() {
            let productId = $(this).val();

            $.ajax({
                type: "POST",
                url: "fetch_product.php",
                data: {
                    id: productId
                },
                success: function(response) {
                    $('#title').val('');
                    $('#product_price').val('');
                    if (response){
                        var product = $.parseJSON(response);
                        $('#title').val(product.product_name);
                        $('#product_price').val(product.price);
                    }
                },
                error: function(error) {
                    console.log(error)
                }
            })
        })
    })

</script>
<?php include "layouts/script_file_activate.php"; ?>

</body>

</html>