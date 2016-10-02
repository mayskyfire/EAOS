<?php
require "../config/config.php";
?>
<meta charset="UTF-8">
<?php

function deleteDirectory($dirPath) {
	if (is_dir($dirPath)) {
		$objects = scandir($dirPath);
		foreach ($objects as $object) {
			if ($object != "." && $object !="..") {
				if (filetype($dirPath . DIRECTORY_SEPARATOR . $object) == "dir") {
					deleteDirectory($dirPath . DIRECTORY_SEPARATOR . $object);
				} else {
					unlink($dirPath . DIRECTORY_SEPARATOR . $object);
				}
			}
		}
	reset($objects);
	rmdir($dirPath);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EAOS Backoffice</title>
<?php require "inc_head.php"; ?>
<script>
$(document).ready(function() {
    var table = $('#example').DataTable({
		
  		"searching": false,
		"lengthChange": false,
		"paging": false,
        "displayLength": 25
	});
	
	$('.nav-tabs li').removeClass('active');
	
	$.ajax({  
		url:'../method.php', 
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
		url:'../method.php', 
		type: 'POST',
		data: {method:'get_districts'},
		timeout: 30000,
		success: function(result){
			$('#districts_id1').html(result);
			$('#districts_id2').html(result);
		}
	});
	
	$.ajax({  
		url:'../method.php', 
		type: 'POST',
		data: {method:'get_province'},
		timeout: 30000,
		success: function(result){
			$('#province_id1').html(result);
			$('#province_id2').html(result);
		}
	});
	
	$.ajax({  
		url:'../method.php', 
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
			url:'../method.php', 
			type: 'POST',
			data: {method:'get_amphures',province_id:province_id},
			timeout: 30000,
			success: function(result){
				$('#amphures_id1').html(result);
			}
		});
		
		$.ajax({  
			url:'../method.php', 
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
			url:'../method.php', 
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
	
	
});
</script>
</head>
<body>
<?php require "inc_menu.php"; ?>
<div class="bs-example">
    <?php
	$sqlStr = "SELECT * ";
	$sqlStr .= "FROM orders ";
	$sqlStr .= "WHERE order_id = '".$_REQUEST['id']."' ";
	$objQuery = mysql_query($sqlStr) or die (mysql_error());
	$rs_order = mysql_fetch_array($objQuery);
	$order_id = $rs_order['order_id'];
	$member_id = $rs_order['member_id'];
	$firstname = $rs_order['firstname'];
	$lastname = mysql_real_escape_string($rs_order['lastname']);
	$address1 = $rs_order['address1'];
	$districts_id1 = $rs_order['districts_id1'];
	$amphures_id1 = $rs_order['amphures_id1'];
	$provinces_id1 = $rs_order['provinces_id1'];
	$zipcode1 = $rs_order['zipcode1'];
	$address2 = $rs_order['address2'];
	$districts_id2 = $rs_order['districts_id2'];
	$amphures_id2 = $rs_order['amphures_id2'];
	$provinces_id2 = $rs_order['provinces_id2'];
	$email = $rs_order['email'];
	$phone_number = $rs_order['phone_number'];
	$additional = $rs_order['additional'];
	$typeOfPay = $rs_order['typeOfPay'];
	$amount_price = $rs_order['amount_price'];
	$order_status = mysql_real_escape_string($rs_order['order_status']);
	$order_cerate_dt = mysql_real_escape_string($rs_order['order_cerate_dt']);
	?>
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="editProduct.php?method=editProduct&id=<?php echo $_REQUEST['id'] ?>">
        <div class="form-group">
        	<label class="control-label col-xs-12" for="title_delivery" style=" text-align:left; font-size:30px;">Delivery address</label>
        </div>
        <div class="form-group">
        	<label class="control-label col-xs-2" for="title_order">ชื่อ:</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" id="title_order" name="firstname" value="<?php echo $firstname ?>">
            </div>
            <label class="control-label col-xs-2" for="title_order">นามสกุล:</label>
            <div class="col-xs-3">
                <input type="text" class="form-control" id="title_order" name="lastname" value="<?php echo $lastname ?>">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-2" for="title_order">ที่อยู่:</label>
            <div class="col-xs-10">
               <textarea rows="3" class="form-control " id="inputDetail" name="address1"><?php echo $address1 ?></textarea>
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-xs-2"></div>
            <div class="col-xs-3">
            	<select class="form-control" data-width="100%" name="province_id1" id="province_id1" value="<?php if(isset($provinces_id1) && $provinces_id1 != ""){echo $provinces_id1;} ?>">
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control" data-width="100%"  name="amphures_id1" id="amphures_id1" value="<?php if(isset($amphures_id1) && $amphures_id1 != ""){echo $amphures_id1;} ?>">
                </select>
            </div>
            <div class="col-xs-4">
                <select class="form-control" data-width="100%"  name="districts_id1" id="districts_id1" value="<?php if(isset($districts_id1) && $districts_id1 != ""){echo $districts_id1;} ?>">
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-6">
            </div>
        </div>
        <div class="form-group">
            
            <label class="control-label col-xs-2" for="title_email">Zipcode:</label>
            <div class="col-xs-10">
            	<input type="text" class="form-control" id="zipcode1" name="zipcode1" value="<?php echo $zipcode1 ?>">
            </div>
        </div>
        <div class="form-group">
            
            <label class="control-label col-xs-2" for="title_email">Email:</label>
            <div class="col-xs-10">
            	<input type="text" class="form-control" id="title_email" name="email" value="<?php echo $email ?>">
            </div>
        </div>
        <div class="form-group">
            
            <label class="control-label col-xs-2" for="title_phone_number">Phone Number:</label>
            <div class="col-xs-10">
            	<input type="text" class="form-control" id="title_order" name="phone_number" value="<?php echo $phone_number ?>">
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-xs-12">
                <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>ชื่อสินค้า</th>
                        <th>ราคา</th>
                        <th>จำนวน</th>
                        <th>ราคารวม</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
					$sumPrice = 0;
                    $sqlStr = "SELECT * ";
                    $sqlStr .= "FROM order_detail a ";
                    $sqlStr .= "LEFT JOIN products b ON (a.products_id=b.prod_id) ";
                    $sqlStr .= "WHERE a.order_id = '".$_REQUEST['id']."' ";
                    
                    $objQuery = mysql_query($sqlStr) or die (mysql_error());
                    $intNumField = mysql_num_fields($objQuery);
                    $order_resultArray = array();
                    while($obResult = mysql_fetch_array($objQuery))
                    {
						$sumPrice+=$obResult["price"];
                    ?>
                    <tr>
                        <td align="center">#<?php echo $obResult["products_id"] ?></td>
                        <td><?php echo $obResult["prod_name"] ?></td>
                        <td align="right"><?php echo number_format($obResult["price"],2,'.',',') ?> ฿</td>
                        <td align="center"><?php echo $obResult["quantity"] ?></td>
                        <td align="right"><?php echo number_format($obResult["sum_price"],2,'.',',') ?> ฿</td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <table style=" width:100%">
            	<tr>
                    <td align="right">
                        ราคารวม :
                    </td>
                    <td align="right" style=" width:150px;">
                        <?php echo number_format($sumPrice,2,'.',',') ?> ฿
                    </td>
                </tr>
            </table>
            </div>
    	</div>
    </form>
</div>
</body>
</html>                                		