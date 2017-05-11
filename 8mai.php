<?php

$enviemangerfroid = false;
$argent = 4;

//si j'ai envie de manger chaud et que j'ai la somme néccéssaire je mange au quick, sinon je prend une tartine

if ($enviemangerfroid == false && $argent >= 5){
	echo "je mange au quick";
}else {
	echo "je mange mes tartines";
}

?>