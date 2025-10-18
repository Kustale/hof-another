<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<title>PoisonInvasion</title>
<?php
$Poison	= 150;
for($int=0; $int<520; $int+=20) {
	$dmg	= (log(($int+22)/10) - 0.8)/0.85;
	print($int." : ".($dmg*150)."(".(($dmg*150)/150).")"."<br />\n");
}
?>