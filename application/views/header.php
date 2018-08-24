<header id="fh5co-header-section">
    <div class="container-fluid">
        <div class="nav-header">
            <a href="javascript:void(0);" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
            <a href="BookingHorses.php">
                <div id="fh5co-logo">
                    <img  src="<?php echo base_url(); ?>assets/images/header-min.jpg" class="img-responsive" alt=""/>
                </div>
            </a>
        </div>
        <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                <li><a href="javascript:void(0);">lessons</a></li>
                <li>
                    <a href="javascript:void(0);" class="fh5co-sub-ddown">Programs</a>
                    <ul class="fh5co-sub-menu">
                        <li><a href="javascript:void(0);">JUNIOR RIDERS CLUB</a></li>
                        <li><a href="javascript:void(0);">SCHOOL HOLIDAY CAMPS</a></li>
                        <li><a href="javascript:void(0);">PONY RIDES</a></li>
                        <li><a href="javascript:void(0);">MUM'S RIDING GROUP</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);">pony parties</a></li>
                <li><a href="javascript:void(0);">pricing</a></li>
                <li><a href="javascript:void(0);">agistment</a></li>
                <li><a href="javascript:void(0);">Contact</a></li>
					<?php if (empty($this->session->userdata("customerId"))) {?>
						<li id="showLogin"><a href="<?php echo base_url(); ?>LoginRegisterServices/Signin">Sign in</a></li>
						<li id="showSignup"><a href="<?php echo base_url(); ?>LoginRegisterServices/Signup">Sign up</a></li>
					<?php } else {?>
						<li><a href="<?php echo base_url(); ?>/Dashboard/userdashboard" class="text-primary"><?php echo $this->session->userdata("firstName") . " " . $this->session->userdata("lastName"); ?></a></li>
						<li><a href="<?php echo base_url(); ?>LoginRegisterServices/CustomerLogout" class="text-primary">Sign out</a></li>
					<?php }?>
                </ul>
            </nav>
        </div>
    </div>
</header>
