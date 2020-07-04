<?php

function validateAccount($arr){

    $regexp = '/^[_a-z0-9]{6,}$/';

    if (preg_match_all($regexp,$arr)){
        echo "Account hop le";
    } else {
        echo "Account khong hop le";
    }

}
validateAccount("123a_1bc_");
echo "<br>";
validateAccount("_abc123");
echo "<br>";
validateAccount("______");
echo "<br>";
validateAccount("123456");
echo "<br>";
validateAccount("abcdefg");
echo "<br>";
validateAccount(".@");
echo "<br>";
validateAccount("12345");
echo "<br>";
validateAccount("1234_");
echo "<br>";
validateAccount("abcde");
echo "<br>";