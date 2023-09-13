<div class="container">
  <div class="row justify-content-center mb-2 pb-3">
    <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
      <h2 class="mb-4">Follow me on Instagram</h2>
    </div>
  </div>  
  <div class="row no-gutters">
    <?php
    $landing_query1 = mysqli_query($conn, "SELECT * FROM landing_pictures ORDER BY id LIMIT 5");
    while ($landing_picture = mysqli_fetch_array($landing_query1)) {
      ?>
        <div class="col-sm-12 col-md ftco-animate">
          <a href="assets/images/footer/<?php echo $landing_picture['link'] ?>" class="insta-img image-popup" style="background-image: url(assets/images/footer/<?php echo $landing_picture['link'] ?>);">
            <div class="icon d-flex justify-content-center">
              <span class="icon-instagram align-self-center"></span>
            </div>
          </a>
        </div>
    <?php } ?>
  </div>
</div>