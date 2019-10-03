<?php

function lancerChrono()
{
	$GLOBALS["starttime"]=microtime(true);
}

function tempsExecution()
{
	if(version_compare(PHP_VERSION, '5.4.0') >= 0)
		return microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
	else
	{
		return microtime(true) - $GLOBALS["starttime"];
	}
}
/*
 // usage: 
  lancerChrono();
  sleep(2);
  $temps_execution = tempsExecution();
  echo "T1=".$temps_execution."\n";
*/

// récupérer la taille de la base de données $nom_bd en utilisant le PDO $pdo, pour une unité: MB, KB ou B
function tailleBaseDeDonnees($pdo,$nom_bd,$unite = "MB")
{
	$operation="/ 1000 / 1000";
	if($unite == "KB")
	{
		$operation="/ 1000";
	}
	else if($unite == "B")
	{
		$operation="";
	}
	$requete='SELECT table_schema AS nomBase,
         sum( data_length + index_length )'.$operation.' AS taille
     FROM information_schema.TABLES
     WHERE table_schema = "'.$nom_bd.'"
     GROUP BY table_schema';
	$resultats=$connection->query($requete);
	$tableau=$resultats->fetchAll();
	$resultats -> closeCursor ();
	return $tableau[0]["taille"];
}



?>



