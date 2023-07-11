

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/dist/css/adminlte.min.css') ?>">
    <title>Login</title>
  </head>

  <body>
    <div class="container">
        <!-- Horizontal Form -->
      <div class="card card-info">
        <div class="card-header">
          <h1 class="card-title">Connect into the site</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action=<?php echo site_url('index.php/Log/verifyLogin'); ?>  method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de Passe</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="pass" placeholder="Password">
              </div>
            </div>
            <a href="<?php echo site_url('index.php/Log/inscription_index'); ?>">S'inscrire</a>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Sign in</button>
            <button type="submit" class="btn btn-default ">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->
    <a href="<?php echo site_url('index.php/Code_controller') ?>">view list Code</a>
    </div>

  </body>
</html>





