<!-- HEADER -->
<header class="header fixed">
    <div class="header-wrapper">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="?menu=home"><img src="img/logo-shop.png" alt="EAOS Shop"/></a>
            </div>
            <!-- /Logo -->

            <?php /*?><!-- Header search -->
            <div class="header-search">
                <input class="form-control" type="text" placeholder="What are you looking?"/>
                <button><i class="fa fa-search"></i></button>
            </div>
            <!-- /Header search --><?php */?>

            <!-- Header shopping cart -->
            <div class="header-cart">
                <div class="cart-wrapper">
                    <a href="?menu=wishlist" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-heart"></i></a>
                   <?php /*?> <a href="?menu=compare-products" class="btn btn-theme-transparent hidden-xs hidden-sm"><i class="fa fa-exchange"></i></a><?php */?>
                    <a href="#" class="btn btn-theme-transparent" data-toggle="modal" data-target="#popup-cart"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs cart_sum_total"> 0 item(s) - 0.00 ฿ </span> <i class="fa fa-angle-down"></i></a>
                    <!-- Mobile menu toggle button -->
                    <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                    <!-- /Mobile menu toggle button -->
                </div>
            </div>
            <!-- Header shopping cart -->

        </div>
    </div>
    <div class="navigation-wrapper">
        <div class="container">
            <!-- Navigation -->
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                <ul class="nav sf-menu">
                    <li class="active"><a href="?menu=home">Homepage</a>
                        <!--<ul>
                            <li><a href="?menu=home">Homepage 1</a></li>
                            <li><a href="index-2.html">Homepage 2</a></li>
                            <li><a href="index-3.html">Homepage 3</a></li>
                            <li><a href="index-4.html">Homepage 4</a></li>
                            <li><a href="index-5.html">Homepage 5</a></li>
                            <li><a href="index-6.html">Homepage 6</a></li>
                            <li><a href="index-7.html">Homepage 7</a></li>
                            <li><a href="index-8.html">Homepage 8</a></li>
                            <li><a href="index-9.html">Homepage 9</a></li>
                        </ul>-->
                    </li>
                    <li><a href="?menu=category&type=shop">Shop</a>
                        <!--<ul>
                            <li><a href="?menu=category">Shop Sidebar Left</a></li>
                            <li><a href="category-right.html">Shop Sidebar Right</a></li>
                            <li><a href="category-list.html">Shop List View</a></li>
                            <li><a href="?menu=product-details">Product Page</a></li>
                        </ul>-->
                    </li>
                    <!--<li><a href="#">Blog</a>
                        <ul>
                            <li><a href="blog.html">Blog Sidebar Left </a></li>
                            <li><a href="blog-right.html">Blog Sidebar Right</a></li>
                            <li><a href="blog-post.html">Blog Single Post</a></li>
                        </ul>
                    </li>
                    <li><a href="portfolio.html">Portfolio</a>
                        <ul>
                            <li><a href="portfolio.html">Portfolio 3 columns</a></li>
                            <li><a href="portfolio-4col.html">Portfolio 4 columns</a></li>
                            <li><a href="portfolio-alt.html">Portfolio Alternate</a></li>
                            <li><a href="portfolio-single.html">Portfolio Single</a></li>
                        </ul>
                    </li>-->
          <?php /*?>          <li class="megamenu"><a href="#">Features</a>
                        <ul>
                            <li class="row">
                                <div class="col-md-2">
                                    <h4 class="block-title"><span> MOBILES & ACCESSORIES</span></h4>
                                    <ul>
                                        <li><a href="?menu=category">Mobiles</a></li>
                                        <li><a href="?menu=category">Mobile Headphones</a></li>
                                        <li><a href="?menu=category">Mobile Screen Guards</a></li>
                                        <li><a href="?menu=category">Mobile Cases & Covers</a></li>
                                        <li><a href="?menu=category">Tablet Speakers</a></li>
                                        <li><a href="?menu=category">Chargers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h4 class="block-title"><span> COMPUTERS & LAPTOPS</span></h4>
                                    <ul>
                                        <li><a href="?menu=category">Headphones</a></li>
                                        <li><a href="?menu=category">Laptops</a></li>
                                        <li><a href="?menu=category">Mouse</a></li>
                                        <li><a href="?menu=category">Laptop Skins & Decals</a></li>
                                        <li><a href="?menu=category">Keyboards</a></li>
                                        <li><a href="?menu=category">Processor Coolers</a></li>
                                        <li><a href="?menu=category">Televisions</a></li>
                                        <li><a href="?menu=category">LED Televisions</a></li>
                                        <li><a href="?menu=category">Smart Televisions</a></li>
                                        <li><a href="?menu=category">Portable Audio</a></li>
                                        <li><a href="?menu=category">Headphones & Headsets</a></li>
                                        <li><a href="?menu=category">Portable Speakers</a></li>
                                        <li><a href="?menu=category">Other portable Audio</a></li>
                                        <li><a href="?menu=category">Home Audio & Theater</a></li>
                                        <li><a href="?menu=category">Wearable Technology</a></li>
                                        <li><a href="?menu=category">Smart Watches</a></li>
                                        <li><a href="?menu=category">Activity & Fitness Trackers</a></li>
                                        <li><a href="?menu=category">Video</a></li>
                                        <li><a href="?menu=category">Projectors</a></li>
                                        <li><a href="?menu=category">DVD Players</a></li>
                                        <li><a href="?menu=category">Blu-Ray Players</a></li>
                                        <li><a href="?menu=category">Gaming</a></li>
                                        <li><a href="?menu=category">Play Station</a></li>
                                        <li><a href="?menu=category">Xbox</a></li>
                                        <li><a href="?menu=category">Nintendo</a></li>
                                        <li><a href="?menu=category">Gadgets</a></li>

                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h4 class="block-title"><span>TV, AUDIO, GAMING</span></h4>
                                    <ul>
                                        <li><a href="?menu=category">Cameras</a></li>
                                        <li><a href="?menu=category">DSLR</a></li>
                                        <li><a href="?menu=category">Bridge</a></li>
                                        <li><a href="?menu=category">Mirrorless</a></li>
                                        <li><a href="?menu=category">Point & Shoot</a></li>
                                        <li><a href="?menu=category">Instant Cameras</a></li>
                                        <li><a href="?menu=category">Gadgets & Other Cameras</a></li>
                                        <li><a href="?menu=category">Camcorders</a></li>
                                        <li><a href="?menu=category">Car Cameras</a></li>
                                        <li><a href="?menu=category">Spy Cameras</a></li>
                                        <li><a href="?menu=category">Security Cameras</a></li>
                                        <li><a href="?menu=category">Action Cameras & Camcorders</a></li>
                                        <li><a href="?menu=category">Camera Accessories</a></li>
                                        <li><a href="?menu=category">Memory cards</a></li>
                                        <li><a href="?menu=category">Lenses</a></li>
                                        <li><a href="?menu=category">Monopods</a></li>
                                        <li><a href="?menu=category">Films</a></li>
                                        <li><a href="?menu=category">Canon</a></li>
                                        <li><a href="?menu=category">Shop By Brand</a></li>
                                        <li><a href="?menu=category">Nikon</a></li>
                                        <li><a href="?menu=category">Casio</a></li>
                                        <li><a href="?menu=category">Fujifilm</a></li>
                                        <li><a href="?menu=category">GoPro</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="block-title"><span>HOME Entertainment</span></h4>
                                    <ul>
                                        <li><a href="?menu=category">Small Kitchen Appliances</a></li>
                                        <li><a href="?menu=category">Coffee Machines & Accessories</a></li>
                                        <li><a href="?menu=category">Blenders, Mixers & Grinders</a></li>
                                        <li><a href="?menu=category">Electric Pans</a></li>
                                        <li><a href="?menu=category">Large Appliances</a></li>
                                        <li><a href="?menu=category">Refrigerators</a></li>
                                        <li><a href="?menu=category">Washers & Dryers</a></li>
                                        <li><a href="?menu=category">Microwaves & Ovens</a></li>
                                        <li><a href="?menu=category">Cooling & Heating</a></li>
                                        <li><a href="?menu=category">Water Heaters</a></li>
                                        <li><a href="?menu=category">Fans</a></li>
                                        <li><a href="?menu=category">Air Purifiers, Dehumidifiers & Humidifiers</a></li>
                                        <li><a href="?menu=category">Garment Care</a></li>
                                        <li><a href="?menu=category">Sewing Machines</a></li>
                                        <li><a href="?menu=category">Housekeeping</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3" style=" float:right">
                                    <div class="product-list">
                                        <div class="media">
                                            <a class="pull-left media-link" href="#">
                                                <img class="media-object" src="img/preview/shop/top-sellers-2.jpg" alt="">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Electronic Product Header</a></h4>
                                                <div class="rating">
                                                    <!--<span class="sta"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>-->
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <a class="pull-left media-link" href="#">
                                                <img class="media-object" src="img/preview/shop/top-sellers-3.jpg" alt="">
                                                <i class="fa fa-plus"></i>
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#">Electronic Product Header</a></h4>
                                                <div class="rating">
                                                    <!--<span class="sta"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>-->
                                                </div>
                                                <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
               <?php */?>     </li>
                   
                    <li><a href="?menu=category&type=new">New</a></li>
                    <li class="sale"><a href="?menu=category&type=sale">Sale</a></li>
                    <li><a href="?menu=contact">Contact</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->
        </div>
    </div>
</header>
<!-- /HEADER -->