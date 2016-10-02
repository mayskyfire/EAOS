<?php require_once('config/config.php') ?>
<?php



/** PHPExcel */
include 'lib/PHPExcel/Classes/PHPExcel.php';
			 
/** PHPExcel_IOFactory - Reader */
require_once 'lib/PHPExcel/Classes/PHPExcel/IOFactory.php';

$inputFileName = 'product3.xlsx';  
$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
$objReader = PHPExcel_IOFactory::createReader($inputFileType);
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load($inputFileName);  
 
$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
 
$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
$headingsArray = $headingsArray[1];
 
$r = -1;
$namedDataArray = array();
//ทำการดึงข้อมูลในแต่ละแถว เก็บใว้ในตัวแปล array โดยมี Index เป็นชื่อของ Colum (แถวแรก)
for ($row = 2; $row <= $highestRow; ++$row) {
	$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
	if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
		++$r;
		foreach($headingsArray as $columnKey => $columnHeading) {
			$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
		}
	}
}
foreach ($namedDataArray as $result) {
	//echo $strSql = " INSERT INTO brand(brand_name, brand_img, brand_createDt, brand_createBy_id) VALUES ('".$result['brand_name']."','".$result['brand_img']."',NOW(),'1')";
	$strSql = "INSERT INTO products(prodCat_id, brand_id, prod_name, prod_status, prod_hot_status, prod_news_status, prod_topSeller_status, prod_featured_status, prod_inStock, prod_price, prod_old_price, prod_discount, prod_detail, prod_des, prod_createDt, prod_createBy_id) VALUES ('".$result["prodCat_id"]."','". $result["brand_id"]."','". mysql_real_escape_string($result["prod_name"])."',1,0,1,0,0,'". $result["prod_inStock"]."','". $result["prod_price"]."','". $result["prod_old_price"]."','". $result["prod_discount"]."','','".mysql_real_escape_string($result["prod_des"])."',NOW(),1)";
	$query = mysql_query($strSql) or die("Error: " . mysql_error());
	if(!$query){
		echo mysql_error();	
	}
}
