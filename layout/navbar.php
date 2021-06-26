<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ecommerce</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/ecommerce"><em class="fas fa-home"></em> Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ecommerce/blog/"><em class="fas fa-blog"></em> Blog</a>
      </li>
    </ul>
    <form class="ml-3 d-inline w-75">
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Search something">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button"><em class="fas fa-search"></em></button>
          </div>
      </div>
    </form>
    <ul class="navbar-nav my-lg-auto ml-auto">
      <?php 
        session_start();
        if(!isset($_SESSION['name'])){
      ?>
        <li class="nav-item">
          <a class="nav-link" href="/ecommerce/login.php">Login</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="#"><em class="fas fa-shopping-cart"></em> Cart</a>
        </li>
        <li class="nav-item">
          <span class="nav-link" ><em class="fas fa-user"></em> <?=ucwords($_SESSION['name'])?></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ecommerce/functions/logout.php"><em class="fas fa-sign-out-alt"></em> Logout</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>