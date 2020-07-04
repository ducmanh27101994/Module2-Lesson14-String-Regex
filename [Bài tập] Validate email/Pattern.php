<?php

function checkEmail($arrEmail){

    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';

    if (preg_match_all($regexp,$arrEmail)){
        echo "Email khop";
    } else {
        echo "Email khong khop";
    }

}

checkEmail("a@gmail.com");
echo "<br>";
checkEmail("ab@gmail.com");
echo "<br>";
checkEmail("abc@gmail.com");
echo "<br>";
checkEmail("@gmail.com");
echo "<br>";
checkEmail("ab@gmail.");
echo "<br>";
checkEmail("@#abc@gmail.com");
echo "<br>";