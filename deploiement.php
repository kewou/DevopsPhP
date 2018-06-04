<?php

$files = glob('Auto{,.}*', GLOB_BRACE);
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}

?>