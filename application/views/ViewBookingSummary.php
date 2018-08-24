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

        <?php $this->load->view("imports-top");?>
    </head>
    <body>
        <div id="fh5co-wrapper">
            <div id="fh5co-page">

				<?php $this->load->view("header");?>

				<main>
					<div class="container">
						<div class="row  mt-40 mb-40">
							<div id="booking-summary">
								<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3 col-md-8 col-md-push-2">
									<div class="row mb-30">
										<h1 class="text-black"> Booking Summary</h1>
										<?php if ($status == 200) {?>
											<div class="panel panel-default">
												<div class="panel-header">
													<div class="panel-heading">
														<h2 class="panel-title text-black"> User Details</h2>
													</div>
													<div class="panel-toolbox">
														<a class="td-none bordered" href="javascript:void(0);"> <i class="fa fa-pencil"></i> Edit </a>
													</div>
												</div>
												<div class="panel-body">

													<div class="row">
														<div class="col-sm-6 col-md-6">
															<div class="table-responsive">
																<table class="table table-condensed table-borderless">
																	<thead></thead>
																	<tbody>
																		<tr>
																			<td>Name</td>
																			<td><?php echo $this->session->userdata('firstName') . ' ' . $this->session->userdata('lastName'); ?></td>
																		</tr>
																		<tr>
																			<td>Email</td>
																			<td><?php echo $this->session->userdata('emailAddress'); ?></td>
																		</tr>
																		<tr>
																			<td>Mobile</td>
																			<td><?php echo $this->session->userdata('primaryPhoneNumber'); ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="col-sm-6 col-md-6">
															<div class="table-responsive">
																<table class="table table-condensed table-borderless">
																	<thead>
																	</thead>
																	<tbody>
																		<tr>
																			<td>Address</td>
																		</tr>
																		<tr>
																			<td><?php echo $this->session->userdata('customerAddress'); ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2 class="panel-title text-black"> Ride Details</h2>
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-sm-12 col-md-12">
															<div class="table-responsive">
																<table class="table table-condensed table-bordered">
																	<thead>
																		<tr class="small text-muted text-bold">
																			<td>Type Of Ride</td>
																			<td>Schedule Ride Date</td>
																			<td>Ride Time</td>
																			<td>No.of Riders</td>
																		</tr>
																	</thead>
																	<tbody>
																		<tr class="small text-muted text-bold">
																			<td><?php echo $result[0]['typeOfRide']; ?></td>
																			<td><?php echo date("d-m-Y", strtotime($result[0]['rideDate'])); ?></td>
																			<td><?php echo $result[0]['rideTime']; ?></td>
																			<td><?php echo $result[0]['noOfRiders']; ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">
													<h2 class="panel-title text-black"> Rider Details</h2>
												</div>
												<div class="panel-body">
													<div class="row">
														<div class="col-sm-12 col-md-12">
															<div class="table-responsive">
																<table class="table table-condensed table-bordered">
																	<thead>
																		<tr class="small text-muted text-bold">
																			<td>S.NO</td>
																			<td>Name</td>
																			<td>Mobile</td>
																			<td>Email</td>
																			<td>Age</td>
																			<td>Height</td>
																			<td>Weight</td>
																			<td>Ability Level</td>
																			<td>Price</td>
																		</tr>
																	</thead>
																	<tbody>
																	<?php foreach ($result as $key => $data) {?>
																		<tr class="small">
																			<td><?php echo ($key + 1); ?></td>
																			<td><?php echo $data['firstName'] . ' ' . $data['lastName']; ?></td>
																			<td><?php echo $data['riderPhoneNumber']; ?></td>
																			<td><?php echo $data['riderEmail']; ?></td>
																			<td><?php echo $data['age']; ?></td>
																			<td><?php echo $data['height']; ?></td>
																			<td><?php echo $data['weight']; ?></td>
																			<td><?php echo $data['abilityName']; ?></td>
																			<td>$ <?php echo $data['rideAmount']; ?></td>
																		</tr>
																	<?php }?>
																		<tr class="small">
																			<td colspan="8" class="text-right small text-bold">Sub Total</td>
																			<td>$ <?php echo number_format((float) ($result[0]['noOfRiders'] * $result[0]['rideAmount']), 2); ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<div class="text-bold"><small><i>* Taxes are not included.</i></small></div>
														</div>
													</div>
												</div>
											</div>
										<?php } else {?>
											<div class="panel panel-default">
												<div class="panel-body">
													<div class="row">
														<div class="col-sm-12 col-md-12 text-bold">
															<center><?php echo $result; ?></center>
														</div>
													</div>
												</div>
											</div>
										<?php }?>
									</div>
								</div>
								<?php if ($status == 200) {?>
									<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3 col-md-8 col-md-push-2">
									<div class="row mb-30">
									<div class="col-xs-6  col-sm-6  col-md-6  ">
										<a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>Dashboard/viewbookings">Go to my bookings</a>
									</div>
									<div class="col-xs-6  col-sm-6  col-md-6 ">
										<a class="btn btn-success btn-block" href="<?php echo base_url(); ?>BookHorses/PayNow?bookingId=<?php echo base64_encode($this->encryption->encrypt($result[0]["bookingId"])); ?>">Pay now</a>
									</div>
									</div>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</main>

				<?php $this->load->view("footer");?>

    		</div>
		</div>

		<?php $this->load->view("imports-bottom");?>

	</body>
</html>
