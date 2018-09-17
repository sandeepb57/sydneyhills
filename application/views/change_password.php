<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Welcome to Dashboard </title>
    <?php $this->load->view("dashboard_imports-top");?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view("dashboard_sidebar");?>
            <?php $this->load->view("dashboard_topbar");?>
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Change Password</h2>
                               	<div class="clearfix"></div>
                            </div>
                            <div class="x_content">
								<?php if ($this->session->flashdata("changePasswordError")) {
									echo '<label class="text-danger pull-right">' . $this->session->flashdata("changePasswordError") . '</label>';
								}?>
                                <form class="form-horizontal form-label-left pt-10" action="<?php echo base_url(); ?>loginregisterservices/setnewpassword" name="changePassword" id="changePassword" method="POST" onsubmit="return validatePasswordFields();">
                                    <div class="item form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="name">Current Password <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input id="currPwd" class="form-control col-md-7 col-xs-12" name="currPwd" placeholder="Current Password" type="password">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="newPwd">New Password <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input type="password" id="newPwd" name="newPwd" placeholder="New Password" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12" for="confirmPwd">Confirm New Password <span class="text-danger">*</span>
                                            </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input type="password" id="confirmPwd" name="confirmPwd" placeholder="Confirm New Password" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <a href="<?php echo base_url(); ?>dashboard" type="button" class="btn btn-dark">Cancel</a>
                                            <button id="submit" type="submit" class="btn btn-warning">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer>
                <div class="pull-right">
                    Copyright &copy;2018 <a href="http://sydneyhillshorseriding.com" target="_blank"> Sydneyhillshorseriding.com</a>. All Rights Reserved.
                </div>
                <div class="clearfix"></div>
            </footer>
        </div>
    </div>

    <?php $this->load->view("dashboard_imports-bottom");?>
	<script src="<?php echo base_url(); ?>assets/dashboard/vendors/fastclick/lib/fastclick.js"></script>
</body>

</html>
