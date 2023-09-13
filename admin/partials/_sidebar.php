<h1 id="colorlib-logo"><a href="index.php"><span class="img"
      style="background-image: url(../assets/images/<?php echo $user_image ?>); background-position: top center;"></span>
      <?php echo $_SESSION['fash_admin_name'] ?></a></h1>
<nav id="colorlib-main-menu" role="navigation">
  <ul class="text-left">
    <li id="_uploadli"><a id="_upload" href="javascript:;" onclick="newPage(this.id)">New Upload</a></li>
    <li id="_clientsli"><a id="_clients" href="javascript:;" onclick="newPage(this.id)">Client & Events</a></li>
    <li id="_footerli"><a id="_footer" href="javascript:;" onclick="newPage(this.id)">Landing Pics</a></li>
    <li> <a href="../" target="_blank">View Portfolio  <i class="icon-arrow-right menu-icon"></i></a></li>
    <!-- <li id="_dashboardli"><a id="_dashboard" href="javascript:;" onclick="newPage(this.id)">Dashboard</a></li>
    <li>
      <a data-toggle="collapse" href="#portfolio-menu" aria-expanded="false" aria-controls="attd-menu">
        <i class="icon-list-outline menu-icon"></i>
        <span class="menu-title">Portfolio</span>
        <i class="icon-plus"></i>
      </a>
      <div class="collapse" id="portfolio-menu">
        <ul class="nav flex-column sub-menu pl-4">
          <li id="_homeli"> <a id="_home" href="javascript:;" onclick="newPage(this.id, this.data)">Home Page</a></li>
          <li id="_aboutli"> <a id="_about" href="javascript:;" onclick="newPage(this.id)">About Page</a></li>
          <li id="_socialli"> <a id="_social" href="javascript:;" onclick="newPage(this.id)">Social Links</a></li>
          <li id="_contactli"> <a id="_contact" href="javascript:;" onclick="newPage(this.id)">Contact Page</a></li>
          <li> <a href="../index.php" target="_blank">View Portfolio</a></li>
        </ul>
      </div>
    </li>
    <li>
      <a data-toggle="collapse" href="#collection-menu" aria-expanded="false" aria-controls="attd-menu">
        <i class="icon-list-outline menu-icon"></i>
        <span class="menu-title">Collections & Clients</span>
        <i class="icon-plus"></i>
      </a>
      <div class="collapse" id="collection-menu">
        <ul class="nav flex-column sub-menu pl-4">
          <li id="_uploadli"><a id="_upload" href="javascript:;" onclick="newPage(this.id)">New Upload</a></li>
          <li id="_clientsli"><a id="_clients" href="javascript:;" onclick="newPage(this.id)">Clients</a></li>
          <li id="_collectionsli"><a id="_collections" href="javascript:;" onclick="newPage(this.id)">Collections</a></li>
          <li id="_instagramli"><a id="_instagram" href="javascript:;" onclick="newPage(this.id)">Instagram Pictures</a></li>
          <li> <a href="../collection" target="_blank">View Collections</a></li>
        </ul>
      </div>
    </li>
    <li id="_settingsli"><a id="_settings" href="javascript:;" onclick="newPage(this.id)">Settings</a></li> -->
    <li><a href="login.php?logout">Logout</a></li>
  </ul>
</nav>