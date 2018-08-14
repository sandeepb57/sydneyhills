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
										<h1 class="text-black">Select payment method</h1>
									</div>
								</div>
								<?php // if ($status == 200) {?>
									<div class="col-xs-10 col-xs-push-1 col-sm-8 col-sm-push-3  col-md-8 col-md-push-2 p-0">
										<a class="btn btn-primary btn-block" href="<?php echo base_url(); ?>BookHorses/ProceedToPay?bookingId=<?php echo $bookingId; ?>">Proceed to pay</a>
									</div>
								<?php // }?>
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
