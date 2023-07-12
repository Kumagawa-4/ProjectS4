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
        <h2>Suggestions de régimes</h2>
    
        <?php if (!empty($suggestions)) { ?>
            <?php foreach ($suggestions as $suggestion) { ?>
                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                    <strong>ID :</strong> <?php echo $suggestion['id']; ?><br>
                    </div>
                    <div class="card-body pt-0">
                    <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b></b></h2>
                        <p class="text-muted text-sm"> <?php echo $suggestion['duree']; ?> </p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                    <strong>Poids :</strong> <?php echo $suggestion['poids']; ?><br></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> <strong>Type de régime :</strong> <?php echo $suggestion['typeRegime']; ?><br>
                        </li>
                        </ul>
                    </div>
                    <div class="col-5 text-center">
                        <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                    </div>
                    </div>
                        
                </div>
                <div class="card-footer">
                    <div class="text-right">
                    <a href="#" class="btn btn-sm bg-teal">
                        <i class="fas fa-comments"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Choisire
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <?php } ?>
    <?php } else { ?>
        <p>Aucune suggestion de régime disponible.</p>
    <?php } ?>
    </div>

</body>
</html>