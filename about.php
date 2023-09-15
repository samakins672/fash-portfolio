<?php
include('partials/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fash Shot It | About</title>
		<?php include('partials/_head.php') ?>
	</head>
	<body>
		
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center px-3" style="overflow-y: scroll;">
			<?php include('partials/_sidebar.php') ?>
		</aside> <!-- END COLORLIB-ASIDE -->

		<div id="colorlib-main">
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex align-items-center js-fullheight">
						<div class="author-image text img d-flex w-100">
							<section class="home-slider js-fullheight owl-carousel">
								<div class="slider-item js-fullheight" style="background-image: url(assets/images/author.jpg); background-position: top center;">
									<h1 class="p-4" style="color: white; font-size: 7vw; position: absolute; bottom: 0; left: 0; text-shadow: 1px 1px 5px black, 0 0 10px white;">About Me</h1>
								</div>
							</section>
						</div>
					</div>
					<div class="author-info text p-4 p-md-5 w-100">
						<div class="desc">
							<span class="subheading">Nice To Meet You</span>
							<h1 class="big-letter">Fash Shot It</h1>
							<h1 class="mb-4"><span>My Name is Festus Fasina</span></h1>
							<p class="mb-4">
								A professional photographer based in Lagos. I specialize in capturing the beauty of everyday
								moments, from weddings and engagements to family portraits and corporate events.
								<br>
								<br>
								I believe that photography is more than just taking pictures. It's about telling a story, capturing a feeling, and
								preserving a memory. I create images that are both beautiful and meaningful, and I'm passionate about helping my
								clients
								create lasting memories.
								<br>
								<br>
								I'm available for both indoor and outdoor shoots, and I'm happy to travel to your location. I offer a variety of
								packages to fit your budget, and I'm always happy to work with you to create a custom package that meets your specific
								needs.
								<br>
								<br>
								If you're looking for a photographer who can capture your special moments in a beautiful and meaningful way, I would
								be
								honored to work with you. Please contact me today to schedule a consultation
							</p>
							<h3 class="signature h1">Fash Shot It</h3>
							<ul class="ftco-social mt-3">
								<li class="ftco-animate"><a href="https://wa.me/+2347061874236"><span class="icon-whatsapp"></span></a></li>
								<li class="ftco-animate"><a href="https://instagram.com/festusfasina?igshid=ZGUzMzM3NWJiOQ"><span class="icon-instagram"></span></a></li>
								<li class="ftco-animate"><a href="https://www.linkedin.com/in/festus-fasina-8a984121a"><span class="icon-linkedin-square"></span></a></li>
								<li class="ftco-animate"><a href="https://youtube.com/@FashShotIt"><span class="icon-youtube"></span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets/images/bg_1.jpg);">
				<div class="container">
					<div class="row justify-content-start">
						<div class="col-md-10">
							<div class="row">
								<div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
									<div class="block-18">
										<div class="text d-flex align-items-center">
											<strong class="number" data-number="30">0</strong>
											<span>Event Coverage</span>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
									<div class="block-18">
										<div class="text d-flex align-items-center">
											<strong class="number" data-number="17">0</strong>
											<span>Studio Session</span>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
									<div class="block-18">
										<div class="text d-flex align-items-center">
											<strong class="number" data-number="570">0</strong>
											<span>Finished Photosessions</span>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
									<div class="block-18">
										<div class="text d-flex align-items-center">
											<strong class="number" data-number="460">0</strong>
											<span>Happy Clients</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ftco-section instagram">
				<?php include('partials/instagram_pics.php') ?>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.9.1/jquery.timepicker.min.js" integrity="sha512-+UV/u4sqwTpgK0d4vvTjan+ofWGwgTX9VkhLPKbRIQSolA4L8JmtJRk2zkh7Pv9ZtBQELMQury9Qf5RSA40N5g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
	</body>
</html>