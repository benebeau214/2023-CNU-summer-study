<?php
    $tel = "010-1234-5678";
    $arr = explode("-", $tel);//하이픈 제거하고 배열에 저장

    $tel2 = $arr[0].$arr[1].$arr[2];//01012345678
    echo $tel2;    
?>