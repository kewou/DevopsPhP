

<?php

/*
// Création du Nexus
global $dossier;
$dossier = 'Nexus';
if(!is_dir($dossier)){
   mkdir($dossier);
}
*/
// Main du projet

//deleteOldVersion($dossier);
//copieNewVersion($dossier);
//archiveVersion($dossier,$version);
//copy("Config/parameters.yml","Nexus/app/config/parameters.yml");



// Suppression de l'ancienne version
function deleteOldVersion($dossier){	
	echo "<h4>Supression de l'ancienne version  </h4>";
	rrmdir($dossier."/app");
	rrmdir($dossier."/bin");
	rrmdir($dossier."/src");
	rrmdir($dossier."/web");
	echo "<h4 class='ok'>Supression ok !<h/4>";	
}

// Copie de la nouvelle version	
function copieNewVersion($dossier){	
	echo "<h4> Copie new version </h4>";
	CopieRep("../Beezyweb/app",$dossier."/app");
	CopieRep("../Beezyweb/bin",$dossier."/bin");
	CopieRep("../Beezyweb/src",$dossier."/src");
	CopieRep("../Beezyweb/web",$dossier."/web");
	echo "<h4> Copie new version ok !</h4>";
}

// Archivage de la version
function archiveVersion($dossier,$version){
	echo "<h4> Archivage <h4>";
	zipRep($dossier,$version);
	echo "<h4> Archivage ok ! </h4>";
}	

function zipRep($rep,$version){
	$rootPath = realpath($rep);
	$zip = new ZipArchive();
	$zip->open($version.'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
	// Create recursive directory iterator	
	$files = new RecursiveIteratorIterator(
		new RecursiveDirectoryIterator($rootPath),
		RecursiveIteratorIterator::LEAVES_ONLY
	);

	foreach ($files as $name => $file)
	{
		// Skip directories (they would be added automatically)
		if (!$file->isDir())
		{
			// Get real and relative path for current file
			$filePath = $file->getRealPath();
			$relativePath = substr($filePath, strlen($rootPath) + 1);

			// Add current file to archive
			$zip->addFile($filePath, $relativePath);
		}
	}

	// Zip archive will be created only after closing object
	$zip->close();	
		
}

function CopieRep ($orig,$dest) {    
	if(!is_dir($dest)){
	   mkdir($dest);
	}
	$dir = dir($orig); 
	while ($entry=$dir->read()) { 
		$pathOrig = "$orig/$entry"; 
		$pathDest = "$dest/$entry"; 
		// repertoire ->copie récursive
		if (is_dir($pathOrig) and (substr($entry,0,1)<>'.')) 
			CopieRep ($pathOrig,$pathDest);     
		// fichier -> copie simple
		if (is_file($pathOrig) and ($pathDest<>'') and ($fp=fopen($pathOrig,'rb'))) { 
			$buf = fread($fp,filesize($pathOrig)); 
			$cop = fopen($pathDest,'ab+'); 
			fputs ($cop,$buf); 
			fclose ($cop); 
			fclose ($fp); 
		} 
	} 
	$dir->close(); 
}

function rrmdir($dir) {  
  if (is_dir($dir)) {	
    $objects = scandir($dir);
    foreach ($objects as $object) {
      if ($object != "." && $object != "..") {
        if (filetype($dir."/".$object) == "dir") 
           rrmdir($dir."/".$object); 
        else unlink   ($dir."/".$object);
      }
    }
    reset($objects);
    rmdir($dir);
  }  
 }
	
?>