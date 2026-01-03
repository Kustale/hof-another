<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/


	function __GET_2($name){
		return (isset($_GET[$name]) ? $_GET[$name] : NULL);
	}

	function __POST_2($name){
		return (isset($_POST[$name]) ? $_POST[$name] : NULL);
	}

	function __COOKIE_2($name){
		return (isset($_COOKIE[$name]) ? $_COOKIE[$name] : NULL);
	}

	function __count_2($value){
		if(isset($value))
			return count($value);
	}

$login = false;

	if(!defined("ADMIN_PASSWORD"))
		exit(1);

	if(__POST_2("pass") == ADMIN_PASSWORD || __COOKIE_2("adminPass") == ADMIN_PASSWORD) {
		setcookie ("adminPass", __POST_2("pass")?__POST_2("pass"):__COOKIE_2("adminPass"),time()+60*30);
		$login = true;
	}

	if(__POST_2("logout")) {
		setcookie ("adminPass");
		$login = false;
	}
print <<<P1
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="prototype.js"></script>
<title>HoF - 관리 백엔드</title>
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
P1;
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
		print("<span style=\"font-weight:bold\">데이터 수정</span>");
	}

print <<< MENU
<form action="?" method="post">
<a href="?">관리자 홈페이지</a>
<a href="?menu=user">사용자 관리</a>
<a href="?menu=data">데이터 관리</a>
<a href="?menu=other">기타</a>
<input type="submit" value="로그아웃" name="logout" />
</form>
<hr>
MENU;
	if(__GET_2("menu") === "user") {
		$userList = glob(USER."*");
		print("<p>모든 사용자</p>\n");
		foreach($userList as $user) {
			print('<form action="?" method="post">');
			print('<input type="submit" name="UserData" value=" 관리 ">');
			print('<input type="hidden" name="userID" value="'.basename($user).'">');
			print(basename($user)."\n");
			print("</form>\n");
		}
	} else if(__POST_2("UserData")) {
		$userFileList = glob(USER.__POST_2("userID")."/*");
		print("<p>USER :".__POST_2("userID")."</p>\n");
		foreach($userFileList as $file) {
			print('<form action="?" method="post">');
			print('<input type="submit" name="UserFileDet" value=" 관리 ">');
			print('<input type="hidden" name="userFile" value="'.basename($file).'">');
			print('<input type="hidden" name="userID" value="'.__POST_2("userID").'">');
			print(basename($file)."\n");
			print("</form>\n");
		}
		print('<br><form action="?" method="post">');
		print('사용자 삭제 : <input type="text" name="deletePass" size="">');
		print('<input type="submit" name="deleteUser" value="삭제">');
		print('<input type="hidden" name="userID" value="'.__POST_2("userID").'">');
		print("</form>\n");
	} else if(__POST_2("deleteUser")) {
		if(__POST_2("deletePass") == ADMIN_PASSWORD) {
			include(GLOBAL_PHP);
			include(CLASS_USER);
			$userD = new user(__POST_2("userID"));
			$userD->DeleteUser();
			print(__POST_2("userID")."가 제거되었습니다.");
		} else {
			print("비밀번호가 없습니다.");
		}
	} else if(__POST_2("UserFileDet")) {
		$file = USER.__POST_2("userID")."/".__POST_2("userFile");
		
		if(__POST_2("changeData")) {
			$fp = @fopen($file,"w") or die("file lock error!");
			flock($fp,LOCK_EX);
			fwrite($fp,__POST_2("fileData"));
			flock($fp,LOCK_UN);
			fclose($fp);
			print("데이터 수정");
		}

		print("<p>$file</p>\n");
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		print(file_get_contents($file));
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="userFile" value="'.__POST_2("userFile").'">');
		print('<input type="hidden" name="userID" value="'.__POST_2("userID").'">');
		print('<input type="hidden" name="UserFileDet" value="1">');
		print("</form>\n");
		print('<form action="?" method="post">');
		print('<input type="submit" name="UserData" value="포기하다">');
		print('<input type="hidden" name="userID" value="'.__POST_2("userID").'">');
		print("</form>\n");
	} else if(__GET_2("menu") === "data") {
print <<< DATA
<br>
<form action="?" method="post">
<ul>
<li><input type="submit" name="UserDataDetail" value=" 관리 ">(※1) 사용자 데이터 요약 표현</li>
<li><input type="submit" name="UserCharDetail" value=" 관리 ">(※1) 캐릭터 데이터 요약</li>
<li><input type="submit" name="ItemDataDetail" value=" 관리 ">(※1) 항목 데이터 요약</li>
<li><input type="submit" name="UserIpShow" value=" 관리 ">(※1) 사용자 IP 주소</li>
<li><input type="submit" name="searchBroken" value=" 관리 ">(※1) 데이터가 손상되었을 수 있습니다.<input type="text" name="brokenSize" value="100" size=""></li>
<li><input type="submit" name="adminBattleLog" value=" 관리 ">전투 기록 관리</li>
<li><input type="submit" name="adminAuction" value=" 관리 ">경매 관리</li>
<li><input type="submit" name="adminRanking" value=" 관리 ">순위 관리</li>
<li><input type="submit" name="adminTown" value=" 관리 ">플라자 관리</li>
<li><input type="submit" name="adminRegister" value=" 관리 ">사용자 로그인 데이터 관리</li>
<li><input type="submit" name="adminUserName" value=" 관리 ">사용자 이름 관리</li>
<li><input type="submit" name="adminUpDate" value=" 관리 ">업데이트 데이터 관리</li>
<li><input type="submit" name="adminAutoControl" value=" 관리 ">자동 관리 기록</li>
</ul>
<p>(※1) 이로 인해 성능 소모가 더 커질 수 있습니다. <br /> 
데이터 처리량 증가분을 초과할 수도 있습니다.
</p>
</form>
DATA;
	} else if(__POST_2("UserDataDetail")) {
		include(GLOBAL_PHP);
		include(CLASS_USER);
		$totalMoney = 0;
		$userFileList = glob(USER."*");
		foreach($userFileList as $user) {
			$user = new user(basename($user,".dat"));
			$totalMoney += $user->money;
		}
		print("UserAmount :".__count_2($userFileList)."<br>\n");
		print("TotalMoney :".MoneyFormat($totalMoney)."<br>\n");
		if($userFileList == 0)
			print("AveMoney :".MoneyFormat($totalMoney/__count_2($userFileList))."<br>\n");
		else
			print("AveMoney :".MoneyFormat(0)."<br>\n");
	} else if(__POST_2("UserCharDetail")) {
		$charAmount = 0;
		$totalLevel = 0;
		
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
		if($charAmount > 0){
			print("총 캐릭터 수 : ".$charAmount."<br>\n");
			print("평균 점수 : ".$totalLevel/$charAmount."<br>\n");
			print("평균 str : ".$totalStr/$charAmount."<br>\n");
			print("평균 int : ".$totalInt/$charAmount."<br>\n");
			print("평균 dex : ".$totalDex/$charAmount."<br>\n");
			print("평균 spd : ".$totalSpd/$charAmount."<br>\n");
			print("평균 luk : ".$totalLuk/$charAmount."<br>\n");
			print("남 : {$totalMale}(".($totalMale/$charAmount*100)."%)<br>\n");
			print("여 : {$totalFemale}(".($totalFemale/$charAmount*100)."%)<br>\n");
			print("--- 직업<br>\n");
			arsort($totalJob);
			include(DATA_JOB);
			foreach($totalJob as $job => $amount) {
				$jobData = LoadJobData($job);
				print($job."({$jobData['name_male']},{$jobData['name_female']})"." : ".$amount."(".($amount/$charAmount*100)."%)<br>\n");
			}
		} else
			print("캐릭터 데이터가 한개도 존재 하지 않습니다.");
	} else if(__POST_2("ItemDataDetail")) {
		include(GLOBAL_PHP);
		$userFileList = glob(USER."*");
		$userAmount = count($userFileList);
		$items = array();
		if($userAmount > 0){
			foreach($userFileList as $user) {
				if(!$data = ParseFile($user."/item.dat"));
				foreach($data as $itemno => $amount)
					$items[$itemno] += $amount;
			}
			foreach($items as $itemno => $amount) {
				if(strlen($itemno) != 4) continue;
				print($itemno." : ".$amount."(평균 : ".$amount/$userAmount.")<br>");
			}
		} else
			print("캐릭터 데이터가 한개도 존재 하지 않습니다.");
	} else if(__POST_2("UserIpShow")) {
		$html = "";
		include(GLOBAL_PHP);
		$userFileList = glob(USER."*");
		$ipList = array();
		foreach($userFileList as $user) {
			$file = $user."/data.dat";
			if(!$data = ParseFile($file)) continue;
			$html .= "<tr><td>".$data["id"]."</td><td>".$data["name"]."</td><td>".$data["ip"]."</td></tr>\n";
			$ipList[$data["ip"]?$data["ip"]:"*UnKnown"]++;
		}
		
		print("<p>IP 중복 목록</p>\n");
		foreach($ipList as $ip => $amount) {
			if(1 < $amount)
				print("$ip : $amount<br>\n");
		}
		print("<table border=\"1\">\n");
		print($tags = "<tr><td>ID</td><td>이름</td><td>IP</td></tr>\n");
		print($html);
		print("</table>\n");
	} else if(__POST_2("searchBroken")) {
		print("<p>파일이 손상될 수 있습니다<br>\n");
		$baseSize = __POST_2("brokenSize")?(int)__POST_2("brokenSize"):100;
		print("※(항목 데이터를 제외하고) {$baseSize}바이트보다 작은 파일을 검색합니다.</p>");
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
	} else if(__POST_2("adminBattleLog")) {
		if(__POST_2("deleteLogCommon")) {
			$dir = LOG_BATTLE_NORMAL;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>일반 전투 기록은 삭제됩니다.</p>\n");
		} else if(__POST_2("deleteLogUnion")) {
			$dir = LOG_BATTLE_UNION;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>보스 전투 기록이 삭제되었습니다.</p>\n");
		} else if(__POST_2("deleteLogRanking")) {
			$dir = LOG_BATTLE_RANK;
			$logFile = glob($dir."*");
			foreach($logFile as $file) {
				unlink($file);
			}
			print("<p>전투 기록이 삭제되었습니다.</p>\n");
		}
print <<< DATA
<br>
<form action="?" method="post">
<input type="hidden" name="adminBattleLog" value="1">
<ul>
<li><input type="submit" name="deleteLogCommon" value=" 관리 ">일반적으로 모든 전투 기록은 삭제됩니다.</li>
<li><input type="submit" name="deleteLogUnion" value=" 관리 ">모든 보스 전투 기록이 삭제됩니다.</li>
<li><input type="submit" name="deleteLogRanking" value=" 관리 ">모든 순위 기록이 삭제됩니다.</li>
</ul>
</form>
DATA;
	} else if(__POST_2("adminAuction")) {
		$file = AUCTION_ITEM;
		print("<p>경매 관리</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");
		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminAuction" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminRanking")) {
		$file = RANKING;
		print("<p>순위 관리</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminRanking" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminTown")) {
		$file = BBS_TOWN;
		print("<p>플라자 관리</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminTown" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminRegister")) {
		$file = REGISTER;
		print("<p>사용자 로그인 데이터 관리</p>\n");
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminRegister" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminUserName")) {
		$file = USER_NAME;
		print("<p>사용자 이름 관리</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminUserName" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminUpDate")) {
		$file = UPDATE;
		print("<p>정보 관리 업데이트</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminUpDate" value="1">');
		print("</form>\n");
	} else if(__POST_2("adminAutoControl")) {
		$file = MANAGE_LOG_FILE;
		print("<p>자동 관리 기록</p>\n");
		
		if(__POST_2("changeData")) {
			changeData($file,__POST_2("fileData"));
		}
		print('<form action="?" method="post">');
		print('<textarea name="fileData" style="width:800px;height:300px;">');
		if(file_exists($file))
			print(file_get_contents($file));
		else
			print("");
		print("</textarea><br>\n");		print('<input type="submit" name="changeData" value="수정">');
		print('<input type="submit" value="바꾸기">');
		print('<input type="hidden" name="adminAutoControl" value="1">');
		print("</form>\n");
	} else if(__GET_2("menu") === "other") {
print("
<p>관리</p>\n
<ul>\n
<li><a href=\"".ADMIN_DIR."list_item.php\">품목 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."list_enchant.php\">장비 효과 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."list_job.php\">직업 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."list_judge.php\">판결 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."list_monster.php\">몬스터 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."list_skill3.php\">스킬 목록</a></li>\n
<li><a href=\"".ADMIN_DIR."set_action2.php\">동작 모드 설정 장치</a></li>\n
</ul>\n
");
	} else {
print("<p>기본 설정</p>\n
<table border=\"1\">\n
<tr><td>정의</td><td>설명</td><td>값</td></tr>
<tr><td>TITLE</td><td>제목</td><td>".TITLE."</td></tr>\n
<tr><td>MAX_TIME</td><td>최대 Time</td><td>".MAX_TIME."Time</td></tr>\n
<tr><td>TIME_GAIN_DAY</td><td>매일 주어진 Time</td><td>".TIME_GAIN_DAY."Time</td></tr>\n
<tr><td>CONTROL_PERIOD</td><td>자동 관리 주기</td><td>".CONTROL_PERIOD."s(".(CONTROL_PERIOD/60/60)."hour)"."</td></tr>\n
<tr><td>RECORD_IP</td><td>IP기록(1=ON)</td><td>".RECORD_IP."</td></tr>\n
<tr><td>SELLING_PRICE</td><td>판매 가격</td><td>".SELLING_PRICE."</td></tr>\n
<tr><td>EXP_RATE</td><td>경험 가치 배율</td><td>x".EXP_RATE."</td></tr>\n
<tr><td>MONEY_RATE</td><td>돈 감소율</td><td>x".MONEY_RATE."</td></tr>\n
<tr><td>AUCTION_MAX</td><td>최대 출력</td><td>".AUCTION_MAX."</td></tr>\n
<tr><td>JUDGE_LIST_AUTO_LOAD</td><td>조건 목록이 자동으로 검색됩니다(1 = 자동).</td><td>".JUDGE_LIST_AUTO_LOAD."</td></tr>\n
<tr><td>AUCTION_TOGGLE</td><td>경매ON/OFF(1=ON)</td><td>".AUCTION_TOGGLE."</td></tr>\n
<tr><td>AUCTION_EXHIBIT_TOGGLE</td><td>출품 ON/OFF(1=ON)</td><td>".AUCTION_EXHIBIT_TOGGLE."</td></tr>\n
<tr><td>RANK_TEAM_SET_TIME</td><td>랭킹 팀 설정 주기</td><td>".RANK_TEAM_SET_TIME."s(".(RANK_TEAM_SET_TIME/60/60)."hour)"."</td></tr>\n
<tr><td>RANK_BATTLE_NEXT_LOSE</td><td>실패 후 다시 시도하세요</td><td>".RANK_BATTLE_NEXT_LOSE."s(".(RANK_BATTLE_NEXT_LOSE/60/60)."hour)"."</td></tr>\n
<tr><td>RANK_BATTLE_NEXT_WIN</td><td>이제 랭킹에서 승리하고 다시 싸울 시간입니다.</td><td>".RANK_BATTLE_NEXT_WIN."s</td></tr>\n
<tr><td>NORMAL_BATTLE_TIME</td><td>일반 전투 시간 소모</td><td>".NORMAL_BATTLE_TIME."Time</td></tr>\n
<tr><td>MAX_BATTLE_LOG</td><td>전투 기록 저장 횟수(일반 몬스터)</td><td>".MAX_BATTLE_LOG."</td></tr>\n
<tr><td>MAX_BATTLE_LOG_UNION</td><td>전투 기록 저장 횟수(BOSS)</td><td>".MAX_BATTLE_LOG_UNION."</td></tr>\n
<tr><td>MAX_BATTLE_LOG_RANK</td><td>전투 기록 저장 횟수(순위)</td><td>".MAX_BATTLE_LOG_RANK."</td></tr>\n
<tr><td>UNION_BATTLE_TIME</td><td>보스전 시간</td><td>".UNION_BATTLE_TIME."Time</td></tr>\n
<tr><td>UNION_BATTLE_NEXT</td><td>보스전 재도전 시간</td><td>".UNION_BATTLE_NEXT."s</td></tr>\n
<tr><td>BBS_BOTTOM_TOGGLE</td><td>아래에 BBS 링크를 추가해야 합니까? (1=켜기)</td><td>".BBS_BOTTOM_TOGGLE."</td></tr>\n
</table>\n
");
	}

print <<< ADMIN
<hr>
<p>관리 기능을 자주 사용하지 마십시오.<br />
 사용자 수 또는 데이터가 잘못 입력되면 오류가 발생할 수 있습니다.
</p>
ADMIN;

} else {
print <<< LOGIN
<form action="?" method="post">
암호 : <input type="text" name="pass" />
<input type="submit" value="로그인" />
</form>
LOGIN;
}

print <<<P2
</body>
</html>
P2;
?>