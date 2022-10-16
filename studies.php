<?php

require __DIR__ . "/autoload.php";


$json = 'http://localhost/coronafactsmatter.github.io/studies.json';

$newCount = new App\Core\Datadisplayer($json);
var_dump($newCount->showJsonData());

?>