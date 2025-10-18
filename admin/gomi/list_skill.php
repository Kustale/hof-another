<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include("./data.skill.php");

for($no=1000; $no<10000; $no++) {
	$skill = LoadSkillData($no);
	if(!$skill) continue;

	print("case $no: // ".$skill[name]."<br>");
	$list[]	= $no;
}
foreach($list as $var) {
	print("<>$var");
}
?>
