<!-- CONTENT AREA -->
<div class="content-area">

    <!-- PAGE -->
    <section class="page-section no-padding-bottom">
        <div class="container">

            <div class="row">

                   <?php include('side-bar.php'); ?>
                <div class="col-md-9 content" id="content">
                    <?php /*?><div class="main-slider">
                        <div class="owl-carousel" id="main-slider">

                            <!-- Slide 1 -->
                            <div class="item slide1">
                                <img class="slide-img" src="img/preview/slider/slide-3-sub.jpg" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">The Biggest</h2>
                                                    <h3 class="caption-subtitle">Sale</h3>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="#">Shop Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 1 -->

                            <!-- Slide 2 -->
                            <div class="item slide2 alt">
                                <img class="slide-img" src="img/preview/slider/slide-3-sub.jpg" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">New Arrivals On Sale</h2>
                                                    <h3 class="caption-subtitle"><span>Electronics Items </span></h3>
                                                    <div class="price">
                                                        <span>$</span><ins>49</ins>
                                                        <span>$</span><del>86</del>
                                                    </div>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 2 -->

                            <!-- Slide 3 -->
                            <div class="item slide3 dark">
                                <img class="slide-img" src="img/preview/slider/slide-3a-sub.jpg" alt=""/>
                                <div class="caption">
                                    <div class="container">
                                        <div class="div-table">
                                            <div class="div-cell">
                                                <div class="caption-content">
                                                    <h2 class="caption-title">New Arrivals On Sale</h2>
                                                    <h3 class="caption-subtitle"><span>Electronics Items </span></h3>
                                                    <p class="caption-text">
                                                        <a class="btn btn-theme" href="#">Shop this item Now</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Slide 3 -->

                        </div>
                    </div><?php */?>
                    
                    <div class="row products grid">
                        <?php
                        $filter = " AND prod_news_status='1' ";
                        $strSql = "SELECT * FROM products WHERE prod_status!='0' ".$filter." ORDER BY prod_id DESC  ";//LIMIT 15
                        $query = mysql_query($strSql);
                        while($rs_product = mysql_fetch_array($query)){
                            $dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
                            foreach (glob($dir) as $filename) {
                                $filename = $filename;
                            }
                
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                            <img src="<?php echo $filename ?>" alt="" style=" height:262px; width:auto;" />
                                            <span class="icon-view">
                                                <strong><i class="fa fa-eye"></i></strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;"  onclick="setCookie_wishlist('wishlist','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                        <div class="media">
                            <a class="media-link" href="#">
                                <div class="img-bg" style="background-image: url('img/preview/shop/banner-1.jpg')"></div>
                                <div class="caption">
                                    <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                        <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                        <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail no-border no-padding thumbnail-banner size-1x3">
                        <div class="media">
                            <a class="media-link" href="#">
                                <div class="img-bg" style="background-image: url('img/preview/shop/banner-2.jpg')"></div>
                                <div class="caption text-right">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <h2 class="caption-title"><span>Lorem Ipsum</span></h2>
                                            <h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>
                                            <span class="btn btn-theme btn-theme-sm">Shop Now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <div class="tabs">
                <ul id="tabs" class="nav nav-justified-off"><!--
                    --><li class=""><a href="#tab-1" data-toggle="tab">Featured</a></li><!--
                    --><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!--
                    --><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>
                </ul>
            </div>

            <div class="tab-content">

                <!-- tab 1 -->
                <div class="tab-pane fade" id="tab-1">
                    <div class="row">
                    	<?php
                        $filter = " AND prod_news_status='1' ";
                        $strSql = "SELECT * FROM products WHERE prod_status!='0'  AND prod_news_status='1' ORDER BY prod_id DESC  ";//LIMIT 15
                        $query = mysql_query($strSql);
                        while($rs_product = mysql_fetch_array($query)){
                            $dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
                            foreach (glob($dir) as $filename) {
                                $filename = $filename;
                            }
                
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                            <img src="<?php echo $filename ?>" alt="" style=" height:262px; width:auto;" />
                                            <span class="icon-view">
                                                <strong><i class="fa fa-eye"></i></strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;"  onclick="setCookie_wishlist('wishlist','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
						}
						?>
                        
                    </div>
                </div>

                <!-- tab 2 -->
                <div class="tab-pane fade active in" id="tab-2">
                    <div class="row">
                        <?php
                        $filter = " AND prod_news_status='1' ";
                        $strSql = "SELECT * FROM products WHERE prod_status!='0'  AND prod_featured_status='1' ORDER BY prod_id DESC  ";//LIMIT 15
                        $query = mysql_query($strSql);
                        while($rs_product = mysql_fetch_array($query)){
                            $dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
                            foreach (glob($dir) as $filename) {
                                $filename = $filename;
                            }
                
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                            <img src="<?php echo $filename ?>" alt="" style=" height:262px; width:auto;" />
                                            <span class="icon-view">
                                                <strong><i class="fa fa-eye"></i></strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;"  onclick="setCookie_wishlist('wishlist','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
						}
						?>
                    </div>
                </div>

                <!-- tab 3 -->
                <div class="tab-pane fade" id="tab-3">
                    <div class="row">
                    <?php
                        $filter = " AND prod_news_status='1' ";
                        $strSql = "SELECT * FROM products WHERE prod_status!='0'  AND prod_topSeller_status='1' ORDER BY prod_id DESC  ";//LIMIT 15
                        $query = mysql_query($strSql);
                        while($rs_product = mysql_fetch_array($query)){
                            $dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
                            foreach (glob($dir) as $filename) {
                                $filename = $filename;
                            }
                
                            ?>
                            <div class="col-md-3 col-sm-6">
                                <div class="thumbnail no-border no-padding">
                                    <div class="media">
                                        <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                            <img src="<?php echo $filename ?>" alt="" style=" height:262px; width:auto;" />
                                            <span class="icon-view">
                                                <strong><i class="fa fa-eye"></i></strong>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="caption text-center">
                                        <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                        <div class="buttons">
                                            <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;"  onclick="setCookie_wishlist('wishlist','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                            --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
						}
						?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="message-box">
                <div class="message-box-inner">
                    <h2>Free shipping on all orders over $45</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <?php /*?><section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>Top Rated Products</span></h2>
            <div class="top-products-carousel">
                <div class="owl-carousel" id="top-products-carousel">
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-2.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-3.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-4.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-5.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-6.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-1.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="thumbnail no-border no-padding">
                        <div class="media">
                            <a class="media-link" data-gal="prettyPhoto" href="img/preview/shop/product-1-big.jpg">
                                <img src="img/preview/shop/top-rated-2.jpg" alt=""/>
                                <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                            </a>
                        </div>
                        <div class="caption text-center">
                            <h4 class="caption-title"><a href="?menu=product-details">Electronic Product Header</a></h4>
                            <div class="rating">
                                <!--<span class="sta"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>--><!--
                            --><!--<span class="star active"></span>-->
                            </div>
                            <div class="price"><ins>$400.00</ins> <del>$425.00</del></div>
                            <div class="buttons">
                                <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!--
                            --><a class="btn btn-theme btn-theme-transparent" href="#">Add to Cart</a><!--
                            --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><?php */?>
    <!-- /PAGE -->

    <!-- PAGE -->
    <?php /*?><section class="page-section">
        <div class="container">
            <a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i class="fa fa-file-text-o"></i>See All Posts</a>
            <h2 class="block-title"><span>Our Recent posts</span></h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="recent-post">
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <img class="media-object" src="img/preview/blog/recent-post-1.jpg" alt="">
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="media-body">
                                <p class="media-category"><a href="#">Shoes</a> / <a href="#">Dress</a></p>
                                <h4 class="media-heading"><a href="#">Electronic Post Comment Header Here</a></h4>
                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                <div class="media-meta">
                                    6th June 2014
                                    <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                    <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="recent-post">
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <img class="media-object" src="img/preview/blog/recent-post-2.jpg" alt="">
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="media-body">
                                <p class="media-category"><a href="#">Wedding</a> / <a href="#">Meeting</a></p>
                                <h4 class="media-heading"><a href="#">Electronic Post Comment Header Here</a></h4>
                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                <div class="media-meta">
                                    6th June 2014
                                    <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                    <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="recent-post">
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <img class="media-object" src="img/preview/blog/recent-post-3.jpg" alt="">
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="media-body">
                                <p class="media-category"><a href="#">Children</a> / <a href="#">Kids</a></p>
                                <h4 class="media-heading"><a href="#">Electronic Post Comment Header Here</a></h4>
                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                <div class="media-meta">
                                    6th June 2014
                                    <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                    <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="recent-post">
                        <div class="media">
                            <a class="pull-left media-link" href="#">
                                <img class="media-object" src="img/preview/blog/recent-post-4.jpg" alt="">
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="media-body">
                                <p class="media-category"><a href="#">Man</a> / <a href="#">Accessories</a></p>
                                <h4 class="media-heading"><a href="#">Electronic Post Comment Header Here</a></h4>
                                Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.
                                <div class="media-meta">
                                    6th June 2014
                                    <span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>
                                    <span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><?php */?>
    <!-- /PAGE -->

     <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <h2 class="section-title"><span>Brand &amp; Clients</span></h2>
            <div class="partners-carousel">
                <div class="owl-carousel" id="partners">
                    <div><a href="#"><img src="img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-3.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-4.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-5.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-3.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-4.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-5.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-1.jpg" alt=""/></a></div>
                    <div><a href="#"><img src="img/preview/partners/brand-logo-2.jpg" alt=""/></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->


    <!-- PAGE -->
    <section class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Sellers</span></h4>
                            <?php
							$strSql = "SELECT * FROM products WHERE prod_status!='0' AND prod_hot_status='1' ORDER BY prod_id DESC LIMIT 3 ";
							$query = mysql_query($strSql);
							while($rs_product = mysql_fetch_array($query)){
							$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
							foreach (glob($dir) as $filename) {
								$filename = $filename;
							}
								?>
                                <div class="media">
                                    <a class="pull-left media-link" data-gal="prettyPhoto" href="<?php echo $filename ?>">
                                        <img class="media-object" src="<?php echo $filename ?>" alt="" style=" width:auto; height:70px;">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                    </div>
                                </div>
                                <?php
							}
							?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Accessories</span></h4>
                            <?php
							$strSql = "SELECT * FROM products WHERE prod_status!='0' AND prod_topSeller_status='1' ORDER BY prod_id DESC LIMIT 3 ";
							$query = mysql_query($strSql);
							while($rs_product = mysql_fetch_array($query)){
							$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
							foreach (glob($dir) as $filename) {
								$filename = $filename;
							}
								?>
                                <div class="media">
                                    <a class="pull-left media-link" data-gal="prettyPhoto" href="<?php echo $filename ?>">
                                        <img class="media-object" src="<?php echo $filename ?>" alt="" style=" width:auto; height:70px;">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                    </div>
                                </div>
                                <?php
							}
							?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product-list">
                            <a class="btn btn-theme btn-title-more" href="#">See All</a>
                            <h4 class="block-title"><span>Top Newest</span></h4>
                            <?php
							$strSql = "SELECT * FROM products WHERE prod_status!='0' AND prod_news_status='1' ORDER BY prod_id DESC LIMIT 3 ";
							$query = mysql_query($strSql);
							while($rs_product = mysql_fetch_array($query)){
							$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
							foreach (glob($dir) as $filename) {
								$filename = $filename;
							}
								?>
                                <div class="media">
                                    <a class="pull-left media-link" data-gal="prettyPhoto" href="<?php echo $filename ?>">
                                        <img class="media-object" src="<?php echo $filename ?>" alt="" style=" width:auto; height:70px;">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                        <div class="rating">
                                            <!--<span class="sta"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>--><!--
                                            --><!--<span class="star active"></span>-->
                                        </div>
                                        <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                    </div>
                                </div>
                                <?php
							}
							?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section no-padding-top">
        <div class="container">
            <div class="row blocks shop-info-banners">
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-gift"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Buy 1 Get 1</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-comments"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Call to Free</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-trophy"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Money Back!</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

</div>
<!-- /CONTENT AREA -->