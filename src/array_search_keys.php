<?php

function array_search_keys($array, $string = null ){
  $allKeys = array_keys($array);
  $output = [];
  foreach ($allKeys as $key){
    if (strpos($key, $string) !==false){
      $output[] = $key;
    }
  } if ($string == null){
    $output= $allKeys;
  }
  return $output;
}
?>
