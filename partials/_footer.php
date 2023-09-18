
<?php
$event_query = mysqli_query($conn, "SELECT * FROM event ORDER BY created_at DESC LIMIT 5");
?>
<div class="container px-md-5">
  <div class="row mb-5">
    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-4">
        <h2 class="ftco-heading-2">Recent Photos</h2>
        <ul class="list-unstyled photo">
          <?php
          $landing_query2 = mysqli_query($conn, "SELECT * FROM landing_pictures ORDER BY id");
          while ($landing_picture = mysqli_fetch_array($landing_query2)) {
            ?>
          <li><a class="img" style="background-image: url(assets/images/footer/<?php echo $landing_picture['link'] ?>);"></a></li>
          <?php }?>
        </ul>
      </div>
    </div>
    <div class="col-md">
        <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Latest Events</h2>
        <ul class="list-unstyled categories">
          <?php while ($event = mysqli_fetch_array($event_query)) {
            $event_id = $event['id'];
            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS count FROM client_pictures WHERE event = $event_id"));
          ?>
          <li><a><?php echo $event['name'] ?> <span>(<?php echo $row['count'] ?>)</span></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon icon-map-marker"></span><span class="text">18b, Oladipo Bateye, GRA, Ikeja, Lagos, Nigeria</span></li>
            <li><a href="tel://+2347061874236"><span class="icon icon-phone"></span><span class="text">+234 706 187 4236</span></a></li>
            <li><a href="mailto:fasinafestus@gmail.com" target="_blank"><span class="icon icon-envelope"></span><span class="text">fasinafestus@gmail.com</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">

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
