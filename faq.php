
    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>FAQ</h1>
                </div>
                <ul class="breadcrumb"></ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">

                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>

                <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <span class="dot"></span> What are the delivery charges for orders from the Online Shop?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="dot"></span> Which payment methods are accepted in the Online Shop?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="dot"></span> How long will delivery take?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    <span class="dot"></span> How secure is shopping in the Online Shop? Is my data protected?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    <span class="dot"></span> What exactly happens after ordering?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading6">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    <span class="dot"></span> Do I receive an invoice for my order?
                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id convallis tellus. Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet. Vivamus et dolor nec nisl consectetur vulputate id non ante.
                            </div>
                        </div>
                    </div>
                    <!---->
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