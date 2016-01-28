<?php
/*
For this PHP code exercise, create a file named array_search_keys.php.
This file should contain a function named array_search_keys() which accepts
two parameters. The first parameter must be an array. The second parameter is
an optional string.

array_search_keys() is very similar to the array_keys() in PHP. However, instead
of the second parameter matching against the input values, array_search_keys()
should match against the input keys.

Note: for this exercise, you can assume that all keys within the given array are strings.
*/

//Optional second parameter uses a default value of NULL to make it optional

function array_search_keys(array $array, $string = NULL) {
    $keys = array_keys($array);
    $found_keys = [];

    foreach ($keys as $key) {
        if (strpos($key, $string) != FALSE) {
            $found_keys[] = $key;
        }
    }

    return $found_keys;
}
