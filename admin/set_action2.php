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
<title>SetAction02</title>
<style type="text/css">
<!--
*{
	line-height	: 140%;
	font-family	: Osaka,Verdana;
}
.bg{
background-color:#cccccc;
}
body{
background-color:#666666;
}
option{
background-color:#dddddd;
}
input{background-color:#dddddd;
}
-->
</style>
</head>
<body>
<?php
	include("../class/global.php");

	define("ROWS",__POST("patternNum")?__POST("patternNum"):8);
	define("IMG","../image/char/");

	if(__POST("Load") && __POST("loadMob")) {
		include("../data/data.monster.php");
		$monster	= CreateMonster(__POST("loadMob"));
		if($monster) {
			for($i=0; $i<ROWS; $i++) {
				$_POST["judge".$i]		= $monster["judge"][$i]?$monster["judge"][$i]:NULL;
				$_POST["quantity".$i]	= $monster["quantity"][$i]?$monster["quantity"][$i]:NULL;
				$_POST["skill".$i]		= $monster["action"][$i]?$monster["action"][$i]:NULL;
			}
		}
		print('<span style="font-weight:bold">'.__POST("loadMob")." ".$monster["name"].'</span><img src="'.IMG.$monster["img"].'" />');
	}

	if(__POST("add") && __POST("number")) {
		$number	= __POST("number");
		$var	= array("judge","quantity","skill");
		foreach($var as $head) {
			for($i=ROWS; -1<$i; $i--) {
				if($number == $i)
					$_POST[$head.$i]	= NULL;
				else if($number < $i)
					$_POST[$head.$i]	= __POST($head.($i-1));
				else
					break;
			}
		}
	}

	if(__POST("delete") && __POST("number")) {
		$number	= __POST("number");
		$var	= array("judge","quantity","skill");
		foreach($var as $head) {
			for($i=0; $i<ROWS; $i++) {
				if($number <= $i)
					$_POST[$head.$i]	= __POST($head.($i+1));
			}
		}
	}

	if(__POST("make")) {
		$judgeString	= '"judge"	=> array(';
		$quantityString	= '"quantity"	=> array(';
		$skillString	= '"action"	=> array(';
		for($i=0; $i<ROWS; $i++) {
			if(__POST("judge".$i) && __POST("skill".$i)) {
				$judgeString	.= __POST("judge".$i).", ";
				$quantityString	.= __POST("quantity".$i).", ";
				$skillString	.= __POST("skill".$i).", ";
			}
		}
		$judgeString	.= "),\n";
		$quantityString	.= "),\n";
		$skillString	.= "),\n";
  

		print('<textarea style="width:800px;height:100px">');
		print($judgeString.$quantityString.$skillString);
		print("</textarea>\n");
	}
	include("../data/data.judge_setup.php");
	for($i=1000; $i<10000; $i++) {
		$judge	= LoadJudgeData($i);
		if(!$judge)
			continue;
		$judgeList["$i"]["exp"]	= $judge["exp"];
		if(isset($judge["css"]))
			$judgeList["$i"]["css"]	= true;
	}

	include("../data/data.skill.php");
	for($i=1000; $i<10000; $i++) {
		$skill	= LoadSkillData($i);
		if(!$skill)
			continue;
		$skillList["$i"]	= $i." - ".$skill["name"]."(sp:".(isset($skill['sp'])?$skill['sp']:"").")";
	}

	print('<form method="post" action="?">'."\n");
	print("<table>\n");
	for($i=0; $i<ROWS; $i++) {
		print("<tr><td>\n");
		print('<span style="font-weight:bold">'.sprintf("%2s",$i+1)."</span>");
		print("</td><td>\n");
		print('<select name="judge'.$i.'">'."\n");
		print('<option></option>'."\n");
		foreach($judgeList as $key => $exp) {
			$css	= isset($exp["css"])?' class="bg"':NULL;
			if(__POST("judge".$i) == $key)
				print('<option value="'.$key.'"'.$css.'selected>'.$exp["exp"].'</option>'."\n");
			else
				print('<option value="'.$key.'"'.$css.'>'.$exp["exp"].'</option>'."\n");
		}
		print("</select>\n");
		print("</td><td>\n");
		print('<input type="text" name="quantity'.$i.'" value="'.(__POST("quantity".$i)?__POST("quantity".$i):"0").'" size="10" />'."\n");
		print("</td><td>\n");
		print('<select name="skill'.$i.'">'."\n");
		print('<option></option>'."\n");
		foreach($skillList as $key => $exp) {
			if(__POST("skill".$i) == $key)
				print('<option value="'.$key.'" selected>'.$exp.'</option>'."\n");
			else
				print('<option value="'.$key.'">'.$exp.'</option>'."\n");
		}
		print("</select>\n");
		print("</td><td>\n");
		print('<input type="radio" name="number" value="'.$i.'">'."\n");
		print("</td></tr>\n");
	}
	print("</table>\n");
	print('판결 건수 : <input type="text" name="patternNum" size="10" value="'.(__POST("patternNum")?__POST("patternNum"):"8").'" /><br />'."\n");
	print('<input type="submit" value="만들다" name="make">'."\n");
	print('<input type="hidden" value="make" name="make">'."\n");
	print('<input type="submit" value="추가" name="add">'."\n");
	print('<input type="submit" value="삭제" name="delete"><br />'."\n");
	print('몬스터 ID를 입력하세요 : <input type="text" name="loadMob" size="10" /> <input type="submit" value="읽기" name="Load" />');
	print("</form>\n");
?>
</body>
</html>
  
