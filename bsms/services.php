<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$email=$_POST['email'];
	$users=$_POST['users'];
	$services=$_POST['services'];
	$adate=$_POST['adate'];
	$atime=$_POST['atime'];
	$phone=$_POST['phone'];
	$aptnumber = mt_rand(100000000, 999999999);


	$query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,BarberName,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$users','$phone','$adate','$atime','$services')");
	if ($query) 
	{
		echo "<script>alert('Thank you for booking, your appointment number is $aptnumber, we will give you phone call shortly.');</script>";  		
		echo "<script>window.location.href='index.php'</script>";	
	}
	else
	{
		echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	 	
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mankraft Barbershop Booking System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <?php include('includes/header.php') ?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.png');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate text-center mb-5">
                    <h1 class="mb-2 bread">Book Service Now</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-12 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="#" method="post" class="appointment-form">
                        <h3 class="mb-3">Book your Service</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="name" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" id="datepicker" name="adate" class="form-control" placeholder="Date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input id="timepicker" type="text" name="atime" class="form-control book_time" placeholder="Time" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="services" id="services" class="form-control" required>
                                                <option value="">Select Service</option>
                                                <?php
                                                $query = mysqli_query($con, "select * from tblservices");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option style="color: red;" value="<?php echo $row['ServiceName']; ?>"><?php echo $row['ServiceName']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="users" id="users" class="form-control" required>
                                                <option value="">Select Barber</option>
                                                <?php
                                                $query = mysqli_query($con, "select * from tblusers where permission='Staff/Barber' and status='1'");
                                                while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                                    <option style="color: red;" value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <input type="submit" name="submit" value="Book Now" class="btn btn-white">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 ftco-animate makereservation ">
                    <h1 class="mb-2 bread">Services</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Name</th>
                                <th>Service Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ret = mysqli_query($con, "select * from tblservices");
                            $cnt = 1;
                            while ($row = mysqli_fetch_array($ret)) {

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $cnt; ?></th>
                                    <td><?php echo $row['ServiceName']; ?></td>
                                    <td>RM<?php echo $row['Cost']; ?>.00</td>
                                </tr>
                            <?php
                                $cnt = $cnt + 1;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php') ?>
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: "dd-mm-yy",
                minDate: 0,
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true
            });
        });
		$(document).ready(function() {
        // Initialize timepicker with custom settings
        $('#timepicker').timepicker({
            // Your existing settings here

            // New settings for min, max, and interval
            minTime: '10:00am', // Minimum time
            maxTime: '10:00pm', // Maximum time (22:00 is represented as '10:00pm' in 12-hour format)
            step: 30, // Time interval in minutes
        	});
    	});
    </script>
</body>
</html>
