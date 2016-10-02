	<?php
	if($_REQUEST['type']!=""){
		if($_REQUEST['type']=='new'){
			$filter = " AND prod_news_status='1' ";
			$cat_name_lv2 ='<li class="active">New</li>';
		}else if($_REQUEST['type']=='sale'){
			$filter = " AND prod_topSeller_status='1' ";
			$cat_name_lv2 ='<li class="active">Sale</li>';
		}else if($_REQUEST['type']=='shop'){
			$filter = " ";
			$cat_name_lv2 ='<li class="active">Shop</li>';
		}
		$linkCat ="&type=".$_REQUEST['type'];
	}else{
		$filter = " AND prodCat_id='".$_REQUEST['catProd']."' ";
		
		$strSql = "SELECT * FROM product_category WHERE prodCat_id='".$_REQUEST['catProd']."' ";//LIMIT 15
		$query = mysql_query($strSql);
		$rs_productCat = mysql_fetch_array($query);
		$cat_name_lv2 ='<li><a href="?menu=category&type=shop">Shop</a></li>';
		$cat_name = '<li class="active">'.$rs_productCat['prodCat_name'].'</li>';
		$only_cat_name = $rs_productCat['prodCat_name'];
		
		$linkCat ="&catProd=".$_REQUEST['catProd'];
	}
	?>
	
		
    <!-- CONTENT AREA -->
    <div class="content-area">

    	<!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1><?php echo $only_cat_name ?></h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <?php echo $cat_name_lv2 ?>
                    <?php echo $cat_name ?>
                </ul>
            </div>
        </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                    <?php include('side-bar.php'); ?>
                <!-- /SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-md-9 content" id="content">

                    <div class="main-slider sub">
                            <div class="owl-carousel" id="main-slider">
								<?php
								$dir = "data/category_silde/".sprintf('%0d',$_REQUEST['catProd']).'/*.*';
								$i=1;
								foreach (glob($dir) as $filename) {
									?>
                                    <div class="item slide<?php echo $i ?> sub">
                                        <img class="slide-img" src="<?php echo $filename ?>" alt=""/>
                                        <div class="caption">
                                            <div class="container">
                                                <div class="div-table">
                                                    <div class="div-cell">
                                                        <div class="caption-content">
                                                            <!--<h2 class="caption-title"><span>Electronic Gadgets</span></h2>
                                                            <h3 class="caption-subtitle"><span>Collection Ready</span></h3>-->
                                                            <p class="caption-text">
                                                                <a class="btn btn-theme" href="?menu=category_list<?php echo $linkCat ?>">Shop Now</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
									$i++;
								}
								?>
                                <?php /*?><!-- Slide 1 -->
                                <div class="item slide1 sub">
                                    <img class="slide-img" src="img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Electronic Gadgets</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
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
                                <div class="item slide2 sub">
                                    <img class="slide-img" src="img/preview/slider/slide-1-sub.jpg" alt=""/>
                                    <div class="caption">
                                        <div class="container">
                                            <div class="div-table">
                                                <div class="div-cell">
                                                    <div class="caption-content">
                                                        <h2 class="caption-title"><span>Electronic Gadgets</span></h2>
                                                        <h3 class="caption-subtitle"><span>Collection Ready</span></h3>
                                                        <p class="caption-text">
                                                            <a class="btn btn-theme" href="#">Shop Now</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Slide 2 --><?php */?>

                            </div>
                        </div>

                    <!-- shop-sorting -->
                    <div class="shop-sorting">
                        <div class="row">
                            <div class="col-sm-8">
                                <?php /*?><form class="form-inline" action="">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select">
                                            <option>Product Name</option>
                                            <option>Product Name</option>
                                            <option>Product Name</option>
                                        </select>
                                    </div>
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                                            data-toggle="tooltip" title="Select">
                                            <option>Select Manifacturers</option>
                                            <option>Select Manifacturers</option>
                                            <option>Select Manifacturers</option>
                                        </select>
                                    </div>
                                </form><?php */?>
                            </div>
                            <div class="col-sm-4 text-right-sm">
                                <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="?menu=category_list<?php echo $linkCat ?>"><img src="img/icon-list.png" alt=""/></a>
                                <a class="btn btn-theme btn-theme-transparent btn-theme-sm" href="?menu=category<?php echo $linkCat ?>"><img src="img/icon-grid.png" alt=""/></a>
                            </div>
                        </div>
                    </div>
                    <!-- /shop-sorting -->

                    <!-- Products List -->
                    <div class="products list">
                        <!-- / -->
                        <?php
							$strSql = "SELECT * FROM products WHERE prod_status!='0' ".$filter." ORDER BY prod_id DESC  ";//LIMIT 15
							$query = mysql_query($strSql);
							while($rs_product = mysql_fetch_array($query)){
								$dir = "data/product/".(int)$rs_product['prod_id'].'/*.*';
								foreach (glob($dir) as $filename) {
									$filename = $filename;
								}

								?>
                                <div class="thumbnail no-border no-padding">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="media">
                                                <a class="media-link" href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>">
                                                    <img src="<?php echo $filename ?>" alt="" style=" width:260px; height:auto;" />
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="caption">
                                                 <h4 class="caption-title"><a href="?menu=product-details&product_id=<?php echo $rs_product['prod_id'] ?>"><?php echo stripslashes($rs_product['prod_name']) ?></a></h4>
                                                <div class="rating">
                                                    <!--<span class="sta"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>--><!--
                                                    --><!--<span class="star active"></span>-->
                                                </div>
                                                <a class="reviews" href="#">16 reviews</a>
                                                <div class="overflowed">
                                                    <div class="availability">Availability: <strong>In stock</strong> <?php echo $rs_product['prod_inStock'] ?> Item(s)</div>
                                                    <div class="price"><ins><?php echo number_format($rs_product['prod_price'],2,'.',',') ?> ฿</ins> <del><?php echo number_format($rs_product['prod_old_price'],2,'.',',') ?> ฿</del></div>
                                                </div>
                                                <div class="caption-text"><?php echo stripslashes($rs_product['prod_detail']) ?></div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme btn-theme-transparent btn-icon-left" href="javascript:;" onclick="setCookie_cart('cart','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!--
                                                    --><a class="btn btn-theme btn-theme-transparent btn-wish-list" href="javascript:;" onclick="setCookie_wishlist('wishlist','<?php echo $rs_product['prod_id'] ?>',1)"><i class="fa fa-heart"></i></a><!--
                                                    --><!--<a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
							}
							?>
                        <!-- / -->
                        
                    </div>
                    <!-- /Products list -->

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><i class="fa fa-angle-double-left"></i> Previous</a></li>
                            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">Next <i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /Pagination -->

                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->

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