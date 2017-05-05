<?php

$time= date('H');
$minuts= date('i');

if ($time >= 5 AND $time < 9) {
echo "Bonjour!!";
}

elseif ($time >= 9 AND $time < 12) {
echo "Bonne Journée!!";
}

elseif ($time >= 12 AND $time < 16) {
echo "Bon après-midi!!";
}

elseif ($time >= 16 AND $time < 21) {
echo "Bonne soirée!!";
}

elseif ($time >= 21 AND $time < 4 ) {
echo "Bonne soirée2!!";
}
?>