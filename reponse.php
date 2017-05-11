<pre>
<?php

echo($_POST["prenom"]);
echo "</br>";
echo($_POST["nom"]);
echo "</br>";
echo($_POST["email"]);
echo "</br>";
echo($_POST["pays"]);
echo "</br>";
echo($_POST["genre"]);
echo "</br>";
echo($_POST["sujet"]);
echo "</br>";
echo($_POST["message"]);

               $to = $_POST["email"];
               $subject = 'Mail pour le support technique';
               $headers = 'Mime-Version: 1.0'."\r\n";
               $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
               $headers .= "\r\n";
               $message  = 'De: ' . $_POST["nom"] . $_POST["prenom"] . "<br />";
               $message .= 'Email: ' . $_POST["email"] . "<br />";
               $message .= 'Type de probleme: ' . $_POST["sujet"] . "<br />";
               $message .= "Message:<br />" . $_POST["message"] . "<br />";
               $envoi = mail($to, $subject, $message, $headers);

?>
</pre>