<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/ico" />
        <title>Admin | View All Bookings  </title>
        <?php $this->load->view("dashboard_imports-top");?>
        <link href="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php $this->load->view("dashboard_sidebar");?>
                <?php $this->load->view("dashboard_topbar");?>
                <div class="right_col" role="main">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="x_panel bg-transparant">
                                    <div class="x_title">
                                        <h2>All Horses</h2>
                                        <div class="nav navbar-right panel_toolbox">
                                            <a href="<?php echo base_url(); ?>Horses/addhorse" > <button class="btn btn-flat btn-dark"><i class="fa fa-plus"></i> Add Horse </button></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <div class="row pt-10">
										<?php if ($result) {?>
											<?php foreach ($result as $key => $horse) {?>
												<div class="col-md-4 col-sm-4 col-xs-12 horse_details">
													<div class="well profile_view">
														<div class="col-sm-12">
															<div class="right col-xs-5">
																<?php if ($horse['horse-image'] != '') {?>
																	<img src="<?php echo base_url(); ?><?php echo $horse['horse-image']; ?>"alt="Horse image" class="img-circle img-responsive">
																<?php } else {?>
																	<img src="<?php echo base_url(); ?>assets/dashboard/images/horse_profile.jpg" alt="" class="img-circle img-responsive">
																<?php }?>
															</div>
															<div class="left col-xs-7">
																<h2><?php echo ucwords($horse['nameOfHorse']); ?></h2>
																<div class="table-responsive">
																	<table class="table table-condensed table-borderless">
																		<tbody>
																			<tr>
																				<td>Height</td>
																				<td> : </td>
																				<td> <?php echo $horse['height'] ?></td>
																			</tr>
																			<tr>
																				<td>Weight</td>
																				<td> : </td>
																				<td> <?php echo $horse['weight'] ?></td>
																			</tr>
																			<tr>
																				<td>Age</td>
																				<td> : </td>
																				<td> <?php echo $horse['age'] ?></td>
																			</tr>
																			<tr>
																				<td>Color</td>
																				<td> : </td>
																				<td>  <?php echo $horse['color'] ?></td>
																			</tr>

																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="col-xs-12 border-top text-center">
															<div class="col-xs-12 col-sm-12 emphasis">
																<h5>9 Rides Assigned In this Week</h5>
															</div>
															<div class="col-xs-12 col-sm-12 emphasis">
																<button type="button" class="btn btn-flat btn-theme btn-xs">
																	<i class="fa fa-eye"> </i> View Details
																</button>
															</div>
														</div>
													</div>
												</div>
											<?php }?>
										<?php } else {?>
											<div class="col-xs-12 text-center">
												<h4 class="text-danger"><b>Horses not found.</b></h4>
											</div>
										<?php }?>
                                        </div>
                                    </div>
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
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    </body>
</html>
