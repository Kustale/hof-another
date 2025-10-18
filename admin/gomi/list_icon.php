<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

$f	= "../image/icon/";
$files	= array();
$files	= @glob($f."*.png");
foreach($files as $name){
	echo "<img src=\"{$name}\">{$name}<br>";
}
?>