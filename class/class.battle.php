<?php 
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include(CLASS_SKILL_EFFECT);
class battle extends ClassSkillEffect{

	var $team0, $team1;
	var $team0_name, $team1_name;
	var $team0_ave_lv, $team1_ave_lv;

	var $team0_mc = 0;
	var $team1_mc = 0;

	var $BattleMaxTurn	= BATTLE_MAX_TURNS;
	var $NoExtends	= false;

	var $NoResult	= false;

	var $BackGround = "grass";

	var $Scroll = 0;

	var $team0_dmg = 0;
	var $team1_dmg = 0;
	var $actions = 0;
	var $delay;
	var $result;
	var $team0_money, $team1_money;
	var $team0_item=array(), $team1_item=array();
	var $team0_exp=0, $team1_exp=0;

	var $ChangeDelay	= false;

	var $BattleResultType	= 0;
	var $UnionBattle;

	function __construct($team0,$team1) {
		include(DATA_JUDGE);
		include_once(DATA_SKILL);

		include_once(CLASS_MONSTER);

		$this->team0	= $team0;
		$this->team1	= $team1;

		foreach($this->team0 as $key => $char)
			$this->team0["$key"]->SetBattleVariable(TEAM_0);
		foreach($this->team1 as $key => $char)
			$this->team1["$key"]->SetBattleVariable(TEAM_1);

		$this->SetDelay();
		$this->DelayResetAll();
	}

	function SetResultType($var) {
		$this->BattleResultType	= $var;
	}

	function SetUnionBattle() {
		$this->UnionBattle	= true;
	}

	function SetBackGround($bg) {
		$this->BackGround	= $bg;
	}

	function JoinCharacter($user,$add) {
		foreach($this->team0 as $char) {
			if($user === $char) {
				$add->SetTeam(TEAM_0);
				array_push($this->team0,$add);
				$this->ChangeDelay();
				return 0;
			}
		}
		foreach($this->team1 as $char) {
			if($user === $char) {
				$add->SetTeam(TEAM_1);
				array_push($this->team1,$add);
				$this->ChangeDelay();
				return 0;
			}
		}
	}

	function LimitTurns($no) {
		$this->BattleMaxTurn	= $no;
		$this->NoExtends		= true;
	}

	function NoResult() {
		$this->NoResult	= true;
	}

	function ExtendTurns($no,$notice=false) {
		if($this->NoExtends === true) return false;

		$this->BattleMaxTurn	+= $no;
		if(BATTLE_MAX_EXTENDS < $this->BattleMaxTurn)
			$this->BattleMaxTurn	= BATTLE_MAX_EXTENDS;
		if($notice) {
print <<< HTML
	<tr><td colspan="2" class="break break-top bold" style="text-align:center;padding:20px 0;">
	전투 라운드 수 초과
	</td></tr>
HTML;
		}
		return true;
	}

	function ReturnItemGet($team) {
		if($team == TEAM_0) {
			if(__count($this->team0_item) != 0)
				return $this->team0_item;
			else
				return false;
		} else if($team == TEAM_1) {
			if(__count($this->team1_item) != 0)
				return $this->team1_item;
			else
				return false;
		}
	}

	function ReturnBattleResult() {
		return $this->result;
	}

	function RecordLog($type=false) {
		if($type == "RANK") {
			$file	= LOG_BATTLE_RANK;
			$log	= @glob(LOG_BATTLE_RANK."*");
			$logAmount = MAX_BATTLE_LOG_RANK;
		} else if($type == "UNION") {
			$file	= LOG_BATTLE_UNION;
			$log	= @glob(LOG_BATTLE_UNION."*");
			$logAmount = MAX_BATTLE_LOG_UNION;
		} else {
			$file	= LOG_BATTLE_NORMAL;
			$log	= @glob(LOG_BATTLE_NORMAL."*");
			$logAmount = MAX_BATTLE_LOG;
		}

		$i	= 0;
		while($logAmount <= __count($log) ) {
			if(!$log["$i"] == "index.php"){
				unlink($log["$i"]);
				unset($log["$i"]);
				$i++;
			}
		}

		$time	= time().substr(microtime(),2,6);
		$file	.= $time.".dat";

		$head	= $time."\n";
		$head	.= $this->team0_name."<>".$this->team1_name."\n";
		$head	.= count($this->team0)."<>".__count($this->team1)."\n";
		$head	.= $this->team0_ave_lv."<>".$this->team1_ave_lv."\n";
		$head	.= $this->result."\n";
		$head	.= $this->actions."\n";
		$head	.= "\n";

		WriteFile($file,$head.ob_get_contents());
	}

	function Process() {
		$this->BattleHeader();

		do {
			if($this->actions % BATTLE_STAT_TURNS == 0)
				$this->BattleState();

			if(DELAY_TYPE === 0)
				$char	= &$this->NextActer();
			else if(DELAY_TYPE === 1)
				$char	= &$this->NextActerNew();

			$this->Action($char);
			$result	= $this->BattleResult();

			if($this->ChangeDelay)
				$this->SetDelay();

		} while(!$result);

		$this->ShowResult($result);
		$this->BattleFoot();

	}

	function SaveCharacters() {
		foreach($this->team0 as $char) {
			$char->SaveCharData();
		}
		foreach($this->team1 as $char) {
			$char->SaveCharData();
		}
	}


	function BattleResult() {
		$team0Lose = false;
		$team1Lose = false;
		
		if(CountAlive($this->team0) == 0)
			$team0Lose	= true;
		if(CountAlive($this->team1) == 0)
			$team1Lose	= true;
		if( $team0Lose && $team1Lose ) {
			$this->result	= DRAW;
			return "draw";
		} else if($team0Lose) {
			$this->result	= TEAM_1;
			return "team1";
		} else if($team1Lose) {
			$this->result	= TEAM_0;
			return "team0";

		} else if($this->BattleMaxTurn <= $this->actions) {
			$AliveNumDiff	= abs(CountAlive($this->team0) - CountAlive($this->team1));
			$Not5	= (CountAlive($this->team0) != 5 && CountAlive($this->team1) != 5);
			if( ( $Not5 || 0 < $AliveNumDiff ) && $this->BattleMaxTurn < BATTLE_MAX_EXTENDS ) {
				if($this->ExtendTurns(TURN_EXTENDS,1))
					return false;
			}

			if($this->BattleResultType == 0) {
				$this->result	= DRAW;
				return "draw";
			} else if($this->BattleResultType == 1) {	
				$team0Alive	= CountAliveChars($this->team0);
				$team1Alive	= CountAliveChars($this->team1);
				if($team1Alive < $team0Alive) {
					$this->result	= TEAM_0;
					return "team0";
				} else if($team0Alive < $team1Alive) {
					$this->result	= TEAM_1;
					return "team1";
				} else {
					$this->result	= DRAW;
					return "draw";
				}
			} else {
				$this->result	= DRAW;
				print("error321708.<br />무엇이 잘못되었는지 알려주세요...?.");
				return "draw";
			}

			$this->result	= DRAW;
			print("error321709.<br />무엇이 잘못되었는지 알려주세요...?.");
			return "draw";
		}
	}

	function ShowResult($result) {
		$TotalHp2		= 0;
		$TotalHp1		= 0;
		$TotalMaxHp1	= 0;
		$TotalMaxHp2	= 0;
		$TotalAlive2	= 0;
		
		foreach($this->team1 as $char) {
			if($char->STATE !== DEAD)
				$TotalAlive2++;
			$TotalHp2	+= $char->HP;
			$TotalMaxHp2	+= $char->MAXHP;
		}

		$TotalAlive1	= 0;
		foreach($this->team0 as $char) {
			if($char->STATE !== DEAD)
				$TotalAlive1++;
			$TotalHp1	+= $char->HP;
			$TotalMaxHp1	+= $char->MAXHP;
		}

		if($this->NoResult) {
			print('<tr><td colspan="2" style="text-align:center;padding:10px 0px" class="break break-top">');
			print("시뮬레이션 전투가 종료됩니다");
			print("</td></tr>\n");
			print('<tr><td class="teams break">'."\n");
			print("잔여 HP : {$TotalHp2}/{$TotalMaxHp2}<br />\n");
			print("생존 : {$TotalAlive2}/".__count($this->team1)."<br />\n");
			print("총 피해량 : {$this->team1_dmg}<br />\n");
			print('</td><td class="teams break">'."\n");
			print("잔여 HP : {$TotalHp1}/{$TotalMaxHp1}<br />\n");
			print("생존 : {$TotalAlive1}/".__count($this->team0)."<br />\n");
			print("총 피해량 : {$this->team0_dmg}<br />\n");
			print("</td></tr>\n");
			return false;
		}

		$BreakTop	= " break-top";
		print('<tr><td colspan="2" style="text-align:center;padding:10px 0px" class="break'.$BreakTop.'">'."\n");
		print("<a name=\"s{$this->Scroll}\"></a>\n");
		if($result == "draw") {
			print("<span style=\"font-size:150%\">무승부</span><br />\n");
		} else {
			$Team	= &$this->{$result};
			$TeamName	= $this->{$result."_name"};
			print("<span style=\"font-size:200%\">{$TeamName} 이 승리했습니다!</span><br />\n");
		}

		print('<tr><td class="teams">'."\n");
		print("잔여 HP : ");
		print($this->UnionBattle?"????/????":"{$TotalHp2}/{$TotalMaxHp2}");
		print("<br />\n");
		print("생존 : {$TotalAlive2}/".__count($this->team1)."<br />\n");
		print("총 피해량 : {$this->team1_dmg}<br />\n");
		if($this->team1_exp)
			print("총 경험치 : ".$this->team1_exp."<br />\n");
		if($this->team1_money)
			print("돈 : ".MoneyFormat($this->team1_money)."<br />\n");
		if($this->team1_item) {
			print("<div class=\"bold\">아이템</div>\n");
			foreach($this->team0_item as $itemno => $amount) {
				$item	= LoadItemData($itemno);
				print("<img src=\"".IMG_ICON.$item["img"]."\" class=\"vcent\">");
				print("{$item[name]} x {$amount}<br />\n");
			}
		}

		print('</td><td class="teams">');
		print("잔여 HP : {$TotalHp1}/{$TotalMaxHp1}<br />\n");
		print("생존 : {$TotalAlive1}/".__count($this->team0)."<br />\n");
		print("총 피해량 : {$this->team0_dmg}<br />\n");
		if($this->team0_exp)
			print("총 경험치 : ".$this->team0_exp."<br />\n");
		if($this->team0_money)
			print("돈 : ".MoneyFormat($this->team0_money)."<br />\n");
		if($this->team0_item) {
			print("<div class=\"bold\">Items</div>\n");
			foreach($this->team0_item as $itemno => $amount) {
				$item	= LoadItemData($itemno);
				if(isset($item["img"])) print("<img src=\"".IMG_ICON.$item["img"]."\" class=\"vcent\">");
				print("{$item['name']} x {$amount}<br />\n");
			}
		}
		print("</td></tr>\n");
	}


	function Action(&$char) {
		$MyTeam = null;
		
		if($char->judge === array()) {
			$char->delay	= $char->SPD;
			return false;
		}

		print("<tr><td class=\"ttd2\">\n");
		if($char->team === TEAM_0)
			print("</td><td class=\"ttd1\">\n");
		foreach($this->team0 as $val) {
			if($val === $char) {
				$MyTeam	= &$this->team0;
				$EnemyTeam	= &$this->team1;
				break;
			}
		}
		if(!$MyTeam) {
			$MyTeam	= &$this->team1;
			$EnemyTeam	= &$this->team0;
		}

		if($char->expect) {
			$skill	= $char->expect;
			$return	= $char->expect_target; // ㅇㅅㅇ???
		} else {
			$JudgeKey	= -1;

			$char->AutoRegeneration();
			$char->PoisonDamage();

			do {
				$Keys	= array();
				do {
					$JudgeKey++;
					$Keys[]	= $JudgeKey;
				} while($char->action["$JudgeKey"] == 9000 && $char->judge["$JudgeKey"]);

				$return	= MultiFactJudge($Keys,$char,$this);

				if($return) {
					if(isset($char->action["$JudgeKey"])) $skill	= $char->action["$JudgeKey"];
					foreach($Keys as $no)
						//$char->JdgCount[$no]++;
						array_push($char->JdgCount,$no);
					break;
				}
			} while($char->judge["$JudgeKey"]);
		}

		$this->actions++;

		if($skill) {
			$this->UseSkill($skill,$return,$char,$MyTeam,$EnemyTeam);
		} else {
			print($char->Name('bold'). " 생각에 잠겨 행동하는 것을 잊어버렸습니다.<br />(더 이상 액션 모드가 없습니다)<br />\n");
			$char->DelayReset();
		}

		if($char->team === TEAM_1)
			print("</td><td class=\"ttd1\"> \n");
		print("</td></tr>\n");
	}

	function AddTotalDamage($team,$dmg) {
		if(!is_numeric($dmg)) return false;
		if($team == $this->team0)
			$this->team0_dmg	+= $dmg;
		else if($team == $this->team1)
			$this->team1_dmg	+= $dmg;
	}


	function UseSkill($skill_no,&$JudgedTarget,&$My,&$MyTeam,&$Enemy) {
		$skill	= LoadSkillData($skill_no);

		if(isset($skill["limit"]) && !$My->monster) {
			if(!$skill["limit"][$My->WEAPON]) {
				print('<span class="u">'.$My->Name('bold'));
				print('<span class="dmg">실패</span> 이유는 다음과 같습니다');
				print($skill["limit"][$My->WEAPON]);
				print("<img src=\"".IMG_ICON.$skill["img"]."\" class=\"vcent\"/>");
				print($skill[name]."</span><br />\n");
				print("(무기 종류가 일치하지 않습니다)<br />\n");
				$My->DelayReset();
				return true;
			}
		}

		if($My->SP < $skill["sp"]) {
			print($My->Name('bold').$skill["name"]."실패(SP 부족)");
			if($My->expect) {
				$My->ResetExpect();
			}
			$My->DelayReset();
			return true;
		}

		if(isset($skill["charge"]["0"]) && $My->expect === false) {
			if($skill["type"] == 0) {
				print('<span class="charge">'.$My->Name('bold').'이 충전을 시작합니다.</span>');
				$My->expect_type	= CHARGE;
			} else {
				print('<span class="charge">'.$My->Name('bold').'으로 주문이 시작됩니다.</span>');
				$My->expect_type	= CAST;
			}
			$My->expect	= $skill_no;
			$My->DelayByRate($skill["charge"]["0"],$this->delay,1);
			print("<br />\n");

			$this->actions--;

			return true;
		} else {
			$My->ActCount++;

			print('<div class="u">'.$My->Name('bold'));
			print("<img src=\"".IMG_ICON.$skill["img"]."\" class=\"vcent\"/>");
			print($skill['name']."</div>\n");

			if(isset($skill["MagicCircleDeleteTeam"]))
			{
				if($this->MagicCircleDelete($My->team,$skill["MagicCircleDeleteTeam"])) {
					print($My->Name('bold').'<span class="charge"> 마법진 사용 x'.$skill["MagicCircleDeleteTeam"].'</span><br />'."\n");
				} else {
					print('<span class="dmg">실패! (마법진 부족)</span><br />'."\n");
					$My->DelayReset();
					return true;
				}
			}

			$My->SpDamage($skill["sp"],false);

			if($My->expect)
				$My->ResetExpect();

			if(isset($skill["sacrifice"]))
				$My->SacrificeHp($skill["sacrifice"]);

		}

		if($skill["target"]["0"] == "friend"):
			$candidate	= &$MyTeam;
		elseif($skill["target"]["0"] == "enemy"):
			$candidate	= &$Enemy;
		elseif($skill["target"]["0"] == "self"):
			$candidate[]	= &$My;
		elseif($skill["target"]["0"] == "all"):
			$candidate	= array_merge_recursive($MyTeam,$Enemy);
		endif;

		if($skill["target"]["1"] == "individual") {
			$target	=& $this->SelectTarget($candidate,$skill);
			if($defender =& $this->Defending($target,$candidate,$skill) )
				$target	= &$defender;
			for($i=0; $i<$skill["target"]["2"]; $i++) {
				$dmg	= $this->SkillEffect($skill,$skill_no,$My,$target);
				$this->AddTotalDamage($MyTeam,$dmg);
			}

		} else if($skill["target"]["1"] == "multi") {
			for($i=0; $i<$skill["target"]["2"]; $i++) {
				$target	=& $this->SelectTarget($candidate,$skill);
				if($defender =& $this->Defending($target,$candidate,$skill) )
					$target	= &$defender;
				$dmg	= $this->SkillEffect($skill,$skill_no,$My,$target);
				$this->AddTotalDamage($MyTeam,$dmg);
			}

		} else if($skill["target"]["1"] == "all") {
			foreach($candidate as $key => $char) {
				$target	= &$candidate[$key];
				if((isset($skill["priority"]) ? $skill["priority"] : "") != "사망") {
					if($char->STATE === DEAD) continue;
				}
				for($i=0; $i<$skill["target"]["2"]; $i++) {
					$dmg	= $this->SkillEffect($skill,$skill_no,$My,$target);
					$this->AddTotalDamage($MyTeam,$dmg);
				}
			}
		}

		if(isset($skill["umove"]))
			$My->Move($skill["umove"]);

		if(isset($skill["sacrifice"])) { 
			$Sacrier[]	= &$My;
			$this->JudgeTargetsDead($Sacrier);
		}
		list($exp,$money,$itemdrop)	= $this->JudgeTargetsDead($candidate);

		$this->GetExp($exp,$MyTeam);
		$this->GetItem($itemdrop,$MyTeam);
		$this->GetMoney($money,$MyTeam);

		if($this->ChangeDelay)
			$this->SetDelay();

		if(isset($skill["charge"]["1"])) {
			$My->DelayReset();
			print($My->Name('bold')." 는 행동이 지연되었다.");
			$My->DelayByRate($skill["charge"]["1"],$this->delay,1);
			print("<br />\n");
			return false;
		}

		$My->DelayReset();
	}

function GetExp($exp,&$team) {
	if(!$exp) return false;

	$exp	= round(EXP_RATE * $exp);

	if($team === $this->team0){
		$this->team0_exp	+= $exp;
	} else {
		$this->team1_exp	+= $exp;
	}

	$Alive	= CountAliveChars($team);
	if($Alive=== 0) return false;
	$ExpGet	= ceil($exp/$Alive);
	print("생존자는 {$ExpGet}의 경험치를 얻습니다.<br />\n");
	foreach($team as $key => $char) {
		if($char->STATE === 1) continue;
		if($team[$key]->GetExp($ExpGet))
			print("<span class=\"levelup\">".$char->Name()." 는 레벨 업!</span><br />\n");
	}
}

	function GetItem($itemdrop,$MyTeam) {
		if(!$itemdrop) return false;
		if($MyTeam === $this->team0) {
			foreach($itemdrop as $itemno => $amount) {
				if(isset($this->team0_item["$itemno"])) $this->team0_item["$itemno"]	+= $amount;
			}
		} else {
			foreach($itemdrop as $itemno => $amount) {
				if(isset($this->team1_item["$itemno"])) $this->team1_item["$itemno"]	+= $amount;
			}
		}
	}


	function &Defending(&$target,&$candidate,$skill) {
		$fore = [];
		
		if($target === false) return false;

		if(isset($skill["invalid"]))
			return false;
		if(isset($skill["support"]))
			return false;
		if($target->POSITION == "front")
			return false;
		foreach($candidate as $key => $char) {
			if($char->POSITION == "front" && $char->STATE !== 1 && 1 < $char->HP )
				$fore[]	= &$candidate["$key"];
		}
		if(__count($fore) == 0)
			return false;
		shuffle($fore);
		foreach($fore as $key => $char) {
			switch($char->guard) {
				case "life25":
				case "life50":
				case "life75":
					$HpRate	= ($char->HP / $char->MAXHP) * 100;
				case "prob25":
				case "prob50":
				case "prob75":
					mt_srand();
					$prob	= mt_rand(1,100);
			}
			switch($char->guard) {
				case "never":
					continue 2;
				case "life25":
					if(25 < $HpRate) $defender	= &$fore["$key"]; break;
				case "life50":
					if(50 < $HpRate) $defender	= &$fore["$key"]; break;
				case "life75":
					if(75 < $HpRate) $defender	= &$fore["$key"]; break;
				case "prob25":
					if($prob < 25) $defender	= &$fore["$key"]; break;
				case "prob50":
					if($prob < 50) $defender	= &$fore["$key"]; break;
				case "prob75":
					if($prob < 75) $defender	= &$fore["$key"]; break;
				default:
					$defender	= &$fore["$key"];
			}
			if($defender) {
				print('<span class="bold">'.$defender->name.'</span> 보호<span class="bold">'.$target->name.'</span>!<br />'."\n");
				return $defender;
			}
		}
	}

	function JudgeTargetsDead(&$target) {
		$exp = 0;
		$money = 0;
		$itemdrop = array();
		foreach($target as $key => $char) {
			if(method_exists($target[$key],'HpDifferenceEXP')) {
				$exp	+= $target[$key]->HpDifferenceEXP();
			}
			if($target[$key]->CharJudgeDead()) {
				print("<span class=\"dmg\">".$target[$key]->Name('bold')." 가 패배했습니다.</span><br />\n");

				$exp	+= $target[$key]->DropExp();

				$money	+= $target[$key]->DropMoney();

				if($item = $target[$key]->DropItem()) {
					//$itemdrop["$item"]++;
					array_push($itemdrop,$item);
					$item	= LoadItemData($item);
					print($char->Name("bold")." 가 삭제되었습니다");
					print("<img src=\"".IMG_ICON.$item["img"]."\" class=\"vcent\"/>\n");
					print("<span class=\"bold u\">{$item['name']}</span>.<br />\n");
				}

				if($target[$key]->summon === true) {
					unset($target[$key]);
				}

				$this->ChangeDelay();
			}
		}
		return array($exp,$money,$itemdrop);
	}

	function &SelectTarget(&$target_list,$skill) {
		if((isset($skill["priority"]) ? $skill["priority"] : "") == "LowHpRate") {
			$hp = 2;
			foreach($target_list as $key => $char) {
				if($char->STATE == DEAD) continue;
				$HpRate	= $char->HP / $char->MAXHP;
				if($HpRate < $hp) {
					$hp	= $HpRate;
					$target	= &$target_list[$key];
				}
			}
			return $target;

		} else if((isset($skill["priority"]) ? $skill["priority"] : "") == "Back") {
			foreach($target_list as $key => $char) {
				if($char->STATE == DEAD) continue;
				if($char->POSITION != FRONT)
				$target[]	= &$target_list[$key];
			}
			if($target)
				return $target[array_rand($target)];
		} else if((isset($skill["priority"]) ? $skill["priority"] : "") == "Dead") {
			foreach($target_list as $key => $char) {
				if($char->STATE == DEAD)
				$target[]	= &$target_list[$key];
			}
			if($target)
				return $target[array_rand($target)];
			else
				return false;
		} else if((isset($skill["priority"]) ? $skill["priority"] : "") == "Summon") {
			foreach($target_list as $key => $char) {
				if($char->summon)
					$target[]	= &$target_list[$key];
			}
			if($target)
				return $target[array_rand($target)];
			else
				return false;
		} else if((isset($skill["priority"]) ? $skill["priority"] : "") == "Charge") {
			foreach($target_list as $key => $char) {
				if($char->expect)
					$target[]	= &$target_list[$key];
			}
			if($target)
				return $target[array_rand($target)];
			else
				return false;
		}
		foreach($target_list as $key => $char) {
			if($char->STATE != DEAD)
				$target[]	= &$target_list[$key];
		}
		return $target[array_rand($target)];
	}
	function &NextActer() {
		foreach($this->team0 as $key => $char) {
			if($char->STATE === 1) continue;
			if(!isset($delay)) {
				$delay	= $char->delay;
				$NextChar	= &$this->team0["$key"];
				continue;
			}
			if($delay <= $char->delay) {
				if($delay == $char->delay) {
					if(mt_rand(0,1))
						continue;
				}
				$delay	= $char->delay;
				$NextChar	= &$this->team0["$key"];
			}
		}
		foreach($this->team1 as $key => $char) {
			if($char->STATE === 1) continue;
			if($delay <= $char->delay) {
				if($delay == $char->delay) {
					if(mt_rand(0,1))
						continue;
				}
				$delay	= $char->delay;
				$NextChar	= &$this->team1["$key"];
			}
		}
		$dif	= $this->delay - $NextChar->delay;
		if($dif < 0)
			return $NextChar;
		foreach($this->team0 as $key => $char) {
			$this->team0["$key"]->Delay($dif);
		}
		foreach($this->team1 as $key => $char) {
			$this->team1["$key"]->Delay($dif);
		}
		return $NextChar;
	}
	function &NextActerNew() {
		$nextDis	= 1000;
		foreach($this->team0 as $key => $char) {
			if($char->STATE === DEAD) continue;
			$charDis	= $this->team0[$key]->nextDis();
			if($charDis == $nextDis) {
				$NextChar[]	= &$this->team0["$key"];
			} else if($charDis <= $nextDis) {
				$nextDis	= $charDis;
				$NextChar	= array(&$this->team0["$key"]);
			}
		}
		foreach($this->team1 as $key => $char) {
			if($char->STATE === DEAD) continue;
			$charDis	= $this->team1[$key]->nextDis();
			if($charDis == $nextDis) {
				$NextChar[]	= &$this->team1["$key"];
			} else if($charDis <= $nextDis) {
				$nextDis	= $charDis;
				$NextChar	= array(&$this->team1["$key"]);
			}
		}
		if($nextDis < 0) {
			if(is_array($NextChar)) {
				return $NextChar[array_rand($NextChar)];
			} else
				return $NextChar;
		}

		foreach($this->team0 as $key => $char) {
			$this->team0["$key"]->Delay($nextDis);
		}
		foreach($this->team1 as $key => $char) {
			$this->team1["$key"]->Delay($nextDis);
		}

		if(is_array($NextChar))
			return $NextChar[array_rand($NextChar)];
		else
			return $NextChar;
	}

	function DelayResetAll() {
		if(DELAY_TYPE === 0 || DELAY_TYPE === 1)
		{
			foreach($this->team0 as $key => $char) {
				$this->team0["$key"]->DelayReset();
			}
			foreach($this->team1 as $key => $char) {
				$this->team1["$key"]->DelayReset();
			}
		}
	}

	function SetDelay() {
		if(DELAY_TYPE === 0)
		{
			foreach($this->team0 as $key => $char) {
				$TotalSPD	+= $char->SPD;
				if($MaxSPD < $char->SPD)
					$MaxSPD	= $char->SPD;
			}
			foreach($this->team1 as $char) {
				$TotalSPD	+= $char->SPD;
				if($MaxSPD < $char->SPD)
					$MaxSPD	= $char->SPD;
			}
			$AverageSPD	= $TotalSPD/( __count($this->team0) + __count($this->team1) );
			$AveDELAY	= $AverageSPD * DELAY;
			$this->delay	= $MaxSPD + $AveDELAY;
			$this->ChangeDelay	= false;
		}
			else if(DELAY_TYPE === 1)
		{
		}
	}

	function ChangeDelay(){
		if(DELAY_TYPE === 0)
		{
			$this->ChangeDelay	= true;
		}
	}

	function SetTeamName($name1,$name2) {
		$this->team0_name	= $name1;
		$this->team1_name	= $name2;
	}

	function BattleHeader() {
		$team0_total_lv = 0;
		$team0_total_hp = 0;
		$team0_total_maxhp = 0;
		
		$team1_total_lv = 0;
		$team1_total_hp = 0;
		$team1_total_maxhp = 0;
		
		foreach($this->team0 as $char) {
			$team0_total_lv	+= $char->level;
			$team0_total_hp	+= $char->HP;
			$team0_total_maxhp	+= $char->MAXHP;
		}
		$team0_avelv	= round($team0_total_lv/__count($this->team0)*10)/10;
		$this->team0_ave_lv	= $team0_avelv;
		foreach($this->team1 as $char) {
			$team1_total_lv	+= $char->level;
			$team1_total_hp	+= $char->HP;
			$team1_total_maxhp	+= $char->MAXHP;
		}
		$team1_avelv	= round($team1_total_lv/__count($this->team1)*10)/10;
		$this->team1_ave_lv	= $team1_avelv;
		if($this->UnionBattle) {
			$team1_total_hp		= '????';
			$team1_total_maxhp	= '????';
		}
		print <<<P1
		<table style="width:100%;" cellspacing="0"><tbody>
		<tr><td class="teams"><div class="bold">{$this->team1_name}</div>
		전체 수준 : {$team1_total_lv}<br>
		평균 수준 : {$team1_avelv}<br>
		총 HP : {$team1_total_hp}/{$team1_total_maxhp}
		</td><td class="teams ttd1"><div class="bold">{$this->team0_name}</div>
		전체 수준 : {$team0_total_lv}<br>
		평균 수준 : {$team0_avelv}<br>
		총 HP : {$team0_total_hp}/{$team0_total_maxhp}
		</td></tr> 
		P1;
	}

	function BattleFoot() {
		print <<<P2
		</tbody></table>
		P2;
	}

	function BattleState() {
		static $last;
		if($last !== $this->actions)
			$last	= $this->actions;
		else
			return false;

		print("<tr><td colspan=\"2\" class=\"btl_img\">\n");
		print("<a name=\"s".$this->Scroll."\"></a>\n");
		print("<div style=\"width:100%;hight:100%;position:relative;\">\n");
		print('<div style="position:absolute;bottom:0px;right:0px;">'."\n");
		if($this->Scroll)
			print("<a href=\"#s".($this->Scroll - 1)."\"><<</a>\n");
		else
			print("<<" );
		print("<a href=\"#s".(++$this->Scroll)."\">>></a>\n");
		print('</div>');

		switch(BTL_IMG_TYPE) {
			case 0:
				print('<div style="text-align:center">');
				$this->ShowGdImage();
				print('</div>');
				break;
			case 1:
			case 2:
				$this->ShowCssImage();
				break;
		}
		print("</div>");
		print("</td></tr><tr><td class=\"ttd2 break\">\n");

		print("<table style=\"width:100%\"><tbody><tr><td style=\"width:50%\">\n");

		foreach($this->team1 as $char) {
			if($char->STATE === DEAD && $char->summon == true)
				continue;

			if($char->POSITION != FRONT)
				$char->ShowHpSp();
		}

		print("</td><td style=\"width:50%\">\n");
		foreach($this->team1 as $char) {
			if($char->STATE === DEAD && $char->summon == true)
				continue;

			if($char->POSITION == FRONT)
				$char->ShowHpSp();
		}

		print("</td></tr></tbody></table>\n");

		print("</td><td class=\"ttd1 break\">\n");

		print("<table style=\"width:100%\"><tbody><tr><td style=\"width:50%\">\n");
		foreach($this->team0 as $char) {
			if($char->STATE === DEAD && $char->summon == true)
				continue;
			if($char->POSITION == FRONT)
				$char->ShowHpSp();
		}

		print("</td><td style=\"width:50%\">\n");
		foreach($this->team0 as $char) {
			if($char->STATE === DEAD && $char->summon == true)
				continue;
			if($char->POSITION != FRONT)
				$char->ShowHpSp();
		}
		print("</td></tr></tbody></table>\n");

		print("</td></tr>\n");
	}

	function ShowGdImage() {
		$url	= BTL_IMG."?";

		$DeadImg	= substr(DEAD_IMG,0,strpos(DEAD_IMG,"."));

		$f	= 1;
		$b	= 1;
		foreach($this->team0 as $char) {
			if($char->STATE === 1)
				$img	= $DeadImg;
			else
				$img	= substr($char->img,0,strpos($char->img,"."));
			if($char->POSITION == "front"):
				$url	.= "f2{$f}=$img&";
				$f++;
			else:
				$url	.= "b2{$b}=$img&";
				$b++;
			endif;
		}
		$f	= 1;
		$b	= 1;
		foreach($this->team1 as $char) {
			if($char->STATE === 1)
				$img	= $DeadImg;
			else
				$img	= substr($char->img,0,strpos($char->img,"."));
			if($char->POSITION == "front"):
				$url	.= "f1{$f}=$img&";
				$f++;
			else:
				$url	.= "b1{$b}=$img&";
				$b++;
			endif;
		}
		print('<img src="'.$url.'">');
	}

	function ShowCssImage() {
		include_once(BTL_IMG_CSS);
		$img	= new cssimage();
		$img->SetBackGround($this->BackGround);
		$img->SetTeams($this->team1,$this->team0);
		$img->SetMagicCircle($this->team1_mc, $this->team0_mc);
		if(BTL_IMG_TYPE == 2)
			$img->NoFlip();
		$img->Show();
	}

	function GetMoney($money,$team) {
		if(!$money) return false;
		$money	= ceil($money * MONEY_RATE);
		if($team === $this->team0) {
			print("{$this->team0_name} 는 ".MoneyFormat($money)."를 얻습니다.<br />\n");
			$this->team0_money	+= $money;
		} else if($team === $this->team1) {
			print("{$this->team1_name} 는 ".MoneyFormat($money)."를 얻습니다.<br />\n");
			$this->team1_money	+= $money;
		}
	}

	function ReturnMoney() {
		return array($this->team0_money,$this->team1_money);
	}


	function CountDeadAll() {
		$dead	= 0;
		foreach($this->team0 as $char) {
			if($char->STATE === DEAD)
				$dead++;
		}
		foreach($this->team1 as $char) {
			if($char->STATE === DEAD)
				$dead++;
		}
		return $dead;
	}


	function CountDead($VarChar) {
		$dead	= 0;

		if($VarChar->team == TEAM_0) {
			$Team	= $this->team0;
		} else {
			$Team	= $this->team1;
		}

		foreach($Team as $char) {
			if($char->STATE === DEAD) {
				$dead++;
			} else if($char->SPECIAL["Undead"] == true) {
				$dead++;
			}
		}
		return $dead;
	}

	function MagicCircleAdd($team,$amount) {
		if($team == TEAM_0) {
			$this->team0_mc	+= $amount;
			if(5 < $this->team0_mc)
				$this->team0_mc	= 5;
			return true;
		} else {
			$this->team1_mc	+= $amount;
			if(5 < $this->team1_mc)
				$this->team1_mc	= 5;
			return true;
		}
	}

	function MagicCircleDelete($team,$amount) {
		if($team == TEAM_0) {
			if($this->team0_mc < $amount)
				return false;
			$this->team0_mc	-= $amount;
			return true;
		} else {
			if($this->team1_mc < $amount)
				return false;
			$this->team1_mc	-= $amount;
			return true;
		}
	}
}


function CountAlive($team) {
	$no	= 0;
	foreach($team as $char) {
		if($char->STATE !== 1)
			$no++;
	}
	return $no;
}


function CountAliveChars($team) {
	$no	= 0;
	foreach($team as $char) {
		if($char->STATE === 1)
			continue;
		if($char->monster)
			continue;
		$no++;
	}
	return $no;
}

	function CreateSummon($no,$strength=false) {
		include_once(DATA_MONSTER);
		$monster	= CreateMonster($no,1);

		$monster["summon"]	= true;
		if($strength) {
			$monster["maxhp"]	= round($monster["maxhp"]*$strength);
			$monster["hp"]	= round($monster["hp"]*$strength);
			$monster["maxsp"]	= round($monster["maxsp"]*$strength);
			$monster["sp"]	= round($monster["sp"]*$strength);
			$monster["str"]	= round($monster["str"]*$strength);
			$monster["int"]	= round($monster["int"]*$strength);
			$monster["dex"]	= round($monster["dex"]*$strength);
			$monster["spd"]	= round($monster["spd"]*$strength);
			$monster["luk"]	= round($monster["luk"]*$strength);

			$monster["atk"]["0"]	= round($monster["atk"]["0"]*$strength);
			$monster["atk"]["1"]	= round($monster["atk"]["1"]*$strength);
		}

		$monster	= new monster($monster);
		$monster->SetBattleVariable();
		return $monster;
	}

function MultiFactJudge($Keys,$char,$classBattle) {
	foreach($Keys as $no) {
		$return	= DecideJudge($no,$char,$classBattle);
		if(!$return)
			return false;
	}
	return true;
}
?>
