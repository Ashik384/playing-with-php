<?php

function isCheck($inputName, $value){
    if( isset($_REQUEST[$inputName]) && is_array($_REQUEST[$inputName]) && in_array($value, $_REQUEST[$inputName]) ){
        echo " checked ";
    }
}

function selectedOp( $value, $items ){
    if( isset($_REQUEST[$items]) &&  is_array($_REQUEST[$items]) && in_array( $value, $_REQUEST[$items])){
        echo "selected";
    }
}