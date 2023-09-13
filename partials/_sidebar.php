<?php
$url = $_SERVER['PHP_SELF'];
$url = str_replace('/fash-portfolio/', '', $url);
?>

<h1 id="colorlib-logo"><a href="index.php"><span class="img" style="background-image: url(assets/images/author.jpg); background-position: top center;"></span>Festus Fasina</a></h1>
<nav id="colorlib-main-menu" role="navigation">
  <ul>
    <li <?php if ($url == 'index.php'): ?> class="colorlib-active" <?php endif; ?>><a href="index.php">Home</a></li>
      <li <?php if ($url == 'about.php'): ?> class="colorlib-active" <?php endif; ?>><a href="about.php">About Me</a></li>
        <li><a href="collection/">My Collections</a></li>
    <li <?php if ($url == 'services.php'): ?> class="colorlib-active" <?php endif; ?>><a href="services.php">My Services</a></li>
    <li <?php if ($url == 'blog.php'): ?> class="colorlib-active" <?php endif; ?>><a href="blog.php">Blog</a></li>
    <li <?php if ($url == 'contact.php'): ?> class="colorlib-active" <?php endif; ?>><a href="contact.php">Contact</a></li>
  </ul>
</nav>

<!-- <div class="colorlib-footer">
  <h3>Newsletter</h3>
  <div class="d-flex justify-content-center">
    <form action="#" class="colorlib-subscribe-form">
      <div class="form-group d-flex">
        <div class="icon"><span class="icon-paper-plane"></span></div>
        <input type="text" class="form-control" placeholder="Enter Email Address">
      </div>
    </form>
  </div>
</div> -->