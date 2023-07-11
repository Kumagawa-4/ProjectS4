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
            <div class="card-header"><h1 class="card-title">Regimes</h1></div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Type de regime</th>
                    <th>Duree</th>
                    <th>Poids</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($regime as $r){?>
                        <tr>
                            <td><?php echo $r['typeRegime']; ?></td>
                            <td><?php echo $r['duree']; ?> jours</td>
                            <td><?php echo $r['poids']; ?> kg</td>
                            <td><a href="<?php echo site_url().'index.php/AdminController/modifDisplayRegime?id='.$r['id']; ?>" type="button" class="btn btn-block bg-gradient-info">Modifier</a></td>
                            <td><a href="<?php echo site_url().'index.php/AdminController/deleteRegime?id='.$r['id']; ?>" type="button" class="btn btn-block bg-gradient-danger">Supprimer</a></td>
                            <td><a href="<?php echo site_url().'index.php/AdminController/detailsDisplay?id='.$r['id']; ?>" type="button" class="btn btn-block bg-gradient-secondary">Details</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
                <a href="<?php echo site_url().'index.php/AdminController/addDisplayRegime'?>" type="button" class="btn bg-gradient-success">Ajouter</a>
            </div>
        </div>
           
        <div class="card">
            <div class="card-header"><h1 class="card-title">Plats</h1></div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom du plat</th>
                    <th>Prix</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($plat as $p){?>
                    <tr>
                        <td><?php echo $p['nom']; ?></td>
                        <td><?php echo $p['prix']; ?> Ar</td>
                        <td><a href="<?php echo site_url().'index.php/AdminController/modifDisplayPlat?id='.$p['id']; ?>" type="button" class="btn btn-block bg-gradient-info">Modifier</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header"><h1 class="card-title">Activites</h1></div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($activity as $p){?>
                    <tr>
                        <td><?php echo $p['nom']; ?></td>
                        <td><a href="<?php echo site_url().'index.php/AdminController/modifDisplayActivity?id='.$p['id']; ?>" type="button" class="btn btn-block bg-gradient-info">Modifier</a></td>
                        <td><a href="<?php echo site_url().'index.php/AdminController/deleteActivity?id='.$p['id']; ?>" type="button" class="btn btn-block bg-gradient-danger">Supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <a href="<?php echo site_url().'index.php/AdminController/addDisplayActivity'?>" type="button" class="btn bg-gradient-success">Ajouter</a>
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


