

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css') ?>">
    <title>Login</title>
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Admin</b>LTE
      </div>
      <!-- /.login-logo -->
      <div class="card floating-box">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign in to start your session</p>

          <form class="form-horizontal" action=<?php echo site_url('Log/verifyLogin'); ?>  method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Nom"  name="nom" >
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="pass" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <p class="mb-0">
              <a href="<?php echo site_url('Log/inscription_index') ?>" class="text-center">Register a new membership</a>
            </p>
            <div class="row">
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-info">Sign in</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <a href="<?php echo site_url('index.php/Code_controller') ?>">view list Code</a>
</body>
</html>





