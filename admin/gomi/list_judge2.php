<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include("./data.judge_setup_old.php");
for($i=1000; $i<9999; $i++) {
	$j	= LoadJudgeData($i);
	if($j) {
		print("case {$i}:// {$j[exp2]}<br>");
	}
}
?>