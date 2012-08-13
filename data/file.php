<?php

$tmp = null;
$links = array();

//Path du chemin vers le dossier de base
$folderPath = "C:\wamp\www\\";

if(isset($_GET['folder'])){
  $folderName = $_GET['folder'];

  $folderPath = $folderPath.$folderName.'\\';

  if($folder = opendir($folderPath)){
    while(false != ($file = readdir($folder))){
      //on affiche seulement les dossiers et fichiers
      if($file != '.' && $file != '..'){
        if(is_dir($folderPath.$file)){
          $tmp = array('name' => $file, 'path' => $folderName, 'type' => 'folder');
          array_push($links, $tmp);
        }
        else{
          $tmp = array('name' => $file, 'path' => $folderName, 'type' => 'file');
          array_push($links, $tmp);
        }
      }
    }
  }
}
else{
  if($folder = opendir($folderPath)){
    while(false != ($file = readdir($folder))){
      //on affiche seulement les dossiers et fichiers
      if($file != '.' && $file != '..'){
        if(is_dir($folderPath.$file)){
          $tmp = array('name' => $file, 'path' => "", 'type' => 'folder');
          array_push($links, $tmp);
        }
        else{
          $tmp = array('name' => $file, 'path' => "", 'type' => 'file');
          array_push($links, $tmp);
        }
      }
    }

    //et on referme le tout!
    closedir($folder);
  }
  else{
    //traitement de l'erreur du fichier
  }
}

$links = json_encode($links);

print_r($links);
?>