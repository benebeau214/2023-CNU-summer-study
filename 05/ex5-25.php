<?php
    $file = fopen("hello2.txt","w");
    
    $str = "날씨가 너무 더워요.";
    fwrite($file, $str);

    echo "파일쓰기 완료!";
    fclose($file);
?>