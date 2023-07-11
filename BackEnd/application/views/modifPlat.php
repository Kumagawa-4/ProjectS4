<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/dist/css/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')?>">
  
    <title>Display</title>

</head>
    <body>
        <div class="container">

            <a href="<?php echo site_url().'index.php/LogAdmin/logout'?>">logout</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modifier Plat</h3>
              </div>
              <div class="card-body">
                <form action="<?php echo site_url().'index.php/AdminController/modifPlat'?>" method="post">
                  <div class="form-group">
                    <label for="name">Nom du plat</label>
                    <input type="text" class="form-control" name="nom" id="name" placeholder="<?php echo $plat['nom'] ?>" value="<?php echo $plat['nom'] ?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $plat['id']; ?>">
                  <div class="form-group">
                    <label for="price">Prix Unitaire</label>
                    <input type="number" class="form-control" name="prix" id="price" placeholder="<?php echo $plat['prix'] ?>" value="<?php echo $plat['prix'] ?>">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>
                </form>
              </div>
            </div>

        </div>
        <!-- jQuery -->
        <script src="<?php echo site_url('assets/plugins/jquery/jquery.min.js')?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo site_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>

    </body>
</html>


