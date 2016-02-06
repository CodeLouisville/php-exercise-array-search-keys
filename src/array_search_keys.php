<?php

  function array_search_keys( $array, $search = null ) {
    $found = [];    
    
    foreach( $array as $key => $item ) {
        $success = strpos( $key, $search ); 

        if ( ( $success === false ) AND ( $search !== null) ) {
            continue;
        }
        
        array_push( $found, $key );
    }    
    
    return $found;
  }
  
?>  
