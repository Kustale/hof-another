<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=GBK">
<title>Monster List</title>
<link rel="stylesheet" href="../basis.css" type="text/css">
<link rel="stylesheet" href="../style.css" type="text/css">
<style type="text/css">
<!--
*{
	padding	: 0;
	margin	: 0;
	line-height	: 140%;
	font-family	: Arial;
	overflow:inherit;
}
body{
  margin:30px;
  background	: #98a0a5/*#bfbfbf*/;
  color	: #bdc8d7;
}
td{
  white-space: nowrap;
  background-color : #10151b;
  text-align:left;
  padding:4px;
}
.a{
  background-color : #333333;
}
-->
</style></head>
<body>
<?php
define("DATA_ENCHANT","");
define("USER","../user/");
define("FRONT","front");
define("BACK","back");
include("../data/data.monster.php");
include("../data/data.judge_setup.php");
include("../data/data.skill.php");
include("../data/data.item.php");
include("../data/data.enchant.php");
include("../class/global.php");
define("IMG_ICON","../image/icon/");

$det	= '<tr><td class="a">ID</td>
<td class="a">이름</td>
<td class="a">레벨</td>
<td class="a">사진</td>
<td class="a">경험치</td>
<td class="a">돈</td>
<td class="a">hp</td>
<td class="a">sp</td>
<td class="a">atk</td>
<td class="a">def</td>
<td class="a">str / int / def / spd / luk</td>
<td class="a">위치</td>
<td class="a">보호</td>'."\n";
$img_f	= "../image/char/";

print('<table border="0" cellspacing="1"><tbody>');
$detcount=0;
for($no=1000; $no<5999; $no++) {
	$m = CreateMonster($no);
	if(!$m) continue;

	print($det);
	print("<tr>");
	print("<td>{$no}</td>");
	print("<td>".(isset($m['name'])?$m['name']:"")."</td>");
	print("<td>".(isset($m['level'])?$m['level']:"")."</td>");
	print("<td>".(isset($m['img'])?"<img src=\"$img_f{$m['img']}\">$img_f{$m['img']}":"")."</td>");
	print("<td>".(isset($m['exphold'])?$m['exphold']:"")."</td>");
	print("<td>".(isset($m['moneyhold'])?$m['moneyhold']:"")."</td>");
	print("<td>".(isset($m['hp'])?$m['hp']:"")."/".(isset($m['maxhp'])?$m['maxhp']:"")."</td>");
	print("<td>".(isset($m['sp'])?$m['sp']:"")."/".(isset($m['maxsp'])?$m['maxsp']:"")."</td>");
	print("<td>".(isset($m['atk'][0])?$m['atk'][0]:"")."<br />".(isset($m['atk'][1])?$m['atk'][1]:"")."</td>");
	print("<td>".(isset($m['def'][0])?$m['def'][0]:"")."+".(isset($m['def'][1])?$m['def'][1]:"")."<br />".(isset($m['def'][2])?$m['def'][2]:"")."+".(isset($m['def'][3])?$m['def'][3]:"")."</td>");
	print("<td>".(isset($m['str'])?$m['str']:"")." / ".(isset($m['int'])?$m['int']:"")." / ".(isset($m['dex'])?$m['dex']:"")." / ".(isset($m['spd'])?$m['spd']:"")." / ".(isset($m['luk'])?$m['luk']:"")."</td>");
	if(isset($m["posed"]))
		print("<td>-</td>");
	else
		print("<td>".(isset($m['position'])?$m['position']:"")."</td>");
	print("<td>".(isset($m['guard'])?$m['guard']:"")."</td>");
	print("</tr>\n");
	print("<tr><td colspan=\"13\" style=\"text-align:left\">");
	print("<table><tbody>");

	foreach($m["judge"] as $key => $val) {
		print("<tr><td>");
		$judge	= LoadJudgeData($val);
		if(isset($judge["exp"])) print($judge["exp"]);
		print("</td><td>");
		if(isset($m["quantity"]["$key"])) print($m["quantity"]["$key"]);
		print("</td><td>");
		$skill	= LoadSkillData($m["action"]["$key"]);
		ShowSkillDetail($skill);
		print("</td></tr>");
	}
	if(isset($m['itemtable'])) {
		print('<tr><td colspan="3">');
		print("<table><tbody>");
		$dif	= 0;
		foreach($m['itemtable'] as $itemno => $prob) {
			print("<tr><td>");
			print(($prob/100)."%");
			print("</td><td>");
			$item	= LoadItemdata($itemno);
			ShowItemDetail($item);
			print("</td></tr>");
			
		}
		print("</tbody></table>");
		print("</td></tr>");
	}
	print("</tbody></table>");
	print("</td></tr>\n");
	}
print($det);
print("</tbody></table>");
?>
</body>
</html>
<?php

	
	function ShowItemDetail2($item,$amount=false) {
		$file	= "../image/icon/";
		if(!$item) return false;
		
		print("\n");
		
		print("<img src=\"".$file.$item["img"]."\" class=\"vcent\">{$item['name']}");

		if($item["type"])
			print("<span class=\"light\"> ({$item['type']})</span>");
		if($amount) {
			print(" x{$amount}");
		}
		if($item["atk"]["0"])
			print(' / <span class="dmg">Atk:'.$item['atk'][0].'</span>');
		if($item["atk"]["1"])
			print(' / <span class="spdmg">Matk:'.$item['atk'][1].'</span>');
		if($item["def"]) {
			print(" / <span class=\"recover\">Def:{$item['def'][0]}+{$item['def'][1]}</span>");
			print(" / <span class=\"support\">Mdef:{$item['def'][2]}+{$item['def'][3]}</span>");
		}
		if($item["handle"])
			print(' / <span class="charge">h:'.$item['handle'].'</span>');
	}
	function ShowSkillDetail2($skill,$radio=false) {
		$file	= "../image/icon/";
		if(!$skill) return false;
		
		if($radio)
			print('<input type="radio" name="newskill" value="'.$skill["no"].'" class="vcent">');
		
		print('<img src="'.$file.$skill["img"].'" class="vcent">');
		print("{$skill['name']}");

		if($radio)
			print(" / <span class=\"bold\">{$skill['learn']}</span>pt");

		if($skill['target'][0] == "all")
			print(" / <span class=\"charge\">{$skill['target'][0]}</span>");
		else if($skill['target'][0] == "enemy")
			print(" / <span class=\"dmg\">{$skill['target'][0]}</span>");
		else if($skill['target'][0] == "friend")
			print(" / <span class=\"recover\">{$skill['target'][0]}</span>");
		else if($skill['target'][0] == "self")
			print(" / <span class=\"support\">{$skill['target'][0]}</span>");
		else if(isset($skill['target'][0]))
			print(" / {$skill['target'][0]}");

		if($skill['target'][1] == "all")
			print(" - <span class=\"charge\">{$skill['target'][1]}</span>");
		else if($skill['target'][1] == "individual")
			print(" - <span class=\"recover\">{$skill['target'][1]}</span>");
		else if($skill['target'][1] == "multi")
			print(" - <span class=\"spdmg\">{$skill['target'][1]}</span>");
		else if(isset($skill['target'][1]))
			print(" - {$skill['target'][1]}");

		if(isset($skill["sp"]))
			print(" / <span class=\"support\">{$skill['sp']}sp</span>");
		if($skill["pow"]) {
			print(" / <span class=\"".($skill["support"]?"recover":"dmg")."\">{$skill['pow']}%</span>x");
			print(( $skill["target"][2] ? $skill["target"][2] : "1" ) );
		}
		if($skill["type"] == 1)
			print(" / <span class=\"spdmg\">Magic</span>");
		if($skill["quick"])
			print(" / <span class=\"charge\">Quick</span>");
		if($skill["invalid"])
			print(" / <span class=\"charge\">invalid</span>");
		if($skill["priority"] == "Back")
			print(" / <span class=\"support\">BackAttack</span>");
		if($skill["support"])
			print(" / <span class=\"charge\">support</span>");
		if($skill["charge"]["0"] || $skill["charge"]["1"]) {
			print(" / (".($skill["charge"]["0"]?$skill["charge"]["0"]:"0").":");
			print(($skill["charge"]["1"]?$skill["charge"]["1"]:"0").")");
		}
		if($skill["exp"])
			print(" / {$skill['exp']}");
		print("\n");
	}
?>