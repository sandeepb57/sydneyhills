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
        <?php $this->load->view("dashboard_imports-top"); ?>
        <link href="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php $this->load->view("dashboard_sidebar"); ?>
                <?php $this->load->view("dashboard_topbar"); ?>
                <div class="right_col" role="main">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bookings Details</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
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
                                            <th>Age</th>
                                            <th>Weight</th>
                                            <th>Horse Assigned</th>
                                            <th>Fees</th>
                                            <th>E-mail</th>
                                            <th>Ride Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger</td>
                                            <td>1Hr Private Lesson</td>
                                            <td>2011/04/25</td>
                                            <td>10:00 AM - 11 : 00 AM</td>
                                            <td>28</td>
                                            <td>61</td>
                                            <td>Lou's</td>
                                            <td>$352.00</td>
                                            <td>t.nixon@datatables.net</td>
                                            <td><button type="button" class="btn btn-sm btn-success"  data-toggle="modal" data-target=".status-change-modal"> Attended </button></td>
                                        </tr>
                                        <tr>
                                            <td>Garrett</td>
                                            <td>30mins Private Lesson</td>
                                            <td>2011/04/25</td>
                                            <td>10:00 AM - 11 : 00 AM</td>
                                            <td>28</td>
                                            <td>61</td>
                                            <td>Lou's</td>
                                            <td>$352.00</td>
                                            <td>t.nixon@datatables.net</td>
                                            <td><button type="button" class="btn btn-sm btn-warning"  data-toggle="modal" data-target=".status-change-modal"> Pending </button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade status-change-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span>
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel2">Change Rider Status</h4>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group col-md-8 col-md-push-2">
                                            <label>Select Ride Status</label>
                                            <select class="form-control">
                                                <option>Change Status</option>
                                                <option>Pending</option>
                                                <option>Attended</option>
                                                <option>Not Attended</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Save changes</button>
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
        <?php $this->load->view("dashboard_imports-bottom"); ?>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    </body>
</html>
