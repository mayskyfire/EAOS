<?php
require "../config/config.php";

if($_REQUEST["method"]=="delOrder"){
	if($_REQUEST["id"]!=""){
		$order_id = (int)$_REQUEST["id"];
		
	}

	$sqlStr = "DELETE FROM orders WHERE order_id='$order_id'";
	$objQuery = mysql_query($sqlStr) or die (mysql_error());
	
	if($objQuery){
		echo '<script>alert("Deleted Order Success."); window.location.href="order.php?id='.$order_id.'";</script>';
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
	$('.nav-tabs li#order').addClass('active');
});

</script>
</head>
<body>
<?php require "inc_menu.php"; ?>
<div class="bs-example">
<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>ชื่อ - นามสกุล</th>
                <th>วันที่</th>
                <th>ราคารวม</th>
                <th>สถานะ</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	<?php
			$sqlStr = "SELECT * ";
			$sqlStr .= "FROM orders a ";
			$sqlStr .= "ORDER BY order_id DESC ";
			
			$objQuery = mysql_query($sqlStr) or die (mysql_error());
			$intNumField = mysql_num_fields($objQuery);
			$order_resultArray = array();
			while($obResult = mysql_fetch_array($objQuery))
			{
			?>
            <tr>
                <td>#<?php echo $obResult["order_id"] ?></td>
                <td><?php echo $obResult["firstname"]." ".$obResult["lastname"] ?></td>
                <td><?php echo date("d/m/Y H:i",strtotime($obResult["order_cerate_dt"])) ?></td>
                <td><?php echo number_format($obResult["amount_price"],2,'.',',') ?></td>
                <td>
				<select name="order_status">
                	<option value="1" <?php if($obResult["order_status"]==1){?> selected <?php } ?>>
                     	Pending
                    </option>
                	<option value="2" <?php if($obResult["order_status"]==2){?> selected <?php } ?>>
                     	Process
                    </option>
                	<option value="3" <?php if($obResult["order_status"]==3){?> selected <?php } ?>>
                     	Delivey
                    </option>
                	<option value="4" <?php if($obResult["order_status"]==4){?> selected <?php } ?>>
                     	Complete
                    </option>
                </select>
                
                </td>
                <td>
               		<a href="order_detail.php?id=<?php echo $obResult["order_id"] ?>">
                	 <span class="glyphicon glyphicon-pencil" aria-hidden="true" style=" float:left; margin-right:10px;"></span>
                    </a>
                	<a href="order.php?method=delOrder&id=<?php echo $obResult["order_id"] ?>">
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
