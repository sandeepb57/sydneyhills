<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/ico" />
        <title>Welcome to Dashboard </title>
        <?php $this->load->view("dashboard_imports-top"); ?>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php $this->load->view("dashboard_sidebar"); ?>
                <?php $this->load->view("dashboard_topbar"); ?>
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Horse</h2>
                                    <!-- <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul> -->
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									<?php if ($this->session->flashdata("responseMsg")) {
										echo '<div class="text-center"><h4 class="text-danger">' . $this->session->flashdata("responseMsg") . '</h4></div>';
									}?>
                                    <form class="form-horizontal form-label-left pt-10" name="horse-submission-form" id="horse-submission-form" method="POST" action="<?php echo base_url(); ?>horses/sethorsesubmission" enctype="multipart/form-data" onsubmit="return validateHorseSubmissionFields();">
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" id="name" name="name" placeholder="Name" type="text">
                                            </div>
                                        </div>
										<div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="type-of-horse">Type of horse <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="type-of-horse" id="type-of-horse" placeholder="Type of horse" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="height">Height <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input class="form-control col-md-7 col-xs-12" name="height" id="height" placeholder="Height" type="text">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="weight">Weight <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" name="weight" id="weight" placeholder="Weight">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="age">Age <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" name="age" id="age" placeholder="Age">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="color">Color <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" name="color" id="color" placeholder="Color">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="describe-horse">Describe</label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
                                                <textarea class="form-control col-md-7 col-xs-12" name="describe-horse" id="describe-horse" placeholder="Describe about your horse"></textarea>
                                            </div>
                                        </div>
										<div class="item form-group">
                                            <label class="control-label col-md-4 col-sm-3 col-xs-12" for="describe-horse">Horse Image</label>
                                            <div class="col-md-5 col-sm-6 col-xs-12">
												<input type="file" class="form-control col-md-7 col-xs-12" name="horse-image" id="horse-image">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                 <a href="<?php echo base_url(); ?>horses" type="button" class="btn btn-dark">Cancel</a>
                                                <button type="submit" id="submit" class="btn btn-warning">Submit</button>
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

        <?php $this->load->view("dashboard_imports-bottom"); ?>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/fastclick/lib/fastclick.js"></script>
    </body>
</html>
