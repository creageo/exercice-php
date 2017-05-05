<?php
if (isset($_POST['prenomi'])){
	$prenomi = $_POST['prenomi'];
}else{
	$prenomi = "";
}
if (isset($_POST['prenome'])){
	$prenome = $_POST['prenome'];
}else{
	$prenome = "";
}
if (isset($_POST['excuse'])){
	$excuse = $_POST['excuse'];
}else{
	$excuse = "";
}
?>
<!DOCTYPE html>

<html>

<head>

     <title></title>

</head>

<body>

    <form method="POST">

        <h1>Générateur d'excuse</h1>

		<div class="form-group">
		<label for="exampleInputName2">Prénom de l'instituteur</label>
		<input type="text" name="prenomi" value="prenom" class="form-control" id="exampleInputName2">
		</div>

		<div class="form-group">
		<label for="exampleInputName1">Prénom de l'enfant</label>
		<input type="text" name="prenome" value="prenom" class="form-control" id="exampleInputName1">
		</div>

		<label>Excuse</label>
		<div class="radio" name="excuse" value="excuse">
		<label>
		<input type="radio" name="excuse" id="optionsRadios1" value="maladie">
		maladie
		</label>
		</div>

		<div class="radio">
		<label>
		<input type="radio" name="excuse" id="optionsRadios2" value="décès de l'animal de compagnie">
		décès de l'animal de compagnie
		</label>
		</div>

		<div class="radio">
		<label>
		<input type="radio" name="excuse" id="optionsRadios3" value="activité extra-scolaire importante">
		activité extra-scolaire importante
		</label>
		</div>

		<button type="submit" class="btn btn-default">Générer votre excuse</button>
		<p>
		<?php 
		echo $prenomi;
		echo "</br>";
		echo $prenome;
		echo "</br>";
		echo $excuse;
		?>
		</p>

    </form>

</body>

</html>