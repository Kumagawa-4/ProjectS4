

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
          <h1 class="card-title">Inscription</h1>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action=<?php echo site_url('index.php/Log/inscription'); ?>  method="post">
          <div class="card-body">
            <div class="form-group row">
              <label for="inputText" class="col-sm-2 col-form-label">Nom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nom" placeholder="Nom">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputText" class="col-sm-2 col-form-label">Prenom</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="prenom" placeholder="Prenom">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputText" class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="pass" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="isAdmin">
                        <label class="form-check-label" for="isAdmin">Admin</label>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info float-right">Sign up</button>
            <button type="submit" class="btn btn-default float-left">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
      <!-- /.card -->

    </div>

  </body>
</html>





