<?php
echo "ookoko";

try
{
	// Connection base de données
	$db = new PDO('mysql:host=localhost;dbname=my-comming-soon-page;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$query = "UPDATE page SET background='" . 
$reponse = $db->query("UPDATE page SET background='new-image3'");

$reponse->closeCursor(); // Termine le traitement de la requête

?>