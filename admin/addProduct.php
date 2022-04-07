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

                    <h2>Product Create</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="text-right mb-2">
                                <a href="productIndex.php" class="btn btn-danger">Back to list</a>
                            </div>
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                                $data = array(
                                    'category'          => $helper->validate($_POST['category']),
                                    'sub_category'      => $helper->validate($_POST['sub_category']),
                                    'brand'             => $helper->validate($_POST['brand']),
                                    'product_name'      => $helper->validate($_POST['product_name']),
                                    'product_slug'      => $helper->validate($_POST['product_slug']),
                                    'quantity'          => $helper->validate($_POST['quantity']),
                                    'price'             => $helper->validate($_POST['price']),
                                    'discount'          => $helper->validate($_POST['discount']),
                                    'discount_price'    => $helper->validate($_POST['discount_price']),
                                    'short_description' => $helper->validate($_POST['short_description']),
                                    'description'       => $helper->validate($_POST['description']),
                                    'is_featured'       => $helper->validate($_POST['is_featured']),
                                    'status'            => $helper->validate($_POST['status']),
                                    'feature_image'     => $_FILES['feature_image']['name'],
                                    'product_images'    => $_FILES['product_images']['name'],
                                );



                                if (empty($data['category'])) {
                                    $error['category'] = "Category is required";
                                }
                                if (empty($data['brand'])) {
                                    $error['brand'] = "Brand is required";
                                }
                                if (empty($data['product_name'])) {
                                    $error['product_name'] = "Product name is required";
                                }
                                if (empty($data['product_slug'])) {
                                    $error['product_slug'] = "Product slug is required";
                                }
                                if (empty($data['quantity'])) {
                                    $error['quantity'] = "Quantity is required";
                                }
                                if (empty($data['price'])) {
                                    $error['price'] = "Price is required";
                                }
                                if (empty($data['description'])) {
                                    $error['description'] = "Description is required";
                                }
                                if (empty($data['feature_image'])) {
                                    $error['feature_image'] = "Feature image is required";
                                }
                                if (empty($data['product_images'])) {
                                    $error['product_images'] = "Product images is required";
                                }

                                if (
                                    empty($error['category']) &&
                                    empty($error['brand']) &&
                                    empty($error['product_name']) &&
                                    empty($error['product_slug']) &&
                                    empty($error['quantity']) &&
                                    empty($error['price']) &&
                                    empty($error['description']) &&
                                    empty($error['feature_image']) &&
                                    empty($error['product_images'])
                                ) {
                                    $insertProduct = $product->store($data, $_FILES);
                                    if (isset($insertProduct)) {
                                        echo  $insertProduct;
                                    }
                                }
                            }

                            ?>
                            <form class="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="category">Select Category <span class="text-danger">*</span></label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" selected>Select Category</option>
                                                <?php
                                                $categories = $category->index();
                                                if ($categories != null) {
                                                    foreach ($categories as $category) { ?>
                                                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                <?php       }
                                                }
                                                ?>
                                            </select>
                                            <div class="text-danger">
                                                <?php echo  $error['category'] ?? ''; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="sub_category">Select Sub Category</label>
                                            <select name="sub_category" id="sub_category" class="form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="brand">Select Brand <span class="text-danger">*</span> </label>
                                            <select name="brand" id="brand" class="form-control">
                                                <option value="" selected>Select Brand</option>
                                                <?php
                                                $brands = $brandObj->index();
                                                if ($brands != null) {
                                                    foreach ($brands as $brand) { ?>
                                                        <option value="<?php echo $brand->id; ?>"><?php echo $brand->name; ?></option>
                                                <?php       }
                                                }
                                                ?>
                                                ?>
                                            </select>
                                            <div class="text-danger">
                                                <?php echo  $error['brand'] ?? ''; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//.row end-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="product_name">Product Name <span class="text-danger">*</span></label>
                                            <input type="text" name="product_name" value="<?php echo $data['product_name'] ?? ''; ?>" id="product_name" class="form-control">
                                            <div class="text-danger">
                                                <?php echo  $error['product_name'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                                            <input type="text" name="product_slug" id="product_slug" class="form-control">
                                            <div class="text-danger">
                                                <?php echo  $error['product_slug'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//.row end-->
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="quantity">Quantity <span class="text-danger">*</span></label>
                                            <input type="text" name="quantity" id="quantity" class="form-control number">
                                            <div class="text-danger">
                                                <?php echo  $error['quantity'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="price">Price <span class="text-danger">*</span></label>
                                            <input type="text" name="price" id="price" class="form-control number-decimal">
                                            <div class="text-danger">
                                                <?php echo  $error['price'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="discount">Discount</label>
                                            <input type="text" name="discount" id="discount" class="form-control number">
                                            <div class="text-danger">
                                                <?php echo  $error['discount'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <label for="discount_price">Discount Price</label>
                                            <input type="text" name="discount_price" id="discount_price" class="form-control" readonly>
                                            <div class="text-danger">
                                                <?php echo  $error['discount_price'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//.row end-->
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label for="short_description">Short Description <span class="text-danger">*</span></label>
                                            <textarea name="short_description" rows="5" id="short_description" class="form-control"></textarea>
                                            <div class="text-danger">
                                                <?php echo  $error['short_description'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="feature_image">Product Feature Image <span class="text-danger">*</span></label>
                                            <input type="file" name="feature_image" id="feature_image" class="form-control dropify" data-allowed-file-extensions="jpg jpeg png"  data-max-file-size="2M" />
                                            <div class="text-danger">
                                                <?php echo  $error['feature_image'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//.row end-->
                                <div class="form-group">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" rows="8" id="description" class="form-control summernote"></textarea>
                                    <div class="text-danger">
                                        <?php echo  $error['description'] ?? ""; ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group d-inline-block">
                                            <label for="" class="d-block">is Featured:</label>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="is_featured" id="inlineRadio1" value="1">
                                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="is_featured" checked id="inlineRadio2" value="0">
                                                    <label class="form-check-label" for="inlineRadio2">NO</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-inline-block">
                                            <label for="" class="d-block">Status:</label>
                                            <div class="form-group">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio3" value="1">
                                                    <label class="form-check-label" for="inlineRadio3">Published</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" checked type="radio" name="status" id="inlineRadio4" value="0">
                                                    <label class="form-check-label" for="inlineRadio4">Drafted</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="product_images">Product Images</label>
                                            <input type="file" name="product_images[]" id="product_images" multiple class="form-control" required />
                                            <div class="text-danger">
                                                <?php echo  $error['product_images'] ?? ""; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center border-top">
                                    <button type="submit" class="btn btn-primary btn-lg w-md">Submit</button>
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
    <!-- ***********pages js file link below*******-->
    <!-- Summernote js -->
    <script src="assets/libs/summernote/summernote-bs4.min.js"></script>
    <!-- init js -->
    <script src="assets/js/pages/form-editor.init.js"></script>
    <script src="assets/dropify/js/dropify.min.js"></script>

    <script>
         $('.dropify').dropify({
            height:100
        });
        $(document).ready(function() {
            $('#category').on('change', function() {
                let categoryId = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "fetch_sub_cateogy.php",
                    data: {
                        id: categoryId
                    },
                    success: function(response) {
                        if (response) {
                            $('#sub_category').html(response);
                        }
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })
            })

            /* discount calucaltion */

            $('#discount').keyup(function() {
                let discount = $(this).val();
                let getPrice = $('#price').val();
                if (getPrice) {
                    let discountPrice = getPrice - getPrice * discount / 100;
                    $('#discount_price').val(discountPrice);
                } else {
                    alert('Please enter product price first');
                    $('#discount_price').val(' ');
                    discount = $('#discount').val(' ')
                }
            })


            /* product slug generate*/
            $("#product_slug").keyup(function() {
                let Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $("#product_slug").val(Text);
            });
            /* price field number and decimal only */
            $(".number-decimal").keypress(function(e) {
                if (e.which == 46) {
                    if ($(this).val().indexOf('.') != -1) {
                        return false;
                    }
                }

                if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
                    return false;
                }
            });
            /* only number */
            $(".number").keypress(function(event) {
                var key = event.which;

                if (!(key >= 48 && key <= 57))
                    event.preventDefault();
            });

        });
    </script>
<!-- admin template js activation-->
<?php include "layouts/script_file_activate.php"; ?>
</body>

</html>