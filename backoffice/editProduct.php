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
if($_REQUEST["method"]=="editProduct"){
	if($_REQUEST["id"]!=""){
		$prod_id = (int)$_REQUEST["id"];
		
	}else{
		echo '<script>alert("กรุณาระบุชื่อข่าว"); history.back();</script>';
		exit();
	}
	if($_POST["prodCat_id"]!=""){
		$prodCat_id = $_POST["prodCat_id"];
	}else{
		echo '<script>alert("กรุณาเลือกหมวดหมู่"); history.back();</script>';
		exit();
	}
	$prodCat_id = $prodCat_id;
	$brand_id = $_POST['brand_id'];
	$prod_name = $_POST['prod_name'];
	$prod_status = 1;
	$prod_hot_status = $_POST['prod_hot_status'];
	$prod_news_status = $_POST['prod_news_status'];
	$prod_topSeller_status = $_POST['prod_topSeller_status'];
	$prod_featured_status = $_POST['prod_featured_status'];
	$prod_inStock = $_POST['prod_inStock'];
	$prod_price = $_POST['prod_price'];
	$prod_old_price = $_POST['prod_old_price'];
	$prod_discount = $_POST['prod_discount']/100;
	$prod_detail = $_POST['prod_detail'];
	$prod_des = $_POST['prod_des'];

	$sqlStr = "UPDATE products SET prodCat_id='$prodCat_id',brand_id='$brand_id',prod_name='$prod_name',prod_status='$prod_status',prod_hot_status='$prod_hot_status',prod_news_status='$prod_news_status',prod_topSeller_status='$prod_topSeller_status',prod_featured_status='$prod_featured_status',prod_inStock='$prod_inStock',prod_price='$prod_price',prod_old_price='$prod_old_price',prod_discount='$prod_discount',prod_detail='$prod_detail',prod_des='$prod_des',prod_updateDt=NOW(),prod_updateBy_id='".$_SESSION["admin"]["admin_id"]."' WHERE prod_id='$prod_id'";
	$objQuery = mysql_query($sqlStr) or die (mysql_error());
	
	if($objQuery){
		//alert("Create Product Success.");
		if($_FILES['fileUpload']['tmp_name']!=""){
			deleteDirectory('../data/product/'.$prod_id);
					
			//เพิ่มเข้ามา
			if (!is_dir('../data/product/'.$prod_id)){
				mkdir('../data/product/'.$prod_id, 0777, true);	
			}
			
			
			$ext = explode(".", strtolower($_FILES['fileUpload']['name']));
			$media_name = $prod_id."_".time().".".$ext[1];
			$uploaddir = '../data/product/'.$prod_id;
				
			$uploadfile = $uploaddir.'/'.$media_name;
			if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $uploadfile)){
			}else{
				echo '<script>alert("Update Product Failed."); window.location.href="'.$_SERVER["HTTP_REFER"].'";</script>';
				exit();	
			}
		}
		echo '<script>alert("Update Product Success."); window.location.href="editProduct.php?id='.$prod_id.'";</script>';
		exit();
	}else{
		echo '<script>alert("Update Product Failed."); window.location.href="'.$_SERVER["HTTP_REFER"].'";</script>';
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EAOS Backoffice</title>
<?php require "inc_head.php"; ?>

</head>
<body>
<?php require "inc_menu.php"; ?>
<div class="bs-example">
    <h2>สร้างสินค้า</h2>
    <?php
	$sqlStr = "SELECT * ";
	$sqlStr .= "FROM products ";
	$sqlStr .= "WHERE prod_id = '".$_REQUEST['id']."' ";
	$objQuery = mysql_query($sqlStr) or die (mysql_error());
	$rs_product = mysql_fetch_array($objQuery);
	$prod_id = $rs_product['prod_id'];
	$prodCat_id = $rs_product['prodCat_id'];
	$brand_id = $rs_product['brand_id'];
	$prod_name = mysql_real_escape_string($rs_product['prod_name']);
	$prod_status = $rs_product['prod_status'];
	$prod_hot_status = $rs_product['prod_hot_status'];
	$prod_news_status = $rs_product['prod_news_status'];
	$prod_topSeller_status = $rs_product['prod_topSeller_status'];
	$prod_featured_status = $rs_product['prod_featured_status'];
	$prod_inStock = $rs_product['prod_inStock'];
	$prod_price = $rs_product['prod_price'];
	$prod_old_price = $rs_product['prod_old_price'];
	$prod_discount = $rs_product['prod_discount'];
	$prod_detail = mysql_real_escape_string($rs_product['prod_detail']);
	$prod_des = mysql_real_escape_string($rs_product['prod_des']);
	?>
    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="editProduct.php?method=editProduct&id=<?php echo $_REQUEST['id'] ?>">
        <div class="form-group">
        	<label class="control-label col-xs-3">หมวดหมู่:</label>
            <div class="col-xs-9">
            	<select class="form-control" name="prodCat_id">
                    <option value="">เลือกหมวดหมู่</option>
                    <?php
					$sqlStr = "SELECT * ";
					$sqlStr .= "FROM product_category ";
					$sqlStr .= "ORDER BY prodCat_id DESC ";
					$objQuery = mysql_query($sqlStr) or die (mysql_error());
					while($rs_productCat = mysql_fetch_array($objQuery)){
						?>
                        <option value="<?php echo $rs_productCat["prodCat_id"] ?>" <?php if($prodCat_id==$rs_productCat['prodCat_id']){?> selected<?php }?>><?php echo $rs_productCat["prodCat_name"] ?></option>
                        <?php
					}
					?>
                </select>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-3" for="title_product">ชื่อสินค้า:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="title_product" name="prod_name" value="<?php echo $prod_name ?>">
            </div>
        </div>
        <!--<div class="form-group">
            <label class="control-label col-xs-3" for="inputDes">คำบรรยาย:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputDes" name="inputDes">
            </div>
        </div>-->
        <div class="form-group">
            <label class="control-label col-xs-3" for="fileUpload">รูปภาพ:</label>
            <div class="col-xs-9">
				<?php
                $dir = "../data/product/".(int)$prod_id."/*.*";
                foreach (glob($dir) as $filename) {
                   $filename = $filename;
                }
				if($filename!=""){
					?>
                    <img src="<?php echo $filename ?>" height="200px">
                    <?php	
				}
                ?>
                <input type="file" class="form-control" id="fileUpload" name="fileUpload">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputDetail">คำบรรยายใต้สินค้า:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control " id="inputDetail" name="prod_des"><?php echo $prod_des ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputDetail">รายละเอียดสินค้า:</label>
            <div class="col-xs-9">
                <textarea rows="5" class="form-control mceEditor" id="inputDetail" name="prod_detail"><?php echo $prod_detail ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputProductLink">In Stock:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="inputInStock" name="prod_inStock" value="<?php echo $prod_inStock ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputProductDate">ราคาเดิม:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="inputOldPrice" name="prod_old_price" placeholder="0.00"  step="any" value="<?php echo number_format($prod_old_price,2,'.',',') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputProductDate">ส่วนลด:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="discount" name="prod_discount" placeholder="" min="0" style=" width:20%; float:left; text-align:right" value="<?php echo $prod_discount*100 ?>"><span style=" float:left; margin:5px 0 0 5px;">%</span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputProductDate">ราคาขาย:</label>
            <div class="col-xs-9">
                <input type="number" class="form-control" id="inputPrice" name="prod_price" placeholder="0.00"  step="any" value="<?php echo number_format($prod_price,2,'.',',') ?>">
            </div>
        </div>
         <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="1" <?php if($prod_hot_status==1){?> checked<?php } ?> name="prod_hot_status"> Hot
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="1" <?php if($prod_news_status==1){?> checked<?php } ?> name="prod_news_status"> News
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="1" <?php if($prod_topSeller_status==1){?> checked<?php } ?> name="prod_topSeller_status"> Top Seller
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="1" <?php if($prod_featured_status==1){?> checked<?php } ?>	 name="prod_featured_status"> Featured
                </label>
            </div>
        </div>
        
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
                
            </div>
        </div>
    </form>
</div>
</body>
</html>                                		