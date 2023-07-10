

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/style.css') ?>">
    <title>Login</title>
  </head>

  <body>

    <div class="container">
      <h1>Connexion</h1>
      <form action="<?php echo site_url('index.php/Log/verifyLogin'); ?>" method="post">
        <label for="nom">Nom de l'entreprise :</label>
        <input type="text" id="nom" name="nom" data-parsley-minlength="20" required="">

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="pass">
      

        <input type="submit" value="Se connecter">
      </form>
    </div>

  </body>
</html>





