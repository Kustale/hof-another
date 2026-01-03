<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ITEM List</title>
<style type="text/css">
<!--
*{
	padding	: 0;
	margin	: 0;
	line-height	: 140%;
	font-family	: Osaka,Verdana;
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
  text-align:center;
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
include("../data/data.item.php");
print("<table cellspacing=\"1\"><tbody>");
$img_f	= "../image/icon/";
$des	= '<tr><td class="a">ID</td>
<td class="a">사진</td>
<td class="a">이름</td>
<td class="a">유형</td>
<td class="a">atk</td>
<td class="a">def</td>
<td class="a">handle</td>
<td class="a">판매 가격</td>
<td class="a">입찰 가격</td></tr>';
$count=0;
for($i=1000; $i<10000; $i++) {
	$item	= LoadItemData($i);
	if(!$item) continue;

	if($count%6==0)
		print($des);
	$count++;

	print("<tr><td>\n");
	print($i);
	print("</td><td>");
	if(isset($item['img'])) print("<img src=\"".$img_f.$item['img']."\">");
	print("</td><td>\n");
	print(isset($item['name'])?$item['name']:"");
	print("</td><td>\n");
	print(isset($item['type'])?$item['type']:"");
	print("</td><td>\n");
	print((isset($item['atk'][0])?$item['atk'][0]:"")."<br />".(isset($item['atk'][1])?$item['atk'][1]:""));
	print("</td><td>\n");
	print((isset($item['def'][0])?$item['def'][0]:"")."+".(isset($item['def'][1])?$item['def'][1]:"")."<br />".(isset($item['def'][2])?$item['def'][2]:"")."+".(isset($item['def'][3])?$item['def'][3]:""));
	print("</td><td>\n");
	print(isset($item['handle'])?$item['handle']:"");
	print("</td><td>\n");
	print(isset($item['buy'])?$item['buy']:"");
	print("</td><td>\n");
	print(isset($item['sell'])?$item['sell']:"");
	print("</td></tr>\n");
	if(isset($item["need"])) {
		print("<tr><td colspan=\"9\" style=\"text-align:left;padding-left:50px\">\n");
		foreach($item["need"] as $M_item => $M_amount) {
			$M	= LoadItemData($M_item);
			print("{$M['name']}");
			print("<img src=\"".$img_f.$M['img']."\">");
			print("x".$M_amount." / \n");
		}
		print("</td></tr>\n");
	}
}
print("</tbody></table>");
?>
</body>
</html>