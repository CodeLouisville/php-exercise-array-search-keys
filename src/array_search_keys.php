<?php
//Optional second parameter uses a default value of NULL to make it optional
function array_search_keys(array $array, string $string = NULL) {
    $keys = array_keys($array, $string);
    return $keys;
}
