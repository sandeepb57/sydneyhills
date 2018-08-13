<footer>
    <div id="footer">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <p class="fh5co-social-icons">
                        <a href="#"><i class="icon-twitter2"></i></a>
                        <a href="#"><i class="icon-facebook2"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                        <a href="#"><i class="icon-dribbble2"></i></a>
                        <a href="#"><i class="icon-youtube"></i></a>
                    </p>
                    <p>Copyright 2018 Sydneyhillshorseriding.com. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-to-top" data-spy="affix" data-offset-top="70" class="back-to-top affix" style="">
    <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
</div>

<?php if (!$this->session->userdata("customerId")) {?>
	<!-- Login and registeration -->
	<div id="auth-modal" class="modal">
		<div class="modal-container">
			<div class="modal-header">
				<h4 id="auth-heading">Login</h4>
				<button id="close-modal" class="modal-close-button display-topright"><i class="icon icon-cross"></i></button>
			</div>
			<div class="animate">
				<div id="login_form" class="login-form animate" style="display: none;">
					<center class="text-danger">
						<strong>
						<?php if ($this->session->flashdata('loginError')) {?>
						<?php echo $this->session->flashdata('loginError'); ?>
						<?php }?>
						</strong>
					</center>
					<form name="shlogin" id="shlogin" action="<?php echo base_url(); ?>LoginRegisterServices/LoginService" method="POST" />
						<div class="form-group">
							<label for="loginusername" class="small text-bold text-muted">Email or Phone Number</label>
							<input type="text" class="form-control" name="loginusername" id="loginusername" autocomplete="username">
						</div>
						<div class="form-group">
							<label for="loginpassword" class="small text-bold text-muted">Password</label>
							<span class="btn-show-pass">
								<i class="icon icon-eye-blocked"></i>
							</span>
							<input type="password" class="form-control" name="loginpassword" id="loginpassword" autocomplete="current-password">
						</div>
						<div class="pt-4 pb-5 mt-4">
							<input type="submit" class="mt-4 btn btn-login btn-dark text-center small btn-block"  name="shlsubmit" id="shlsubmit" value="Sign in">
						</div>
						<div class="clearfix"></div>
						<p class="small text-center text-bold text-muted"><a class="text-black text-muted td-none" href="javascript:void(0);">Forgot Password ?</a></p>
						<p class="ba-line small text-center text-bold text-muted">Don't have an account ?
							<a href="javascript:void(0);"> <span id="show-signup-form" class="text-center text-bold">Sign up </span> </a>
						</p>
					</form>
				</div>
				<div id="register-form" class="register-form animate" style="display: none;">
					<form name="shregister" id="shregister" action="<?php echo base_url(); ?>LoginRegisterServices/RegisterService"  method="POST" autocomplete="off">
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label for="firstname" class="small text-bold text-muted">First Name</label>
							<input type="text" class="form-control" name="firstname" id="firstname" >
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label for="lastname" class="small text-bold text-muted">Last Name</label>
							<input type="text" class="form-control" name="lastname" id="lastname" >
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label for="phone" class="small text-bold text-muted">Phone</label>
							<input type="text" class="form-control" name="phone" id="phone" >
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-6">
							<label for="email" class="small text-bold text-muted">Email</label>
							<input type="email" class="form-control" name="email" id="email" >
						</div>
						<div class="form-group col-lg-12">
							<label for="address" class="small text-bold text-muted">Address</label>
							<textarea class="form-control" name="address" id="address" > </textarea>
						</div>
						<div class="form-group col-sm-6 col-md-6 col-lg-12">
							<label for="password" class="small text-bold text-muted">Password</label>
							<span class="btn-show-pass">
								<i class="icon icon-eye-blocked"></i>
							</span>
							<input type="password" class="form-control" name="password" id="password" >
						</div>
						<div class="form-group col-lg-12 py-5 pb-4">
							<label for="check-agree" class="custom-control-label small text-bold text-muted">
								<input type="checkbox" class="custom-checkbox mr-3 valign-top" name="check-agree" id="check-agree" value="1" >I agree to the Terms & Conditions
							</label>
						</div>
						<div class="clearfix"></div>
						<div class="py-5 pb-4 mt-4">
							<input type="submit" name="shcrsubmit" id="shcrsubmit" class="mt-4 btn btn-login btn-dark text-center small btn-block" value="Sign up">
						</div>
						<div class="clearfix"></div>
						<p class="ba-line small text-center text-bold text-muted">Already have an account ? <a href="javascript:void(0);"><span id="show-login-form" class="text-center text-bold" name="username">Sign in</span></a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-overlay"></div>
<?php }?>
