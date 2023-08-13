<?php
    $file = fopen("hello.txt","r");

    while(! feof($file)) { //EOF 확인
        echo fgets($file)."<br>"; //파일에서 한 줄의 데이터 반환
    }

    fclose($file);
?>