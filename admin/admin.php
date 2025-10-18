<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

	if(!defined("ADMIN_PASSWORD"))
		exit(1);

	if(__POST("pass") == ADMIN_PASSWORD || __COOKIE("adminPass") == ADMIN_PASSWORD) {
		setcookie ("adminPass", __POST("pass")?__POST("pass"):__COOKIE("adminPass"),time()+60*30);
		$login = true;
	}

	if(__POST("logout")) {
		setcookie ("adminPass");
		$login = false;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
<script type="text/javascript" src="prototype.js"></script>
<title>HoF - 管理后台</title>
<style TYPE="text/css">
<!--
form{
margin: 0;
padding: 0;
}
-->
</style>
</head>
<body>
<?php
if($login) {
	if(!function_exists("dump")) {
		function dump($var) {
			print("<pre>".print_r($var,1)."</pre>\n");
		}
	}

	function changeData($file,$text) {
		$fp = @fopen($file,"w") or die("file lock error!");
		flock($fp,LOCK_EX);
		fwrite($fp,stripcslashes($text));
		flock($fp,LOCK_UN);
		fclose($fp);
		print("<span style=\"font-weight:bold\">数据修改</span>");
	}

print <<< MENU
<form action="?" method="post">
<a href="?">管理首页</a>
<a href="?menu=user">用户管理</a>
<a href="?menu=data">数据管理</a>
<a href="?menu=other">其他</a>
<input type="submit" value="注销" name="logout" />
</form>
<hr>
MENU;
	if(__GET("menu") === "user") {
		$userList = glob(USER."*");
		print("<p>全部用户</p>\n");
		foreach($userList as $user) {
			print('<form action="?" method="post">');
			print('<input type="submit" name="UserData" value=" 管理 ">');
			print('<input type="hidden" name="userID" value="'.basename($user).'">');
			print(basename($user)."\n");
			print("</form>\n");
		}
	} else if(__POST("UserData")) {
		$userFileList = glob(USER.__POST("userID")."/*");
		print("<p>USER :".__POST("userID")."</p>\n");
		foreach($userFileList as $file) {
			print('<form action="?" method="post">');
			print('<input type="submit" name="UserFileDet" value=" 管理 ">');
			print('<input type="hidden" name="userFile" value="'.basename($file).'">');
			print('<input type="hidden" name="userID" value="'.__POST("userID").'">');
			print(basename($file)."\n");
			print("</form>\n");
		}
		print('<br><form action="?" method="post">');
		print('删除用户:<input type="text" name="deletePass" size="">');
		print('<input type="submit" name="deleteUser" value="삭제">');
		print('<input type="hidden" name="userID" value="'.__POST("userID").'">');
		print("</form>\n");
	} else if(__POST("deleteUser")) {
		if(__POST("deletePass") == ADMIN_PASSWORD) {
			include(GLOBAL_PHP);
			include(CLASS_USER);
			$userD = new user(__POST("userID"));
			$userD->DeleteUser();
			print(__POST("userID")."被删除。");
		} else {
			print("没有密码。");
		}
	} else if(__POST("UserFileDet")) {
		$file = USER.__POST("userID")."/".__POST("userFile");
		
		if(__POST("changeData")) {
			$fp = @fopen($file,"w") or die("file lock error!");
			flock($fp,LOCK_EX);
			fwrite($fp,__POST("fileData"));
			flock($fp,LOCK_UN);
			fclose($fp);
			print("数据修改");
		}

		print("<p>$file</p>\n");
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="userFile" value="'.__POST("userFile").'">');
		print('<input type="hidden" name="userID" value="'.__POST("userID").'">');
		print('<input type="hidden" name="UserFileDet" value="1">');
		print("</form>\n");
		print('<form action="?" method="post">');
		print('<input type="submit" name="UserData" value="放弃">');
		print('<input type="hidden" name="userID" value="'.__POST("userID").'">');
		print("</form>\n");
	} else if(__GET("menu") === "data") {
print <<< DATA
<br>
<form action="?" method="post">
<ul>
<li><input type="submit" name="UserDataDetail" value=" 管理 ">(※1)用户数据汇总表示</li>
<li><input type="submit" name="UserCharDetail" value=" 管理 ">(※1)人物数据汇总表示</li>
<li><input type="submit" name="ItemDataDetail" value=" 管理 ">(※1)道具数据汇总表示</li>
<li><input type="submit" name="UserIpShow" value=" 管理 ">(※1)用户IP表示</li>
<li><input type="submit" name="searchBroken" value=" 管理 ">(※1)有可能是已损坏的数据<input type="text" name="brokenSize" value="100" size=""></li>
<li><input type="submit" name="adminBattleLog" value=" 管理 ">战斗记录管理</li>
<li><input type="submit" name="adminAuction" value=" 管理 ">拍卖管理</li>
<li><input type="submit" name="adminRanking" value=" 管理 ">排名管理</li>
<li><input type="submit" name="adminTown" value=" 管理 ">广场管理</li>
<li><input type="submit" name="adminRegister" value=" 管理 ">用户登录数据管理</li>
<li><input type="submit" name="adminUserName" value=" 管理 ">用户名管理</li>
<li><input type="submit" name="adminUpDate" value=" 管理 ">更新数据管理</li>
<li><input type="submit" name="adminAutoControl" value=" 管理 ">自动管理记录</li>
</ul>
<p>(※1)将会比较消耗性能。<br>
甚至超过增加的数据处理。
</p>
</form>
DATA;
	} else if(__POST("UserDataDetail")) {
		include(GLOBAL_PHP);
		include(CLASS_USER);
		$userFileList = glob(USER."*");
		foreach($userFileList as $user) {
			$user = new user(basename($user,".dat"));
			$totalMoney += $user->money;
		}
		print("UserAmount :".__count($userFileList)."<br>\n");
		print("TotalMoney :".MoneyFormat($totalMoney)."<br>\n");
		print("AveMoney :".MoneyFormat($totalMoney/__count($userFileList))."<br>\n");
	} else if(__POST("UserCharDetail")) {
		include(GLOBAL_PHP);
		$userFileList = glob(USER."*");
		foreach($userFileList as $user) {
			$userDir = glob($user."/*");
			foreach($userDir as $fileName) {
				if(!is_numeric(basename($fileName,".dat"))) continue;
				$charData = ParseFile($fileName);
				$charAmount++;
				$totalLevel += $charData["level"];
				$totalStr += $charData["str"];
				$totalInt += $charData["int"];
				$totalDex += $charData["dex"];
				$totalSpd += $charData["spd"];
				$totalLuk += $charData["luk"];
				if($charData["gender"] === "0")
					$totalMale++;
				else if($charData["gender"] === "1")
					$totalFemale++;
				$totalJob[$charData["job"]]++;

			}
		}
		print("人物总数:".$charAmount."<br>\n");
		print("平均等级 :".$totalLevel/$charAmount."<br>\n");
		print("平均str :".$totalStr/$charAmount."<br>\n");
		print("平均int :".$totalInt/$charAmount."<br>\n");
		print("平均dex :".$totalDex/$charAmount."<br>\n");
		print("平均spd :".$totalSpd/$charAmount."<br>\n");
		print("平均luk :".$totalLuk/$charAmount."<br>\n");
		print("男 :{$totalMale}(".($totalMale/$charAmount*100)."%)<br>\n");
		print("女 :{$totalFemale}(".($totalFemale/$charAmount*100)."%)<br>\n");
		print("--- 职业<br>\n");
		arsort($totalJob);
		include(DATA_JOB);
		foreach($totalJob as $job => $amount) {
			$jobData = LoadJobData($job);
			print($job."({$jobData[name_male]},{$jobData[name_female]})"." : ".$amount."(".($amount/$charAmount*100)."%)<br>\n");
		}
	} else if(__POST("ItemDataDetail")) {
		include(GLOBAL_PHP);
		$userFileList = glob(USER."*");
		$userAmount = count($userFileList);
		$items = array();
		foreach($userFileList as $user) {
			if(!$data = ParseFile($user."/item.dat"));
			foreach($data as $itemno => $amount)
				$items[$itemno] += $amount;
		}
		foreach($items as $itemno => $amount) {
			if(strlen($itemno) != 4) continue;
			print($itemno." : ".$amount."(平均:".$amount/$userAmount.")<br>");
		}
	} else if(__POST("UserIpShow")) {
		include(GLOBAL_PHP);
		$userFileList = glob(USER."*");
		$ipList = array();
		foreach($userFileList as $user) {
			$file = $user."/data.dat";
			if(!$data = ParseFile($file)) continue;
			$html .= "<tr><td>".$data["id"]."</td><td>".$data["name"]."</td><td>".$data["ip"]."</td></tr>\n";
			$ipList[$data["ip"]?$data["ip"]:"*UnKnown"]++;
		}
		
		print("<p>IP重复列表</p>\n");
		foreach($ipList as $ip => $amount) {
			if(1 < $amount)
				print("$ip : $amount<br>\n");
		}
		print("<table border=\"1\">\n");
		print($tags = "<tr><td>ID</td><td>名字</td><td>IP</td></tr>\n");
		print($html);
		print("</table>\n");
	} else if(__POST("searchBroken")) {
		print("<p>可能会损坏文件<br>\n");
		$baseSize = __POST("brokenSize")?(int)__POST("brokenSize"):100;
		print("※{$baseSize}byte 以下的文件搜索(道具数据除外).</p>");
		$userFileList = glob(USER."*");
		foreach($userFileList as $user) {
			$userDir = glob($user."/*");
			if(filesize($user."/data.dat") < $baseSize)
				print($user."/data.dat"."(".filesize($user."/data.dat").")"."<br>\n");
			foreach($userDir as $fileName) {
				if(!is_numeric(basename($fileName,".dat"))) continue;
				if(filesize($fileName) < $baseSize)
					print($fileName."(".filesize($fileName).")<br>\n");
			}
		}
	} else if(__POST("adminBattleLog")) {
		if(__POST("deleteLogCommon")) {
			$dir = LOG_BATTLE_NORMAL;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>通常战斗记录删除。</p>\n");
		} else if(__POST("deleteLogUnion")) {
			$dir = LOG_BATTLE_UNION;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>BOSS战斗记录删除。</p>\n");
		} else if(__POST("deleteLogRanking")) {
			$dir = LOG_BATTLE_RANK;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>排行战斗记录删除。</p>\n");
		}
print <<< DATA
<br>
<form action="?" method="post">
<input type="hidden" name="adminBattleLog" value="1">
<ul>
<li><input type="submit" name="deleteLogCommon" value=" 管理 ">通常战斗记录全部删除</li>
<li><input type="submit" name="deleteLogUnion" value=" 管理 ">BOSS战斗记录全部删除</li>
<li><input type="submit" name="deleteLogRanking" value=" 管理 ">排名记录全部删除</li>
</ul>
</form>
DATA;
	} else if(__POST("adminAuction")) {
		$file = AUCTION_ITEM;
		print("<p>拍卖管理</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminAuction" value="1">');
		print("</form>\n");
	} else if(__POST("adminRanking")) {
		$file = RANKING;
		print("<p>排名管理</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminRanking" value="1">');
		print("</form>\n");
	} else if(__POST("adminTown")) {
		$file = BBS_TOWN;
		print("<p>广场管理</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminTown" value="1">');
		print("</form>\n");
	} else if(__POST("adminRegister")) {
		$file = REGISTER;
		print("<p>用户登录数据管理</p>\n");
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminRegister" value="1">');
		print("</form>\n");
	} else if(__POST("adminUserName")) {
		$file = USER_NAME;
		print("<p>用户名管理</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminUserName" value="1">');
		print("</form>\n");
	} else if(__POST("adminUpDate")) {
		$file = UPDATE;
		print("<p>更新情報管理</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminUpDate" value="1">');
		print("</form>\n");
	} else if(__POST("adminAutoControl")) {
		$file = MANAGE_LOG_FILE;
		print("<p>自动管理记录</p>\n");
		
		if(__POST("changeData")) {
			changeData($file,__POST("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="修改">');
		print('<input type="submit" value="更新">');
		print('<input type="hidden" name="adminAutoControl" value="1">');
		print("</form>\n");
	} else if(__GET("menu") === "other") {
print("
<p>管理</p>\n
<ul>\n
<li><a href=\"".ADMIN_DIR."list_item.php\">道具列表</a></li>\n
<li><a href=\"".ADMIN_DIR."list_enchant.php\">装备效果列表</a></li>\n
<li><a href=\"".ADMIN_DIR."list_job.php\">职业列表</a></li>\n
<li><a href=\"".ADMIN_DIR."list_judge.php\">判定列表</a></li>\n
<li><a href=\"".ADMIN_DIR."list_monster.php\">怪物列表</a></li>\n
<li><a href=\"".ADMIN_DIR."list_skill3.php\">技能列表</a></li>\n
<li><a href=\"".ADMIN_DIR."set_action2.php\">行动模式设定机</a></li>\n
</ul>\n
");
	} else {
print("<p>基本設定</p>\n
<table border=\"1\">\n
<tr><td>定义</td><td>说明</td><td>值</td></tr>
<tr><td>TITLE</td><td>标题</td><td>".TITLE."</td></tr>\n
<tr><td>MAX_TIME</td><td>最大Time</td><td>".MAX_TIME."Time</td></tr>\n
<tr><td>TIME_GAIN_DAY</td><td>每天所给的Time</td><td>".TIME_GAIN_DAY."Time</td></tr>\n
<tr><td>CONTROL_PERIOD</td><td>自动管理周期</td><td>".CONTROL_PERIOD."s(".(CONTROL_PERIOD/60/60)."hour)"."</td></tr>\n
<tr><td>RECORD_IP</td><td>IP记录(1=ON)</td><td>".RECORD_IP."</td></tr>\n
<tr><td>SELLING_PRICE</td><td>卖值</td><td>".SELLING_PRICE."</td></tr>\n
<tr><td>EXP_RATE</td><td>经验值倍率</td><td>x".EXP_RATE."</td></tr>\n
<tr><td>MONEY_RATE</td><td>掉钱倍率</td><td>x".MONEY_RATE."</td></tr>\n
<tr><td>AUCTION_MAX</td><td>最大出品数</td><td>".AUCTION_MAX."</td></tr>\n
<tr><td>JUDGE_LIST_AUTO_LOAD</td><td>条件判定列表自动取得(1=自动)</td><td>".JUDGE_LIST_AUTO_LOAD."</td></tr>\n
<tr><td>AUCTION_TOGGLE</td><td>拍卖ON/OFF(1=ON)</td><td>".AUCTION_TOGGLE."</td></tr>\n
<tr><td>AUCTION_EXHIBIT_TOGGLE</td><td>出品ON/OFF(1=ON)</td><td>".AUCTION_EXHIBIT_TOGGLE."</td></tr>\n
<tr><td>RANK_TEAM_SET_TIME</td><td>排名队伍設定周期</td><td>".RANK_TEAM_SET_TIME."s(".(RANK_TEAM_SET_TIME/60/60)."hour)"."</td></tr>\n
<tr><td>RANK_BATTLE_NEXT_LOSE</td><td>失败后再挑战时间</td><td>".RANK_BATTLE_NEXT_LOSE."s(".(RANK_BATTLE_NEXT_LOSE/60/60)."hour)"."</td></tr>\n
<tr><td>RANK_BATTLE_NEXT_WIN</td><td>赢得排名站再战的时间</td><td>".RANK_BATTLE_NEXT_WIN."s</td></tr>\n
<tr><td>NORMAL_BATTLE_TIME</td><td>普通战斗消耗时间</td><td>".NORMAL_BATTLE_TIME."Time</td></tr>\n
<tr><td>MAX_BATTLE_LOG</td><td>战斗记录保存数(通常怪)</td><td>".MAX_BATTLE_LOG."</td></tr>\n
<tr><td>MAX_BATTLE_LOG_UNION</td><td>战斗记录保存数(BOSS)</td><td>".MAX_BATTLE_LOG_UNION."</td></tr>\n
<tr><td>MAX_BATTLE_LOG_RANK</td><td>战斗记录保存数(排名)</td><td>".MAX_BATTLE_LOG_RANK."</td></tr>\n
<tr><td>UNION_BATTLE_TIME</td><td>BOSS战消耗时间</td><td>".UNION_BATTLE_TIME."Time</td></tr>\n
<tr><td>UNION_BATTLE_NEXT</td><td>BOSS战再挑战时间</td><td>".UNION_BATTLE_NEXT."s</td></tr>\n
<tr><td>BBS_BOTTOM_TOGGLE</td><td>下边是否加上bbs链接(1=ON)</td><td>".BBS_BOTTOM_TOGGLE."</td></tr>\n
</table>\n
");
	}

print <<< ADMIN
<hr>
<p>请不要频繁使用管理功能。<br>
用户数或数据有可能导致错误。
</p>
ADMIN;

} else {
print <<< LOGIN
<form action="?" method="post">
切口:<input type="text" name="pass" />
<input type="submit" value="开路" />
</form>
LOGIN;
}

?>
</body>
</html>