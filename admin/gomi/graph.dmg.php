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
for($i=0; $i<5000; $i++) {
	print("<tr><td>");
	$no	= sqrt($i)*10;
	echo $i.":".$no."<br>";
	print("</td><td>");
	$wid=round($no);
	print("<img src=\"./bar.gif\" width=\"$no\" height=\"7\"");
	print("</td></tr>");
}
?>
</tbody></table>