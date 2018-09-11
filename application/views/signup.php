
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

        <?php $this->load->view("imports-top"); ?>

    </head>
    <body class="login-wrapper">
        <div role="main" class="container  animated fadeIn">
            <div class="col-xxs-12 col-sm-12 col-md-12 col-lg-12">

                <div class="row">
                    <div class="my-3 col-xxs-10 col-xxs-push-1 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3 p-5 bg-white box-shadow box-border">
                        <div id="auth-header" class="pb-5">
                            <div class="brand-logo">
                                <a href="<?php echo base_url(); ?>">
                                    <img  src="<?php echo base_url(); ?>assets/images/logo-big.png" class="img-responsive" alt=""/>
                                </a>
                            </div>
                            <center class="text-danger">
                                <strong>
                                    <?php if ($this->session->flashdata('registerError')) { ?>
                                        <?php echo $this->session->flashdata('registerError'); ?>
                                    <?php } ?>
                                </strong>
                            </center>
                        </div>
                        <form name="shregister" id="shregister" action="<?php echo base_url(); ?>LoginRegisterServices/RegisterService"  method="POST" autocomplete="off">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="firstname" class="small text-bold text-muted">First Name</label>
                                    <input type="text" class="form-control field" name="firstname" id="firstname" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="lastname" class="small text-bold text-muted">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="phone" class="small text-bold text-muted">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="email" class="small text-bold text-muted">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" >
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="address" class="small text-bold text-muted">Address</label>
                                    <textarea class="form-control" name="address" id="address" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="password" class="small text-bold text-muted">Password</label>
                                    <span class="btn-show-pass">
                                        <i class="icon icon-eye-blocked"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" id="password" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-12 py-5 pb-4">
                                <div class="form-group">
                                    <label for="check_agree" class="custom-control-label small text-bold text-muted">
                                        I agree to the Terms &#38; Conditions</label>
                                    <input type="checkbox" class="custom-checkbox mr-3 valign-top" name="check_agree" id="check_agree" value="1" >
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="py-5 pb-4 mt-4">
                                <input type="submit" name="shcrsubmit" id="shcrsubmit" class="mt-4 btn btn-login btn-dark text-center small btn-block" value="Sign up">
                            </div>
                            <div class="clearfix"></div>
                            <p class="ba-line small text-center text-bold text-muted">Already have an account ? <a href="<?php echo base_url(); ?>loginregisterservices/signin"><span id="show-login-form" class="text-center text-bold" name="username">Sign in</span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("imports-bottom"); ?>
    </body>
</html>
