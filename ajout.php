<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marmiton</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="master.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php include 'header.php'; ?>
  <body>
    <h1>Ajouter une recette</h1>
    <?php
      try
      {
        $bdd = new PDO('mysql:host=localhost;dbname=marmiton;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
        die('Erreur : ' . $e->getMessage());
      }
    ?>
    <form method="post" action="traitement.php">
      <label>Titre de la recette : </label><input type="text" required>
      <br /><br />
      <label>Budget prévus : </label>
        <select required>
          <option>Bon marché</option>
          <option>Moyen</option>
          <option>Cher</option>
        </select>
      <br /><br />
      <label>Temps de préparation : </label><input type="number" placeholder="minutes" min="0" required>
      <br /><br />
      <label>Difficultée : </label>
        <select required>
          <option>Facile</option>
          <option>Moyen</option>
          <option>Difficile</option>
        </select>
      <br /><br />
      <label>Nombre de personnes : </label><input type="number" required>
      <br /><br />
      <label>Type de recette : </label>
        <select required>
          <option>Entrée</option>
          <option>Plat principal</option>
          <option>Dessert</option>
          <option>Apéritif</option>
          <option>Boisson</option>
        </select>
      <br /><br />
      <label>Origine de la recette : </label><input type="text">
      <br /><br />
      <label>Ingredient 1 : </label><input type="text" required>
      <br />
      <h3>cliquer ici pour ajouter un ingredient à la liste</h3>
      <br /><br />
      <label>Mettez ici votre recette : </label>
      <br />
      <textarea rows="30" cols="75" required></textarea>
      <br /><br />
      <label>Photo : </label> <a href="lien de la photo">
      <br /><br />
      <label>Proposition de repas : </label>
      <br />
      <textarea rows="20" cols="52"></textarea>
      <br /><br />
      <label>Votre adresse mail : </label><input type="email">
      <br /><br />
      <button type="submit">Envoyer</button>
    </form>
  <?php include 'footer.php'; ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
