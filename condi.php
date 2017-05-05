<!DOCTYPE html>

<html>

<head>

<meta charset="utf-8">

<title></title>

</head>

<body>

<p>

<?php

$time= date('G');

if ($time >= 5 && $time <= 9) {
$message="Bonjour!";
}

elseif ($time > 9 && $time <= 12) {
$message="Bonne Journée!!";
}

elseif ($time > 12 && $time <= 16) {
$message="Bon après-midi!";
}

elseif ($time > 16 && $time <= 21) {
$message="Bonne soirée!!";
}

elseif ($time > 21 && $time <= 4 ) {
$message="Bonne soirée!!";
}

echo $message;

?>

</p>

<form method="GET">

<label for "age">Quel est votre âge?
<input type="Number" name="age">
</label>

<p>Homme ou femme?</p>

<label for "genre">F<input type="radio" name="genre" value="F">
</label>

<label for "genre">H<input type="radio" name="genre" value="H">
</label>

<p>Parles-tu anglais?</p>

<label for "langue">Oui<input type="radio" name="langue" value="oui">
</label>

<label for "langue">Non<input type="radio" name="langue" value="non">
</label>

<p>Quelle est ta note?</p>

<label for "note"><input type="Number" name="note">
</label>

<div>

<button type="submit">Envoyer</button>

</div>
   
</form>

<p>

<?php

$age = $_GET["age"];
$sexe = $_GET["genre"];
$langue = $_GET["langue"];

if (isset($_GET["age"],$_GET["genre"],$_GET["langue"])) {
if ($age<12 AND $sexe=="H" AND $langue=="non") {
echo "Salut Petit!";
}

elseif ($age<12 AND $sexe=="F" AND $langue=="non") {
echo "Salut Petite!";
}

if ($age<12 AND $sexe=="H" AND $langue=="oui") {
echo "Hello boy!";
}

elseif ($age<12 AND $sexe=="F" AND $langue=="oui") {
echo "Hello girl!";
}

elseif ($age>=12 AND $age<18 AND $sexe=="H" AND $langue=="non") {
echo "Salut l'ado!";
}

elseif ($age>=12 AND $age<18 AND $sexe=="F" AND $langue=="non") {
echo "Salut l'adolescente!";
}

elseif ($age>=12 AND $age<18 AND $sexe=="H" AND $langue=="oui") {
echo "Hello teenage boy!";
}

elseif ($age>=12 AND $age<18 AND $sexe=="F" AND $langue=="oui") {
echo "Hello teenage girl!";
}

elseif ($age>=18 AND $age<115 AND $langue=="non") {
echo "Salut l'adulte!";
}

    elseif ($age>=18 AND $age<115 AND $sexe=="H" AND $langue=="oui") {
      echo "Hello sir!";
    }
    elseif ($age>=18 AND $age<115 AND $sexe=="F" AND $langue=="oui") {
      echo "Hello miss!";
    }
    elseif ($age>=115 AND $sexe=="H" AND $langue=="non") {
      echo "Wow! Toujours vivant?";
    }
    elseif ($age>=115 AND $sexe=="F" AND $langue=="non") {
      echo "Wow! Toujours vivante?";
    }
    elseif ($age>=115 AND $sexe=="H" AND $langue=="oui") {
      echo "Wow! Still alive, old man??";
    }
    elseif ($age>=115 AND $sexe=="F" AND $langue=="oui") {
      echo "Wow! Still alive, old lady?";
    }
  };

    ?></p>
    <p><?php
    $note = $_GET["note"];
    switch ($note) {
      case 0:
      case 1:
      case 2:
      case 3:
        echo "Ce travail est nul";
        break;
      case 6:
      case 7:
      case 8:
        echo "Ce travail n'est pas terrible";
        break;
      case 10:
        echo "Tout juste!";
        break;
      case 11:
      case 12:
      case 13:
      case 14:
        echo "C'est pas mal!";
        break;
      case 15:
      case 16:
      case 17:
      case 18:
        echo "BRAVO!";
        break;
      case 19:
      case 20:
        echo "Police! arrêtez ce tricheur!";
        break;
    }
      ?></p>
<p>
  <?php
      if ($age>20 AND $age<42 AND $sexe="F") {
        echo "Bonjour, bienvenue parmi nous!";
      }
      if ($age<=20 OR $age>=42 OR $sexe!="F") {
          echo "Désolé vous ne remplissez pas les conditions!";
        }

 ?>-


  </body>
</html>