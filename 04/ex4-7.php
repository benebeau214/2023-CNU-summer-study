<?php
    function hap($n) {
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        return $sum;
    }

    echo "1~10 합계 : ".hap(10)."<br>";
    echo "1~100 합계 : ".hap(100)."<br>";
?>

<?php
    function cute($n){
        $result = "1+1은";
        $result .=$n;

        return $result;
    }

    echo cute(" 귀요미");
?>