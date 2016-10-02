<?php
require_once('config/config.php');
if(isset($_REQUEST["method"]) && $_REQUEST["method"]=="checkOut"){
	//*** Start Transaction ***//
	mysql_query("BEGIN");
	
	$queryTrue = true;
	
	$member_id = $_POST['member_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address1 = $_POST['address1'];
	$amphures_id1 = $_POST['amphures_id1'];
	$districts_id1 = $_POST['districts_id1'];
	$provinces_id1 = $_POST['province_id1'];
	$zipcode1 = $_POST['zipcode1'];
	if(isset($_POST['shiptoDifInv']) && $_POST['shiptoDifInv'] == 1){
		$address2 = $_POST['address1'];
		$districts_id2 = $_POST['districts_id1'];
		$amphures_id2 = $_POST['amphures_id1'];
		$provinces_id2 = $_POST['province_id1'];
		$zipcode2 = $_POST['zipcode1'];
	}else{
		$address2 = $_POST['address2'];
		$districts_id2 = $_POST['districts_id2'];
		$amphures_id2 = $_POST['amphures_id2'];
		$provinces_id2 = $_POST['province_id2'];
		$zipcode2 = $_POST['zipcode2'];
	}
	$email = $_POST['email'];
	$phone_number = $_POST['phone_number'];
	$additional = $_POST['additional'];
	$typeOfPay = $_POST['typeOfPay'];
	$amount_price = $_POST['amount_price'];
	$order_cerate_dt = $_POST['order_cerate_dt'];
	
	$sqlStr = "INSERT INTO orders(member_id, firstname, lastname, address1, districts_id1, amphures_id1, provinces_id1, zipcode1, address2, districts_id2, amphures_id2, provinces_id2, zipcode2, email, phone_number, additional, typeOfPay, amount_price, order_status, order_cerate_dt) VALUES ('$member_id','$firstname','$lastname','$address1','$districts_id1','$amphures_id1','$provinces_id1','$zipcode1','$address2','$districts_id2','$amphures_id2','$provinces_id2','$zipcode2','$email','$phone_number','$additional','$typeOfPay','$amount_price','1',NOW())";
	$objQuery = mysql_query($sqlStr);
	echo $order_id = mysql_insert_id();
	if(!$objQuery){
		$queryTrue = false;
	}
	
	for($i=0;$i<count($_POST['product_id']);$i++){
		$product_id = $_POST['product_id'][$i];
		$price = $_POST['price'][$i];
		$quantity = $_POST['quantity'][$i];
		$sum_price = $_POST['sum_price'][$i];
		
		echo $sqlStr_detail = "INSERT INTO order_detail(order_id, products_id, price, quantity, sum_price) VALUES ('$order_id','$product_id','$price','$quantity','$sum_price')";
		$objQuery_detail= mysql_query($sqlStr_detail);
		if(!$objQuery_detail){
			$queryTrue = false;
		}
	}
	
	if($queryTrue==true){
		//*** Commit Transaction ***//
		mysql_query("COMMIT");
		setcookie('cart', null, -1, '/');
		?>
		<script>
			alert('คุณได้สั่งซื้อ Order จากเว็บไซต์ เรียบร้อยแล้ว กรุณารออีเมลล์ ตอบกลับจากเว็บไซต์');
			window.parent.location.href='/';
		</script>
		<?php
		exit();
	}else{
		//*** Commit Transaction ***//
		mysql_query("ROLLBACK");
		?>
		<script>
			alert('ระบบเกิดข้อผิดพลาด...กรุณาลองใหม่อีกครั้งค่ะ');
			//window.parent.location.href='';
		</script>
		<?php
		exit();
	}
}
?>