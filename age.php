<!DOCTYPE html>
<html>
<head>
     <title></title>
</head>
<body>

<form method="GET">

<p>Quel est votre âge ?</p>

<input type="number" name="howmuch" min="0">

<label>Homme ou Femme?</label>

<div>
	<label>Homme</label>
	<input type="radio" name="genre" id="optionsRadios1" value="homme">
</div>
    
<div>
	<label>Femme</label>
	<input type="radio" name="genre" id="optionsRadios2" value="femme">
</div>

<p><button type="submit" class="btn btn-default">envoyez vos informations</button></p>

<?php

print_r($_GET);

if (isset($_GET['howmuch'])){
	$howmuch = $_GET['howmuch'];
}else{
	$howmuch = 1;
}

$age= $howmuch;

if ($age >= 1 && $age <= 10) {
	$msg="salut petit";
}
elseif ($age > 10 && $age <= 20) {
	$msg="salut grand";
}
elseif ($age > 20 && $age <= 999) {
	$msg="salut grand-pere";
}

if (isset($_GET['genre'])){
	$genre = $_GET['genre'];
}else{
	$_GET['genre'] = "";
	$genre = '';
}

echo $howmuch;
echo "</br>";
echo $genre;
echo "</br>";
echo $msg;

?>

</form>

</body>
</html>