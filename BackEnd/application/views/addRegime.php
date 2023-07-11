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
            <div class="card">
                        <div class="card-header"><h1 class="card-title">Regime</h1></div>
                        <div class="card-body">
                            <form action="<?php echo site_url().'index.php/AdminController/addRegime'?>" method="post">
                            <div class="form-group">
                                <label for="price">duree</label>
                                <input type="number" class="form-control" name="duree" id="duree" placeholder="" value="">
                            </div>
                            <div class="form-group">
                                <label for="price">poids</label>
                                <input type="number" class="form-control" name="poids" id="poids" placeholder="" value="">
                            </div>
                            <div class="form-group">
                                <label for="price">poids d'aliment par jour en grammes</label>
                                <input type="number" class="form-control" name="paj" id="paj" placeholder="" value="">
                            </div>
                            <div class="form-group">
                                    <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="typeRegime" value="1">
                                    <label for="customRadio1" class="custom-control-label">Prendre du poids</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="typeRegime" value="-1">
                                    <label for="customRadio2" class="custom-control-label">Perdre du poids</label>
                                    </div>
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