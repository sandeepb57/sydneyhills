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
    <?php $this->load->view("dashboard_imports-top");?>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view("dashboard_sidebar");?>
            <?php $this->load->view("dashboard_topbar");?>
            <div class="right_col" role="main">
                <div class="row">
					<?php // print_r($result); ?>
					<div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Rides</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 horses-summary">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class=" ride_img_block border-after">
                                    <div class="left">
                                        <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/total_rides.jpg" alt="total riders" />
                                    </div>
                                    <div class="right">
                                        <span class="ride-heading">Total Rides</span>
                                        <div>
                                            <?php echo $result['total_rides']; ?> in this month</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class=" ride_img_block border-after">
                                    <div class="left">
                                        <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/completed_rides.jpg" alt="total riders" />
                                    </div>
                                    <div class="right">
                                        <span class="ride-heading">Completed Rides</span>
                                        <div>
                                            <?php echo $result['completed']; ?> in this month</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class=" ride_img_block border-after">
                                    <div class="left">
                                        <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/cancelled_rides.jpg" alt="total riders" />
                                    </div>
                                    <div class="right">
                                        <span class="ride-heading">Cancelled Rides</span>
                                        <div>
                                            <?php echo $result['cancelled']; ?> in this month</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class=" ride_img_block">
                                    <div class="left">
                                        <img class="img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/total_horses.jpg" alt="total riders" />
                                    </div>
                                    <div class="right">
                                        <span class="ride-heading">Total Horses</span>
                                        <div>
                                            <?php echo $result['total_horses']; ?> Horses</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row tile_count">
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Horse Rides</span>
                        <div class="count">2500</div>
                        <span class="count_bottom"><i class="green"> <i class="fa fa-sort-asc"></i>4%</i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-clock-o"></i> Average Ride Hours</span>
                        <div class="count">25 hrs</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-dollar"></i> Total Collections</span>
                        <div class="count green">2,500</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-dollar"></i> Total Pendings</span>
                        <div class="count">4,567</div>
                        <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Employees</span>
                        <div class="count">200</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                        <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                        <div class="count">7,325</div>
                        <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
				</div> -->
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-9 col-sm-12 col-xs-12">
							<canvas id="myChart" style="background: #fff"></canvas>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
							<div class="x_title">
								<h2>Top Riding Details</h2>
								<div class="clearfix"></div>
							</div>

							<div class="col-md-12 col-sm-12 col-xs-6">
								<div>
									<p>Private Lessons (30 mins)</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="PrivateLessons30mins" role="progressbar"></div>
										</div>
									</div>
								</div>
								<div>
									<p>Private Lessons (1 hour)</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="PrivateLessons1hour" role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-6">
								<div>
									<p>Group Lessons</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="GroupLessons" role="progressbar" ></div>
										</div>
									</div>
								</div>
								<div>
									<p>Junior Riding Club (2 hours)</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="JuniorRidingClub2hours" role="progressbar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-6">
								<div>
									<p>Pony Lead (15 mins)</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="PonyLead15mins" role="progressbar"></div>
										</div>
									</div>
								</div>
								<div>
									<p>School Holiday Camps per day</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="SchoolHolidayCampsperday" role="progressbar"></div>
										</div>
									</div>
								</div>
								<div>
									<p>School Holiday Camps (3 days)</p>
									<div class="">
										<div class="progress progress_sm" style="width: 76%;">
											<div class="progress-bar bg-green" id="SchoolHolidayCamps3days" role="progressbar"></div>
										</div>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dashboard/js/admindashboard.js"></script>
</body>
</html>
