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
	
	<!-- END nav -->
	
	<section class="hero-wrap">
		<div class="home-slider owl-carousel js-fullheight">
			<div class="slider-item js-fullheight" style="background-image:url(images/bg_1.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Mankraft Barbershop</span>
								<h2 style="color: #ffffff; font-size: 70px;">Modern & Fashionable</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight" style="background-image:url(images/bg_2.png);">
				<div class="overlay"></div>
				<div class="container">
					<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
						<div class="col-md-12 ftco-animate">
							<div class="text w-100 mt-5 text-center">
								<span class="subheading">Mankraft Barbershop</h2></span>
								<h2 style="color: #ffffff; font-size: 70px;">Best Latest Hairstyles</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
    	<div class="container py-5">
        	<div class="row py-2">
            	<div class="col-md-12 text-center">
                	<h2>Experience the Art of Grooming</h2>
                	<a href="services.php" class="btn btn-white btn-outline-white">BOOK NOW<a>
            	</div>
        	</div>
    	</div>
	</section>

	<section class="ftco-section ftco-intro" style="background-image: url(images/back1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span>Now Booking</span>
					<h2>Great Haircut & Premium Quality</h2>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 d-flex">
					<div class="img img-2 w-100 mr-md-2" style="background-image: url(images/hair.jpg);">
						
					</div>
				</div>
				<div class="col-md-6 ftco-animate makereservation p-4 p-md-5">
					<div class="heading-section ftco-animate mb-5">
						<span class="subheading">This is our secrets</span>
						<h2 class="mb-4">Perfect Hairstyles</h2>
						<p>Our main focus is on quality. Equipped with advanced technology, we provide top-notch services in haircut. Our well-trained and experienced staff ensure a luxurious experience that leaves you relaxed and stress-free. We specialize in a variety of services, including haircuts, shaves, facials and fashion hair dye. At Mankraft Barbershop, we pride ourselves on delivering exceptional care and style tailored to your needs.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Haircut</span>
					<h2 class="mb-4">Trendings Looks</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/Slick-Back-2.jpg');">
						</a>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/Crew-Cut-French-Crop-2.jpg');">
						</a>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/Quiff-Mohawk-Spik-1.jpg');">
						</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/BALD-FADE-2.jpg');">
						</a>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/Quiff-Mohawk-Spik-3.jpg');">
						</a>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="blog-entry">
						<a href="#" class="block-20" style="background-image: url('images/Slick-Back-4.jpg');">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-intro bg-primary">
		<div class="container py-5">
			<div class="row py-2">
				<div class="col-md-12 text-center">
					<h2>Your Friendly Neighbourhood Barbershop</h2>
					<a href="services.php" class="btn btn-white btn-outline-white">BOOK NOW</a>
				</div>
			</div>
		</div>
	</section>

	<?php include('includes/footer.php') ?>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


	<script src="js/jquery.min.js"></script>
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
            $("#datepickerr").datepickerr({
                dateFormat: "dd-mm-yy",
                minDate: 0,
                showOtherMonths: true,
                selectOtherMonths: true,
                changeMonth: true,
                changeYear: true
            });
        });

        $(document).ready(function() {
            $('#timepicker').timepicker({
                minTime: '10:00am', // Minimum time
                maxTime: '10:00pm', // Maximum time (22:00 is represented as '10:00pm' in 12-hour format)
                step: 30, // Time interval in minutes
            });
        });
    </script>
</body>
</html>