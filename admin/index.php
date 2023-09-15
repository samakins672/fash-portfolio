<?php
session_start();
include('php/config.php');

if (!isset($_SESSION['fash_admin_id'])) {
	header('Location: login.php');
	exit();
}

$id = $_SESSION['fash_admin_id'];
$message = '';

// Gets user picture
$user_ = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM admin WHERE id = $id"));
$user_image = $user_['picture'];

$date = date('Y-m-d');
$_day = date('w');
$day = jddayofweek($_day - 1, 1);
$short_day = jddayofweek($_day - 1, 2);

if (isset($_GET['login'])) {
	date_default_timezone_set('Africa/Lagos');
	$current_login = date('Y-m-d H:i:s');

	mysqli_query($conn, "UPDATE admin SET last_login = '$current_login' WHERE id ='$id'");
}

$event = "d-none";
$event_link = "";

if (isset($_GET['event_uploaded'])) {
	$event = "";
	$event_link = $_GET['event_uploaded'];
}

$client_query = mysqli_query($conn, "SELECT * FROM client WHERE status = 'active' ORDER BY name");
$collection_query = mysqli_query($conn, "SELECT * FROM collection WHERE status = 'active' ORDER BY name");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Fash Shot It | Admin</title>

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
							<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> </p>
							<h1 class="bread pg-title">Admin Panel</h1>
							<!-- <h1 class="bread pg-title">Dashboard</h1> -->
						</div>
					</div>
				</div>
			</section>

			<div id="main"> 
				<!-- Each Page Cotents are Displayed here -->
			</div>


			<!-- Full Screen Alert Start -->
			<div class="modal fade" id="alertModal" tabindex="-1">
					<div class="modal-dialog modal-fullscreen">
							<div class="modal-content">
									<div class="modal-body d-flex align-items-center justify-content-center">
											<div id="alertBox" class="service-item d-flex flex-column justify-content-center text-center rounded" style="max-width: 600px;">
													<h5 class="mb-3 alertTitle">Pictures Uploaded Successfully!</h5>
													<p>Event images have been uploaded successfully.</p>
													<button class="btn btn-light px-3 mt-auto mx-auto" data-dismiss="modal" aria-label="Close">Close</button>
											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- Full Screen Alert End -->

			<!-- Change Picture Modal -->
			<div class="modal fade" id="pictureModal" tabindex="-1" role="dialog" aria-labelledby="changePicture"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="changePicture">Change Picture</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="php/change_pic.php" enctype="multipart/form-data" method="post">
							<div class="modal-body">
								<div class="form-group">
									<input type="hidden" id="picture_id" name="picture_id">
									<input type="file" accept="image/*" name="picture" class="d-none file-upload-default">
									<div class="input-group col-xs-12">
										<input type="text" class="form-control form-control-sm file-upload-info show-filename"
											disabled placeholder="Upload Image">
										<span class="input-group-append">
											<button class="file-upload-browse btn btn-primary" type="button"
												onclick="upload()">Upload</button>
										</span>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-block btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" name="change_pic" class="btn btn-block btn-primary">Change</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- End of Modal -->

			<footer class="ftco-footer ftco-bg-dark ftco-section py-5">
				<div class="container px-md-5">
						<div class="col-md-12 text-center">

      <p>
        Fash Shot It &copy;
        <script>document.write(new Date().getFullYear());</script> All rights reserved | Designed by <a href="https://sannex.ng" target="_blank">Sannex Web Services</a> <br>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
						</div>
					</div>
				</div>

			</footer>
		</div><!-- END COLORLIB-MAIN -->
	</div><!-- END COLORLIB-PAGE -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.easing.1.3.js"></script>
	<script src="../assets/js/jquery.waypoints.min.js"></script>
	<script src="../assets/js/jquery.stellar.min.js"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script src="../assets/js/aos.js"></script>
	<script src="../assets/js/jquery.animateNumber.min.js"></script>
	<script src="../assets/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/scrollax.min.js"></script>
	<script src="../assets/js/main.js"></script>

	<!-- JQuery Codes -->
	<script>
		$(document).ready(function() {
			var add = '_upload';
			<?php if (isset($_GET['event_uploaded'])): ?>
				var add = '_clients';
				$("#alertModal").modal("show");
			<?php endif; ?>

			<?php if (isset($_GET['change_pic'])): ?>
				var add = '_footer';
				$("#alertModal").modal("show");
			<?php endif; ?>

			$("#"+add+"li").addClass("colorlib-active");
			$("#main").load("partials/"+add+".php");

		});

		function newPage(id, data) {
			$(".alerts").hide();
			$("#main").load("partials/"+id+".php");
			$("li").removeClass("colorlib-active");
			$("#"+id+"li").addClass("colorlib-active");

			$('.pg-title').toggle();
			text = $('#'+id).text();
			$('.pg-title').html(text);
			$('.pg-title').toggle(500);
		}

		function show(id){
			myArray = id.split("_");
			numb = myArray[1];

			$("#view-"+numb).toggle("fast");
			$("#"+id).toggle("fast");
			
			if (numb == 1) {
				$("#view-2").toggle("slow");
				$("#view_2").toggle("slow");
			} else {
				$("#view-1").toggle("slow");
				$("#view_1").toggle("slow");
			}
		}

		function hideInput(id, val){
			if (val == "0") {
				$(".input-"+id).removeClass("d-none");
			} else {
				$(".input-"+id).addClass("d-none");
			}
		}

		function upload() {
      var file = $('.file-upload-default');
      file.trigger('click');

      $('.file-upload-default').on('change', function () {
        $('.show-filename').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    }

		
		function shareButton(id) {
			var linkToShare = $('#'+id).data('link');

			// Check if the Web Share API is available
			if (navigator.share) {
				navigator.share({
					title: 'Share this link',
					text: 'Check out this link:',
					url: linkToShare,
				})
				.then(() => console.log('Shared successfully '+linkToShare))
				.catch((error) => console.error('Error sharing:', error));
			} else {
				// If Web Share API is not supported, provide a fallback for copying the link
				var tempInput = $('<input>');
				$('body').append(tempInput);
				tempInput.val(linkToShare).select();
				document.execCommand('copy');
				tempInput.remove();
				alert('Link copied to clipboard: ' + linkToShare);
			}
		}

	</script>
</body>

</html>