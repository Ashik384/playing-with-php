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
/**
 * Function Default value set
 *
 * @param string $item
 * @param string $quantity
 * @return void
 */
function serveRoboto($item='Coffe', $quantity='1 Cups'){
    echo "{$quantity} of {$item} has to be served";
}
/**
 * Sum of 3 numbers
 *
 * @param [type] $one
 * @param [type] $two
 * @param [type] $three
 * @return integer
 */
function sum($one, $two, $three):int{
    return $one + $two + $three;
}

/**
 * Multiple Aarguments to a function 
 *
 * @param integer ...$numbers
 * @return integer
 */
function sumFun( ...$numbers ):int{
    $sum = 0;
    for($i = 0; $i<count($numbers); $i++){
        $sum += $numbers[$i];
    }
    return $sum;
}

/**
 * Recursive Function
 *
 * @param [type] $start
 * @param [type] $end
 * @param [type] $stepping
 * @return void
 */
function pritnNumber($start, $end, $stepping){
    if($start>=$end){
        return;
    }
    echo $start+=$stepping;
    echo PHP_EOL;
    pritnNumber($start, $end, $stepping);
}