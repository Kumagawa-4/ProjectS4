<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/page_style.css') ?>">

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1 class="text-center">Dashboard</h1>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo  $statistiques['nombre_utilisateurs']; ?></h3>

                <p>Utilisateur</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">_<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><sup style="font-size: 20px">%</sup></h3>

                <p>Activiter</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">_<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>  <?php echo  $statistiques['chiffre_d'];  ?></h3>

                <p>Chiffre d'affaire</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">_<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
      
        </div>
        <!-- /.row -->
     
        
          
          <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Products</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Regime</th>
                      <th>Price</th>
                      <th>_</th>
                      <th>More</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($produit as $regime): ?>
                        <tr>
                            <td>
                                <img src="dist/img/default-150x150.png" alt="<?php echo $product['name']; ?>" class="img-circle img-size-32 mr-2">
                                <?php echo $regime['id']; ?>                          </td>
                            <td><?php echo $regime['duree']; ?>USD</td>
                            <td>
                                <small class="text-success mr-1">
                                    <i class="fas fa-arrow-up"></i>
                                    <?php echo $regime['typeRegime']; ?>
                                </small>
                                <?php echo $regime['poids']; ?>
                            </td>
                            <td>
                                <a href="#" class="text-muted">
                                    <i class="fas fa-search"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                  
                    </tbody>
                  </table>
                </div>
              </div>
            </section>
            <!-- right col -->
          </div>
        
        <!-- /.row (main row) -->
      </div>

      <div class="chart-container">
          <canvas id="myChart"></canvas>
          <h2 class="text-center">Graphe de revenue du site par jour</h2>
      </div>
      <script>
          var labels = <?php echo $labels; ?>;
          var data = <?php echo $date; ?>;

          var ctx = document.getElementById('myChart').getContext('2d');

          var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: labels,
                  datasets: [{
                      label: 'Ventes',
                      data: data,
                      backgroundColor: 'rgba(0, 123, 255, 0.8)'
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
      </script>

</body>

</html>
