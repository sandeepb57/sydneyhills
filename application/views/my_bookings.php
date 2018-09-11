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
                    <div class="col-md-6 pt-5">
                        <div id="bookings" class="x_panel">
                            <div class="x_title">
                                <h2>My Bookings</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                    <!-- <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li> -->
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-responsive table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Ride Type</th>
                                                <th>Status</th>
                                                <th class="text-center">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php if($result){ ?>
												<?php foreach ($result as $key => $bookings) {?>
													<tr>
														<td><?php echo ($key + 1); ?></td>
														<td>
															<?php ?>
															<div class="book-date-wrapper">
																<div class="day-txt"><?php echo date('D', strtotime($bookings['rideDate'])); ?></div>
																<div class="num-date"><?php echo date('d', strtotime($bookings['rideDate'])); ?></div>
																<div class="md-txt"><?php echo date('M', strtotime($bookings['rideDate'])) . ' ' . date('Y', strtotime($bookings['rideDate'])); ?></div>
															</div>
														</td>
														<td>
															<div class="booking-details">
																<div class="ride-type"><?php echo $bookings['typeOfRide']; ?></div>
																<div class="slot-time">Slot Time : <?php echo date('H:i A', strtotime($bookings['rideTime'])); ?></div>
																<div class="no-of-riders">Consecutive week : <?php echo $bookings['consecutiveWeek']; ?></div>
																<div class="no-of-riders">No. Of.Riders : <?php echo $bookings['noOfRiders']; ?></div>
															</div>
														</td>

														<td>
															<?php
																$bookingStatus = '';
																$btnColor = $bookings['bookingStatus'] == 1 ? 'text-success' : 'text-danger';
																if($bookings['bookingStatus'] == 1){
																	$bookingStatus = 'Confirmed';
																}else if($bookings['bookingStatus'] == 2){
																	$bookingStatus = 'Cancelled';
																}else if($bookings['bookingStatus'] == 3){
																	$bookingStatus = 'Denied';
																}else{

																}
															?>
															<h5 class="<?php echo $btnColor; ?> btn-xs"><b><?php echo $bookingStatus; ?></b></h5>
														</td>
														<td>
															<div class="ride-price-details text-center">

																<?php $price = ((int) ($bookings['consecutiveWeek'] == 0 ? 1 : $bookings['consecutiveWeek']) * (int) $bookings['noOfRiders'] * $bookings['rideAmount']);?>

																<p class="ride-total-price">$ <?php echo $price; ?></p>

																<?php if ($bookings['bookingStatus'] == 1) {?>
																	<button class="btn btn-danger btn-xs" onclick="cancelBooking(<?php echo $bookings['bookingId']; ?>);"><i class="fa fa-remove"></i>&nbsp;Cancel booking</button>
																<?php }?>

															</div>
														</td>
													</tr>
												<?php }}else{?>
													<tr>
														<td></td>
														<td></td>
														<td>
															<h3 class="text-danger">No bookings</h3>
														</td>
														<td></td>
														<td></td>
													</tr>
												<?php }?>
                                        </tbody>
                                    </table>
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
	<script src="<?php echo base_url(); ?>assets/dashboard/js/userbookings.js"></script>
</body>

</html>
