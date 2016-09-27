<?php

function array_search_keys( array $array, $search = null) {
    $new_array = array();

    foreach($array as $key => $value) {
        if (is_int(strpos($key, $search))) {
            $new_array[] = $key;
        }
    }

    return $new_array;
}