<?php
    $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    echo $str;

    $str2 = htmlspecialchars($str);
    echo $str2; //<h3>가 그대로 출력된다.
?>