<?php

dernierIdGite();

/* fonction qui renvoie la valeur maximale de l'identifiant d'un gite (pour créer un nouvel identifiant unique)*/
function dernierIdGite()
{
  include_once('../vendor/autoload.php');

  $storage = new Flatbase\Storage\Filesystem('../ressources');
  $flatbase = new Flatbase\Flatbase($storage);

  $legite= $flatbase->read()->in('gites')->sortDesc('id')->first();
  echo $legite["id"];
}


?>
