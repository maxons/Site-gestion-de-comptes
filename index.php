<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>

<div id="container_add">
	<div>
	<p>
		<h3>Saisir une nouvelle opération:</h3>
	</p>

	<form action="add_operation.php" method="post">
	<p>
	    <label for="numero_compte">Numéro du compte: </label>
	    <input type="text" name="numero_compte" id="numero_compte">
	</p>
	<p>
	    <label for="montant">Montant: </label>
	    <input type="text" name="montant" id="montant">
	</p>
	<p>
	    <label for="date">Date: </label>
	    <input type="date" name="date" id="date">
	</p>
	<p>
	   <label for="type">Type d'évènement: </label>
	   <select name="type" id="type">
	       <option value="Loisirs">Loisirs</option>
	       <option value="Sorties">Sorties</option>
	       <option value="Voyages">Voyages</option>
	       <option value="Nourriture">Nourriture</option>
	       <option value="Ammeublement">Ammeublement</option>
	       <option value="Charges">Charges</option>
	       <option value="Loyer">Loyer</option>
	       <option value="Autre">Autre</option>
	       <option value="Credit">Credit</option>
	       <option value="Salaire">Salaire</option>
	   </select>
	</p>
	<p>
	   <label for="debit">Est-ce un débit? </label>

	   <ul>
	   <li class="hide">
	   <input type="radio" name="debit" value="oui" id="oui" checked/> <label for="oui">Oui</label>
	   </li>
	   <li class="hide">
	   <input type="radio" name="debit" value="non" id="non"/> <label for="non">Non</label>
	   </li>
	   </ul>

	</p>
	<p>
	    <label for="description">Description: </label>
	    <textarea name="description" id="description"></textarea>
	</p>
	<p>
		<label for="Valider"></label>
	    <input type="submit" value="Valider" />
	</p>
	</form>
	</div>

	<div>
	<p>
		<h3>Saisir un nouveau compte:</h3>
	</p>

	<form action="add_compte.php" method="post">
	<p>
	    <label for="nom">Nom: </label>
	    <input type="text" name="nom" id="nom">
	</p>
	<p>
	    <label for="solde">Solde: </label>
	    <input type="text" name="solde" id="solde">
	</p>
	<p>
	    <label for="date">Date de fin: </label>
	    <input type="date" name="date" id="date">
	</p>
	<p>
	    <label for="nom_proprietaire">Nom du propriétaire: </label>
	    <input type="text" name="nom_proprietaire" id="nom_proprietaire">
	</p>
	<p>
		<label for="Valider"></label>
	    <input type="submit" value="Valider" />
	</p>
	</form>
	</div>


</div>
<hr>

<div class="container">
	<div>
	<h3>Table operation</h3>
	<?php 
	include("select_operation.php")
	?>
	</div>

	<div>
	<h3>Table compte</h3>
	<?php 
	include("select_compte.php")
	?>
	</div>
</div>	


</body>
</html>