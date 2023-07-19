<!-- <div>
  <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img src="assets/img/logo.png" class="w-100" alt="logo">
        </div>
        <div class="col-md-9">

        </div>
      </div> 
  </div>
</div>
 -->




<nav class="navbar navbar-expand-lg navbar-dark bg-dark  shadow">
  <div class="container">
    <a class="navbar-brand d-block d-sm-none d-md-block text-light" href="<?= base_url('index.php') ?>">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('index.php') ?>">Home</a>
        </li>

        <?php  
        $navbarCategory = "SELECT * FROM categories WHERE navbar_status = '0' AND status = '0'";
        $navbarCategory_run = mysqli_query($con, $navbarCategory);

        if(mysqli_num_rows($navbarCategory_run) > 0){
          foreach($navbarCategory_run as $navitems){
            ?>
              <li class="nav-item">
                <a class="nav-link text-white" 
                href="<?= base_url('category/'.$navitems['slug']) ?>">
                <?= $navitems['name']?></a>
              </li>
            <?php
          }

        }

        ?>




        <?php if(isset($_SESSION['auth_user'])) :   ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name'];   ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">My profile</a></li>
            <li>
              <form action="<?= base_url('allcode.php') ?>" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>
          <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login.php') ?>">login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('register.php') ?>">register</a>
        </li>
          <?php endif; ?>

      </ul>
    </div>
  </div>
</nav>