
function validateForm_login(){
	var un = document.loginform.username.value;
	var pw = document.loginform.password.value;
	if ((un != "") && (pw != "")) {
		return true;
	}
	else {
		alert ("Login was unsuccessful, please check your username and password");
		return false;
	}
}

function validateForm_checkout(){
	
}
$(document).ready(function() {
	if($(window).width()<992){
		$('.menu-list').stop().hide();
	}else{
		$('.menu-list').stop().show();
	}
	
   $.ajax({  
	  url:'method.php', 
	  type: 'POST',
	  data: {method:'getCatProd'},
	  dataType: 'json',
	  timeout: 30000,
	  async:true,
	  success: function(result){
		$('.shop-categories ul').html('');
		$.each(result, function(i,item) {
			$('.shop-categories ul').append('<li>\
												<a href="?menu=category&catProd='+item.prodCat_id+'">'+item.prodCat_name+'\
													<span class="count">'+item.contProd+'</span>\
												</a>\
											</li>');
		});
		  
	  }
   });
   
   $('.cat-toggle').click(function(){
	   if($('.menu-list').css('display')!=='none'){
	   		$('.menu-list').stop().slideUp();
	   }else{
	   		$('.menu-list').stop().slideDown();
	   }
   });
});

$(window).resize(function(e) {
    if($(window).width()<992){
		$('.menu-list').stop().hide();
	}else{
		$('.menu-list').stop().show();
	}
});


function setCookie_cart(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	$.ajax({  
		url:'method.php', 
		type: 'POST',
		data: {method:'addCart',prod_id:cvalue},
		dataType: 'json',
		timeout: 30000,
		async:false,
		success: function(result){
			
			var cart = getCookie("cart");
			
			var html_append = "";
			var price = 0.00;
			var id = null;
			
			var prod_cart = new Array();
			
			if(cart==""){
				document.cookie = cname + "=" + JSON.stringify(result) + "; " + expires;	
			}
			else{
				var cart = getCookie("cart");
				cart = JSON.parse(cart);
				
				var idList = new Array();
				$.each(cart, function(i,item) {
					idList.push(item.id);
				});
				$.each(cart, function(i,item) {
					if(cvalue==item.id && idList.indexOf(cvalue)!=-1){
						/*var prod_cart_col = new Array();
						prod_cart_col['id'] = item.id;
						prod_cart_col['name'] = item.name;
						prod_cart_col['des'] = item.des;
						prod_cart_col['price'] = item.price;
						prod_cart_col['img_thumb'] = item.img_thumb
						prod_cart.push(prod_cart_col);*/
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : item.qty+1,
							'img_thumb' : item.img_thumb
						});
					}else{
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : item.qty,
							'img_thumb' : item.img_thumb
						});	
					}
				});
			}
			
			
			
			$.each(result, function(i,item) {
				if(cart!=""){
					if(idList.indexOf(cvalue)==-1){
						/*var prod_cart_col = new Array();
						prod_cart_col['id'] = item.id;
						prod_cart_col['name'] = item.name;
						prod_cart_col['des'] = item.des;
						prod_cart_col['price'] = item.price;
						prod_cart_col['img_thumb'] = item.img_thumb;	
						prod_cart.push(prod_cart_col);*/
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : 1,
							'img_thumb' : item.img_thumb
						});
					}
				}else{
					prod_cart.push({
						'id' : item.id,
						'name' : item.name,
						'des' : item.des,
						'price' : item.price,
						'qty' : 1,
						'img_thumb' : item.img_thumb
					});	
				}
				
				id = parseInt(item.id);
				html_append = '<div class="media cart_list" id="cart_list_'+id+'">\
										<a class="pull-left" href="#"><img class="media-object item-image" src="'+item.img_thumb+'" alt=""></a>\
										<p class="pull-right item-price">'+item.price+' ฿</p>\
										<input type="hidden" name="cart_price" class="cart_price" value="'+parseFloat(item.price).toFixed(2)+'" />\
										<input type="hidden" name="cart_quantity" class="cart_quantity" value="1" />\
										<div class="media-body">\
											<h4 class="media-heading item-title"><a href="#">x<qty>1</qty> '+item.name+'</a></h4>\
											<p class="item-desc">'+item.name+'</p>\
										</div>\
									</div>';
			});
			//var jsonArray = JSON.parse(prod_cart);
			
			if(cart!=""){
				document.cookie = cname + "=" + JSON.stringify(prod_cart) + "; " + expires;	
			}
			
			
			if($('#cart_list_'+id).length==0){
				$('.cart-items-inner .cart_sumprice').before(html_append);
			}else{
				var old_qty = parseInt($('#cart_list_'+id+' .cart_quantity').val());
				$('#cart_list_'+id+' .cart_quantity').val(old_qty+1);
				$('#cart_list_'+id+' qty').html(old_qty+1);
			}
			//alert('Added to your cart');
			
			//setTimeout(function(){
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
				
			//},1000);
		}
	});
}

function setCookie_wishlist(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays*24*60*60*1000));
	var expires = "expires="+d.toUTCString();
	$.ajax({  
		url:'method.php', 
		type: 'POST',
		data: {method:'addCart',prod_id:cvalue},
		dataType: 'json',
		timeout: 30000,
		async:false,
		success: function(result){
			
			var cart = getCookie("wishlist");
			
			var html_append = "";
			var price = 0.00;
			var id = null;
			
			var prod_cart = new Array();
			
			if(cart==""){
				document.cookie = cname + "=" + JSON.stringify(result) + "; " + expires;	
			}
			else{
				var cart = getCookie("wishlist");
				cart = JSON.parse(cart);
				
				var idList = new Array();
				$.each(cart, function(i,item) {
					idList.push(item.id);
				});
				$.each(cart, function(i,item) {
					if(cvalue==item.id && idList.indexOf(cvalue)!=-1){
						/*var prod_cart_col = new Array();
						prod_cart_col['id'] = item.id;
						prod_cart_col['name'] = item.name;
						prod_cart_col['des'] = item.des;
						prod_cart_col['price'] = item.price;
						prod_cart_col['img_thumb'] = item.img_thumb
						prod_cart.push(prod_cart_col);*/
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : item.qty+1,
							'img_thumb' : item.img_thumb
						});
					}else{
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : item.qty,
							'img_thumb' : item.img_thumb
						});	
					}
				});
			}
			
			
			
			$.each(result, function(i,item) {
				if(cart!=""){
					if(idList.indexOf(cvalue)==-1){
						/*var prod_cart_col = new Array();
						prod_cart_col['id'] = item.id;
						prod_cart_col['name'] = item.name;
						prod_cart_col['des'] = item.des;
						prod_cart_col['price'] = item.price;
						prod_cart_col['img_thumb'] = item.img_thumb;	
						prod_cart.push(prod_cart_col);*/
						prod_cart.push({
							'id' : item.id,
							'name' : item.name,
							'des' : item.des,
							'price' : item.price,
							'qty' : 1,
							'img_thumb' : item.img_thumb
						});
					}
				}else{
					prod_cart.push({
						'id' : item.id,
						'name' : item.name,
						'des' : item.des,
						'price' : item.price,
						'qty' : 1,
						'img_thumb' : item.img_thumb
					});	
				}
				
			});
			
			if(cart!=""){
				document.cookie = cname + "=" + JSON.stringify(prod_cart) + "; " + expires;	
			}
			
		}
	});
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
    }
    return "";
}

function checkCookie(cname) {
    var num = getCookie(cname);
    if (num != "") {
        return 1;
    } else {
        //user = prompt("Please enter your name:", "");
        return 0;
    }
	
	
}