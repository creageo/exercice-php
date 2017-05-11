<?php

$temp = true;
$argent = 1500;

//si j'ai l'argent et le temp cette été je part en voyage, sinon je reste a bruxelles

if ($temp == true && $argent >= 1000){
	echo "je part en voyage";
}else {
	echo "je reste a bruxelles";
}

?>