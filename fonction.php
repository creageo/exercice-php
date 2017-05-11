<?php

$name = "Maurice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Jésus";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
// OUTPUT

// Déclaration de la fonction
function dis_bonjour($nom){
	echo "<p>Bonjour $nom!</p>";
	echo '<hr>';
}

// appels de la fonction 
dis_bonjour("Maurice");
dis_bonjour("Alice");
dis_bonjour("Jésus");
dis_bonjour("Judas");

// OUTPUT

$team = array('Elvis', 'Johnny');
print_r($team);

echo "</br>";

$chaine = 'je veu des bitcoins';
$chaine = str_shuffle($chaine);
 
echo $chaine;

echo "</br>";


// Si le formulaire a été soumis...
if (isset($_POST) && !empty($_POST) ){

	// sanitisation des inputs
	$name = sanitize( $_POST['name'] );
	$email = sanitize( $_POST['email'] );

	// validation...

}

echo "</br>";

$foo = 'bonjour tout le monde!';
$foo = ucfirst($foo);             // Bonjour tout le monde!
echo $foo;

echo "</br>";

echo date('Y,m,d,h,i,s');

echo "</br>";

$a=1;
$b=2;

$resultat=$a+$b;

echo $resultat;

echo "</br>";

function somme($a,$b){
	if (is_int($a) AND is_int($b)) {
		echo "c'est bon";
		$resultat =$a + $b;
		return $resultat;
	}else {
		echo "c'est pas bon";
	}
}
echo somme(600,177);

echo "</br>";

$a="maman est blonde";
echo $a[0],$a[6],$a[10];

echo "</br>";

$a="caecotrophie chaenichthys microsphaera sphaerotheca";
print str_replace('ae', 'Æ', $a);

echo "</br>";

$a="cæcotrophie, chænichthys, microsphæra, sphærotheca";
print str_replace('æ', 'ae', $a);

?>