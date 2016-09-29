<?php

function array_search_keys($array, $string = null ){
  $allKeys = array_keys($array);
  $output = [];
  foreach ($allKeys as $key){
    if ($key == $string){
      $output = $key;
    }
  } return($output);
}
?>
