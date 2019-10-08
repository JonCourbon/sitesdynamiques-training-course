<?php

dernierIdGite();

function dernierIdGite()
{
  include_once('../vendor/autoload.php');

  $storage = new Flatbase\Storage\Filesystem('../ressources');
  $flatbase = new Flatbase\Flatbase($storage);

  $legite= $flatbase->read()->in('gites')->sortDesc('id')->first();
  echo $legite["id"];
}


?>
