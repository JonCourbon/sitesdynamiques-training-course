<?php
include_once('../vendor/autoload.php');

$storage = new Flatbase\Storage\Filesystem('../ressources');
$flatbase = new Flatbase\Flatbase($storage);

$tableauGites = $flatbase->read()->in('gites')->get();
print_r($tableauGites);

?>
