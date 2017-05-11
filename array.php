<pre>
<?php
/*
$pays = array( 'Belgique', 'France' , 'Allemagne', 'Pays-Bas', 'Ukraine' );
echo $pays[2];

echo "</br>";

$famille = array( 'fabrice', 'danielle' , 'gabrielle', 'geoffrey', 'charlotte' );
print_r ($famille[2]);

echo "</br>";

$plats = array( 'steack', 'frite' , 'salade', 'ketchup', 'mayo' );
print_r ($plats[2]);

echo "</br>";

$films = array( 'matrix', 'ted' , 'scarface', 'Pulp-fiction', 'americain history x' );
print_r ($films[2]);

echo "</br>";

$utilisateur = array (
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
print_r ($utilisateur['prenom']);

echo "</br>";

$moi = array (
    'prenom' => 'geoffrey',
    'nom' => 'marique',
    'age' => 26,
    'gsm' => '0123456789',
    'aime-le-foot' => 1
    );
print_r ($moi['prenom']);

echo "</br>";

if($moi['aime-le-foot'] === '1') {
    $moi['aime-le-foot'] = "oui";
} else {
    $moi['aime-le-foot'] = "non";
}

print_r ($moi['aime-le-foot']);
*/
/*
$jesus = array(
	'naissance'	=> 0 , 
	'prenom' 		=> 'jesus' ,
	'nom' 	  		=> 'de nazareth' ,
	'hobbies' 	=> array('hobby1' => 'precher',
		                 'hobby2' => 'charpentier'
		                 )
);

$moi = array(
	'naissance'	=> 1973 , 
	'prenom' 		=> 'Alexandre' ,
	'nom' 	  		=> 'mbala mbala' ,
	'hobbies' 	=> array('hobby1' => 'gym',
		                 'hobby2' => 'boxe',
		                 'hobby3' => 'taxidermie'
		                 ),
	'jesus' => $jesus,
);

echo '<pre>';
print_r($moi);
echo '</pre>';

echo '<pre>';
print_r($jesus);
echo '</pre>';

$a=count($moi ['hobbies']);
$b=count($jesus['hobbies']);
$resultat=$a+$b;
echo $resultat;
*/
/*
$web_development = array(

	'frontend'	=> array(),

	'backend'   => array()
);

array_push($web_development['frontend'], 'xhtml', 'css', 'javascript');
array_push($web_development['backend'], 'Ruby on Rails', 'flash');

$web_development['frontend'][0]='html';
unset($web_development['backend'][1]);
echo $web_development['frontend'][0];

echo '<pre>';
print_r($web_development);
echo '</pre>';
*/
/*
$pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

foreach ($pronoms_personnels as $pp){

}

$verbe = array ('code', 'code', 'code','codons', 'codez', 'codent');

foreach ($verbe as $v){

}

for ($i = 0; $i <= 5; $i++) {
    echo "</br>";
    echo $pronoms_personnels[$i] . $verbe[$i];
}
*/
/*
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j apprends le PHP.<br />';
    $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
}

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 120)
{
    echo $nombre_de_lignes . ': le nombre de la ligne.<br />';
    $nombre_de_lignes++;
}

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 120; $nombre_de_lignes++)
{
    echo 'le nombre de la ligne' . $nombre_de_lignes . '<br />';
}

$utilisateur = array (
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
print_r ($utilisateur['prenom']);
*/
/*
$pronoms_personnels = array ('geoffrey', 'eric', 'nadia','krishneck', 'hugo', 'david');

for ($i = 0; $i <= 5; $i++) {
    echo "</br>";
    echo $pronoms_personnels[$i];
}
*/

$pays = array ('belgique', 'france', 'maroc','thaillande', 'chine', 'japon');

foreach ($pays as $p){
      
}

?>
<select name="pays">
    <option value="belgique">belgique</option>
    <option value="france">france</option>
    <option value="maroc">maroc</option>
    <option value="thaillande">thaillande</option>
    <option value="chine">chine</option>
    <option value="japon">japon</option>
</select>
</pre>