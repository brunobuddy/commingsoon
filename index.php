
<?php 

// Composer Autoload
require 'vendor/autoload.php';

try
{
	// Connection base de données
	$db = new PDO('mysql:host=localhost;dbname=my-comming-soon-page;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $db->query('SELECT * FROM page');

$data = $reponse->fetch();

$reponse->closeCursor(); // Termine le traitement de la requête


$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),
));


// loads template from `views/hello_world.mustache` and renders it.
echo $m->render('home', $data);

?>