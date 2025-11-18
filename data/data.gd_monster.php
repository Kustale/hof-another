<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include_once(DATA_MONSTER);
?>
<div style="margin:0 15px">
<h4>몬스타S</h4>
<table class="align-center" style="width:740px" cellspacing="0">
<?php
$List	= array(
	1000 => array("grass","SP가 있을 때는 강한 공격을 가끔 오는 정도."),
	1001 => array("grass","SP가 있을 때는 강한 공격을 가끔 오는 정도."),
	1002 => array("grass","뒤열로 밀어내는 공격을 한다."),
	1003 => array("grass","당연한 힘."),
	1005 => array("grass","레벨이 낮다고 강하게 느낀다."),
	1009 => array("grass","HP가 높다."),
	1012 => array("cave","동료를 불러 흡혈 공격을 한다."),
	1014 => array("cave","마법으로 공격하지 않으면 쓰러뜨리기 어렵다."),
	1017 => array("cave","동굴의 보스. 쓰러뜨리면 안쪽으로 갈 수 있게 된다."),
);
$Detail	= "<tr>
<td class=\"td6\">Image</td>
<td class=\"td6\">EXP</td>
<td class=\"td6\">MONEY</td>
<td class=\"td6\">HP</td>
<td class=\"td6\">SP</td>
<td class=\"td6\">STR</td>
<td class=\"td6\">INT</td>
<td class=\"td6\">DEX</td>
<td class=\"td6\">SPD</td>
<td class=\"td6\">LUK</td>
</tr>";
foreach($List as $No => $exp) {
	$monster	= CreateMonster($No);
	$char	= new char($monster);
	print($Detail);
	print("</td><td class=\"td7\">\n");
	$char->ShowCharWithLand($exp[0]);
	print("</td><td class=\"td7\">\n");
	print("{$monster[exphold]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[moneyhold]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[maxhp]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[maxsp]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[str]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[int]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[dex]}\n");
	print("</td><td class=\"td7\">\n");
	print("{$monster[spd]}\n");
	print("</td><td class=\"td8\">\n");
	print("{$monster[luk]}\n");
	print("</td></tr>\n");
	print("<tr><td class=\"td7\" colspan=\"11\">\n");
	print("$exp[1]");
	print("</td></tr>\n");
}
?>
</table>
</div>