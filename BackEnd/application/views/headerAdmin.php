<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <span class="brand-text font-weight-light">Back end: <?php echo $user['nom'];  ?>
            </span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?php echo site_url().'index.php/AdminController/'?>" class="nav-link">Regime & Activités</a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url().'index.php/Tableau_bord_controller/'?>" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item">
          <a href="<?php echo site_url().'index.php/LogAdmin/logout'?>" class="nav-link">logout</a>
          </li>
        </ul>

      </div> 
    </div>
  </nav>