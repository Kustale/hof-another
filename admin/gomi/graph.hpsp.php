<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<table><tbody>
<?php
$coe	= 3;
$str	= 1;
$lv		= 1;
for($str=1; $str<251; $str++) {
	print("<tr><td>\n");
	print("$str");
	print("</td><td>\n");
	$rstr	= 251 - $str;
	$hp	= 100 * $coe * (1 + ($lv - 1)/49) * (1 + ((250*250) - $rstr*$rstr)/(250*250));
	print("$hp");
	print("</td></tr>\n");
}
?>
</tbody></table>