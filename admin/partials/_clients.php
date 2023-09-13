<?php
session_start();
include('../php/config.php');

$event_query = mysqli_query($conn, "SELECT * FROM event ORDER BY created_at DESC");
?>

<section class="ftco-section contact-section">
  <div class="container">

  <div id="upload" class="row block-9">
    <div class="col-12 d-flex table-responsive bg-light">
      <table class="table table-striped project-orders-table">
        <thead>
          <tr>
            <th>Date Uploaded</th>
            <th>Event Name</th>
            <th>Client Name</th>
            <th>Total Images</th>
            <th>Code</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($event = mysqli_fetch_array($event_query)) {
            $event_id = $event['id'];
            $client_id = $event['client'];

            $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS count FROM client_pictures WHERE event = $event_id"));

            $client = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM client WHERE id = '$client_id'"))['name'];
          ?>
          <tr>
            <td><?php echo $event['created_at']?></td>
            <td><?php echo $event['name']?></td>
            <td><?php echo $client?></td>
            <td><?php echo $row['count'] ?></td>
            <td><?php echo $event['event_link']?></td>
            <td>
              <button id="event_<?php echo $event_id ?>" class="btn btn-primary" data-link="https://portfolio.sannex.ng/fashshotit/collection/?event=<?php echo $event['event_link'] ?>" 
              type="button" onclick="shareButton(this.id)">Share Link</button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
      