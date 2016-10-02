

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
<script src="//tinymce.cachefly.net/4.3/tinymce.min.js"></script>
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }
	
	.dataTables_wrapper .dataTables_paginate .paginate_button{
		padding:0px;
	}
</style>

<?php

if(isset($_SESSION["admin"]) && $_SESSION["admin"]["admin_id"] != ""){
	if($_SERVER['REQUEST_URI']=="/backoffice/index.php" || $_SERVER['REQUEST_URI']=="/backoffice/" || $_SERVER['REQUEST_URI']=="/backoffice"){
		?>
		<script type="text/javascript">
		 window.location.href="order.php";
		</script>
		<?php
	}
}else{
	if(!($_SERVER['REQUEST_URI']=="/backoffice/index.php" || $_SERVER['REQUEST_URI']=="/backoffice/" || $_SERVER['REQUEST_URI']=="/backoffice")){
	?>
		<script type="text/javascript">
		 window.location.href="index.php";
		</script>
		<?php
	}
}
?>