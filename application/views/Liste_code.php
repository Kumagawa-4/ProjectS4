<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/dist/css/adminlte.min.css') ?>">
        <title>Liste des codes à valider</title>
    </head>

    <body>
        <div class="container">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">Liste des codes envoyés par le client qui n'ont pas encore été validés</h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Numero</th>
                                    <th>Montant</th>
                                    <th>Utilisateur</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <h2><?php echo $msg ?> </h2>
                                <?php for($i = 0; $i<count($codes); $i++){  ?>
                                    <tr>
                                        <td><?php echo $codes[$i]['date'] ?></td>
                                        <td><?php echo $codes[$i]['numero'] ?></td>
                                        <td><?php echo $codes[$i]['montant'] ?></td>
                                        <td><?php echo $codes[$i]['nom'] ?></td>
                                        <td><a href="<?php echo site_url('index.php/Code_controller/valider/' . $codes[$i]['id_code']) ?>"><button type="button" class="btn btn-block btn-info">Valider</button></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>