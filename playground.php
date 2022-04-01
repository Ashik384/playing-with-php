<?php

function hudai() {
    $name='';
    if ( isset( $name ) ) {
        echo "Name is set";
    } else {
        echo "Not Set";
    }
    echo "\n -------------------- \n";

    if ( empty( $name ) ) {
        echo "Empty";
    } else {
        echo "Not Empty";
    }
}