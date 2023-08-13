<?php

//7번
$point ="1300/3600/9000/200";
$arr=explode("/", $point);

for($i=0; $i<count($arr);$i++){
    echo $arr[$i]."점<br>";
}

//8번

$email = array("test","naver.com");
$str = join("@",$email);

echo $str;

//9번
echo "<br>";
$arr=[];
array_push($arr,"사과");
array_push($arr,"오렌지");
array_push($arr,"딸기");

$str = join("/",$arr);
echo $str;

//10번
echo "<br>";
$file1 = fopen("test1.txt", "r");
$file2 = fopen("test2.txt", "w");

$str="";
$number = 1;
while(! feof($file1)){
    $str.=$number.":".fgets($file1);
    $number++;
}

fwrite($file2,$str);
echo "파일 쓰기 완료!";

fclose($file1);
fclose($file2);
?>