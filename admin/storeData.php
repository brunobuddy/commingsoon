<?php

echo $_POST["baseline"];

try
{
	// Connection base de données
	$db = new PDO('mysql:host=localhost;dbname=my-comming-soon-page;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$db->exec("UPDATE page SET background='test'");


?>