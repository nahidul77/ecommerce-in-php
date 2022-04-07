<header class="header-style-3">
    <div class="container">
        <div class="logo"> <a href="index.php"><img src="images/logo-3.png" alt="" ></a> </div>

        <!-- Nav Header -->
        <nav class="navbar ownmenu">

            <!-- Categories -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
            </div>

            <!-- NAV -->
            <div class="collapse navbar-collapse" id="nav-open-btn">
                <ul class="nav">
                    <li class="active"> <a href="index.php">Home </a></li>
                    <li class=""> <a href="shop.php">Shop </a></li>
                    <li class=""> <a href="index.php">About </a></li>
                    <li class=""> <a href="index.php">Contact </a></li>

                </ul>
            </div>
        </nav>

        <!-- Cart Part -->
        <ul class="nav navbar-right cart-pop">
            <li class="dropdown"> <a href="index-3.html#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="itm-cont">3</span> <i class="flaticon-shopping-bag"></i> <strong>My Cart</strong> <br>
                    <span>3 item(s) - $500.00</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <div class="media-left"> <a href="index-3.html#." class="thumb"> <img src="images/item-img-1-1.jpg" class="img-responsive" alt="" > </a> </div>
                        <div class="media-body"> <a href="index-3.html#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> <span>250 x 1</span> </div>
                    </li>
                    <li>
                        <div class="media-left"> <a href="index-3.html#." class="thumb"> <img src="images/item-img-1-2.jpg" class="img-responsive" alt="" > </a> </div>
                        <div class="media-body"> <a href="index-3.html#." class="tittle">Funda Para Ebook 7" full HD</a> <span>250 x 1</span> </div>
                    </li>
                    <li class="btn-cart"> <a href="index-3.html#." class="btn-round">View Cart</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="nav-uder-bar">
        <div class="container">

            <!-- Categories -->
            <div class="cate-lst"> <a  data-toggle="collapse" class="cate-style" href="index-3.html#cater"><i class="fa fa-list-ul"></i> Our Categories </a>
                <div class="cate-bar-in">
                    <div id="cater" class="collapse">
                        <ul>
                            <?php
                            $categories = $home->getCategory();
                            if ($categories != null){
                                foreach ($categories as $category){
                                    $sub_categories = $home->getSubCategory($category->id);
                                    if ($sub_categories !=null){?>
                                        <li class="sub-menu"><a href="index.php"><?php echo $category->name?></a>
                                            <ul>
                                                <?php
                                                foreach ($sub_categories as $sub_category) {
                                                    echo "<li><a href=''>{$sub_category->name}</a></li>";
                                                }
                                                ?>
                                            </ul>
                                        </li>
                                    <?php  }else{

                                        echo "<li><a href=''>{$category->name}</a></li>";

                                    }
                                }
                            }
                            ?>


                        </ul>
                    </div>
                </div>
            </div>

            <!-- search -->
            <div class="search-cate">
                <select class="selectpicker">
                    <?php
                    $categories = $home->getCategory();
                    if ($categories != null){
                        foreach ($categories as $category){?>
                            <option value="<?php echo  $category->id; ?>"> <?php echo  $category->name; ?></option>;

                        <?php   }
                       }
                    ?>


                </select>
                <input type="search" placeholder="Search entire store here...">
                <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
            </div>
            <!-- NAV RIGHT -->
            <div class="nav-right"> <span class="call-mun"><i class="fa fa-phone"></i> <strong>Hotline:</strong> (+100) 123 456 7890</span> </div>
        </div>
    </div>
</header>