
<?php 

// Composer Autoload
require 'vendor/autoload.php'; 

$m = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/views'),
));


// loads template from `views/hello_world.mustache` and renders it.
echo $m->render('home', array('planet' => 'world'));

?>