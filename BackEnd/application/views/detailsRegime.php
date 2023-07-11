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
            <div class="card-header"><h1 class="card-title">Menus</h1></div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Plat</th>
                    <th>Frequence</th>
                    <th>Periode</th>
                    <th>Prix Unitaire</th>
                    <th>Prix total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($menu as $m){?>
                        <tr>
                            <td><?php echo $m['nom']; ?></td>
                            <td><?php echo $m['frequence']; ?> fois</td>
                            <td>tous les <?php echo $m['periode']; ?> jour(s)</td>
                            <td><?php echo $m['prix']; ?> Ar</td>
                            <td><?php echo $m['prixTotal']; ?> Ar</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
              
            </div>
        </div>
           
        <div class="card">
            <div class="card-header"><h1 class="card-title">Activites Sportives</h1></div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Frequence</th>
                    <th>Periode</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($activity as $a){?>
                    <tr>
                        <td><?php echo $a['nom']; ?></td>
                        <td><?php echo $a['frequence']; ?> fois</td>
                        <td>tous les <?php echo $a['periode']; ?> jour(s)</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
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


