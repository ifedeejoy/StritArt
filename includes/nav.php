<!-- Navbar -->
<?php 
  $page = $_SERVER['REQUEST_URI'];
  $index = '/';
  $indexs = '/index/';
  if ($page === $index || $page === $indexs):
?>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="/index/">
        <strong class="font-effect-anaglyph headings"><h2><?php echo AppName(); ?></h2></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right -->
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore Categories</a>
          </li>
          <li class="nav-item " style="margin-right: 50px;">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Dicover</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="" href="#">Art Works</a><hr>
                <a class="" href="#">Artists</a>
              </div>
            </div>
          </li>
          <li class="nav-item" style="margin-right: 50px;">
            <a href="#" class="nav-link  rounded nav-buttons">
              <i class="fa fa-plus mr-2"></i>Add Work
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link  rounded nav-buttons">
              <i class="fa fa-user mr-2"></i>Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
<?php endif ?>
  <!-- Navbar -->
<!-- Navbar -->
<?php 
  $page = $_SERVER['REQUEST_URI'];
  $art = '/art-work.php';
  $art = '/art-work/';
  if ($page === $art):
?>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark " style="background-color: #222835;">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="/index/">
        <strong class="font-effect-anaglyph headings"><h2><?php echo AppName(); ?></h2></strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Right -->
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item">
            <a class="nav-link" href="/index/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Explore Categories</a>
          </li>
          <li class="nav-item " style="margin-right: 50px;">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Dicover</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="" href="#">Art Works</a><hr>
                <a class="" href="#">Artists</a>
              </div>
            </div>
          </li>
          <li class="nav-item" style="margin-right: 50px;">
            <a href="#" class="nav-link  rounded nav-buttons">
              <i class="fa fa-plus mr-2"></i>Add Work
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link  rounded nav-buttons">
              <i class="fa fa-user mr-2"></i>Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
<?php endif ?>
  <!-- Navbar -->