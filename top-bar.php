<!-- Header top bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <ul class="list-inline">
            	
				<?php
                if(isset($_SESSION["user"]) && $_SESSION["user"]["user_id"] != ""){
                    ?>
                    <li class="icon-user"><a href="?menu=profile"><img src="img/icon-1.png" alt=""/> <span>Welcome <?php echo $_SESSION['user']['user_firstname']." ".$_SESSION['user']['user_lastname'] ?></span></a></li>
                    <li class="icon-form"><a href="?menu=method&act=logout"><span><span class="colored">Sign out</span></span></a></li>
                    <?php
                }else{
                    ?>
                    <li class="icon-user"><a href="?menu=login"><img src="img/icon-1.png" alt=""/> <span>Login</span></a></li>
                    <li class="icon-form"><a href="?menu=login"><img src="img/icon-2.png" alt=""/> <span>Not a Member? <span class="colored">Sign Up</span></span></a></li>
                    <li><a href="mailto:support@yourdomain.com"><i class="fa fa-envelope"></i> <span>support@yourdomain.com</span></a></li>
                    <?php
				}
				?>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="list-inline">
                <li class="hidden-xs"><a href="?menu=about">About</a></li>
                <!--<li class="hidden-xs"><a href="blog.html">Blog</a></li>-->
                <li class="hidden-xs"><a href="?menu=contact">Contact</a></li>
                <li class="hidden-xs"><a href="?menu=faq">FAQ</a></li>
                <li class="hidden-xs"><a href="?menu=wishlist">My Wishlist</a></li>
                <?php /*?><li class="dropdown currency">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">$ DOLLA<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">฿ BAHT</a></li>
                        <li><a href="#">$ DOLLA</a></li>
                        <li><a href="#">€ EURO</a></li>
                    </ul>
                </li><?php */?>
                <li class="dropdown flags">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/flag.gif" alt=""/> En<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#"><img src="img/flag.gif" alt=""/> Th</a></li>
                        <li><a href="#"><img src="img/flag.gif" alt=""/> En</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /Header top bar -->