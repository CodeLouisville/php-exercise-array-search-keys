<?php

function array_search_keys( $array, $search = null ) {

	$found = [];

	foreach ($array as $key => $value) {
		$success = strpos( $key, $search );
		if ( ( $success === false ) and ( $search !== null) ) {
			continue;
		}
		array_push ( $found, $key );
	}

	return $found;
}