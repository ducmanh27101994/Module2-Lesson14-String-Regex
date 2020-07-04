<?php

function validatePhone($arr){

    $regexp = '/^[(]{1}+[0-9]{2}+[)]{1}+[-]{1}+[(]{1}+[0]{1}+[1-9]{1}+[0-9]{8}+[)]$/';

    if (preg_match_all($regexp,$arr)){
        echo "Dung";
    } else {
        echo "Sai";
    }

}

validatePhone('(84)-(0978489648)');
validatePhone('(a8)-(22222222)');


