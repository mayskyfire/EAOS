<?php require_once('config/config.php') ?>
<?php
/*$sqlStr="INSERT INTO product_category(prodCat_name, prodCat_des, prodCat_detail, prodCat_createDt, prodCat_createBy, prodCat_updateDt, prodCat_updateBy_id)  ";
$sqlStr.="VALUES ";
$sqlStr.="('Highlights at Lazada','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Health &amp; Beauty','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('FASHION','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Watches','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('JEWELLERY','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Mobiles &amp; Tablets','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Computers &amp; Laptops','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('TV, AUDIO, GAMING','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Cameras','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Home Appliances','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Home &amp; Living','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Baby &amp; Toddler','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Toys &amp; Games','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Sports','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Automotive','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('Travel &amp; Lifestyle','','',NOW(),1,NOW(),1) ";
$sqlStr.=",('BOOKS, GAMES &amp; MUSIC','','',NOW(),1,NOW(),1) ";*/

$sqlStr="INSERT INTO product_subcategory(prodSubCat_master_id, prodCat_id, prodSubCat_name, prodSubCat_des, prodSubCat_detail, prodSubCat_like, prodSubCat_createDt, prodSubCat_createBy_id, prodSubCat_updateDt, prodSubCat_updateBy_id) ";
$sqlStr.=" VALUES ";
/*$sqlStr.="('Beauty For Her','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Makeup','1','1','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Skin Care','1','1','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Bath &amp; Body','1','1','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Hair Care','1','1','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Beauty Tools','1','1','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Men&acute;s Care','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Fragrances','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Food Supplements','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Weight Management','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Sports Nutrition','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Well Being','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Beauty Supplements','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Medical Supplies','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Personal Care &amp; Pleasure','1','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Personal Pleasure','1','0','','','0',NOW(),'1',NOW(),'1') ";
echo $sqlStr.=",('Adult&acute;s Diapers','1','0','','','0',NOW(),'1',NOW(),'1') ";*/

/*$sqlStr.="('Women','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Clothing','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Bags','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Shoes','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Men','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Clothing','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Bags','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Shoes','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Fashion Kids','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Boys','2','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Girls','2','0','','','0',NOW(),'1',NOW(),'1') ";*/

$sqlStr.="('Mobiles','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Smartphones','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Basic Phones','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Tablets','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Tablets with Call Facility','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Tablets without Call Facility','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Mobile Accessories','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Cases &amp; Covers','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Car Accessories','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Batteries &amp; Chargers','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Headsets','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Speakers','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('View all','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Tablet Accessories','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Cases &amp; Covers','3','0','','','0',NOW(),'1',NOW(),'1') ";
$sqlStr.=",('Docks','3','0','','','0',NOW(),'1',NOW(),'1') ";
$query = mysql_query($sqlStr) or die(mysql_error());



?>
