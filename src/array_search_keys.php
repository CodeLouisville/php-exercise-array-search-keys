<?php

function array_search_keys( array $array, $search = null) {
    $new_array = array();

    foreach($array as $key => $value) {
        if (stripos($key, $search) !== false) {
            $new_array[] = $key;
        }
    }

    return $new_array;
}