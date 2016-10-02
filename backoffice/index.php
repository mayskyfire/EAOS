<?php
require "../config/config.php";

if(isset($_SESSION["user"]) && $_SESSION["user"]["user_id"] != ""){
	?>
	<script type="text/javascript">
	 window.location.href="order.php";
	</script>
	<?php
}else{
	?>
	<?php
}
                
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EAOS Backoffice</title>
<?php require "inc_head.php"; ?>
<style>
</style>
<script type="text/javascript">
$(document).ready(function() {
	
});
function validateForm_login(){
	var un = document.loginform.username.value;
	var pw = document.loginform.password.value;
	if ((un != "") && (pw != "")) {
		return true;
	}
	else {
		alert ("Login was unsuccessful, please check your username and password");
		return false;
	}
}

</script>
</head>
<body>
	<div class="container">
	<div class="row" style=" margin-top:40px;">
        <div class="col-xs-3"></div>
        <div class="col-xs-6">
        <form class="form-login" name="loginform" id="loginform" method="post" action="method.php?act=login" onsubmit="return validateForm_login();" target="frameMethode">
            <div class="form-group">
                <h2>Welcome EAOS Backoffice</h2>
            </div>
            <div class="form-group">
                <label for="inputEmail">Username</label>
                <input type="email" class="form-control" id="inputEmail" name="username" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
        <div class="col-xs-3"></div>
    </div>
    <iframe name="frameMethode" style=" display:none"></iframe>
</body>
</html>  