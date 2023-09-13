<?php
session_start();
include('../php/config.php');

$event = "d-none";
$event_link = "";

if (isset($_GET['event_uploaded'])) {
  $event = "";
  $event_link = $_GET['event_uploaded'];
}

$client_query = mysqli_query($conn, "SELECT * FROM client WHERE status = 'active' ORDER BY name");
$collection_query = mysqli_query($conn, "SELECT * FROM collection WHERE status = 'active' ORDER BY name");
?>

<section class="ftco-section contact-section">
  <div class="container">
    
  <div class="mb-5 mt-0 <?php echo $event ?>">
    <p class="h6">Event Link:</p>
    <input type="text" id="link" class="form-control form-control-sm w-50 d-inline" value="<?php echo $event_link ?>"> 
    <button id="copy" type="button" class="btn btn-sm btn-info p-2 ml-3 mb-2" style="border-radius: 5px;"> Copy </button>
  </div>

  <div id="upload" class="row block-9">
    <div class="col-md-12 d-flex">
      <button id="view_1" type="button" class="btn btn-sm btn-primary p-2 ml-3 mb-2" onclick="show(this.id)" style="display:none;border-radius: 5px;"> My Collection <span class="icon-arrow-right"></span></button>
      <button id="view_2" type="button" class="btn btn-sm btn-primary p-2 ml-3 mb-2" onclick="show(this.id)" style="border-radius: 5px;"> Client's Collection <span class="icon-arrow-right"></span></button>
    </div>
    <div class="col-md-12 d-flex">
      <form id="view-1" method="post" action="php/upload.php" enctype='multipart/form-data' class="bg-light p-5 contact-form text-center">
        <button class="btn btn-block btn-secondary mb-4 py-3 px-5" type="button" style="border-radius: 0;">MY COLLECTION UPLOAD</button>
        <div class="form-group">
          <select id="collection" class="form-control" name="collection" onchange="hideInput(this.id, this.value)">
            <option value="0" selected> New Collection </option>
            <?php while ($collection = mysqli_fetch_array($collection_query)) { ?>
                  <option value="<?php echo $collection['id'] ?>"> 
                    <?php echo $collection['name'] ?>
                  </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="name" class="form-control form-control-sm input-collection" placeholder="Collection Name">
        </div>
        <div class="form-group">
          <textarea name="description" cols="30" rows="5" class="form-control input-collection" placeholder="Description (Optional)"></textarea>
        </div>
        <div class="form-group">
          <input type="text" name="tag" class="form-control form-control-sm" placeholder="Tags (separate with a comma)" required>
        </div>
        <label for="pictures">Upload all files from one folder here!</label>
        <div class="form-group">
          <input type="file" name="pictures[]" class="form-control form-control-sm" accept="image/*" multiple required>
        </div>
        <div class="form-group">
          <input name="upload-mine" type="submit" value="Upload" class="btn btn-block btn-primary py-3 px-5">
        </div>
      </form>

    </div>

    <div class="col-md-12 d-flex">
      <form id="view-2" action="php/upload.php" method="post" enctype='multipart/form-data' class="bg-light p-5 contact-form text-center" style="display:none;">
        <button class="btn btn-block btn-secondary mb-4 py-3 px-5" type="button" style="border-radius: 0;">CLIENT COLLECTION UPLOAD</button>
        <div class="form-group">
          <select id="client" class="form-control" name="client" onchange="hideInput(this.id, this.value)">
            <option value="0" selected> New Client </option>
            <?php while ($client = mysqli_fetch_array($client_query)) { ?>
                    <option value="<?php echo $client['id'] ?>"> 
                      <?php echo $client['name'] . ' (' . $client['organisation'] . ')' ?>
                    </option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <input type="text" name="name" class="form-control form-control-sm input-client" placeholder="Client Name">
        </div>
        <div class="form-group">
          <input type="number" name="number" class="form-control form-control-sm input-client" placeholder="Client's Phone">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control form-control-sm input-client" placeholder="Client's Email">
        </div>
        <div class="form-group">
          <input type="text" name="event" class="form-control form-control-sm" placeholder="Event Title" required>
        </div>
        <div class="form-group">
          <input type="text" name="tag" class="form-control form-control-sm" placeholder="Tags" required>
        </div>
        <div class="form-group">
          <input type="text" name="organisation" class="form-control form-control-sm input-client" placeholder="Organisation Name (Optional)">
        </div>
        <label for="pictures">Upload all files from one folder here!</label>
        <div class="form-group">
          <input type="file" name="pictures[]" class="form-control form-control-sm" accept="image/*" multiple required>
        </div>
        <div class="form-group">
          <input type="text" name="drive_link" class="form-control form-control-sm" placeholder="Paste Google Drive link for Videos (Optional)">
        </div>
        <div class="form-group">
          <input name="upload-client" type="submit" value="Upload" class="btn btn-block btn-primary py-3 px-5">
        </div>
      </form>
    </div>
  </div>
</div>
</section>
      