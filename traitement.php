<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marmiton</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="master.css">
   </head>
    <?php include 'header.php'; ?>
   <body>
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
      <?php
	   /* 	$nb_recette = $bdd->query('SELECT COUNT(*) FROM recette');
        $nb_fin_rece = $nb_recette->fetch();*/
	    	$req = $bdd->prepare('INSERT INTO recette(titre, budget, temps_prep, difficultee, nb_personne, type, id_recette, process, auteur, date_crea) VALUES(:titre, :budget, :temps_prep, :difficultee, :nb_personne, :type, /*:id_recette,*/ :process, :auteur, CURDATE())');
        $req->execute(array(
          'titre' => $_POST['titre'],
          'budget' => $_POST['budget'],
          'temps_prep' => $_POST['time_prep'],
          'difficultee' => $_POST['diff'],
          'nb_personne' => $_POST['nb_perso'],
          'type' => $_POST['type'],
          /*'id_recette' => $nb_fin_rece,*/
          'process' => $_POST['recette'],
          'auteur' => $_POST['nom'],
          ));
      echo 'La recette a été ajoutée avec succès, mais pas encore les ingrédients.'
      ?>
			<?php include 'footer.php'; ?>

    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    	<script src="js/bootstrap.min.js"></script>
  	</body>
</html>