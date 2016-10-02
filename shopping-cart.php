

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs">
            <div class="container">
                <div class="page-header">
                    <h1>Shopping Cart</h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="?menu=home">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->
  
        <!-- PAGE -->
        <section class="page-section color">
            <div class="container">
  
                <h3 class="block-title alt"><i class="fa fa-angle-down color"></i>1. Account</h3>
				  <?php
                  if(isset($_SESSION["user"]) && $_SESSION["user"]["user_id"] != ""){
					  $query = "SELECT * FROM member WHERE member_id='".$_SESSION["user"]["user_id"]."' ";
					  $result = mysql_query( $query) or die("Error:" . mysql_error());
					  while($rs_member = mysql_fetch_array($result)) { 
					 	 $address = $rs_member['address'];
					 	 $districts_id = $rs_member['districts_id'];
					 	 $amphures_id = $rs_member['amphures_id'];
					 	 $provinces_id = $rs_member['provinces_id'];
					 	 $zipcode = $rs_member['zipcode'];
					 	 $member_email = $rs_member['member_email'];
					 	 $tel = $rs_member['tel'];
						 	
					  }
                      ?>
                        <div class="row ">
                       <div class="col-md-12" style=" margin-bottom:20px; margin-top:0px;">
                       	<h4><?php echo $_SESSION['user']['user_firstname']." ".$_SESSION['user']['user_lastname'] ?></h4>
                       </div>
                       </div>
                      <?php
                  }else{
                      ?>
                      <form class="form-login" name="loginform" id="loginform" method="post" action="method.php?act=login&refPage=cart" onsubmit="return validateForm_login();" target="frameMethode">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" name="username" id="username" type="text" placeholder="User name or email"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><input class="form-control" name="password" id="password" type="password" placeholder="Your password"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 text-right-md">
                                <a class="forgot-password" href="#">Forgot your password ?</a>
                            </div>
                            <div class="col-md-12">
                                <p class="btn-row"><button class="btn btn-theme btn-theme-dark" type="submit">Login</button> <span class="text"> or </span> <button class="btn btn-theme btn-theme-dark" type="button">Create account</button></p>
                            </div>
                        </div>
                    </form>
                      <?php
                  }
                  ?>
                 
  				
                <form class="form-checkout" name="checkOut_form" id="checkOut_form" method="post" action="method_checkout.php?method=checkOut" target="frameMethode">
                	<h3 class="block-title alt"><i class="fa fa-angle-down"></i>2. Orders</h3>
                    <div class="row orders">
                        <div class="col-md-12">
                            <table class="table cart_list">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Product Name</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                            
                            <div class="cart-items">
                                <div class="media cart_sumprice">
                                    <p class="pull-right item-price">790.00 ฿</p>
                                    <input class="form-control" type="hidden" name="amount_price" id="amount_price" />
                                    <div class="media-body">
                                        <h4 class="media-heading item-title summary">Total</h4>
                                    </div>
                                </div>
                           </div>
                        </div>
                        
                    </div>
  				<input class="form-control" type="hidden" name="member_id" value="<?php if(isset($_SESSION["user"]) && $_SESSION["user"]["user_id"] != ""){echo $_SESSION["user"]["user_id"];} ?>">
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>3. Delivery address</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="firstname" placeholder="First Name" value="<?php echo $_SESSION['user']['user_firstname'] ?>"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="lastname" placeholder="Last Name" value="<?php echo $_SESSION['user']['user_lastname'] ?>"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="address1" id="address1" placeholder="Address" value="<?php if(isset($address) && $address != ""){echo $address;} ?>"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                    class="custom" data-live-search="false" required="required" data-width="100%" name="province_id1" id="province_id1" value="<?php if(isset($provinces_id) && $provinces_id != ""){echo $provinces_id;} ?>">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                    class="custom" data-live-search="false" required="required" data-width="100%"  name="amphures_id1" id="amphures_id1" value="<?php if(isset($amphures_id) && $amphures_id != ""){echo $amphures_id;} ?>">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group selectpicker-wrapper">
                                <select
                                    class="custom" data-live-search="false" required="required" data-width="100%" name="districts_id1" id="districts_id1" value="<?php if(isset($districts_id) && $districts_id != ""){echo $districts_id;} ?>">
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="zipcode1" placeholder="Postcode/ZIP" id="zipcode1" value="<?php if(isset($zipcode) && $zipcode != ""){echo $zipcode;} ?>"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="email" placeholder="Email" value="<?php if(isset($member_email) && $member_email != ""){echo $member_email;} ?>"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><input class="form-control" required="required" type="text" name="phone_number" placeholder="Phone Number" value="<?php if(isset($tel) && $tel != ""){echo $tel;} ?>"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><textarea class="form-control" name="additional" placeholder="Addıtıonal Informatıon" name="name" id="id" cols="30" rows="10"></textarea></div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="shiptoDifInv" id="shiptoDifInv" value="1"> Ship to  Different address for invoice
                                </label>
                            </div>
                            <div class="row" id="invoice_address" style=" display:none;">
                                <div class="col-md-12">
                                    <div class="form-group"><input class="form-control" type="text" name="address2" id="address2" placeholder="Address"></div>
                                </div>
                            	<div class="col-md-6">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="custom" data-live-search="false" data-width="100%" name="province_id2" id="province_id2">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="custom" data-live-search="false" data-width="100%"  name="amphures_id2" id="amphures_id2">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group selectpicker-wrapper">
                                        <select
                                            class="custom" data-live-search="false" data-width="100%" name="districts_id2" id="districts_id2">
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group"><input class="form-control" type="text" name="zipcode2" placeholder="Postcode/ZIP" id="zipcode2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
               
  				<input type="hidden" name="typeOfPay" id="typeOfPay" value="1" />
                <h3 class="block-title alt"><i class="fa fa-angle-down"></i>4. Payments options</h3>
                <div class="panel-group payments-options" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel radio panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne" rel="1">
                                    <span class="dot"></span> Direct Bank Transfer
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body">
                                <div class="alert alert-success" role="alert">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin ultrices suscipit. Sed commodo vel mauris vel dapibus.</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapseTwo" rel="2">
                                    <span class="dot"></span> Cheque Payment
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body">
                                Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapseThree" rel="3">
                                    <span class="dot"></span> Credit Card
                                </a>
                                <span class="overflowed pull-right">
                                    <img src="img/preview/payments/mastercard-2.jpg" alt=""/>
                                    <img src="img/preview/payments/visa-2.jpg" alt=""/>
                                    <img src="img/preview/payments/american-express-2.jpg" alt=""/>
                                    <img src="img/preview/payments/discovery-2.jpg" alt=""/>
                                    <img src="img/preview/payments/eheck-2.jpg" alt=""/>
                                </span>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3"></div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4" rel="4">
                                    <span class="dot"></span> PayPal
                                </a>
                                <span class="overflowed pull-right"><img src="img/preview/payments/paypal-2.jpg" alt=""/></span>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4"></div>
                    </div>
                </div>
                <div class="overflowed">
                    <a class="btn btn-theme btn-theme-dark" href="?menu=home">Home Page</a>
                    <button class="btn btn-theme pull-right" type="submit">Place Order</button>
                </div>
                </form>
  
  
  
            </div>
        </section>
        <!-- /PAGE -->
  
        <!-- PAGE -->
        <section class="page-section">
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
    