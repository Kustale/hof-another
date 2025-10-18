<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include("../data/data.create.php");
include("../data/data.enchant.php");

list($low,$high)	= ItemAbilityPossibility("剑");
print("---------------LOW<br />\n");
foreach($low as $enchant) {
	$item	= array();
	AddEnchantData($item,$enchant);
	print('<span style="width:10em;text-align:right">'.$enchant.'</span>:'.$item["option"]."<br />\n");
}
print("---------------HIGH<br />\n");
foreach($high as $enchant) {
	$item	= array();
	AddEnchantData($item,$enchant);
	print('<span style="width:10em;text-align:right">'.$enchant.'</span>:'.$item["option"]."<br />\n");
}

function dump($var){
	print("<pre>\n");
	var_dump($var);
	print("\n</pre>\n");
}
?>