<!DOCTYPE html>
<html>
<head>
	<title>marmiton_test_form</title>
	<meta charset="utf-8">
</head>
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
</body>
</html>