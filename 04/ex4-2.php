<?php
    $string = "php is fun.";

    $length = strlen($string); //문자열 길이
    echo $length."<br>";

    $string2 = str_replace("php", "PHP", $string); //php를 PHP로 바꾼다. (원래문자, 바꿀문자, 적용문자열)
    echo $string2."<br>";
?>