
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>About Us</h1>
                </div>
                <ul class="breadcrumb"></ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">

                <p class="text-center lead"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis.</p>
                <hr class="page-divider"/>
                <div class="row">
                    <div class="col-md-3">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img class="img-circle" src="img/blank-profile.png" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Electronic Name <small>Support team</small></h4>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img class="img-circle" src="img/blank-profile.png" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Electronic Name <small>Support team</small></h4>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img class="img-circle" src="img/blank-profile.png" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Electronic Name <small>Support team</small></h4>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail thumbnail-team no-border no-padding">
                            <div class="media">
                                <img class="img-circle" src="img/blank-profile.png" alt=""/>
                            </div>
                            <div class="caption">
                                <h4 class="caption-title">Electronic Name <small>Support team</small></h4>
                                <ul class="social-icons">
                                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                                <div class="caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
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

    </div>
    <!-- /CONTENT AREA -->