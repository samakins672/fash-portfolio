<?php
session_start();
include('../admin/php/config.php');

$date = date('Y-m-d');
$_day = date('w');
$day = jddayofweek($_day - 1, 1);
$short_day = jddayofweek($_day - 1, 2);
$num_query = 1;
$drive_button = 'd-none';
$drive_link = '';

$title = "Portrait";
$gallery_query = mysqli_query($conn, "SELECT * FROM collection_pictures ORDER BY created_at DESC");

$filePath = "../assets/images/collections/";

if (isset($_GET['event'])) {
  $filePath = "../assets/images/clients/";

  $event_link = $_GET['event'];
  mysqli_query($conn, "UPDATE event SET status = 'seen' WHERE event_link ='$event_link'");

  $query = mysqli_query($conn, "SELECT * FROM event WHERE event_link = '$event_link'");
  $event_query = mysqli_fetch_array($query);
  $num_query = mysqli_num_rows($query);

  if ($num_query >= 1) {
    $title = $event_query['name'];
    $event_id = $event_query['id'];

    if ($event_query['drive_link'] != NULL) {
      $drive_button = 'mx-auto';
      $drive_link = $event_query['drive_link'];
    }
    
    $gallery_query = mysqli_query($conn, "SELECT * FROM client_pictures WHERE event = '$event_id' ORDER BY id DESC");
  }
  
} elseif (isset($_GET['collection'])) {
  
  $collection_id = $_GET['collection'];
  $query = mysqli_query($conn, "SELECT * FROM collection WHERE id = '$collection_id'");
  $num_query = mysqli_num_rows($query);
  
  if ($num_query >= 1) {
    $title = mysqli_fetch_array($query)['name'];
    
    $gallery_query = mysqli_query($conn, "SELECT * FROM collection_pictures WHERE collection = '$collection_id' ORDER BY created_at DESC");
  }
}

$collection_query = mysqli_query($conn, "SELECT * FROM collection WHERE status = 'active' ORDER BY RAND() LIMIT 24");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fash Shot It | Gallery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta content="Capturing the beauty of everyday moments, from weddings and engagements to family portraits and corporate events." name="description">

  <!-- Add Open Graph Protocol (OGP) meta tags for social media sharing -->
  <meta property="og:site_name" content="Fash Shot It">
  <meta property="og:title" content="<?php echo $title ?> - FashShotIt">
  <meta property="og:description" content="Capturing the beauty of everyday moments, from weddings and engagements to family portraits and corporate events.">
  <meta property="og:image" itemprop="image" content="https://portfolio.sannex.ng/fashshotit/assets/images/image.jpg">
  <meta property="og:url" content="https://portfolio.sannex.ng/fashshotit/">
  <meta property="og:type" content="website" />
  <!-- <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@yourtwitterhandle"> -->
  <!-- Add more OGP meta tags as needed -->

  <meta content="Festus Fasina" name="author">

  <!-- Favicon -->
  <link href="favicon.ico" rel="icon">

  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&family=Roboto+Mono:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/lightgallery.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/swiper.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4H17TDTJ07"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4H17TDTJ07');
  </script>

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>




    <header class="site-navbar py-3" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-3" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0">Fash Shot It</a></h1>
          </div>
          <div class="col-10 col-md-7 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="../index.php">Home</a></li>
                <li class="has-children active">
                  <a href="#">Gallery</a>
                  <ul class="dropdown">
                    <?php while ($collection = mysqli_fetch_array($collection_query)): ?>
                    <li><a href="?collection=<?php echo $collection['id']?>"><?php echo $collection['name']?></a></li>
                    <?php endwhile; ?>
                  </ul>
                </li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="https://instagram.com/festusfasina?igshid=ZGUzMzM3NWJiOQ" target="_blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="https://youtube.com/@FashShotIt" target="_blank" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#"
                class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <div class="site-section" data-aos="fade">
      <div class="container-fluid">

        <div class="row justify-content-center">

          <div class="col-md-12">
            <div class="row mb-5">
              <div class="col-12 text-center">
                <?php if ($num_query >= 1): ?>
                  <h3 class="site-section-heading"><?php echo $title ?> Gallery</h3>
                  <button class="btn btn-primary <?php echo $drive_button?>">Get Videos from Google Drive - <?php echo $drive_link ?></button>
                <?php else: ?>
                  <h3 class="site-section-heading">Collection Not Found</h3>
                <?php endif; ?>
              </div>
            </div>
          </div>

        </div>
        <div class="row" id="lightgallery">
          <?php if ($num_query >= 1): ?>
            <?php while ($gallery = mysqli_fetch_array($gallery_query)): ?>
            <div class="col-sm-6 col-md-4 col-lg-3 col-xl-3 item" data-aos="fade"
              data-src="<?php echo $filePath.$gallery['link'] ?>"
              data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
              <a href="#"><img src="<?php echo $filePath.$gallery['link'] ?>" alt="IMage" class="img-fluid"></a>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="footer py-4">
      <div class="container-fluid text-center">
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('#lightgallery').lightGallery();
    });
  </script>

</body>

</html>