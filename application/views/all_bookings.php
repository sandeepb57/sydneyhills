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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bookings Details</h2>
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
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Ride Type</th>
                                            <th>Date</th>
                                            <th>Timing</th>
                                            <th>Consecutive week</th>
                                            <th>No.of Riders</th>
                                            <th>Mobile number</th>
                                            <th>Ride Status</th>
                                            <th>E-mail</th>
                                            <th>Address</th>
                                            <th>Total price</th>
                                            <th>Ride Status Comments</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if($result){ ?>
										<?php foreach ($result as $key => $bookings) {?>
											<tr>
												<td><?php echo ucwords($bookings['firstName']) . ' ' . ucwords($bookings['lastName']); ?></td>
												<td><?php echo $bookings['typeOfRide']; ?></td>
												<td><?php echo date('d-m-Y',strtotime($bookings['rideDate'])); ?></td>
												<td><?php echo date('H:i A',strtotime($bookings['rideTime'])); ?></td>
												<td><?php echo $bookings['consecutiveWeek']; ?></td>
												<td><?php echo $bookings['noOfRiders']; ?></td>
												<td><?php echo $bookings['primaryPhoneNumber']; ?></td>
												<td>
													<?php
														$bookingStatus = '';
														$txtColor = $bookings['bookingStatus'] == 1 ? 'text-success' : 'text-danger';
														if ($bookings['bookingStatus'] == 1) {
															$bookingStatus = 'Confirmed';
														} else if ($bookings['bookingStatus'] == 2) {
															$bookingStatus = 'Cancelled';
														} else if ($bookings['bookingStatus'] == 3) {
															$bookingStatus = 'Denied';
														} else {

														}
													?>
													<label class="<?php echo $txtColor; ?>"><?php echo $bookingStatus; ?></label>
												</td>
												<td><?php echo $bookings['emailAddress']; ?></td>
												<td><?php echo $bookings['customerAddress']; ?></td>
												<td>
													<?php
														$price = ((int) ($bookings['consecutiveWeek'] == 0 ? 1 : $bookings['consecutiveWeek']) * (int) $bookings['noOfRiders'] * $bookings['rideAmount']);
														echo '$ '. $price;
													?>
												</td>
												<td><?php echo $bookings['bookingStatusComments'] == '' ? 'None' : $bookings['bookingStatusComments']; ?></td>
												<td>
													<?php if($bookings['bookingStatus'] == 1){ ?>
														<button type="button" class="btn btn-sm btn-danger" onclick="addCommentBeforeDeny(<?php echo $bookings['bookingId'] ?>);" >Deny</button>
													<?php } else{echo 'No actions.';} ?>
												</td>
											</tr>
										<?php }}else{?>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td><h3 class="text-danger">No bookings</h3></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										<?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" ><span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </button>
                                    <h4 class="modal-title"></h4>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
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
        <script src="<?php echo base_url(); ?>assets/dashboard/js/adminallbookings.js"></script>
    </body>
</html>
