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
                <h3 class="card-title">Modifier menu</h3>
              </div>
              <div class="card-body">
                <form action="<?php echo site_url().'index.php/AdminController/modifMenu'?>" method="post" data-parsley-validate>
                  <input type="hidden" name="idRegime" value="<?php echo $idRegime; ?>">
                  <div class="form-group">
                    <label for="menu1">Pourcentage: <?php echo $menu[0]['nom'] ?></label>
                    <input type="number" class="form-control" name="frequence1" id="menu1" placeholder="<?php echo $menu[0]['frequence'] ?>" value="<?php echo $menu[0]['frequence'] ?>" data-parsley-trigger="change" required>
                  </div>
                  <div class="form-group">
                    <label for="menu2">Pourcentage: <?php echo $menu[1]['nom'] ?></label>
                    <input type="number" class="form-control" name="frequence2" id="menu2" placeholder="<?php echo $menu[1]['frequence'] ?>" value="<?php echo $menu[1]['frequence'] ?>" data-parsley-trigger="change" required>
                  </div>
                  <div class="form-group">
                    <label for="menu3">Pourcentage: <?php echo $menu[2]['nom'] ?></label>
                    <input type="number" class="form-control" name="frequence3" id="menu3" placeholder="<?php echo $menu[2]['frequence'] ?>" value="<?php echo $menu[2]['frequence'] ?>" data-parsley-trigger="change" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>
                </form>
                <div><?php if(isset($error)) echo $error; ?></div>
              </div>
            </div>

        </div>
        <script>
          // Custom validation rule for sum check
          window.Parsley.addValidator('sumcheck', {
            validateString: function (value, requirement) {
              var sum = parseInt(value, 10) + parseInt($(requirement).val(), 10) + parseInt($('#input3').val(), 10);
              return sum == 100;
            },
            messages: {
              en: 'La somme doit etre 100%'
            }
          });

          // Apply validation rules to the form
          $('#myForm').parsley();

          // Add custom constraint for the sum check
          $('#menu1, #menu2').parsley().addConstraint('sumcheck', '#menu3');

        </script>
        <!-- jQuery -->
        <script src="<?php echo site_url('assets/plugins/jquery/jquery.min.js')?>"></script>
        <script src="<?php echo site_url('assets/js/parsley.min.js')?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo site_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
        <script src="<?php echo site_url('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>

    </body>
</html>


