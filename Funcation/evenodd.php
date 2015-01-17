<?php

$_POST['number'];

echo identifyEvenOddNumber($_POST['number']);


function identifyEvenOddNumber($number){

    if(($number %2) == 0){

        return "even Numbr";
    }
    else{
        return "odd Number";
    }

}

function is_OddNumber($number){

    if(($number %2) == 0){

        return false;
    }
    else{
        return true;
    }

}

