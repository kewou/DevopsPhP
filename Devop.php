<!DOCTYPE html>
<html>
<head>
<title>Devop Beezyweb</title>
</head>
<body>

<h1>Livraison Beezyweb</h1>

<?php

require_once('lib.php');

// Dossier du projet à Livrer
$dossier = 'Tmp';

// Version à Livrer
$version="version-1.0";

// Suppression de l'ancienne version
deleteOldVersion($dossier);

// Copie du code à jour
copieNewVersion($dossier);

//Sauvegarde de la version
archiveVersion($dossier,$version);

copy("Config/parameters.yml",$dossier."/app/config/parameters.yml");
rrmdir($dossier."/app/cache");
rrmdir($dossier."/app/logs");

?>


</body>
</html>