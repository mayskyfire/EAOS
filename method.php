<?php
require_once('config/config.php');

if(isset($_GET["act"]) && $_GET["act"]=="login"){
	$username =  $_POST['username'];
	$password =  md5($_POST['password']);
	if(filter_var($username, FILTER_VALIDATE_EMAIL)){
		$query = "SELECT * FROM member WHERE member_email='".$username."' ";
		$query2 = "SELECT * FROM member WHERE (member_email='".$username."' ) AND  member_password='".$password."' ";
	}else{
		$query = "SELECT * FROM member WHERE member_username='".$username."' ";
		$query2 = "SELECT * FROM member WHERE (member_username='".$username."' ) AND  member_password='".$password."' ";
	}
	$result = mysql_query( $query) or die("Error:" . mysql_error());
	$row = mysql_num_rows($result);
	if($row>0){
	
		$result2 = mysql_query( $query2) or die("Error:" . mysql_error());
		$row2 = mysql_num_rows($result2);
		if($row2>0){
			while($rs_login = mysql_fetch_array($result2)) { 
				$_SESSION["user"]["user_id"] = $rs_login["member_id"];
				$_SESSION["user"]["user_username"] = $rs_login["member_username"];
				$_SESSION["user"]["user_email"] = $rs_login["member_email"];
				$_SESSION["user"]["user_firstname"] = $rs_login["member_firstname"];
				$_SESSION["user"]["user_lastname"] = $rs_login["member_lastname"];
			}
			?>
            <script type="text/javascript">
				<?php
				if(isset($_REQUEST['refPage']) && $_REQUEST['refPage']=="cart"){
					?>
					window.parent.location.href="index.php?menu=shopping-cart";
					<?php
				}else{
					?>
					window.parent.location.href="index.php?menu=home";
					<?php
				}
				?>
			</script>
            <?php
			exit();
		}else{
			?>
			<script type="text/javascript">
                alert('Your username or password was incorrect.');
				window.parent.document.loginform.password.value = "";
				window.parent.document.loginform.password.focus();
            </script>
             
            <?php
			exit();
		}
	}else{
		?>
		<script type="text/javascript">
			alert('Your username or email was not found.');
			window.parent.document.loginform.username.value = "";
			window.parent.document.loginform.password.value = "";
			window.parent.document.loginform.username.focus();
		</script>
		<?php
		exit();
	}
}
if(isset($_GET["act"]) && $_GET["act"]=="logout"){
	unset($_SESSION["user"]);?>
	<script type="text/javascript">
       history.back();
    </script>
    <?php
    exit();
}

if(isset($_POST["method"]) && $_POST["method"]=="getCatProd"){
	$sqlStr = "SELECT * ";
	$sqlStr .= "FROM product_category ";
	$objQuery = mysql_query($sqlStr);
	$catProd_resultArray = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$sqlStrContProd = "SELECT * ";
		$sqlStrContProd .= "FROM products ";
		$sqlStrContProd .= "WHERE prodCat_id = '".$obResult['prodCat_id']."' ";
		$objQueryContProd = mysql_query($sqlStrContProd);
		$contProd = mysql_num_rows($objQueryContProd);
	
		$arrCol['prodCat_id'] = $obResult['prodCat_id'];
		$arrCol['prodCat_name'] = $obResult['prodCat_name'];
		$arrCol['prodCat_des'] = $obResult['prodCat_des'];
		$arrCol['prodCat_detail'] = $obResult['prodCat_detail'];
		$arrCol['prodCat_like'] = $obResult['prodCat_like'];
		$arrCol['prodCat_createDt'] = $obResult['prodCat_createDt'];
		$arrCol['prodCat_createBy'] = $obResult['prodCat_createBy'];
		$arrCol['prodCat_updateDt'] = $obResult['prodCat_updateDt'];
		$arrCol['prodCat_updateBy_id'] = $obResult['prodCat_updateBy_id'];
		$arrCol['contProd'] = $contProd;
		
		array_push($catProd_resultArray,$arrCol);	
	}
	
	echo json_encode($catProd_resultArray);
}

if(isset($_REQUEST["method"]) && $_REQUEST["method"]=="addCart"){
	
	$ck_expire_day=10; // กำหนดวันที่ต้องการ ให้ตัวแปร cookie  
    $ck_expire=time()+($ck_expire_day*60*60*24); // กำหนดคำนวณ วินาทีต่อวัน  
	
	$sqlStr = "SELECT * ";
	$sqlStr .= "FROM products ";
	$sqlStr .= "WHERE prod_id='".$_REQUEST["prod_id"]."' ";
	$objQuery = mysql_query($sqlStr);
	$prod_cart = array();
	while($obResult = mysql_fetch_array($objQuery))
	{
		$dir = "data/product/".sprintf('%0d',$obResult['prod_id']).'/*.*';
		foreach (glob($dir) as $filename) {
			$filename = $filename;
		}
		
		$prod_cart_col = array();
		$prod_cart_col['id'] = $obResult['prod_id'];
		$prod_cart_col['name'] = $obResult['prod_name'];
		$prod_cart_col['des'] = $obResult['prod_des'];
		$prod_cart_col['price'] = $obResult['prod_price'];
		$prod_cart_col['qty'] = 1;
		$prod_cart_col['img_thumb'] = $filename;
		
		array_push($prod_cart,$prod_cart_col);
		
	}
	
	echo json_encode($prod_cart);
}
if(isset($_POST["method"]) && $_POST["method"]=="get_zipcode"){
	$sqlStr = "SELECT * FROM zipcodes a ";
	$sqlStr .= "LEFT JOIN districts b ON (a.DISTRICT_CODE=b.district_code) ";
	if(isset($_POST["districts_id"]) && $_POST["districts_id"]!=""){
		$sqlStr .= "WHERE b.DISTRICT_ID = '".$_POST["districts_id"]."' ";
	}
	$objQuery = mysql_query($sqlStr);
	$obResult = mysql_fetch_array($objQuery);
	echo $obResult['zipcode'];
}

if(isset($_POST["method"]) && $_POST["method"]=="get_districts"){
	$sqlStr = "SELECT * FROM districts WHERE 1 ";
	if(isset($_POST["amphures_id"]) && $_POST["amphures_id"]!=""){
		$sqlStr .= "AND AMPHUR_ID = '".$_POST["amphures_id"]."' ";
	}else{
		if(isset($_POST["province_id"]) && $_POST["province_id"]!=""){
			$sqlStr .= "AND PROVINCE_ID = '".$_POST["province_id"]."' ";
		}
	}
	$objQuery = mysql_query($sqlStr);
	?>
    <option value="">---Select District---</option>
    <?php
	while($obResult = mysql_fetch_array($objQuery))
	{
		?>
        <option value="<?php echo $obResult['DISTRICT_ID'] ?>"><?php echo $obResult['DISTRICT_NAME'] ?></option>
        <?php
	}
}

if(isset($_POST["method"]) && $_POST["method"]=="get_amphures"){
	$sqlStr = "SELECT * FROM amphures WHERE 1 ";
	if(isset($_POST["province_id"]) && $_POST["province_id"]!=""){
		$sqlStr .= "AND PROVINCE_ID = '".$_POST["province_id"]."' ";
	}
	$objQuery = mysql_query($sqlStr);
	?>
    <option value="">---Select Amphur---</option>
    <?php
	while($obResult = mysql_fetch_array($objQuery))
	{
		?>
        <option value="<?php echo $obResult['AMPHUR_ID'] ?>"><?php echo $obResult['AMPHUR_NAME'] ?></option>
        <?php
	}
}

if(isset($_POST["method"]) && $_POST["method"]=="get_province"){
	$sqlStr = "SELECT * FROM provinces ";
	$objQuery = mysql_query($sqlStr);
	?>
    <option value="">---Select Province---</option>
    <?php
	while($obResult = mysql_fetch_array($objQuery))
	{
		?> 
        <option value="<?php echo $obResult['PROVINCE_ID'] ?>"><?php echo $obResult['PROVINCE_NAME'] ?></option>
        <?php
	}
}

?>