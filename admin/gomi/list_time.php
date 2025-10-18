<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<title>time</title>
<?php
$now	= time();
for($i=-24; $i<24; $i++) {
	if($i==0)
		print("Now : ".($now-60*60*$i)."<br />\n");
	else
		print("+{$i} : ".($now-60*60*$i)."<br />\n");
}
?>