<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <meta name="author" content="AmeriPro Solutions" />
    <meta name="description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983." />

    <!-- Facebook and Twitter integration -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches" />
    <meta name="twitter:description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983." />
    <meta name="twitter:image:src" content="" />
    <meta property="og:description" content="Have fun with private or group riding lessons. Experienced coaches, pony parties, pony club, school holiday camps. In Dural only 35 min from CBD: 0421218983." />
    <meta property="og:title" content="Horse Riding Lessons, School Holiday Camps, Pony Parties: Expert Coaches" />
    <meta property="og:image" content="" />

    <script>
        var base_url = '<?php echo base_url(); ?>';
    </script>

    <link href='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
    <link href='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/lib/moment.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/lib/jquery.min.js'></script>
    <script src='<?php echo base_url(); ?>assets/fullcalendar/3.9.0/fullcalendar.min.js'></script>
    <script src="<?php echo base_url(); ?>assets/js/page_wise/bookhorses.js"></script>

    <?php $this->load->view("imports-top");?>
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <?php $this->load->view("header");?>
            <main>
                <div class="container">
                    <form class="booking-horses" name="booking-horses" id="booking-horses">
					<!-- action="<?php //echo base_url(); ?>BookHorses/ConfirmBookingDetails" method="post" -->
                        <div class="row  mt-105 mb-40">
                            <div class="desc2 animate-box">
                                <div class="col-sm-6 col-md-6">
                                    <div class="book-now-container tabulation animate-box">
                                        <div class="row">
                                            <h1 class="book-heading">Book Now</h1>
                                        </div>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="calendar">
                                                <div class="row">
                                                    <div class="col-sm-12 mt">
                                                        <div id="booking-calendar"></div>
                                                        <input type="hidden" name="booking-date" id="booking-date" value="" />
                                                    </div>
                                                    <div class="col-sm-12 mt">
                                                        <div class="col-sm-4 mt">
                                                            <div class="available"></div>Available</div>
                                                        <div class="col-sm-4 mt">
                                                            <div class="selected"></div>Selected</div>
                                                        <div class="col-sm-4 mt">
                                                            <div class="not-available"></div>Not Available</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->
                                    </div>
                                </div>
                                <div class="col-sm-6  col-md-6" id="show-booking-count">
                                    <h1 id="rides-available">Welcome to Sydney Hills Horse Riding Centre</h1>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-12 mt hidden" id="type-of-ride-view">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2 class="panel-title"> Ride details</h2>
                                                </div>
                                                <div class="panel-body">
													<div class="col-xxs-12 col-xs-12 alternate">
														<section>
															<div class="col-xxs-12 col-xs-6">
																<h5><b>Seleted Date, Time</b></h5>
															</div>
															<div class="col-xxs-12 col-xs-6">
																<h5 id="selected-date-time"></h5>
															</div>
														</section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt alternate">
                                                        <section>
															<select id="type-of-ride" name="type-of-ride" class="type-of-ride">
																<option value="" disabled selected>Select Type of Ride</option>
															</select>
                                                        </section>
                                                    </div>
                                                    <div class="col-xxs-12 col-xs-6 mt">
                                                        <section>
                                                            <select id="number-of-riders" name="number-of-riders" class="number-of-riders">
                                                        <option value="" disabled selected>Select Number of Riders</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-12 mt hidden" id="riders-cost">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2 class="panel-title" id="ride-type"></h2>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td><b>Riders</b></td>
                                                                    <td><b>Amount</b></td>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="riders-cost-details">

                                                            </tbody>
                                                        </table>
                                                    </div>
													<div class="text-bold"><small><i>* Taxes are not included.</i></small></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-xs-12 hidden" id="continue-after-date">
                                        <a href="#book-now" class="btn btn-primary btn-block"> Do you want to Continue, Click here</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div id="book-now" class="fadeInUp animated">

                            <div class="row" id="no-of-riders-forms">
                                <div class="col-sm-6 col-md-6 mt riders-form hidden">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h2 class="panel-title text-black">Rider</h2>
                                        </div>
                                        <div class="panel-body">
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-firstname">First Name</label>
                                                    <input type="text" class="form-control rider-firstname" id="rider-firstname" name="rider-firstname[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-lastname">Last Name</label>
                                                    <input type="text" class="form-control rider-lastname" id="rider-lastname" name="rider-lastname[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-email">Email</label>
                                                    <input type="text" class="form-control rider-email" id="rider-email" name="rider-email[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-mobile">Mobile</label>
                                                    <input type="text" class="form-control rider-mobile" id="rider-mobile" name="rider-mobile[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-age">Age</label>
                                                    <input type="text" class="form-control rider-age" id="rider-age" name="rider-age[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-height">Height</label>
                                                    <input type="text" class="form-control rider-height" id="rider-height" name="rider-height[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6">
                                                <div class="input-field">
                                                    <label for="rider-weight">Weight</label>
                                                    <input type="text" class="form-control rider-weight" id="rider-weight" name="rider-weight[]" />
                                                </div>
                                            </div>
                                            <div class="col-xxs-12 col-xs-6  alternate">
                                                <label for="class"> </label>
                                                <select name="ability-level[]" class="ability-level">
												<option value="">Select Ability Level </option>
												<option value="1">Beginner</option>
												<option value="2">Intermediate</option>
												<option value="3">Expert</option>
											</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-30 hidden" id="confirm-booking-btn">
                                <div class="col-xs-12 col-sm-6 col-sm-push-3">
                                    <?php if (!empty($this->session->userdata("customerId"))) {?>
                                    	<input type="submit" class="btn btn-primary btn-block" name="submit" id="submit" value="Confirm Booking">
                                    <?php } else {?>
                                    	<button type="submit" class="btn btn-primary btn-block" name="confirmbooking" id="confirmbooking" value="Confirm Booking">Confirm Booking</button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
            <?php $this->load->view("footer");?>
        </div>
    </div>
	<script src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
    <?php $this->load->view("imports-bottom");?>
</body>

</html>
