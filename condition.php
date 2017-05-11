<!DOCTYPE html>
<html>
<head>
     <title></title>
</head>
<body>

<form method="GET">

<p>Homme ou Femme?</p>

<div>
	<label>Homme</label>
	<input type="radio" name="genre" id="optionsRadios1" value="homme">
</div>
    
<div>
	<label>Femme</label>
	<input type="radio" name="genre" id="optionsRadios2" value="femme">
</div>

<p>Quel est votre âge ?</p>

<input type="number" name="howmuch" min="1">

<p>Parles-tu anglais?</p>

<div>
	<label>yes</label>
	<input type="radio" name="langue" id="optionsRadios1" value="yes">
</div>
    
<div>
	<label>non</label>
	<input type="radio" name="langue" id="optionsRadios2" value="non">
</div>

<p>Quel est ta note ?</p>

<input type="number" name="note" min="1">

<p><button type="submit" class="btn btn-default">envoyez vos informations</button></p>

<?php

if (isset($_GET['genre'])){
	$genre = $_GET['genre'];
}else{
	$genre = "";
}

if (isset($_GET['howmuch'])){
	$howmuch = $_GET['howmuch'];
}else{
	$howmuch = "";
}

if (isset($_GET['langue'])){
	$langue = $_GET['langue'];
}else{
	$langue = "";
}

if (isset($_GET['note'])){
	$note = $_GET['note'];
}else{
	$note = "";
}

$age=$howmuch;
$msg="";
$msgnote="";

if ($genre == "homme" && $age >= 1 && $age <= 12 && $langue == "yes") {
	$msg="Hello boy!";
}
elseif ($genre == "homme" && $age >= 1 && $age <= 12 && $langue == "non") {
	$msg="salut petit";
}
elseif ($genre == "homme" && $age > 12 && $age <= 18) {
	$msg="salut l'ado";
}
elseif ($genre == "homme" && $age > 18 && $age <= 155) {
	$msg="salut l'adulte";
}
elseif ($genre == "femme" && $age >= 1 && $age <= 12) {
	$msg="salut petite";
}
elseif ($genre == "femme" && $age > 12 && $age <= 18) {
	$msg="salut l'adolescente";
}
elseif ($genre == "femme" && $age > 18 && $age <= 155) {
	$msg="salut l'adulte femme";
}

if ($note >= 1 && $note <= 3) {
	$msgnote="Ce travail est nul.";
}
elseif ($note >= 6 && $note <= 9) {
	$msgnote="Ce travail n'est pas terrible.";
}
elseif ($note == 10) {
	$msgnote="Tout juste!";
}

echo $genre;
echo "</br>";
echo $howmuch;
echo "</br>";
echo $langue;
echo "</br>";
echo $note;
echo "</br>";
echo $msg;
echo "</br>";
echo $msgnote;

?>

</form>

</body>
</html>