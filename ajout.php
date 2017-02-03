<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marmiton</title>

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
    <form method="post" action="traitement.php">
      <h1><label>Titre de la recette : </label><input id="champ" type="text" name="titre" required></h1> 
      <div id="recette">
        <div class="caracteristique">
          <label>Budget prévus : </label>
            <select name="budget" required>
              <option value="1">Bon marché</option>
              <option value="2">Moyen</option>
              <option value="3">Cher</option>
            </select>
          <br /><br />
          <label>Temps de préparation : </label><input type="number" placeholder="minutes" min="0" name="time_prep" required>
          <br /><br />
          <label>Difficultée : </label>
            <select name="diff" required>
              <option value="1">Facile</option>
              <option value="2">Moyen</option>
              <option value="3">Difficile</option>
            </select>
          <br><br>
          <label>Nombre de personnes : </label><input type="number" name="nb_perso" required>
          <br><br>
          <label>Type de recette : </label>
            <select name="type" required>
              <option value="1">Entrée</option>
              <option value="2">Plat principal</option>
              <option value="3">Dessert</option>
              <option value="4">Apéritif</option>
              <option value="5">Boisson</option>
            </select>
          <br><br>
          <div id="champs" >
            <input type="text" name="ingredient[]" placeholder="ingredient" required/>
            <input type="text" name="nombre[]" placeholder="quantité" required/>
            <input type="text" name="mesure[]" placeholder="mesure" required/>
          </div>
          <script type="text/javascript" >
              var div = document.getElementById('champs');
              function addInput(nam){
                  var input = document.createElement("input");
                  input.name = name;
                  div.appendChild(input);
              }
              function addField() {
              div.appendChild(document.createElement("br"));
                  addInput("titre[]");
                  addInput("contenu[]");
                  addInput("description[]");
              }
          </script>
          <button type="button" onclick="addField()" >+</button>
        </div>
        <div class="caracteristique">
          <label>Mettez ici votre recette : </label>
          <br>
          <textarea rows="30" cols="75" name="recette" required></textarea>
        </div>
      </div>
      <div class="fin">
        <label>Votre nom : </label><input type="text" name="nom" required>
        <button type="submit">Envoyer</button>        
      </div>
    </form>
  <?php include 'footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
