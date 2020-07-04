<?php

function valiedataClass($arr){

    $regexp = '/^[CAP]{1}+[0-9]{4}+[GHIKML]{1}$/';

    if (preg_match_all($regexp,$arr)){
        echo "Dung";
    } else {
        echo "Sai";
    }
}

echo valiedataClass("C0318G");
echo valiedataClass("M0318G");
echo valiedataClass("P0323A");
