<?php
include('php/config.php');
session_start();

$message = '';
$color = '';
$display = 'd-none';

if (isset($_GET['logout'])) {
  session_destroy();
}

if (isset($_GET['error'])) {
  $message = 'Invalid login details';
  $color = 'text-danger';
  $display = '';
}

if (isset($_GET['blocked'])) {
  $message = 'Oops! Your account is currently restricted!';
  $color = 'text-danger';
  $display = '';
}

if (isset($_POST['login'])) {
  session_destroy();
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);

  $user_query = mysqli_query($conn, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");

  if (mysqli_num_rows($user_query) == 1) {
    $user = mysqli_fetch_array($user_query);
    if ($user['status'] != 'active') {
      header('Location: login.php?blocked');
      exit();
    } else {
      session_start();
      
      $_SESSION['fash_admin_id'] = $user['id'];
      $_SESSION['fash_admin_name'] = $user['name'];
      $_SESSION['fash_admin_role'] = $user['role'];

      header('Location: index.php?login');
      exit();
    }
  } else {
    header('Location: login.php?error');
    exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fash Shot It | Sign In</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

  <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/animate.css">

  <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/magnific-popup.css">

  <link rel="stylesheet" href="../assets/css/aos.css">

  <link rel="stylesheet" href="../assets/css/ionicons.min.css">

  <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">


  <link rel="stylesheet" href="../assets/css/flaticon.css">
  <link rel="stylesheet" href="../assets/css/icomoon.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <div id="colorlib-page">
      <section class="contact-section">
        <div class="container">
          <div class="row d-flex  mb-5 contact-info">
            <div class="col-md-8 mt-4 mx-auto">
              <h2 class="h3 text-center font-weight-bold">Admin Sign In</h2>
            </div>

            <div class="col-md-8 mx-auto">
              <form action="" method="post" class="bg-light p-5 contact-form text-center">
                <h5 class="<?php echo $color. ' '. $display?> text-left"> <?php echo $message ?>!</h5>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                </div>
                <div class="form-group">
                  <input name="login" type="submit" value="Sign In" class="btn btn-sm btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
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
	<script src="../assets/js/aos.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.stellar.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>