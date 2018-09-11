<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url(); ?>" class="site_title"><span>SYDNEY HILLS</span></a>
        </div>
        <div class="clearfix"></div>
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
			<?php if(!$this->session->userdata('active')){ ?>
				<div class="menu_section">
					<h3>user</h3>
					<ul class="nav side-menu">
						<li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-home"></i> Dashboard </a></li>
						<li><a href="<?php echo base_url(); ?>dashboard/viewbookings"><i class="fa fa-calendar"></i>My Bookings </a></li>
					</ul>
				</div>
			<?php } ?>
			<?php if($this->session->userdata('active')){ ?>
				<div class="menu_section">
					<h3>Admin</h3>
					<ul class="nav side-menu">
						<li><a href="<?php echo base_url(); ?>dashboard/"><i class="fa fa-home"></i> Dashboard </a></li>
						<li><a href="<?php echo base_url(); ?>dashboard/allbookings"><i class="fa fa-calendar"></i>Bookings </a></li>
						<li>
							<a><i class="fa fa-desktop"></i> Manage Services <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a>View Services</a></li>
								<li><a>Restrict Date for Bookings</a></li>
							</ul>
						</li>
						<li><a><i class="fa fa-table"></i> Manage Horses <span class="fa fa-chevron-down"></span></a>
							<ul class="nav child_menu">
								<li><a href="<?php echo base_url(); ?>horses/addhorse">Add Horse</a></li>
								<li><a href="<?php echo base_url(); ?>horses">View All Horses</a></li>
							</ul>
						</li>

					</ul>
				</div>
			<?php } ?>
        </div>
    </div>
</div>
