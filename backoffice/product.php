<?php
require "../config/config.php";

if($_REQUEST["method"]=="delProduct"){
	if($_REQUEST["id"]!=""){
		$product_id = (int)$_REQUEST["id"];
		
	}

	$sqlStr = "DELETE FROM products WHERE prod_id='$product_id'";
	$objQuery = mysql_query($sqlStr) or die (mysql_error());
	
	if($objQuery){
		echo '<script>alert("Deleted Order Success."); window.location.href="product.php?id='.$product_id.'";</script>';
		exit();
	}else{
		echo '<script>alert("Deleted Order Failed."); window.location.href="'.$_SERVER["HTTP_REFER"].'";</script>';
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
<style>
tr.group,
tr.group:hover {
    background-color: #ddd !important;
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable({
		
        "order": [[ 0, 'desc' ]],
        "displayLength": 25
	});
	
	$('.nav-tabs li').removeClass('active');
	$('.nav-tabs li#product').addClass('active');
});

</script>
</head>
<body>
<?php require "inc_menu.php"; ?>
<div class="bs-example">
<a href="addProduct.php" class="btn btn-info" role="button" style=" float:right; margin-bottom:10px;">สร้างสินค้า</a>
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>ชื่อสินค้า</th>
                <th>หมวดสินค้า</th>
                <th>วันที่สร้าง</th>
                <th>ราคาเดิม</th>
                <th>ส่วนลด</th>
                <th>ราคาขายจริง</th>
                <th>In Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	<?php
			$sqlStr = "SELECT * ";
			$sqlStr .= "FROM products a ";
			$sqlStr .= "LEFT JOIN product_category b ON (a.prodCat_id = b.prodCat_id) ";
			$sqlStr .= "ORDER BY a.prod_id DESC ";
			
			$objQuery = mysql_query($sqlStr) or die (mysql_error());
			$intNumField = mysql_num_fields($objQuery);
			$order_resultArray = array();
			while($obResult = mysql_fetch_array($objQuery))
			{
			?>
            <tr>
                <td>#<?php echo $obResult["prod_id"] ?></td>
                <td style=" width:300px;"><?php echo $obResult["prod_name"] ?></td>
                <td align="center"><?php echo $obResult["prodCat_name"] ?></td>
                <td><?php echo date("d/m/Y H:i",strtotime($obResult["prod_createDt"])) ?></td>
                <td align="right"><?php echo number_format($obResult["prod_old_price"],2,'.',',') ?></td>
                <td align="center"><?php echo $obResult["prod_discount"]*100 ?>%</td>
                <td align="right"><?php echo number_format($obResult["prod_price"],2,'.',',') ?></td>
                <td align="center"><?php echo $obResult["prod_inStock"] ?></td>
                <td align="center">
                	<a href="editProduct.php?id=<?php echo $obResult["prod_id"] ?>">
                	 <span class="glyphicon glyphicon-pencil" aria-hidden="true" style=" float:left; margin-right:10px;"></span>
                    </a>
                	<a href="product.php?method=delProduct&id=<?php echo $obResult["prod_id"] ?>">
                	 <span class="glyphicon glyphicon-remove" aria-hidden="true" style=" float:left;"></span>
                   </a>
                </td>
            </tr>
            <?php
			}
			?>
            
        </tbody>
    </table>
    </div>
</body>
</html>  