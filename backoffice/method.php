<?php
require_once('../config/config.php');

if(isset($_REQUEST["act"]) && $_REQUEST["act"]=="login"){
	$username =  $_POST['username'];
	$password =  md5($_POST['password']);
	if(filter_var($username, FILTER_VALIDATE_EMAIL)){
		$query = "SELECT * FROM admin WHERE admin_email='".$username."' ";
		$query2 = "SELECT * FROM admin WHERE (admin_email='".$username."' ) AND  admin_password='".$password."' ";
	}else{
		$query = "SELECT * FROM admin WHERE admin_username='".$username."' ";
		$query2 = "SELECT * FROM admin WHERE (admin_username='".$username."' ) AND  admin_password='".$password."' ";
	}
	$result = mysql_query( $query) or die("Error:" . mysql_error());
	$row = mysql_num_rows($result);
	if($row>0){
	
		$result2 = mysql_query( $query2) or die("Error:" . mysql_error());
		$row2 = mysql_num_rows($result2);
		if($row2>0){
			while($rs_login = mysql_fetch_array($result2)) { 
				$_SESSION["admin"]["admin_id"] = $rs_login["admin_id"];
				$_SESSION["admin"]["admin_username"] = $rs_login["admin_username"];
				$_SESSION["admin"]["admin_email"] = $rs_login["admin_email"];
				$_SESSION["admin"]["admin_firstname"] = $rs_login["admin_firstname"];
				$_SESSION["admin"]["admin_lastname"] = $rs_login["admin_lastname"];
			}
			?>
            <script type="text/javascript">
				
					window.parent.location.href="order.php";
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
	unset($_SESSION["admin"]);?>
	<script type="text/javascript">
       history.back();
    </script>
    <?php
    exit();
}


?>