<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function LoadMapAppear($user) {
	$land	= array();
	array_push($land,"gb0","gb1","gb2","mt0");
	if(isset($user->item["8000"]))
		array_push($land,"ac0");
	if(isset($user->item["8001"]))
		array_push($land,"ac1");
	if(isset($user->item["8002"]))
		array_push($land,"ac2");
	if(isset($user->item["8003"]))
		array_push($land,"ac3");
	if(isset($user->item["8004"]))
		array_push($land,"ac4");
	if(isset($user->item["8005"]))
		array_push($land,"ac5");
	if(isset($user->item["8026"]))
		array_push($land,"ac6");
	if(isset($user->item["8027"]))
		array_push($land,"ac7");
	if(isset($user->item["8028"]))
		array_push($land,"ac8");
	if(isset($user->item["8009"]))
		array_push($land,"snow0");
	if(isset($user->item["8010"]))
		array_push($land,"snow1");
	if(isset($user->item["8011"]))
		array_push($land,"snow2");
	if(isset($user->item["8012"]))
		array_push($land,"sea0");
	if(isset($user->item["8012"]))
		array_push($land,"sea1");
	if(isset($user->item["8014"]))
		array_push($land,"ocean0");
	if(isset($user->item["8017"]))
		array_push($land,"sand0");
	if(isset($user->item["8015"]))
		array_push($land,"volc0");
	if(isset($user->item["8016"]))
		array_push($land,"volc1");
	if(isset($user->item["8013"]))
		array_push($land,"swamp0");
	if(isset($user->item["8018"]))
		array_push($land,"swamp1");
	if(isset($user->item["8019"]))
		array_push($land,"des01");
	if(isset($user->item["8020"]))
		array_push($land,"plund01");
	if(isset($user->item["8022"]))
		array_push($land,"blow01");
	if(isset($user->item["8023"]))
		array_push($land,"swamp2");
	if(isset($user->item["8024"]))
		array_push($land,"ocean2");

	if(date("H") == 12 && substr(date("i"),0,1)==15)
		array_push($land,"horh");
	return $land;
}
?>