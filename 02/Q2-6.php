<h2>입장료 계산하기</h2>
<?php
   	$child = 5000;     	// 소인 입장료
    $nchild = 3;		    // 소인 인원 
    $adult = 8000;		// 대인 입장료
  	$nadult = 2;		    // 대인 인원

 	$total = $child * $nchild + $adult * $nadult;   // 전체 입장료

  	echo "소인 입장료 : ".$child."원<br>";
    echo "소인 인원 : ".$nchild."명<br>";
    echo "대인 입장료 : ".$adult."원<br>";
    echo "대인 인원 : ".$nadult."명<br>";
 	echo "- 전체 입장료 : ".$total."원";
?>