<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/dist/css/adminlte.min.css') ?>">
    <title>Document</title>
</head>
<body>
    <div class="content-wrapper">
        <div class="container">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Entrée de Code</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo site_url('Code_controller/entrerCode') ?>" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="num">Numero</label>
                    <input type="text" name="num" class="form-control" id="num" placeholder="Enter numero du code">
                  </div>
                  <p class="text-danger"><?php echo $error ?></p>
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
                <!-- /.card-body -->
              </form>
            </div>

            <div class="container-wrapper">
              <h3>Liste de codes</h3>
              <ul>
                <?php for($i=0; $i<count($codes); $i++){ ?>
                  <p><?php echo $codes[$i]['numero'] ?></p>
                <?php } ?>
              </ul>
            </div>
        </div>
    </div>
</body>
</html>