<?php

$tmp = null;
$links = array();

if(isset($_GET['folder'])){
  $folderName = $_GET['folder'];

  for($i=1;$i<4;$i++){
    $tmp = array('name' => $folderName.$i, 'type' => 'file');
    array_push($links, $tmp);
  }
}
else{
  $folderName = "Global";

  for($i=1;$i<4;$i++){
    $tmp = array('name' => 'dev'.$i, 'type' => 'folder');
    array_push($links, $tmp);
  }
}

$links = json_encode($links);

print_r($links);
?>