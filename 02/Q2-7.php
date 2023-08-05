<h2>결제 금액 계산하기</h2>
<?php
   	$Price = 10000;     	// 책 값
    $discount = 10;		    // 할인율(%)
    $delivery = 2500;		// 배송료

 	$pay = $Price - ($Price * $discount/100) + $delivery;   // 결제 금액

  	echo "책 값 : ".$Price."원<br>";
    echo "할인율 : ".$discount."%<br>";
    echo "배송료 : ".$delivery."원<br>";
    echo "- 결제 금액 : ".$pay."원<br>";
?>