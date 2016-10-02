<!-- SIDEBAR -->
<aside class="col-md-3 sidebar" id="sidebar">
    <!-- widget search -->
    <div class="widget">
        <div class="widget-search">
            <input class="form-control" type="text" placeholder="Search">
            <button><i class="fa fa-search"></i></button>
        </div>
    </div>
    <!-- /widget search -->
    <?php
	if($_REQUEST["menu"]=="" || $_REQUEST["menu"]=="home"|| $_REQUEST["menu"]=="category"){
		?>
        <div class="widget shop-categories">
            <h4 class="widget-title">
            	Categories
            	<a href="#" class="btn btn-theme-transparent cat-toggle hidden-md hidden-lg" style=" float:right; margin: 0px 10px 0 0; padding:0px 6px;"><i class="fa fa-bars"></i></a>
            </h4>
            <div class="widget-content">
                <ul class="menu-list" class="">
                    <?php /*?><li>
                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                        <a href="?menu=category">Woman</a>
                        <ul class="children">
                            <li>
                                <a href="?menu=category">Sweaters & Knits
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Jackets & Coats
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Denim
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Pants
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Shorts
                                    <span class="count">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                        <a href="?menu=category">Man</a>
                        <ul class="children">
                            <li>
                                <a href="?menu=category">Sweaters & Knits
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Jackets & Coats
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Denim
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Pants
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Shorts
                                    <span class="count">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                        <a href="?menu=category">Dress</a>
                        <ul class="children">
                            <li>
                                <a href="?menu=category">Sweaters & Knits
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Jackets & Coats
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Denim
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Pants
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Shorts
                                    <span class="count">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="arrow"><i class="fa fa-angle-down"></i></span>
                        <a href="?menu=category">Top Sellers</a>
                        <ul class="children">
                            <li>
                                <a href="?menu=category">Sweaters & Knits
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Jackets & Coats
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Denim
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Pants
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Shorts
                                    <span class="count">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="arrow"><i class="fa fa-angle-up"></i></span>
                        <a href="?menu=category">Accessories</a>
                        <ul class="children active">
                            <li>
                                <a href="?menu=category">Sweaters & Knits
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Jackets & Coats
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Denim
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Pants
                                    <span class="count">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="?menu=category">Shorts
                                    <span class="count">12</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Sale Off</a></li><?php */?>
                </ul>
            </div>
        </div>
    <?php
	}
	?>
     <?php
	if(!($_REQUEST["menu"]=="" || $_REQUEST["menu"]=="home")){
		?>
        <?php /*?><!-- widget product color -->
        <div class="widget widget-colors">
            <h4 class="widget-title">Colors</h4>
            <div class="widget-content">
                <ul>
                    <li><a href="#"><span style="background-color: #ffffff"></span></a></li>
                    <li><a href="#"><span style="background-color: #161618"></span></a></li>
                    <li><a href="#"><span style="background-color: #e74c3c"></span></a></li>
                    <li><a href="#"><span style="background-color: #783ce7"></span></a></li>
                    <li><a href="#"><span style="background-color: #3498db"></span></a></li>
                    <li><a href="#"><span style="background-color: #00a847"></span></a></li>
                    <li><a href="#"><span style="background-color: #3ce7d9"></span></a></li>
                    <li><a href="#"><span style="background-color: #fa17bc"></span></a></li>
                    <li><a href="#"><span style="background-color: #a87e00"></span></a></li>
                </ul>
            </div>
        </div>
        <!-- /widget product color --><?php */?>
        <!-- widget price filter -->
        <div class="widget widget-filter-price">
            <h4 class="widget-title">Price</h4>
            <div class="widget-content">
                <div id="slider-range"></div>
                <input type="text" id="amount" readonly />
                <button class="btn btn-theme">Filter</button>
            </div>
        </div>
        <!-- /widget price filter -->
        <!-- widget tabs -->
        <div class="widget widget-tabs">
            <div class="widget-content">
                <ul id="tabs" class="nav nav-justified">
                    <li><a href="#tab-s1" data-toggle="tab">Top</a></li>
                    <li class="active"><a href="#tab-s2" data-toggle="tab">Sale Off</a></li>
                    <li><a href="#tab-s3" data-toggle="tab">Deals</a></li>
                </ul>
                <div class="tab-content">
                    <!-- tab 1 -->
                    <div class="tab-pane fade" id="tab-s1">
                        <div class="product-list">
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
    
                    <!-- tab 2 -->
                    <div class="tab-pane fade in active" id="tab-s2">
                        <div class="product-list">
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
    
                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-s3">
                        <div class="product-list">
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
                </div>
                <?php /*?><a class="btn btn-theme btn-theme-dark btn-theme-sm btn-block" href="#">More Products</a><?php */?>
            </div>
        </div>
        <!-- /widget tabs -->
        <?php /*?><!-- widget tag cloud -->
        <div class="widget widget-tag-cloud">
            <a class="btn btn-theme btn-title-more" href="#">See All</a>
            <h4 class="widget-title"><span>Tags</span></h4>
            <ul>
                <li><a href="#">Gadgets</a></li>
                <li><a href="#">Electronic</a></li>
                <li><a href="#">Top Sellers</a></li>
                <li><a href="#">E commerce</a></li>
                <li><a href="#">Hot Deals</a></li>
                <li><a href="#">Supplier</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Theme</a></li>
                <li><a href="#">Website</a></li>
                <li><a href="#">Isamercan</a></li>
                <li><a href="#">Themeforest</a></li>
            </ul>
        </div>
        <!-- /widget tag cloud -->
        <!-- widget products carousel -->
        <div class="widget">
            <a class="btn btn-theme btn-title-more" href="#">See All</a>
            <h4 class="widget-title"><span>Top products</span></h4>
            <div class="sidebar-products-carousel">
                <div class="owl-carousel" id="sidebar-products-carousel">
                	<?php
					$strSql = "SELECT * FROM products WHERE prod_status!='0' AND prod_topSeller_status='1' ORDER BY prod_id DESC LIMIT 3 ";
					$query = mysql_query($strSql);
					while($rs_product = mysql_fetch_array($query)){
						$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
						foreach (glob($dir) as $filename) {
							$filename = $filename;
						}
						?>
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                    <img src="<?php echo $filename ?>" alt="" style=" width:263px; height:auto;" />
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
                                </a>
                            </div>
                            <div class="caption text-center">
                                <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo stripslashes($rs_product['prod_name']) ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
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
                    	<?php
					}
					?>
                </div>
            </div>
        </div>
        <!-- /widget products carousel -->
        <!-- widget shop hot deals -->
        <div class="widget widget-shop-deals">
            <a class="btn btn-theme btn-title-more" href="#">See All</a>
            <h4 class="widget-title"><span>Hot Deals</span></h4>
            <div class="hot-deals-carousel">
                <div class="owl-carousel" id="hot-deals-carousel">
                    
                    <?php
					$strSql = "SELECT * FROM products WHERE prod_status!='0' AND prod_hot_status='1' ORDER BY prod_id DESC LIMIT 3 ";
					$query = mysql_query($strSql);
					while($rs_product = mysql_fetch_array($query)){
						$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
						foreach (glob($dir) as $filename) {
							$filename = $filename;
						}
						?>
                        <div class="thumbnail no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                    <img src="<?php echo $filename ?>" alt=""/>
                                    <span class="icon-view">
                                        <strong><i class="fa fa-eye"></i></strong>
                                    </span>
                                </a>
                            </div>
                            <div class="caption text-center">
                                <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo stripslashes($rs_product['prod_name']) ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                <div class="rating">
                                    <!--<span class="sta"></span>--><!--
                                    --><!--<span class="star active"></span>--><!--
                                    --><!--<span class="star active"></span>--><!--
                                    --><!--<span class="star active"></span>--><!--
                                    --><!--<span class="star active"></span>-->
                                </div>
                                <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                <div class="buttons">
                                    <a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;"  onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                    --><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                    --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                </div>
                            </div>
                        </div>
                    	<?php
					}
					?>
                </div>
            </div>
        </div>
    	<!-- /widget shop hot deals --><?php */?>
        <?php
	}
	?>
</aside>
<!-- /SIDEBAR -->