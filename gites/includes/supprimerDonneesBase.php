<?php
include_once('../vendor/autoload.php');

$storage = new Flatbase\Storage\Filesystem('../ressources');
$flatbase = new Flatbase\Flatbase($storage);

$flatbase->delete()->in('gites')->execute();

?>
