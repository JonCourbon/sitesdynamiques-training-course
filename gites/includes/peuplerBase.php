<?php
include_once('../vendor/autoload.php');

$storage = new Flatbase\Storage\Filesystem('../ressources');
$flatbase = new Flatbase\Flatbase($storage);

$flatbase->insert()->in('gites')
    ->set([
      'id'=> 1,
      'nom' => 'La Grange de Gazelle',
      'ville' => 'Saint-Antoine-de-Ficalba',
      'departement' => 'Lot-et-Garonne',
      'urlphoto' => 'images/portfolio-5.jpg'
      ])
    ->execute();

?>
