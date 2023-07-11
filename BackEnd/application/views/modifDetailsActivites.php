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
                <h3 class="card-title">Modifier les activités à faire</h3>
              </div>
              <div class="card-body">
                <form action="<?php echo site_url().'index.php/AdminController/modifDetailsActivites'?>" method="post">
                  <div class="form-group">
                    <label for="name">Activites</label>
                    <select class="select2" data-placeholder="Choisir un plat" style="width: 100%;" name="idActivite">
                        <?php foreach($activite as $p){ 
                            if($p['id'] == $detailsActivites['idActivite']) { ?>
                            <option value="<?php echo $p['id'] ?>" selected="selected"><?php echo $p['nom'] ?></option>
                            <?php }else{?>
                                <option value="<?php echo $p['id'] ?>"><?php echo $p['nom'] ?></option>
                        <?php } } ?>
                    </select>
                  </div>
                  <input type="hidden" name="id" value="<?php echo $detailsActivites['id']; ?>">
                  <input type="hidden" name="idRegime" value="<?php echo $detailsActivites['idRegime']; ?>">
                  <div class="form-group">
                    <label for="price">Frequence</label>
                    <input type="number" class="form-control" name="frequence" id="frequence" placeholder="<?php echo $detailsActivites['frequence'] ?>" value="<?php echo $detailsActivites['frequence'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="price">Periode</label>
                    <input type="number" class="form-control" name="periode" id="periode" placeholder="<?php echo $detailsActivites['periode'] ?>" value="<?php echo $detailsActivites['periode'] ?>">
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


