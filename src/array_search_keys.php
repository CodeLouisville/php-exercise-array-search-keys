<?php
$output = [];
function array_search_keys($array, $string= null){
  foreach ($array as $key => $val){
    if ($key == $val){
    $output[] = $val;
    }
  }return $output;
}
?>
