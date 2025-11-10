<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

class Ranking {

	var $fp;

	var $Ranking	= array();
	var $UserName;
	var $UserRecord;

	function __construct() {
		$file	= RANKING;
		if(!file_exists($file)) return 0;
		$this->fp=FileLock($file);
		$Place	= 0;
		while($line = fgets($this->fp) ) {
			$line	= trim($line);
			if($line == "") continue;
			if(__count($this->Ranking[$Place]) === $this->SamePlaceAmount($Place))
				$Place++;
			$this->Ranking[$Place][]	= $line;
		}
		if(!$this->Ranking) return 0;
		foreach($this->Ranking as $Rank => $SamePlaces) {
			if(!is_array($SamePlaces))
				continue;
			foreach($SamePlaces as $key => $val) {
				$list	= explode("<>", $val);
				$this->Ranking["$Rank"]["$key"]	= array();
				$this->Ranking["$Rank"]["$key"]["id"]	= $list["0"];
			}
		}
	}


	function Challenge(&$user) {
		
		if(!$this->Ranking) {
			$this->JoinRanking($user->id);
			$this->SaveRanking();
			print("Rank starts.");
			
			return false;
		}
		
		$MyRank	= $this->SearchID($user->id);

		
		if($MyRank["0"] === 0) {
			SHowError("1위는 다시 도전받을 수 없습니다.");
			
			return false;
		}

		
		if(!$MyRank)
		{
			$this->JoinRanking($user->id);
			$MyPlace	= __count($this->Ranking) - 1;
			$RivalPlace	= (int)($MyPlace - 1);
			
			if($RivalPlace === 0)
				$DefendMatch	= true;
			else
				$DefendMatch	= false;
			
			$RivalRankKey	= array_rand($this->Ranking[$RivalPlace]);
			$RivalID	= $this->Ranking[$RivalPlace][$RivalRankKey]["id"];
			$Rival	= new user($RivalID);
			
			$Result	= $this->RankBattle($user,$Rival,$MyPlace,$RivalPlace);
			$Return	= $this->ProcessByResult($Result,$user,$Rival,$DefendMatch);
			
			return $Return;
			
		}

		
		if($MyRank) {
			$RivalPlace	= (int)($MyRank["0"] - 1);
			
			if($RivalPlace === 0)
				$DefendMatch	= true;
			else
				$DefendMatch	= false;

			
			$RivalRankKey	= array_rand($this->Ranking[$RivalPlace]);
			$RivalID	= $this->Ranking[$RivalPlace][$RivalRankKey]["id"];
			$Rival	= new user($RivalID);
			
			$Result	= $this->RankBattle($user,$Rival,$MyRank["0"],$RivalPlace);
			$Return	= $this->ProcessByResult($Result,$user,$Rival,$DefendMatch);
			
			return $Return;
			
		}
	}



	function RankBattle(&$user,&$Rival,$UserPlace,$RivalPlace) {

		$UserPlace	= "[".($UserPlace+1)."위]";
		$RivalPlace	= "[".($RivalPlace+1)."위]";

		if($Rival->is_exist() == false) {
			ShowError("상대는 존재하지 않는다 (싸움 없이 승리)");
			$this->DeleteRank($DefendID);
			$this->SaveRanking();
			return "DEFENDER_NO_ID";
		}

		$Party_Challenger	= $user->RankParty();
		$Party_Defender		= $Rival->RankParty();

		if($Party_Challenger === false) {
			ShowError("싸울 멤버가 없습니다.");
			return "CHALLENGER_NO_PARTY";
		}

		if($Party_Defender === false) {
			ShowError($Rival->name."의 경기의 상대는 아직 결정되지 않았습니다.<br />(싸움 없이 승리)");
			return "DEFENDER_NO_PARTY";
		}
		
		include(CLASS_BATTLE);
		$battle	= new battle($Party_Challenger,$Party_Defender);
		$battle->SetBackGround("colosseum");
		$battle->SetResultType(1);
		$battle->SetTeamName($user->name.$UserPlace,$Rival->name.$RivalPlace);
		$battle->Process();
		$battle->RecordLog("RANK");
		$Result	= $battle->ReturnBattleResult();
		
		if($Result === TEAM_0) {
			return "CHALLENGER_WIN";
		} else if ($Result === TEAM_1) {
			return "DEFENDER_WIN";
		} else if ($Result === DRAW) {
			return "DRAW_GAME";
		} else {
			return "DRAW_GAME";
		}
	}

	function ProcessByResult($Result,&$user,&$Rival,$DefendMatch) {
		switch($Result) {

			
			case "DEFENDER_NO_ID":
				$this->ChangePlace($user->id,$Rival->id);
				$this->DeleteRank($Rival->id);
				$this->SaveRanking();
				return false;
				break;
			
			case "CHALLENGER_NO_PARTY":
				return false;
				break;
			
			case "DEFENDER_NO_PARTY":
				$this->ChangePlace($user->id,$Rival->id);
				$this->SaveRanking();
				$user->SetRankBattleTime(time() + RANK_BATTLE_NEXT_WIN);
				$Rival->RankRecord(0,"DEFEND",$DefendMatch);
				$Rival->SaveData();
				return true;
				break;
			
			case "CHALLENGER_WIN":
				$this->ChangePlace($user->id,$Rival->id);
				$this->SaveRanking();
				$user->RankRecord(0,"CHALLENGER",$DefendMatch);
				$user->SetRankBattleTime(time() + RANK_BATTLE_NEXT_WIN);
				$Rival->RankRecord(0,"DEFEND",$DefendMatch);
				$Rival->SaveData();
				return "BATTLE";
				break;
			
			case "DEFENDER_WIN":
				$user->RankRecord(1,"CHALLENGER",$DefendMatch);
				$user->SetRankBattleTime(time() + RANK_BATTLE_NEXT_LOSE);
				$Rival->RankRecord(1,"DEFEND",$DefendMatch);
				$Rival->SaveData();
				return "BATTLE";
				break;

			case "DRAW_GAME":
				$user->RankRecord("d","CHALLENGER",$DefendMatch);
				$user->SetRankBattleTime(time() + RANK_BATTLE_NEXT_LOSE);
				$Rival->RankRecord("d","DEFEND",$DefendMatch);
				$Rival->SaveData();
				return "BATTLE";
				break;
			default:
				return true;
				break;
		}
	}

	function SamePlaceAmount($Place) {
		switch(true) {
			case ($Place == 0): return 1;
			case ($Place == 1): return 2;
			case ($Place == 2): return 3;
			case (2 < $Place):
				return 3;
		}
	}

	function JoinRanking($id) {
		$last	= __count($this->Ranking) - 1;
		if(!$this->Ranking) {
			$this->Ranking["0"]["0"]["id"]	= $id;
		} else if(__count($this->Ranking[$last]) == $this->SamePlaceAmount($last)) {
			$this->Ranking[$last+1]["0"]["id"]	= $id;
		} else {
			$this->Ranking[$last][]["id"]	= $id;
		}
	}

	function DeleteRank($id) {
		$place	= $this->SearchID($id);
		if($place === false) return false;
		unset($this->Ranking[$place[0]][$place[1]]);
		return true;
	}

	function SaveRanking() {
		foreach($this->Ranking as $rank => $val) {
			foreach($val as $key => $val2) {
				$ranking	.= $val2["id"]."\n";
			}
		}

		WriteFileFP($this->fp,$ranking);
		$this->fpclose();
	}

	function fpclose() {
		if($this->fp) {
			fclose($this->fp);
			unset($this->fp);
		}
	}

	function ChangePlace($id_0,$id_1) {
		$Place_0	= $this->SearchID($id_0);
		$Place_1	= $this->SearchID($id_1);
		$temp	= $this->Ranking[$Place_0["0"]][$Place_0["1"]];
		$this->Ranking[$Place_0["0"]][$Place_0["1"]]	= $this->Ranking[$Place_1["0"]][$Place_1["1"]];
		$this->Ranking[$Place_1["0"]][$Place_1["1"]]	= $temp;
	}

	function SearchID($id) {
		foreach($this->Ranking as $rank => $val) {
			foreach($val as $key => $val2) {
				if($val2["id"] == $id)
					return array((int)$rank,(int)$key);
			}
		}
		return false;
	}

	function ShowRanking($from=false,$to=false,$bold_id=false) {
		if($from === false or $to === false) {
			$from	= 0;
			$to		= __count($this->Ranking);
		}

		if($bold_id)
			$BoldRank	= $this->SearchID($bold_id);

		$LastPlace	= __count($this->Ranking) - 1;

		print("<table cellspacing=\"0\">\n");
		print("<tr><td class=\"td6\" style=\"text-align:center\">순위</td><td  class=\"td6\" style=\"text-align:center\">팀</td></tr>\n");
		for($Place=$from; $Place<$to + 1; $Place++) {
			if(!isset($this->Ranking["$Place"]))
				break;
			print("<tr><td class=\"td7\" valign=\"middle\" style=\"text-align:center\">\n");
			switch($Place) {
				case 0:
					print('<img src="'.IMG_ICON.'crown01.png" class="vcent" />'); break;
				case 1:
					print('<img src="'.IMG_ICON.'crown02.png" class="vcent" />'); break;
				case 2:
					print('<img src="'.IMG_ICON.'crown03.png" class="vcent" />'); break;
				default:
					if($Place == $LastPlace)
						print("끝");
					else
						print(($Place+1)."위");
			}
			print("</td><td class=\"td8\">\n");
			foreach($this->Ranking["$Place"] as $SubRank => $data) {
				list($Name,$R)	= $this->LoadUserName($data["id"],true);
				$WinProb	= $R['all']?sprintf("%0.0f",($R['win']/$R['all'])*100):"--";
				$Record	= "(".($R['all']?$R['all']:"0")."전 ".
						($R['win']?$R['win']:"0")."승".
						($R['lose']?$R['lose']:"0")."패 ".
						($R['all']-$R['win']-$R['lose'])."인 ".
						($R['defend']?$R['defend']:"0")."방 ".
						"승률".$WinProb.'%'.
						")";
				if(isset($BoldRank) && $BoldRank["0"] == $Place && $BoldRank["1"] == $SubRank) {
					print('<span class="bold u">'.$Name."</span> {$Record}");
				} else {
					print($Name." ".$Record);
				}
				print("<br />\n");
			}
			print("</td></tr>\n");
		}
		print("</table>\n");
	}

	function ShowRankingRange($id,$Amount) {
		$RankAmount	= __count($this->Ranking);
		$Last	= $RankAmount - 1;
		do {
			if($RankAmount <= $Amount) {
				$start	= 0;
				$end	= $Last;
				break;
			}

			$Rank	= $this->SearchID($id);
			if($Rank === false) {
				print("순위 미상");
				return 0;
			}
			$Range	= floor($Amount/2);
			if( ($Rank[0] - $Range) <= 0 ) {
				$start	= 0;
				$end	= $Amount - 1;
			} else if( $Last < ($Rank[0] + $Range) ) {
				$start	= $RankAmount - $Amount;
				$end	= $RankAmount;
			} else {
				$start	= $Rank[0]-$Range;
				$end	= $Rank[0]+$Range;
			}
		} while(0);

		$this->ShowRanking($start,$end,$id);
	}

	function LoadUserName($id,$rank=false) {

		if(!isset($this->UserName["$id"])) {
			$User	= new user($id);
			$Name	= $User->Name();
			$Record	= $User->RankRecordLoad();
			if($Name !== false) {
				$this->UserName["$id"]	= $Name;
				$this->UserRecord["$id"]	= $Record;
			} else {
				$this->UserName["$id"]	= "-";

				$this->DeleteRank($id);

				foreach($this->Ranking as $rank => $val) {
					foreach($val as $key => $val2) {
						$ranking	.= $val2["id"]."\n";
					}
				}
		
				WriteFileFP($this->fp,$ranking);
			}
		}

		if($rank)
			return array($this->UserName["$id"],$this->UserRecord["$id"]);
		else
			return $this->UserName["$id"];
	}

	function dump() {
		print("<pre>".print_r($this,1)."</pre>\n");
	}
}
?>
