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

    <?php $this->load->view("imports-top");?>
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <?php $this->load->view("header");?>

            <main>
                <div class="container">
                    <div class="row  mt-40 mb-40">
						<?php if ($status == 200) {?>
							<div id="order-summary">
								<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3 col-md-8 col-md-push-2 p-0 text-center">
									<h2 class="page-title text-black text-bold"> Thank you for your Booking, </h2>
									<h2 class="page-title text-black text-bold"> Your Booking has been placed successfully </h2>
									<p>We will keep you informed once we received the latest information from our team. </p>
								</div>
								<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3 col-md-8 col-md-push-2">
									<div class="row mb-30" id="ordersummary">
										<div class="panel panel-default">
											<div class="panel-header">
												<div class="panel-heading">
													<h2 class="panel-title text-black">Booking Invoice</h2>
												</div>
												<div class="panel-toolbox">
													<a class="td-none" href="javascript:void(0);"> <i class="fa fa-print"></i> Print Invoice</a>
												</div>
											</div>
											<div class="panel-body">
												<div class="row">
													<div class="col-sm-12 col-md-12">
														<div class="table-responsive ">
															<table class="table table-condensed table-borderless">
																<thead class="small text-bold">
																	<th colspan="4">Customer Details</th>
																	<th colspan="2">Company address</th>
																</thead>
																<tbody>
																	<tr>
																	<td class="text-left" colspan="4">
																		<p class="dont-break-out small">
																		Name: Jilani Sk<br>
																		Mobile: 9966157155<br>
																		Email: sandeep@gmail.com<br>
																		Address:<br>
																		<?php echo $this->session->userdata("customerAddress"); ?>
																		</p>
																	</td>
																	<td>
																		<p class="dont-break-out small">66 Kenthurst Road<br> Dural, 2158,<br> NSW, Australia,<br> Ph: 0421 218983,<br> @: test@test.com
																		</p>
																	</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-sm-12 col-md-12">
														<div class="table-responsive">
															<table class="table table-condensed">
																<thead>
																	<tr>
																		<th class="small text-bold ">
																			Type Of Ride
																		</th>
																		<th class="small text-bold ">
																			Date and Time
																		</th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="text-bold">
																			<?php echo $result[0]['typeOfRide']; ?>
																		</td>
																		<td>
																			<?php echo date("d-m-Y", strtotime($result[0]['rideDate'])) . " " . date("H:i A", strtotime($result[0]['rideTime'])); ?>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-sm-12 col-md-12">
														<h3>Rider Details</h3>
														<div class="table-responsive">
															<table class="table table-bordered">
																<thead>
																	<tr class="small text-bold">
																		<th>S.NO</th>
																		<th>Name</th>
																		<th>Mobile</th>
																		<th>Email</th>
																		<th>Age</th>
																		<th>Height</th>
																		<th>Weight</th>
																		<th>Ability level</th>
																		<th>Price</th>
																	</tr>
																</thead>
																<tbody class="small">
																	<?php foreach ($result as $key => $data) {?>
																	<tr>
																		<td>
																			<?php echo ($key + 1); ?>
																		</td>
																		<td>
																			<?php echo $data['firstName'] . ' ' . $data['lastName']; ?>
																		</td>
																		<td>
																			<?php echo $data['riderPhoneNumber']; ?>
																		</td>
																		<td>
																			<?php echo $data['riderEmail']; ?>
																		</td>
																		<td>
																			<?php echo $data['age']; ?>
																		</td>
																		<td>
																			<?php echo $data['height']; ?>
																		</td>
																		<td>
																			<?php echo $data['weight']; ?>
																		</td>
																		<td>
																			<?php echo $data['abilityName']; ?>
																		</td>
																		<td>$
																			<?php echo $data['rideAmount']; ?>
																		</td>
																	</tr>
																	<?php }?>
																	<tr>
																		<td colspan="8" class="text-right small text-bold">Sub Total</td>
																		<td>$
																			<?php echo number_format((sizeof($result) * $result[0]['rideAmount']), 2) ?>
																		</td>
																	</tr>
																	</tr>
																	<tr>
																		<td colspan="8" class="text-right small  text-bold">Tax</td>
																		<td>$ 25</td>
																	</tr>
																	<tr>
																		<td colspan="8" class="text-right small  text-bold">Total</td>
																		<td>$
																			<?php echo number_format(((sizeof($result) * $result[0]['rideAmount']) + 25), 2) ?>
																		</td>
																	</tr>

																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3  col-md-8 col-md-push-2 p-0">
										<a href="javascript:void(0);" class="btn btn-primary btn-block"> Go to My Bookings</a>
									</div>
								</div>
							</div>
						<?php } else {?>
							<div id="order-summary-not-exist">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="row">
											<div class="col-sm-12 col-md-12 text-bold text-danger">
												<center><?php echo $result; ?></center>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
                    </div>
                </div>
            </main>
            <?php $this->load->view("footer");?>
        </div>
    </div>
    <?php $this->load->view("imports-bottom");?>
</body>

</html>
