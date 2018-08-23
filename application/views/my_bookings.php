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
        <?php $this->load->view("dashboard_imports-top"); ?>
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php $this->load->view("dashboard_sidebar"); ?>
                <?php $this->load->view("dashboard_topbar"); ?>
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-md-6 pt-5">
                            <div id="bookings"  class="x_panel">
                                <div class="x_title">
                                    <h2>My  Bookings</h2>
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
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <div class="book-date-wrapper">
                                                            <div class="day-txt">Wed</div>
                                                            <div class="num-date">08</div>
                                                            <div class="md-txt">Aug 2018 </div> 
                                                        </div>  
                                                    </td>
                                                    <td>
                                                        <div class="booking-details">
                                                            <div class="ride-type">1Hr Private Lesson </div>
                                                            <div class="slot-time">Slot Time : 10:00 AM</div>
                                                            <div class="no-of-riders">No. Of.Riders : 2</div> 
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <button type="button" class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <div class="ride-price-details text-center">
                                                            <p class="ride-total-price">$ 220.00</p>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Cancel Booking </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <div class="book-date-wrapper">
                                                            <div class="day-txt">Wed</div>
                                                            <div class="num-date">08</div>
                                                            <div class="md-txt">Aug 2018 </div> 
                                                        </div>  
                                                    </td>
                                                    <td>
                                                        <div class="booking-details">
                                                            <div class="ride-type">1Hr Private Lesson </div>
                                                            <div class="slot-time">Slot Time : 10:00 AM</div>
                                                            <div class="no-of-riders">No. Of.Riders : 2</div> 
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <button type="button" class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <div class="ride-price-details text-center">
                                                            <p class="ride-total-price">$ 220.00</p>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Cancel Booking </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>
                                                        <div class="book-date-wrapper">
                                                            <div class="day-txt">Wed</div>
                                                            <div class="num-date">08</div>
                                                            <div class="md-txt">Aug 2018 </div> 
                                                        </div>  
                                                    </td>
                                                    <td>
                                                        <div class="booking-details">
                                                            <div class="ride-type">1Hr Private Lesson </div>
                                                            <div class="slot-time">Slot Time : 10:00 AM</div>
                                                            <div class="no-of-riders">No. Of.Riders : 2</div> 
                                                        </div>  
                                                    </td>

                                                    <td>
                                                        <button type="button" class="btn btn-success btn-xs">Success</button>
                                                    </td>
                                                    <td>
                                                        <div class="ride-price-details text-center">
                                                            <p class="ride-total-price">$ 220.00</p>
                                                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Cancel Booking </a>
                                                        </div>
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
                <footer>
                    <div class="pull-right">
                        Copyright &copy;2018 <a href="http://sydneyhillshorseriding.com" target="_blank"> Sydneyhillshorseriding.com</a>. All Rights Reserved.
                    </div>
                    <div class="clearfix"></div>
                </footer>
            </div>
        </div>
        <?php $this->load->view("dashboard_imports-bottom"); ?>
    </body>
</html>
