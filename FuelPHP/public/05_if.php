<?php
$str = "요일에 끝내는 PHP 프로그래밍";
$array_week = array("일", "월", "화", "수", "목", "금", "토");
$weekend = "";
for($i=6; $i>=0; $i--){
	if ($array_week[$i] == "토"){
		$weekend = $array_week[$i];
	}
	elseif($array_week[$i] == "일"){
		$weekend = $weekend.$array_week[$i];
	}
	else{
		print $array_week[$i].$str;
		print "<br>";
	}
}

print $weekend."에 끝내는 PHP 프로그래밍";

//
print "<br><br>";
$weekend = "";
for($i=6; $i>=0; $i--){
	if($array_week[$i] == "토" || $array_week[$i] == "일"){
		$weekend = $weekend.$array_week[$i];
	}
	else
	{
		print $array_week[$i].$str;
		print "<br>";
	}
}
print $weekend."에 끝내는 PHP 프로그래밍";

?>