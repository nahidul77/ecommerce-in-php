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

    <!-- Slid Sec -->

    <?php
    include 'slider.php';
    ?>

    <!-- Content -->
    <div id="content">

        <!-- Shipping Info -->
        <section class="shipping-info">
            <div class="container">
                <ul>

                    <!-- Free Shipping -->
                    <li>
                        <div class="media-left"> <i class="flaticon-delivery-truck-1"></i> </div>
                        <div class="media-body">
                            <h5>Free Shipping</h5>
                            <span>On order over $99</span></div>
                    </li>
                    <!-- Money Return -->
                    <li>
                        <div class="media-left"> <i class="flaticon-arrows"></i> </div>
                        <div class="media-body">
                            <h5>Money Return</h5>
                            <span>30 Days money return</span></div>
                    </li>
                    <!-- Support 24/7 -->
                    <li>
                        <div class="media-left"> <i class="flaticon-operator"></i> </div>
                        <div class="media-body">
                            <h5>Support 24/7</h5>
                            <span>Hotline: (+100) 123 456 7890</span></div>
                    </li>
                    <!-- Safe Payment -->
                    <li>
                        <div class="media-left"> <i class="flaticon-business"></i> </div>
                        <div class="media-body">
                            <h5>Safe Payment</h5>
                            <span>Protect online payment</span></div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- tab Section -->
        <section class="featur-tabs padding-top-60 padding-bottom-60">
            <div class="container">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                    <li role="presentation" class="active"><a href="index.php#featur" aria-controls="featur" role="tab" data-toggle="tab">Featured</a></li>
                    <li role="presentation"><a href="index.php#special" aria-controls="special" role="tab" data-toggle="tab">Special</a></li>
                    <li role="presentation"><a href="index.php#on-sal" aria-controls="on-sal" role="tab" data-toggle="tab">Onsale</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Featured -->
                    <div role="tabpanel" class="tab-pane active fade in" id="featur">
                        <!-- Items Slider -->
                        <div class="item-slide-4 with-nav">
                            <?php
                            $featureProducts = $home->getFeatureProduct();
                            if($featureProducts !=null){
                                foreach ($featureProducts as $featureProduct){  ?>

                                    <!-- Product -->
                                    <div class="product">
                                        <article>
                                            <img class="img-responsive" src="admin/<?php echo $featureProduct->feature_image;?>" alt="" >

                                            <?php
                                                if($featureProduct->discount){?>
                                                     <span class="sale-tag">-<?php echo $featureProduct->discount; ?>%</span>
                                             <?php   }
                                            ?>


                                            <!-- Content -->
                                            <span class="tag"><?php echo $featureProduct->categoryName;?></span> <a href="product.php?slug=<?php echo $featureProduct->slug;?>" class="tittle"><?php echo $featureProduct->product_name;?></a>

                                            <div class="price">$<?php echo $featureProduct->discount_price??'';?> <span>$<?php echo $featureProduct->price??'';?></span></div>
                                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                                    </div>
                                <?php      }
                                 }
                            ?>



                        </div>
                    </div>

                    <!-- Special -->
                    <div role="tabpanel" class="tab-pane fade" id="special">
                        <!-- Items Slider -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="index.php#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 </div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>

                    <!-- on sale -->
                    <div role="tabpanel" class="tab-pane fade" id="on-sal">
                        <!-- Items Slider -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="index.php#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 </div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Selling Week -->
        <section class="light-gry-bg padding-top-60 padding-bottom-30">
            <div class="container">

                <!-- heading -->
                <div class="heading">
                    <h2>Top Selling of the Week</h2>
                    <hr>
                </div>

                <!-- Items -->
                <div class="item-col-5">

                    <!-- Product -->
                    <div class="product col-2x">
                        <div class="like-bnr">
                            <div class="position-center-center">
                                <h5>Smart Watch 2.0</h5>
                                <p>Space Gray Aluminum Case
                                    with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                                <a href="index.php#." class="btn-round">View Detail</a> </div>
                        </div>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span>

                            <!-- Content -->
                            <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00 <span>$200.00</span></div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-10.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="new-tag">New</span>

                            <!-- Content -->
                            <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>

                    <!-- Product -->
                    <div class="product">
                        <article> <img class="img-responsive" src="images/item-img-1-13.jpg" alt="" >
                            <!-- Content -->
                            <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                            <!-- Reviews -->
                            <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                            <div class="price">$350.00</div>
                            <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Tabs Sec -->
        <section class="main-tabs-sec padding-top-60 padding-bottom-0">
            <div class="container">
                <ul class="nav margin-bottom-40" role="tablist">
                    <li role="presentation" class="active"><a href="index.php#tv-au" aria-controls="featur" role="tab" data-toggle="tab"> <i class="flaticon-computer"></i> TV & Audios <span>236 item(s)</span></a></li>
                    <li role="presentation"><a href="index.php#smart" aria-controls="special" role="tab" data-toggle="tab"><i class="flaticon-smartphone"></i>Smartphones <span>150 item(s)</span></a></li>
                    <li role="presentation"><a href="index.php#deks-lap" aria-controls="on-sal" role="tab" data-toggle="tab"><i class="flaticon-laptop"></i>Desk & Laptop <span>268 item(s)</span></a></li>
                    <li role="presentation"><a href="index.php#game-com" aria-controls="special" role="tab" data-toggle="tab"><i class="flaticon-gamepad-1"></i>Game Console <span>79 item(s)</span></a></li>
                    <li role="presentation"><a href="index.php#watches" aria-controls="on-sal" role="tab" data-toggle="tab"><i class="flaticon-computer-1"></i>Watches <span>105 item(s)</span></a></li>
                    <li role="presentation"><a href="index.php#access" aria-controls="on-sal" role="tab" data-toggle="tab"><i class="flaticon-keyboard"></i>Accessories <span>816 item(s)</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- TV & Audios -->
                    <div role="tabpanel" class="tab-pane active fade in" id="tv-au">

                        <!-- Items -->
                        <div class="item-slide-5 with-bullet no-nav">
                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Latop</span> <a href="index.php#." class="tittle">Laptop Alienware 15 i7 Perfect For Playing Game</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 </div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Tablets</span> <a href="index.php#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00 <span>$200.00</span></div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-10.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>

                    <!-- Smartphones -->
                    <div role="tabpanel" class="tab-pane fade" id="smart">
                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-17.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                    <!-- Desk & Laptop -->
                    <div role="tabpanel" class="tab-pane fade" id="deks-lap">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-4.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-13.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                    <!-- Game Console -->
                    <div role="tabpanel" class="tab-pane fade" id="game-com">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-1.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-5.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-3.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-2.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                    <!-- Watches -->
                    <div role="tabpanel" class="tab-pane fade" id="watches">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-17.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane fade" id="access">

                        <!-- Items -->
                        <div class="item-col-5">

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-11.jpg" alt="" > <span class="sale-tag">-25%</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-12.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-16.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-15.jpg" alt="" > <span class="new-tag">New</span>

                                    <!-- Content -->
                                    <span class="tag">Accessories</span> <a href="index.php#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>

                            <!-- Product -->
                            <div class="product">
                                <article> <img class="img-responsive" src="images/item-img-1-14.jpg" alt="" >
                                    <!-- Content -->
                                    <span class="tag">Appliances</span> <a href="index.php#." class="tittle">Funda Para Ebook 7" 128GB full HD</a>
                                    <!-- Reviews -->
                                    <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
                                    <div class="price">$350.00</div>
                                    <a href="index.php#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Top Selling Week -->

    </div>
    <!-- End Content -->


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