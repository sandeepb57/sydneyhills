<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="" />
        <meta name="author" content="AmeriPro Solutions" />
        <meta name="description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983."/>

        <!-- Facebook and Twitter integration -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:title" content="Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches"/>
        <meta name="twitter:description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983."/>
        <meta name="twitter:image:src" content=""/>
        <meta property="og:description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983."/>
        <meta property="og:title" content="Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches"/>
		<meta property="og:image" content=""/>
		<script src='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/lib/jquery.min.js'></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/page_wise/login-register.js"></script>
        <?php $this->load->view("imports-top");?>

    </head>
    <body class="login-wrapper">
        <div role="main" class="container login-form animated fadeIn">
            <div class="col-xxs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row">
                    <div id="auth-header" class="pb-5">
                        <div class="brand-logo">
                            <a href="<?php echo base_url(); ?>">
                                <img  src="<?php echo base_url(); ?>assets/images/logo-big.png" class="img-responsive" alt=""/>
                            </a>
						</div>
						<center class="text-danger">
							<strong>
								<?php if ($this->session->flashdata('loginError')) {?>
								<?php echo $this->session->flashdata('loginError'); ?>
								<?php }?>
							</strong>
						</center>
                    </div>
                    <form name="shlogin" id="shlogin" action="<?php echo base_url(); ?>LoginRegisterServices/LoginService" method="POST" />
						<div class="form-group">
							<label for="loginusername" class="small text-bold text-muted">Email</label>
							<input type="text" class="form-control" name="loginusername" id="loginusername" autocomplete="username">
						</div>
						<div class="form-group">
							<label for="loginpassword" class="small text-bold text-muted">Password</label>
							<span class="btn-show-pass">
								<i class="icon icon-eye-blocked"></i>
							</span>
							<input type="password" class="form-control" name="loginpassword" id="loginpassword" autocomplete="current-password">
						</div>
						<div class="pt-4 pb-5 mt-4">
							<input type="submit" class="mt-4 btn btn-login btn-dark text-center small btn-block"  name="shlsubmit" id="shlsubmit" value="Sign in">
						</div>
						<div class="clearfix"></div>
						<p class="small text-center text-bold text-muted"><a class="text-black text-muted td-none" href="javascript:void(0);">Forgot Password ?</a></p>
						<p class="ba-line small text-center text-bold text-muted">Don't have an account ?
							<a href="<?php echo base_url(); ?>loginregisterservices/signup"> <span id="show-signup-form" class="text-center text-bold">Sign up </span> </a>
						</p>
					</form>
                </div>
            </div>
		</div>
        <?php $this->load->view("imports-bottom");?>
    </body>
</html>
