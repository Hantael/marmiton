<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marmiton</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../master.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <div class="navbar navbar-default navbar-static-top">
   <div class="container-fluid">
     <a class="navbar-brand" href="../../index.php"><img alt="Brand" src="../../public/img/logo.gif"></a>
        <div class="collapse navbar-collapse navHeaderCollapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../../ajout.php">Ajouter une recette</a></li>
          </ul>
        </div>
      </div>
  </div>
  <body>
    <h1>@@titre@@</h1>
    <div id="recette">
      <div class="caracteristique">
          <p>Budget prévus : @@budget@@</p>
          <p>Temps de préparation : @@temps@@</p>
          <p>Difficulté : @@difficulté@@</p>
          <p>Nombre de personnes : @@personnes@@</p>
          <p>Type de recette : @@type@@</p>
      </div>
      <div class="caracteristique">
        <p>@@howto@@</p>
      </div>
    </div>
    <div class="fin">
      <p>@@auteur@@</p>
    </div>
  <?php include '../../footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
