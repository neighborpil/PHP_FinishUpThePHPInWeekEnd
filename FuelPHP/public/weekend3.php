<?php

/*
반복문
*/

$str = "요일에 끝내는 PHP 프로그래밍";
$array_week = array("Sun"=>"일", "Mon"=>"월", "Tue"=>"화", "Wed"=>"수",
					"Thr"=>"목", "Fri"=>"금", "Sat"=>"토");
// foreach
foreach($array_week as $value){
	print $value.$str;
	print "<br>";
}

foreach($array_week as $value){
	print $value.$str;
	print "<br>";
}

$array_week = array("일", "월", "화", "수", "목", "금", "토");
for($i=0; $i<7; $i++){
	print $array_week[$i].$str;
	print "<br>";
}

for($i=6; $i>=0; $i--){
	print $array_week[$i].$str;
	print "<br>";
}
?>