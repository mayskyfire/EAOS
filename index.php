<?php require_once('config/config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EAOS Shop</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <!--<link rel="shortcut icon" href="ico/favicon.ico">-->

    <!-- CSS Global -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    
    <link href="plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    
    <link href="plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="plugins/animate/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery-ui.min.css">

    <!-- Theme CSS -->
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/theme-red-2.css" rel="stylesheet" id="theme-config-link">

    <!-- Head Libs -->
    <script type="text/javascript" src="plugins/modernizr.custom.js"></script>
    

    <!--[if lt IE 9]>
    <script src="plugins/iesupport/html5shiv.js"></script>
    <script src="plugins/iesupport/respond.min.js"></script>
    <![endif]-->
</head>
<body id="home" class="wide">
<!-- PRELOADER -->
<!--<div id="preloader">
    <div id="preloader-status">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">Loading</div>
    </div>
</div>-->
<!-- /PRELOADER -->

<!-- WRAPPER -->
<div class="wrapper">

    <!-- Popup: Shopping cart items -->
    <?php include('popup-cart.php'); ?>
    <!-- /Popup: Shopping cart items -->

    <!-- Header top bar -->
    <?php include('top-bar.php'); ?>
    <!-- /Header top bar -->

    <!-- HEADER -->
    <?php include('container_header.php'); ?>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <?php
	if(isset($_GET['menu']) && $_GET['menu']!=""){
		include($_GET['menu'].'.php');
	}else{
		include('home.php');
	}
	?>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
    <?php include('container_footer.php'); ?>
    <!-- /FOOTER -->

    <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>
	<iframe name="frameMethode" id="frameMethode" style="display:none;"></iframe>
</div>
<!-- /WRAPPER -->



<!-- JS Global -->
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

<script src="plugins/bootstrap-select/js/bootstrap-select.min.js"></script>

<script src="plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
<?php /*?><script src="plugins/owl-carousel2/owl.carousel.min.js"></script><?php */?>
<script src="plugins/jquery.smoothscroll.min.js"></script>
<script src="plugins/smooth-scrollbar.min.js"></script>
<script src="plugins/jquery.sticky.min.js"></script>
<script src="plugins/jquery.easing.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- JS Page Level -->
<script src="js/theme.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="plugins/jquery.cookie.js"></script>
<script src="js/theme-config.js"></script>

    <script type="text/javascript" src="js/init.js"></script>
<!--<![endif]-->

	<script type="text/javascript">
	$(document).ready(function() {
		if(getCookie("cart")!=""){
			var cart = getCookie("cart");
			cart = JSON.parse(cart);
				
			var html_append = "";
			var price = 0.00;
			var id = null;
			
			$.each(cart, function(i,item) {
				id = parseInt(item.id);
				html_append = '<div class="media cart_list" id="cart_list_'+id+'">\
										<a class="pull-left" href="#"><img class="media-object item-image" src="'+item.img_thumb+'" alt=""></a>\
										<p class="pull-right item-price">'+item.price+' ฿</p>\
										<input type="hidden" name="cart_price" class="cart_price" value="'+parseFloat(item.price).toFixed(2)+'" />\
										<input type="hidden" name="cart_quantity" class="cart_quantity" value="1" />\
										<div class="media-body">\
											<h4 class="media-heading item-title"><a href="#"><qty>1</qty>x '+item.name+'</a></h4>\
											<p class="item-desc">'+item.name+'</p>\
										</div>\
									</div>';
				if($('#cart_list_'+id).length==0){
					$('.cart-items-inner .cart_sumprice').before(html_append);
				}else{
					var old_qty = parseInt($('#cart_list_'+id+' .cart_quantity').val());
					$('#cart_list_'+id+' .cart_quantity').val(old_qty+1);
					$('#cart_list_'+id+' qty').html(old_qty+1);
				}
			});
			
			
			$('.cart_price').each(function(){
				var new_price = $(this).val()*$(this).parent(this).find('.cart_quantity').val();
				price = parseFloat(new_price) + parseFloat(price);
				price = parseFloat(price).toFixed(2);
				
			});
			var sum_qty=0;
			$('.cart_quantity').each(function(){
				sum_qty += parseInt($(this).val());
			});
			$('.cart_sumprice .item-price').html(price+" ฿");
			$('.cart_sum_total').html(' '+sum_qty+' item(s) - '+price+' ฿ ');
		}
		
		<?php
		if($_REQUEST['menu']=="shopping-cart"){
			?>
			var cart = getCookie("cart");
			cart = JSON.parse(cart);
			var html_append="";
			$('.cart_list tbody').html("");
			var total_price = 0;
			$.each(cart, function(i,item) {
				html_append += '<tr>\
									  <td class="image"><a class="pull-left media-link" data-gal="prettyPhoto" href="'+item.img+'"><i class="fa fa-plus"></i><img src="'+item.img_thumb+'" alt="" style=" height:100px; width:auto;"></a></td>\
									  <td class="quantity">x'+item.qty+'</td>\
									  <td class="description">\
									  		<input type="hidden" name="product_id[]" value="'+item.id+'" />\
									  		<input type="hidden" name="price[]" value="'+item.price+'" />\
									  		<input type="hidden" name="quantity[]" value="'+item.qty+'" />\
									  		<input type="hidden" name="sum_price[]" value="'+parseFloat(item.price)*parseInt(item.qty)+'" />\
										  <h4><a href="?menu=category&catProd='+item.id+'">'+item.name+'</a></h4>\
									  </td>\
									  <td class="total">'+parseFloat(item.price)*parseInt(item.qty)+' ฿ <a href="#"><i class="fa fa-close"></i></a></td>\
								  </tr>';
				total_price += parseFloat(item.price)*parseInt(item.qty);
					
			});
			$('.cart_list tbody').append(html_append);
			$('.item-price').html(total_price+" ฿");
			$('#amount_price').val(total_price);
			
			
			$.ajax({  
				url:'method.php', 
				type: 'POST',
				data: {method:'get_zipcode'},
				timeout: 30000,
				async:false,
				success: function(result){
					$('zipcode1').html(result);
					$('zipcode2').html(result);
				}
			});
			$.ajax({  
				url:'method.php', 
				type: 'POST',
				data: {method:'get_districts'},
				timeout: 30000,
				success: function(result){
					$('#districts_id1').html(result);
					$('#districts_id2').html(result);
				}
			});
			
			$.ajax({  
				url:'method.php', 
				type: 'POST',
				data: {method:'get_province'},
				timeout: 30000,
				success: function(result){
					$('#province_id1').html(result);
					$('#province_id2').html(result);
				}
			});
			
			$.ajax({  
				url:'method.php', 
				type: 'POST',
				data: {method:'get_amphures'},
				timeout: 30000,
				success: function(result){
					$('#amphures_id1').html(result);
					$('#amphures_id2').html(result);
				}
			});
			
			$('#province_id1').change(function(){
				
				var amphures_id = $('#amphures_id1').val();
				var province_id = $('#province_id1').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_amphures',province_id:province_id},
					timeout: 30000,
					success: function(result){
						$('#amphures_id1').html(result);
					}
				});
				
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_districts',province_id:province_id, amphures_id:amphures_id},
					timeout: 30000,
					success: function(result){
						$('#districts_id1').html(result);
					}
				});
			});
			
			$('#amphures_id1').change(function(){
				
				var province_id = $('#province_id1').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_districts',province_id:province_id},
					timeout: 30000,
					success: function(result){
						$('#districts_id1').html(result);
					}
				});
			});
			
			
			$('#districts_id1').change(function(){
				var districts_id = $('#districts_id1').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_zipcode',districts_id:districts_id},
					timeout: 30000,
					success: function(result){
						$('#zipcode1').val(result);
					}
				});
			});
			
			$('#shiptoDifInv').click(function(){
				if($('#shiptoDifInv').prop('checked')==true){
					$('#invoice_address').show();
				}else{
					$('#invoice_address').hide();
				}
			});
			
			$('#province_id2').change(function(){
				
				var amphures_id = $('#amphures_id2').val();
				var province_id = $('#province_id2').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_amphures',province_id:province_id},
					timeout: 30000,
					success: function(result){
						$('#amphures_id2').html(result);
					}
				});
				
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_districts',province_id:province_id, amphures_id:amphures_id},
					timeout: 30000,
					success: function(result){
						$('#districts_id2').html(result);
					}
				});
			});
			
			$('#amphures_id2').change(function(){
				
				var province_id = $('#province_id2').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_districts',province_id:province_id},
					timeout: 30000,
					success: function(result){
						$('#districts_id2').html(result);
					}
				});
			});
			
			
			$('#districts_id2').change(function(){
				var districts_id = $('#districts_id2').val();
			
				$.ajax({  
					url:'method.php', 
					type: 'POST',
					data: {method:'get_zipcode',districts_id:districts_id},
					timeout: 30000,
					success: function(result){
						$('#zipcode2').val(result);
					}
				});
			});
			
			$('a[data-parent="#accordion"]').click(function(){
				var id = $(this).attr('rel');
				$('#typeOfPay').val(id);
			});
			<?php
		}else if($_REQUEST['menu']=="wishlist"){
			?>
			var wishlist = getCookie("wishlist");
			wishlist = JSON.parse(wishlist);
			var html_append="";
			$('.wishlist_list tbody').html("");
			$.each(wishlist, function(i,item) {
				html_append += '<tr>\
									  <td class="image"><a class="pull-left media-link" data-gal="prettyPhoto" href="'+item.img_thumb+'"><i class="fa fa-plus"></i><img src="'+item.img_thumb+'" style=" height:100px; width:auto;" alt=""/></a></td>\
									  <td class="description">\
										  <h4><a href="?menu=category&catProd='+item.id+'">'+item.name+'</a></h4>\
									  </td>\
									  <td class="price">'+parseFloat(item.price)*parseInt(item.qty)+' ฿</td>\
									  <td class="add"><a class="btn btn-theme btn-theme-dark btn-icon-left" href="javascript:;" onclick="setCookie_cart(\'cart\',\''+item.id+'\',1)"><i class="fa fa-shopping-cart"></i> Add to cart</a></td>\
									  <td class="total"><a href="#"><i class="fa fa-close"></i></a></td>\
								  </tr>';
					
			});
			$('.wishlist_list tbody').append(html_append);
			<?php
		}
		?>
			
			
		});
    </script>

</body>
</html>