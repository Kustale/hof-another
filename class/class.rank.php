<?php 
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

class Ranking {

	var $Ranking	= array();


	function __construct() {
		$file	= RANKING;

		if(!file_exists($file)) return 0;

		$fp	= fopen($file,"r");
		flock($fp,LOCK_EX);
		while($line = fgets($fp) ) {
			$line	= trim($line);
			if(trim($line) == "") continue;
				$this->Ranking[]	= $line;
		}
		if(!$this->Ranking) return 0;
		foreach($this->Ranking as $rank => $val) {
			$list	= explode("<>", $val);
			$this->Ranking["$rank"]	= array();
			$this->Ranking["$rank"]["id"]	= $list["0"];
		}
	}


	function Challenge($id) {
		if(!$this->Ranking) {
			$this->JoinRanking($id);
			$this->SaveRanking();
			$message	= "排名开始."; 
			return array($message,true);
		}

		$MyRank	= $this->SearchID($id);
		if($MyRank === 0) {
			$message	= "第一名不可再挑战.";
			return array($message,true);
		}

		if(!$MyRank) {
			$this->JoinRanking($id);
			$MyRank	= __count($this->Ranking) - 1;

			$MyID	= $this->Ranking["$MyRank"]["id"];
			$RivalID= $this->Ranking["$MyRank" - 1]["id"];
			list($message,$result)	= $this->RankBattle($MyID,$RivalID);
			if($message == "Battle" && $result === true)
				$this->RankUp($MyID);

			$this->SaveRanking();
			return array($message,$result);
		}

		if($MyRank) {
			$rival	= $MyRank - 1;

			$MyID	= $this->Ranking["$MyRank"]["id"];
			$RivalID= $this->Ranking["$rival"]["id"];
			list($message,$result)	= $this->RankBattle($MyID,$RivalID);
			if($message != "Battle")
				return array($message,$result);

			if($message == "Battle" && $result === true) {
				$this->RankUp($MyID);
				$this->SaveRanking();
			}
			return array($message,$result);
		}
	}


	function RankBattle($ChallengerID,$DefendID) {
		$challenger	= new user($ChallengerID);
		$challenger->CharDataLoadAll();
		$defender	= new user($DefendID);
		$defender->CharDataLoadAll();

		$Party_Challenger	= $challenger->RankParty();
		$Party_Defender		= $defender->RankParty();
		if($Party_Defender == "NOID") {
			$message	= "没有用户...<br />(自动胜利)";
			$this->DeleteRank($DefendID);
			$this->SaveRanking();
			return array($message,true);
		}

		if($Party_Challenger === false) {
			$message	= "设置战斗队伍!<br />(如果被挑下马的话排名也就没了)";
			return array($message,true);
		}
		if($Party_Defender === false) {
			$this->DeleteRank($DefendID);
			$this->SaveRanking();
			$message	= "{$defender->name} 没有排名战队伍<br />(自动胜利)";
			return array($message,true);
		}

		include(CLASS_BATTLE);
		$battle	= new battle($Party_Challenger,$Party_Defender);
		$battle->SetBackGround("colosseum");
		$battle->SetTeamName($challenger->name,$defender->name);
		$battle->Process();
		$battle->RecordLog("RANK");
		return array("Battle",$battle->isChallengerWin());
	}


	function JoinRanking($id,$place=false) {
		if(!$place)
			$place	= __count($this->Ranking);
		$data	= array(array("id"=>$id));
		array_splice($this->Ranking, $place, 0, $data);
	}


	function ChangeRank($id,$id0) {
	
	}


	function RankUp($id) {
		$place	= $this->SearchID($id);
		$number	= __count($this->Ranking);
		if($place === 0 || $number < 2)
			return false;

		$temp	= $this->Ranking["$place"];
		$this->Ranking["$place"]	= $this->Ranking["$place"-1];
		$this->Ranking["$place"-1]	= $temp;
	}


	function RankDown($id) {
		$place	= $this->SearchID($id);
		$number	= __count($this->Ranking);
		if($place === ($number - 1) ||  $number < 2)
			return false;

		$temp	= $this->Ranking["$place"];
		$this->Ranking["$place"]	= $this->Ranking["$place"+1];
		$this->Ranking["$place"+1]	= $temp;
	}


	function DeleteRank($id) {
		$place	= $this->SearchID($id);
		if($place === false) return false;
		unset($this->Ranking["$place"]);
		return true;
	}

	function SaveRanking() {
		foreach($this->Ranking as $rank => $val) {
			$ranking	.= $val["id"]."\n";
		}

		WriteFile(RANKING,$ranking);
	}


	function SearchID($id) {
		foreach($this->Ranking as $rank => $val) {
			if($val["id"] == $id)
				return (int)$rank;
		}
		return false;
	}


	function ShowRanking($from=false,$to=false,$bold=false) {
		$last	= __count($this->Ranking) - 1;
		if(__count($this->Ranking) < 1) {
			print("<div class=\"bold\">没有排名.</div>\n");
		} else if(is_numeric($from) && is_numeric($to)) {
			for($from; $from<$to; $from++) {
				$user	= new user($this->Ranking["$from"]["id"]);
				$place	= ($from==$last?"位(最下位)":"位");
				if($bold === $from) {
					echo ($from+1)."{$place} : <span class=\"u\">".$user->name."</span><br />";
					continue;
				}
				if($this->Ranking["$from"])
					echo ($from+1)."{$place} : ".$user->name."<br />";
			}
			foreach($this->Ranking as $key => $val) {
				$user	= new user($val["id"]);
				echo ($key+1)."位 : ".$user->name."<br />";
			}
		}
	}

	function ShowNearlyRank($id,$no=5) {
		$MyRank	= $this->SearchID($id);
		$lowest	= __count($this->Ranking);
		if( $lowest < ($MyRank+$no) ) {
			$moveup	= $no - ($lowest - $MyRank);
			$this->ShowRanking($MyRank-$moveup-5,$lowest,$MyRank);
			return 0;
		}
		if( ($MyRank-$no) < 0 ) {
			$this->ShowRanking(0,$no+5,$MyRank);
			return 0;
		}
		$this->ShowRanking($MyRank-$no,$MyRank+$no,$MyRank);
	}
}
?>
