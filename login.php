<?php
if(isset($_SESSION["user"]) && $_SESSION["user"]["user_id"] != ""){
	?>
	<script type="text/javascript">
		window.location.href="index.php?menu=home";
	</script>
	<?php
	exit();
}
?>
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- PAGE -->
    <section class="page-section color">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="block-title"><span>Login</span></h3>
                    
                    <form class="form-login" name="loginform" id="loginform" method="post" action="method.php?act=login" onsubmit="return validateForm_login();" target="frameMethode">
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Hello, welcome to your account</span>
                            </div>
                            <?php /*?><div class="col-md-12 col-lg-6">
                                <a class="btn btn-theme btn-block btn-icon-left facebook" href="#"><i class="fa fa-facebook"></i>Sign in with Facebook</a>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <a class="btn btn-theme btn-block btn-icon-left twitter" href="#"><i class="fa fa-twitter"></i>Sign in with Twitter</a>
                            </div><?php */?>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control" name="username" id="username" type="text" placeholder="User name or email" autocomplete="off" required></div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group"><input class="form-control" name="password" id="password" type="password" placeholder="Your password" required></div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6 text-right-lg">
                                <a class="forgot-password" href="#">forgot password?</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-theme btn-block btn-theme-dark" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h3 class="block-title"><span>Create New Account</span></h3>
                    <form action="#" class="create-account">
                        <div class="row">
                            <div class="col-md-12 hello-text-wrap">
                                <span class="hello-text text-thin">Create Your Account on Bellashop</span>
                            </div>
                            <div class="col-md-12">
                                <h3 class="block-title">Signup Today and You'll be able to</h3>
                                <ul class="list-check">
                                    <li>Online Order Status</li>
                                    <li>See Ready Hot Deals</li>
                                    <li>Love List</li>
                                    <li>Sign up to receive exclusive news and private sales</li>
                                    <li>Quick Buy Stuffs</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block btn-theme btn-theme-dark btn-create" href="#">Create Account</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="row blocks shop-info-banners">
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-gift"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Buy 1 Get 1</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-comments"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Call to Free</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="block">
                        <div class="media">
                            <div class="pull-right"><i class="fa fa-trophy"></i></div>
                            <div class="media-body">
                                <h4 class="media-heading">Money Back!</h4>
                                Proin dictum elementum velit. Fusce euismod consequat ante.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

</div>
<!-- /CONTENT AREA -->
