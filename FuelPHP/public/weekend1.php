<?php
/*  
php변수는 $로 시작
영문 및 _로 시작
대소문자 구분
한글 한자 기호 인식 X
*/

$p = "PHP";
print "주말에 끝내는 ".$p." 프로그래밍"; // .으로 문자열 연결
print "<br>";
print "weekend ".$p;
print "<br><br>";
$p = "php";
print "주말에 끝내는 ".$p." 프로그래밍";
print "<br>";
print "weekend ".$p;
?>