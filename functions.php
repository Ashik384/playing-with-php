<?php
/**
 * Checking Even or Odd Number
 *
 * @param Integer $x
 * @return boolean
 */
function isEvan($x){
    if( gettype($x) != 'integer' ){
        return "invalid";
    }else{
        if( $x % 2==0 ){
            echo "{$x} This is EVEN number";
        }else{
            echo "{$x} This is ODD number";
        }
    }
}

function serveRoboto($item='Coffe', $quantity='1 Cups'){
    echo "{$quantity} of {$item} has to be served";
}