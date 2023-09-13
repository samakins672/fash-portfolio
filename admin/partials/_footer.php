<?php
session_start();
include('../php/config.php');

$landing_pictures_query = mysqli_query($conn, "SELECT * FROM landing_pictures ORDER BY id");
?>

<section class="ftco-section contact-section">
  <div class="container">

  <div id="upload" class="row block-9">
    <div class="col-12 d-flex table-responsive bg-light">
      <table class="table table-striped project-orders-table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Picture</th>
            <th>Date Uploaded</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($landing_pictures = mysqli_fetch_array($landing_pictures_query)) { ?>
          <tr>
            <td><?php echo $landing_pictures['id']?></td>
            <td><img src="../assets/images/footer/<?php echo $landing_pictures['link'] ?>" class="img-fluid" width="200px" alt="image"/></td>
            <td><?php echo $landing_pictures['created_at']?></td>
            <td>
              <button id="<?php echo $landing_pictures['id'] ?>" class="btn btn-primary changePicButton" type="button" data-toggle="modal" data-target="#pictureModal" onclick="$('#picture_id').val(this.id)">Change Picture</button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
      