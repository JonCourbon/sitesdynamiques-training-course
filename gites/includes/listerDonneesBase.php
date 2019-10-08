<?php
include_once('../vendor/autoload.php');
$storage = new Flatbase\Storage\Filesystem('../ressources');
$flatbase = new Flatbase\Flatbase($storage);

$tableauGites = $flatbase->read()->in('gites')->get();
print_r($tableauGites);

echo '<br/>'."\n";
$nbgites=count($tableauGites);
for($i=0;$i<$nbgites;$i++){
  echo $tableauGites[$i]["nom"].",";
}


echo '<br/>'."\n";
foreach($tableauGites as $gite){
  echo $gite["nom"].",";
}

?>
