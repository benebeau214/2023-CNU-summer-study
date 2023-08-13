<?php
    function baesu($n) {
        $sum = 0;
        for ($i=1; $i<=100; $i++)
            if ($i%$n == 0)
                $sum += $i;

        return $sum;
    }

    $n = 5;
    $total = baesu($n);

    echo "1~100 정수 중 ".$n."의 배수 합계 : ".$total;
?>
