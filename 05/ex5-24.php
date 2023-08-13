<?php
    $file = fopen("data.csv","r");
    $header = fgetcsv($file); //한줄의 데이터를 배열로 읽어온다.
    $num = count($header);//배열의 개수, 과목이 3개다.
    echo "<h3>5명 학생의 ".$num."과목 합계/평균 구하기</h3>";

    while(!feof($file)) {
        $sum = 0;
        $line = fgetcsv($file);//한줄의 데이터를 읽어들인다.
        foreach ($line as $v) {
            $sum += $v;
        }
        $avg = round($sum/$num, 2);
        echo "합계: ".$sum.", 평균: ".$avg."<br>";
    }

    fclose($file);
?>