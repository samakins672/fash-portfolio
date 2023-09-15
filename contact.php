<?php
include('partials/config.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fash Shot It | Contact</title>
		<?php include('partials/_head.php') ?>
	</head>
	<body>
		
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center px-3" style="overflow-y: scroll;">
			<?php include('partials/_sidebar.php') ?>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
						<div class="col-md-8 ftco-animate">
							<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact</span></p>
							<h1 class="bread">Contact</h1>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section contact-section">
				<div class="container">
					<div class="row d-flex mb-5 contact-info">
						<div class="col-md-12 mb-4">
							<h2 class="h3 font-weight-bold">Contact Information</h2>
						</div>
						<div class="w-100"></div>
						<div class="col-md-6 d-flex">
							<div class="info bg-light p-4 pb-2">
								<p><span>Address:</span> 18b, Oladipo Bateye, GRA, Ikeja, Lagos, Nigeria</p>
								<p><span>Phone:</span> <a href="tel://+2347061874236">+234 706 187 4236</a></p>
								<p><span>Email:</span> <a href="mailto:fashinafestus@gmail.com">fashinafestus@gmail.com</a></p>
								<p><span>Website</span> <a href="https://portfolio.sannex.ng/fashshotit/">portfolio.sannex.ng/fashshotit</a></p>
							</div>
						</div>
						<div class="col-md-6 d-flex">
							<div class="info bg-light p-4 pb-2">
								<p><span class="icon icon-whatsapp"></span> <a href="https://wa.me/+2347061874236">+234 706 187 4236</a></p>
								<p><span class="icon icon-instagram"></span> <a href="https://instagram.com/festusfasina?igshid=ZGUzMzM3NWJiOQ">Fash Shot It</a></p>
								<p><span class="icon icon-linkedin-square"></span> <a href="https://www.linkedin.com/in/festus-fasina-8a984121a">Festus Fasina</a></p>
								<p><span class="icon icon-youtube"></span> <a href="https://youtube.com/@FashShotIt">Fash Shot It</a></p>

							</div>
						</div>
					</div>
					<div class="row block-9">
						<div class="col-md-8 d-flex mx-auto">
							<form action="partials/contact.php" class="bg-light p-5 contact-form php-email-form">
								<div class="form-group">
									<input name="name" type="text" id="name" class="form-control form-control-sm" placeholder="Your Name">
								</div>
								<div class="form-group">
									<input name="email" type="email" id="email" class="form-control form-control-sm" placeholder="Your Email">
								</div>
								<div class="form-group">
									<input name="subject" type="text" id="subject" class="form-control form-control-sm" placeholder="Subject">
								</div>
								<div class="form-group">
									<textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
								</div>
								<div class="my-3 bg-secondary text-white text-center">
									<div class="loading p-2" style="display: none;">Loading...</div>
									<div class="error-message p-2" style="display: none;"></div>
									<div class="sent-message p-2" style="display: none;">Your message has been sent. Thank you!</div>
								</div>
								<div class="form-group">
									<input type="submit" name="send" value="Send Message" class="btn btn-block btn-primary py-3 px-5">
								</div>
							</form>
						
						</div>
					</div>
				</div>
			</section>
			<footer class="ftco-footer ftco-bg-dark ftco-section">
	    	<?php include('partials/_footer.php') ?>
			</footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/bootstrap-datepicker.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.9.1/jquery.timepicker.min.js" integrity="sha512-+UV/u4sqwTpgK0d4vvTjan+ofWGwgTX9VkhLPKbRIQSolA4L8JmtJRk2zkh7Pv9ZtBQELMQury9Qf5RSA40N5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="assets/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script> -->
  <script src="assets/js/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>
    
	</body>
</html>