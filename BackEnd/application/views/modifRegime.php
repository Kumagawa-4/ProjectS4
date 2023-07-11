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
            <div class="card-header"><h1 class="card-title">Regime</h1></div>
            <div class="card-body">
                <form action="<?php echo site_url().'index.php/AdminController/modifRegime'?>" method="post">
                  <input type="hidden" name="idRegime" value="<?php echo $regime['id']; ?>">
                  <div class="form-group">
                    <label for="price">duree</label>
                    <input type="number" class="form-control" name="duree" id="duree" placeholder="<?php echo $regime['duree'] ?>" value="<?php echo $regime['duree'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="price">poids</label>
                    <input type="number" class="form-control" name="poids" id="poids" placeholder="<?php echo $regime['poids'] ?>" value="<?php echo $regime['poids'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="price">poids d'aliment par jour en grammes</label>
                    <input type="number" class="form-control" name="paj" id="paj" placeholder="<?php echo $regime['poidsAlimentParJ'] ?>" value="<?php echo $regime['poidsAlimentParJ'] ?>">
                  </div>
                  <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" name="typeRegime" value="1" <?php if($regime['typeRegime']==1) { ?> checked <?php } ?>>
                          <label for="customRadio1" class="custom-control-label">Prendre du poids</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="typeRegime" value="-1" <?php if($regime['typeRegime']==-1) { ?> checked <?php } ?>>
                          <label for="customRadio2" class="custom-control-label">Perdre du poids</label>
                        </div>
                </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Menus</h1>
            </div>
            <div class="card-body">
                <table id="regime" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>Plat</th>
                    <th>Pourcentage</th>
                    <th>Prix Unitaire</th>
                    <th>Prix total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($menu as $m){?>
                        <tr>
                            <td><?php echo $m['nom']; ?></td>
                            <td><?php echo $m['frequence']; ?> %</td>
                            <td><?php echo $m['prix']; ?> Ar</td>
                            <td><?php echo $m['prixTotal']; ?> Ar</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
                <a href="<?php echo site_url().'index.php/AdminController/modifDisplayMenu?idRegime='.$regime['id']?>" type="button" class="btn bg-gradient-success">Modifier</a>
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
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($activity as $a){?>
                    <tr>
                        <td><?php echo $a['nom']; ?></td>
                        <td><?php echo $a['frequence']; ?> fois</td>
                            <td>tous les <?php echo $a['periode']; ?> jour(s)</td>
                        <td><a href="<?php echo site_url().'index.php/AdminController/modifDisplayDetailsActivites?id='.$a['id']?>" type="button" class="btn btn-block bg-gradient-info">Modifier</a></td>
                        <td><a href="<?php echo site_url().'index.php/AdminController/deleteDetailsActivites?id='.$a['id'].'&idRegime='.$regime['id']?>" type="button" class="btn btn-block bg-gradient-danger">Supprimer</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <br>
            <a href="<?php echo site_url().'index.php/AdminController/addDisplayDetailsActivites?idRegime='.$regime['id']?>" type="button" class="btn bg-gradient-success">Ajouter</a>
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


