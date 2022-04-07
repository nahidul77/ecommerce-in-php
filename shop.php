<?php
include 'layout/head.php';
?>

<body>

    <!-- Page Wrapper -->
    <div id="wrap" class="layout-1">

        <!-- Top bar -->

        <?php
        include 'layout/top_nav.php';
        ?>
        <!-- Header -->
        <?php
        include 'layout/header.php';
        ?>
        <!--    linking-->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="GridProducts_4Columns.html#">Home</a></li>
                    <li class="active">Cell Phones &amp; Accessories</li>
                </ol>
            </div>
        </div>
        <div id="content">

            <!-- Products -->
            <section class="padding-top-40 padding-bottom-60">
                <div class="container">
                    <div class="row">

                        <!-- Shop Side Bar -->
                        <div class="col-md-3">
                            <div class="shop-side-bar">

                                <!-- Categories -->
                                <h6>Categories</h6>
                                <div class="checkbox checkbox-primary">
                                    <ul>
                                        <li>
                                            <input id="cate1" class="styled" type="checkbox">
                                            <label for="cate1"> Home Audio &amp; Theater </label>
                                        </li>
                                        <li>
                                            <input id="cate2" class="styled" type="checkbox">
                                            <label for="cate2"> TV &amp; Video</label>
                                        </li>
                                        <li>
                                            <input id="cate3" class="styled" type="checkbox">
                                            <label for="cate3"> Camera, Photo &amp; Video</label>
                                        </li>
                                        <li>
                                            <input id="cate4" class="styled" type="checkbox">
                                            <label for="cate4"> Cell Phones &amp; Accessories</label>
                                        </li>
                                        <li>
                                            <input id="cate5" class="styled" type="checkbox">
                                            <label for="cate5"> Headphones</label>
                                        </li>
                                        <li>
                                            <input id="cate6" class="styled" type="checkbox">
                                            <label for="cate6"> Video Games</label>
                                        </li>
                                        <li>
                                            <input id="cate7" class="styled" type="checkbox">
                                            <label for="cate7"> Bluetooth &amp; Wireless Speakers</label>
                                        </li>
                                        <li>
                                            <input id="cate8" class="styled" type="checkbox">
                                            <label for="cate8"> Gaming Console</label>
                                        </li>
                                        <li>
                                            <input id="cate9" class="styled" type="checkbox">
                                            <label for="cate9"> Computers &amp; Tablets</label>
                                        </li>
                                        <li>
                                            <input id="cate10" class="styled" type="checkbox">
                                            <label for="cate10"> Monitors</label>
                                        </li>
                                        <li>
                                            <input id="cate11" class="styled" type="checkbox">
                                            <label for="cate11"> Home Appliances</label>
                                        </li>
                                        <li>
                                            <input id="cate12" class="styled" type="checkbox">
                                            <label for="cate12">Office Supplies </label>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Categories -->
                                <h6>Price</h6>
                                <!-- PRICE -->
                                <div class="cost-price-content">
                                    <div id="price-range" class="price-range noUi-target noUi-ltr noUi-horizontal noUi-background">
                                        <div class="noUi-base">
                                            <div class="noUi-origin noUi-connect" style="left: 4%;">
                                                <div class="noUi-handle noUi-handle-lower"></div>
                                            </div>
                                            <div class="noUi-origin noUi-background" style="left: 94%;">
                                                <div class="noUi-handle noUi-handle-upper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <span id="price-min" class="price-min">$40.00</span> <span id="price-max" class="price-max">$940.00</span> <a href="GridProducts_4Columns.html#." class="btn-round">Filter</a>
                                </div>

                                <!-- Featured Brands -->
                                <h6>Featured Brands</h6>
                                <div class="checkbox checkbox-primary">
                                    <ul>
                                        <li>
                                            <input id="brand1" class="styled" type="checkbox">
                                            <label for="brand1"> Apple <span>(217)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand2" class="styled" type="checkbox">
                                            <label for="brand2"> Acer <span>(79)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand3" class="styled" type="checkbox">
                                            <label for="brand3"> Asus <span>(283)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand4" class="styled" type="checkbox">
                                            <label for="brand4">Samsung <span>(116)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand5" class="styled" type="checkbox">
                                            <label for="brand5"> LG <span>(29)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand6" class="styled" type="checkbox">
                                            <label for="brand6"> Electrolux <span>(179)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand7" class="styled" type="checkbox">
                                            <label for="brand7"> Toshiba <span>(38)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand8" class="styled" type="checkbox">
                                            <label for="brand8"> Sharp <span>(205)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand9" class="styled" type="checkbox">
                                            <label for="brand9"> Sony <span>(35)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand10" class="styled" type="checkbox">
                                            <label for="brand10"> HTC <span>(59)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand11" class="styled" type="checkbox">
                                            <label for="brand11"> Lenovo <span>(68)</span> </label>
                                        </li>
                                        <li>
                                            <input id="brand12" class="styled" type="checkbox">
                                            <label for="brand12">Sanyo (19) </label>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Colors -->
                                <h6>Size</h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="GridProducts_4Columns.html#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i> <span>(218)</span></a></li>
                                        <li><a href="GridProducts_4Columns.html#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(178)</span></a></li>
                                        <li><a href="GridProducts_4Columns.html#."><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(79)</span></a></li>
                                        <li><a href="GridProducts_4Columns.html#."><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span>(188)</span></a></li>
                                    </ul>
                                </div>

                                <!-- Colors -->
                                <h6>Size</h6>
                                <div class="sizes"> <a href="GridProducts_4Columns.html#.">S</a> <a href="GridProducts_4Columns.html#.">M</a> <a href="GridProducts_4Columns.html#.">L</a> <a href="GridProducts_4Columns.html#.">XL</a> </div>

                                <!-- Colors -->
                                <h6>Colors</h6>
                                <div class="checkbox checkbox-primary">
                                    <ul>
                                        <li>
                                            <input id="colr1" class="styled" type="checkbox">
                                            <label for="colr1"> Red <span>(217)</span> </label>
                                        </li>
                                        <li>
                                            <input id="colr2" class="styled" type="checkbox">
                                            <label for="colr2"> Yellow <span> (179) </span> </label>
                                        </li>
                                        <li>
                                            <input id="colr3" class="styled" type="checkbox">
                                            <label for="colr3"> Black <span>(79)</span> </label>
                                        </li>
                                        <li>
                                            <input id="colr4" class="styled" type="checkbox">
                                            <label for="colr4">Blue <span>(283) </span></label>
                                        </li>
                                        <li>
                                            <input id="colr5" class="styled" type="checkbox">
                                            <label for="colr5"> Grey <span> (116)</span> </label>
                                        </li>
                                        <li>
                                            <input id="colr6" class="styled" type="checkbox">
                                            <label for="colr6"> Pink<span> (29) </span></label>
                                        </li>
                                        <li>
                                            <input id="colr7" class="styled" type="checkbox">
                                            <label for="colr7"> White <span> (38)</span> </label>
                                        </li>
                                        <li>
                                            <input id="colr8" class="styled" type="checkbox">
                                            <label for="colr8">Green <span>(205)</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Products -->
                        <div class="col-md-9">

                            <!-- Short List -->
                            <div class="short-lst">
                                <h2>All Products</h2>
                            </div>

                            <!-- Items -->
                            <div class="item-col-3">
                                <?php

                                $products = $product->getAllProduct();
                                if ($products != null) {
                                    foreach ($products as $product) { ?>
                                        <!-- Product -->
                                        <div class="product">
                                            <article> <img class="img-responsive" src="admin/<?php echo $product->feature_image; ?>" alt="">
                                            <?php
                                                if ($product->discount) {
                                                    echo '<span class="sale-tag">-'.$product->discount.'%</span>';
                                                }
                                                ?>
                                                <!-- Content -->
                                                <span class="tag">
                                                    <?php echo $product->categoryName; ?>
                                                </span>
                                                <a href="product.php?slug=<?php echo $product->slug;?>" class="tittle">
                                                    <?php echo $product->product_name; ?>
                                                </a>
                                                <?php
                                                if ($product->discount) {
                                                    echo '<div class="price">$' . $product->discount_price . ' 
                                                      <span>$' . $product->price . '</span>
                                                      </div>';
                                                } else {
                                                    echo '<div class="price">$' . $product->price . '</div>';
                                                }
                                                ?>

                                                <a href="" class="cart-btn"><i class="icon-basket-loaded"></i>
                                                </a>
                                            </article>
                                        </div>

                                <?php      }
                                }
                                ?>


                                <!-- pagination -->
                                <ul class="pagination">
                                    <li> <a href="GridProducts_4Columns.html#" aria-label="Previous"> <i class="fa fa-angle-left"></i> </a> </li>
                                    <li><a class="active" href="GridProducts_4Columns.html#">1</a></li>
                                    <li><a href="GridProducts_4Columns.html#">2</a></li>
                                    <li><a href="GridProducts_4Columns.html#">3</a></li>
                                    <li> <a href="GridProducts_4Columns.html#" aria-label="Next"> <i class="fa fa-angle-right"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Your Recently Viewed Items -->
            <section class="padding-bottom-60">
                <div class="container">

                    <!-- heading -->
                    <div class="heading">
                        <h2>Your Recently Viewed Items</h2>
                        <hr>
                    </div>
                    <!-- Items Slider -->
                    <div class="item-slide-5 with-nav owl-carousel owl-theme owl-loaded">
                        <!-- Product -->

                        <!-- Product -->


                        <!-- Product -->


                        <!-- Product -->


                        <!-- Product -->


                        <!-- Product -->


                        <!-- Product -->


                        <!-- Product -->

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: all 0.25s ease 0s; width: 4212px;">
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

                                            <!-- Content -->
                                            <span class="tag">Accessories</span> <a href="GridProducts_4Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>

                                            <!-- Content -->
                                            <span class="tag">Tablets</span> <a href="GridProducts_4Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 <span>$200.00</span></div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

                                            <!-- Content -->
                                            <span class="tag">Accessories</span> <a href="GridProducts_4Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Latop</span> <a href="GridProducts_4Columns.html#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 </div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>

                                            <!-- Content -->
                                            <span class="tag">Tablets</span> <a href="GridProducts_4Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 <span>$200.00</span></div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

                                            <!-- Content -->
                                            <span class="tag">Accessories</span> <a href="GridProducts_4Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt=""> <span class="sale-tag">-25%</span>

                                            <!-- Content -->
                                            <span class="tag">Tablets</span> <a href="GridProducts_4Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 <span>$200.00</span></div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt=""> <span class="new-tag">New</span>

                                            <!-- Content -->
                                            <span class="tag">Accessories</span> <a href="GridProducts_4Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Latop</span> <a href="GridProducts_4Columns.html#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 </div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt=""> <span class="sale-tag">-25%</span>

                                            <!-- Content -->
                                            <span class="tag">Tablets</span> <a href="GridProducts_4Columns.html#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00 <span>$200.00</span></div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt=""> <span class="new-tag">New</span>

                                            <!-- Content -->
                                            <span class="tag">Accessories</span> <a href="GridProducts_4Columns.html#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 204px; margin-right: 30px;">
                                    <div class="product">
                                        <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="">
                                            <!-- Content -->
                                            <span class="tag">Appliances</span> <a href="GridProducts_4Columns.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                            <!-- Reviews -->
                                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                            <div class="price">$350.00</div>
                                            <a href="GridProducts_4Columns.html#." class="cart-btn"><i class="icon-basket-loaded"></i></a>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style=""><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next" style=""><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots" style="">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot active"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Clients img -->
            <section class="light-gry-bg clients-img">
                <div class="container">
                    <ul>
                        <li><img src="images/c-img-1.png" alt=""></li>
                        <li><img src="images/c-img-2.png" alt=""></li>
                        <li><img src="images/c-img-3.png" alt=""></li>
                        <li><img src="images/c-img-4.png" alt=""></li>
                        <li><img src="images/c-img-5.png" alt=""></li>
                    </ul>
                </div>
            </section>

       
        </div>

        <!-- Footer -->
        <?php
        include "layout/footer.php";
        ?>

        <!-- GO TO TOP  -->
        <a href="index.php#" class="cd-top"><i class="fa fa-angle-up"></i></a>
        <!-- GO TO TOP End -->
    </div>
    <!-- End Page Wrapper -->

    <!-- JavaScripts -->
    <?php
    include "layout/_script.php";
    ?>

    <!--page require js load here....-->


    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.t.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.tp.min.js"></script>
    <script src="js/main.js"></script>

    <!--custom js activation here....-->


</body>

</html>