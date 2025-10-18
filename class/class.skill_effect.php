<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/


class ClassSkillEffect{

	function SkillEffect($skill,$skill_no,&$user,&$target) {
		if($target === false) {
			print("没有目标.失败!<br />\n");
			return false;
		}

		switch($skill_no):

			case 1020: 
				$dmg	= CalcBasicDamage($skill,$user,$target);
				DamageSP($target,$dmg);
				break;

			case 1021: 
			case 1029:
				$dmg	= CalcBasicDamage($skill,$user,$target);
				DamageHP($target,$dmg);
				DamageSP($target,$dmg);
				break;

			case 1022:
			case 5108:
				if($user->POSITION != "front")
					$option["multiply"]	= 4;
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				$user->Move("front");
				break;

			case 1026:
				if($user->POSITION != "front")
					$option["multiply"]	= 3;
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				$user->Move("front");
				break;

			case 1023:
				if($user->POSITION == "front")
					$option["multiply"]	= 3;
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				$user->Move("back");
				break;

			case 1027:
				if($user->POSITION == "front")
					$option["multiply"]	= 6;
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				$user->Move("back");
				break;

			case 1024:
				$value	= round(abs($target->HP - $user->HP)*0.5); 
				if($user->HP <= $target->HP) {
					if(1000 <= $value) {
						print("※价值太大被补正。<br />\n");
						$value	= 500;
					}
					DamageHP($target,$value);
					RecoverHP($user,$value);
				} else {
					DamageHP($user,$value);
					RecoverHP($target,$value);
				}
				break;

			case 1025:
				$value	= round(abs($target->SP - $user->SP)*0.5); 
				if($user->SP <= $target->SP) {
					if(1000 <= $value) {
						print("※价值太大被补正。<br />\n");
						$value	= 500;
					}
					DamageSP($target,$value);
					RecoverSP($user,$value);
				} else {
					DamageSP($user,$value);
					RecoverSP($target,$value);
				}
				break;

			case 1116:
			case 1125:
				$dmg	= $user->MAXHP - $user->HP;
				DamageHP($target,$dmg);
				break;

			case 1119:
				if($user === $target) break;
				$this->StatusChanges($skill,$target);
				break;

			case 1200:
			case 1223:
				if($target->STATE === 2) {
					$option["multiply"]	= 6;
					print("伤害 x6!<br />\n");
				}
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				break;

			case 1208:
				$Rate	= (log(($user->INT+22)/10) - 0.8)/0.85;
				$target->PoisonDamage($Rate);
				break;

			case 1209:
				if($target->STATE !== POISON) return false;
				$this->StatusChanges($skill,$target);
				$target->GetNormal(true);
				break;

			case 1220:
				$target->GetPoisonResist(50);
				break;

			case 2030:  
			case 2031:  
			case 2033: 
			case 2034: 
			case 2036: 
			case 5097: 
			case 5098: 
				if($user == $target) return false;
				$dmg	= CalcBasicDamage($skill,$user,$target);
				AbsorbHP($target,$dmg,$user,$dmg);
				break;

			case 2032:  
				$p	= mt_rand(1,100);
				if(50<$p) $target->HP	= 0;
				else print("失败!<br />");
				return true;

			case 5121: 
				$p	= mt_rand(1,100);
				if(70<$p) $target->HP	= 0;
				else print("失败!<br />");
				return true;

			case 5122: 
				$p	= mt_rand(1,100);
				if(10<$p) $target->HP	= 0;
				else print("失败!<br />");
				return true;

			case 5136: 
				$p	= mt_rand(1,100);
				if(8<$p) $target->HP	= 0;
				else print("失败!<br />");
				return true;

			case 2035: 
				$p	= mt_rand(1,100);
				if(90<$p) $target->HP	= 0;
				else print("失败!<br />");
				return true;

			case 2055: 
				$option["multiply"]	= $this->CountDead($user) + 1;
				print("伤害 x".$option["multiply"]."!<br />\n");
				$dmg	= CalcBasicDamage($skill,$user,$target,$option);
				DamageHP($target,$dmg);
				break;


			case 2056: 
				if($target->STATE !== 1) break;
				$target->GetNormal(true);
				$this->StatusChanges($skill,$target);
				RecoverHP($target,$target->MAXHP);
				break;

			case 2057: 
				if(60 < $target->HpPercent() || $target->SPECIAL["Metamo"]) {
					print("失败!<br />\n");
					break;
				}
				print($target->GetSpecial("Metamo",true));
				if($target->gender == 0)
					$target->img	= "mon_110r.gif";
				else
					$target->img	= "mon_149r.gif";
				$this->StatusChanges($skill,$target);
				RecoverHP($target,round($target->MAXHP/2));
				break;

			case 2058:
			case 3317:
				$this->StatusChanges($skill,$target);
				RecoverHP($target,round($target->MAXHP/2));
				break;

			case 2059: 
				if($target->SPECIAL["Metamo"]) {
					print("失败!<br />\n");
					break;
				}
				print($target->GetSpecial("Metamo",true));
				if($target->gender == 0)
					$target->img	= "mon_shujing_man.gif";
				else
					$target->img	= "mon_shujing_lady.gif";
				$this->StatusChanges($skill,$target);
				RecoverHP($target,round($target->MAXHP/2));
				break;

			case 2063: 
				if($target->SPECIAL["Metamo"]) {
					print("失败!<br />\n");
					break;
				}
				print($target->GetSpecial("Metamo",true));
				if($target->gender == 0)
					$target->img	= "mon_085r.gif";
				else
					$target->img	= "mon_085r.gif";
				$this->StatusChanges($skill,$target);
				RecoverHP($target,round($target->MAXHP/2));
				break;

			case 5099:
				if(50 < $target->HpPercent() || $target->SPECIAL["Metamo"]) {
					print("失败!<br />\n");
					break;
				}
				print($target->GetSpecial("Metamo",true));
				$this->StatusChanges($skill,$target);
				RecoverHP($target,round($target->MAXHP/2));
				break;

			case 2090:
			case 5090:
			case 2091:
			case 5133:
				if($user == $target) return false;
				$dmg	= CalcBasicDamage($skill,$user,$target,array("pierce"=>1));
				AbsorbSP($target,$dmg,$user,$dmg);
				break;

			case 5104:
				if($user == $target) return false;
				$dmg	= CalcBasicDamage($skill,$user,$target,array("pierce"=>1));
				AbsorbSP($target,$dmg,$user,$dmg);
				AbsorbHP($target,$dmg,$user,$dmg);
				break;

			case 2110:
			case 2111:
				if($target->expect === false) break;
				$this->DelayChar($target,$skill);
				break;

			case 3005: 
			case 3009: 
				$heal	= CalcRecoveryValue($skill,$user,$target);
				$Rate	= ($target->HP / $target->MAXHP) * 100;
				if($Rate <= 30) {
					$heal	*= 2;
					print("治疗x2!<br />");
				}
				RecoverHP($target,$heal);
				break;

			case 3010: 
				$SpRec	= ceil($target->MAXSP * 3/10);
				RecoverSP($target,$SpRec);
				break;

			case 3011: 
				$SpRec	= ceil($target->MAXSP * 5/10);
				RecoverSP($target,$SpRec);
				break;

			case 3021: 
				$SpRec	= ceil($target->MAXSP * 8/10);
				RecoverSP($target,$SpRec);
				break;

			case 3012:  
				$HpDmg	= ceil($target->MAXHP * 3/10);
				DamageHP2($target,$HpDmg);
				$SpRec	= ceil($target->MAXSP * 7/10);
				RecoverSP($target,$SpRec);
				break;

			case 3013:  
				$HpRate	= floor($target->HP/$target->MAXHP*100);
				$SpRate	= floor($target->SP/$target->MAXSP*100);
				print("{$target->name} 对换了HP和SP.<br />");
				print("HP: {$target->HP}(".$HpRate."%) 到 ");
				$target->HP	= round($SpRate/100*$target->MAXHP);
				print("{$target->HP}(".$SpRate."%)<br />");
				print("SP: {$target->SP}(".$SpRate."%) 到 ");
				$target->SP	= round($HpRate/100*$target->MAXSP);
				print("{$target->SP}(".$HpRate."%)<br />");
				break;

			case 3020:  
				$target->MAXSP	= round($target->MAXSP * 1.2);
				print($target->Name(bold)."'s MAXSP 提升到 {$target->MAXSP}.<br />\n");
				break;

			case 3040: 
			case 3041:
			case 3042:
			case 5030: 
			case 5063: 
			case 5135:
			case 5123:
				if($target->STATE !== 1) break;
				$heal	= CalcRecoveryValue($skill,$user,$target);
				$target->GetNormal(true);
				RecoverHP($target,$heal);
				break;

			case 3050:
			case 3051:
			case 3052:
				if($target == $user) return false;
				if($target->expect) return false;
				print("<span class=\"support\">".$target->Name("bold")." 变得轻快了!</span>");
				$target->DelayCut(101,$this->delay,1);
				print("<br />\n");
				break;

			case 3055:
				if($target->expect && $target->expect_type === 1) {
					print("<span class=\"support\">".$target->Name(bold)." casting shorted!</span>");
					$target->DelayCut(60,$this->delay,1);
					print("<br />\n");
				}
				break;

			case 3056:
				if($target->expect && $target->expect_type === 1) {
					print("<span class=\"support\">".$target->Name(bold)." casting shorted!</span>");
					$target->DelayCut(80,$this->delay,1);
					print("<br />\n");
				}
				break;

			case 3060:
			case 5067:
				if(!$target->SPECIAL["Barrier"]) {
					$target->GetSpecial("Barrier",true);
					print("<span class=\"support\">".$target->Name(bold)." got barriered!</span><br />\n");
				}
				break;

			case 3136:
			case 5085:
				$heal	= CalcRecoveryValue($skill,$user,$target);
				RecoverHP($target,$heal);
				$this->StatusChanges($skill,$target);
				if(!$target->SPECIAL["Barrier"]) {
					$target->GetSpecial("Barrier",true);
					print("<span class=\"support\">".$target->Name(bold)." got barriered!</span><br />\n");
				}
				break;

			case 3137:
				$RATE	= 4;
				$SpRec	= ceil(sqrt($target->MAXSP) * $RATE);
				RecoverSP($target,$SpRec);
				if(!$target->SPECIAL["Barrier"]) {
					$target->GetSpecial("Barrier",true);
					print("<span class=\"support\">".$target->Name(bold)." got barriered!</span><br />\n");
				}
				break;

			case 3113:  
			break;
			case 3120:  
				$heal	= 50 + $target->MAXHP * 1/10;
				$heal	= ceil($heal);
				RecoverHP($target,$heal);
				break;

			case 3121:  
				$heal	= 50 + $target->MAXHP * 2/10;
				$heal	= ceil($heal);
				RecoverHP($target,$heal);
				break;

			case 3122: 
				$dif	= $user->MAXHP - $user->HP;
				$heal	= ceil($dif*0.6);
				RecoverHP($target,$heal);
				break;

			case 3124:
				if(20 < $target->HpPercent()) {
					print("失败!<br />\n");
					break;
				}
				$dif	= $user->MAXHP - $user->HP;
				$heal	= ceil($dif*0.8);
				RecoverHP($target,$heal);
				break;

			case 3300: 
			case 3301: 
			case 3302: 
			case 3303: 
			case 3304:
			case 3305:
			case 3306:
			case 3307:
			case 3308:
			case 3309:
			case 3310:
			case 3311:
			case 3312:
			case 3313:
			case 3314:
			case 3315:
			case 3316:
				if(!$target->summon) break;
				$this->StatusChanges($skill,$target);
				break;

			case 3900: 
				print("中毒<br />\n");
				$user->GetPoison(100);
				break;
			case 3901: 
				DamageHP($user,9999);
				break;

			case 4000:  
				if($target->position != $target->POSITION) {
					$target->Move($target->position);
				}
				break;

			case 5002:  
				$dmg	= CalcBasicDamage($skill,$user,$target,array("pierce"=>1));
				AbsorbHP($target,$dmg,$user,$dmg);
				return $dmg;

			case 5006:  
				if($user == $target) {
					$user->POSITION = "back";
					return false;
				}
				if($target->POSITION == "back") {
					$target->POSITION = "front";
					print($target->Name(bold)." 站到前排.<br />");
				}
				$this->StatusChanges($skill,$target);
				break;

			case 5060:
				$target->DownDEF(30);
				$target->DownMDEF(30);
				$user->UpDEF(30);
				$user->UpMDEF(30);
				break;

			case 5022:
				if($user == $target) break;
				$heal	= CalcRecoveryValue($skill,$user,$target);
				RecoverHP($target,$heal);
				$this->StatusChanges($skill,$target);
				break;

			case 5803:  
				$spawn	= array(1018,1019,1020,1021,5002);
				$mob	= $spawn[array_rand($spawn)];
				$add	= CreateSummon($mob);
				$this->JoinCharacter($user,$add);
				$add->ShowImage(vcent);
				print($add->Name(bold)." 加入了队伍.<br />\n");
				break;

			default:
				if($skill["MagicCircleAdd"]) {
					$this->MagicCircleAdd($user->team,$skill["MagicCircleAdd"]);
					print($user->Name(bold).'<span class="support"> 画魔法阵 x'.$skill["MagicCircleAdd"].'</span><br />'."\n");
				}
				if($skill["MagicCircleDeleteEnemy"]) {
					$EnemyTeam	= ($user->team == TEAM_0)?TEAM_1:TEAM_0;
					$this->MagicCircleDelete($EnemyTeam,$skill["MagicCircleDeleteEnemy"]);
					print($user->Name(bold).'<span class="dmg"> 消除了敌人魔法阵 x'.$skill["MagicCircleDeleteEnemy"].'</span><br />'."\n");
				}
				if($skill["HpRegen"]) {
					$target->GetSpecial("HpRegen",$skill["HpRegen"]);
					print($target->Name(bold).'<span class="recover"> HP 回复了+'.$skill["HpRegen"]."%</span><br />\n");
				}
				if($skill["SpRegen"]) {
					$target->GetSpecial("SpRegen",$skill["SpRegen"]);
					print($target->Name(bold).'<span class="support"> SP 回复了+'.$skill["SpRegen"]."%</span><br />\n");
				}
				if($skill["priority"] == "Charge" && !$target->expect)
					break;
				if($skill["summon"]) {
					if(!is_array($skill["summon"]))
						$skill["summon"]	= array($skill["summon"]);
					foreach($skill["summon"] as $SummonNo) {
						$Strength	= $user->SUmmonPower();
						$add	= CreateSummon($SummonNo,$Strength);
						if($skill["quick"]) 
							$add->Quick($this->delay * 2);
						$this->JoinCharacter($user,$add);
						$add->ShowImage(vcent);
						print($add->Name(bold)." 加入了队伍.<br />\n");
					}
					return true;
				}

				if($skill["CurePoison"]) {
					if($target->STATE == POISON)
						$target->GetNormal(true);
				}
				if($skill["pow"]) {
					if($skill["support"]) {
						$heal	= CalcRecoveryValue($skill,$user,$target);
						RecoverHP($target,$heal);
						$this->StatusChanges($skill,$target);
					} else {
						if($skill["pierce"])
							$option["pierce"] = true;
						$dmg	= CalcBasicDamage($skill,$user,$target,$option);
						DamageHP($target,$dmg);
					}
				}
				if($skill["SpRecoveryRate"]) {
					$SpRec	= ceil(sqrt($target->MAXSP) * $skill["SpRecoveryRate"]);
					RecoverSP($target,$SpRec);
				}
				if($skill["poison"]) {
					$result	= $target->GetPoison($skill["poison"]);
					if($result === true)
						print($target->Name(bold)."<span class=\"spdmg\">中毒了</span> !<br />\n");
					else if($result === "BLOCK")
						print($target->Name(bold)." 没有中毒.<br />\n");
				}
				if($skill["knockback"])
					$target->KnockBack($skill["knockback"]);
				$this->StatusChanges($skill,$target);
				if($skill["move"])
					$target->Move($skill["move"]);
				$this->DelayChar($target,$skill);
				return $dmg;
		endswitch;
	}

	function DelayChar(&$target,$skill) {
		if(!$skill["delay"])
			return false;

		print($target->Name(bold)." delayed ");
		$target->DelayByRate($skill["delay"],$this->delay,1);
		print(".<br />\n");
	}

	function StatusChanges($skill,&$target) {
		if($skill["PlusSTR"])
			$target->PlusSTR($skill["PlusSTR"]);
		if($skill["PlusINT"])
			$target->PlusINT($skill["PlusINT"]);
		if($skill["PlusDEX"])
			$target->PlusDEX($skill["PlusDEX"]);
		if($skill["PlusSPD"]) {
			$target->PlusSPD($skill["PlusSPD"]);
			$this->ChangeDelay();
		}
		if($skill["PlusLUK"])
			$target->PlusLUK($skill["PlusLUK"]);

		if($skill["UpMAXHP"])
			$target->UpMAXHP($skill["UpMAXHP"]);
		if($skill["UpMAXSP"])
			$target->UpMAXSP($skill["UpMAXSP"]);
		if($skill["UpSTR"])
			$target->UpSTR($skill["UpSTR"]);
		if($skill["UpINT"])
			$target->UpINT($skill["UpINT"]);
		if($skill["UpDEX"])
			$target->UpDEX($skill["UpDEX"]);
		if($skill["UpSPD"]) {
			$target->UpSPD($skill["UpSPD"]);
			$this->ChangeDelay();
		}
		if($skill["UpATK"])
			$target->UpATK($skill["UpATK"]);
		if($skill["UpMATK"])
			$target->UpMATK($skill["UpMATK"]);
		if($skill["UpDEF"])
			$target->UpDEF($skill["UpDEF"]);
		if($skill["UpMDEF"])
			$target->UpMDEF($skill["UpMDEF"]);

		if($skill["DownMAXHP"])
			$target->DownMAXHP($skill["DownMAXHP"]);
		if($skill["DownMAXSP"])
			$target->DownMAXSP($skill["DownMAXSP"]);
		if($skill["DownSTR"])
			$target->DownSTR($skill["DownSTR"]);
		if($skill["DownINT"])
			$target->DownINT($skill["DownINT"]);
		if($skill["DownDEX"])
			$target->DownDEX($skill["DownDEX"]);
		if($skill["DownSPD"]) {
			$target->DownSPD($skill["DownSPD"]);
			$this->ChangeDelay();
		}
		if($skill["DownATK"])
			$target->DownATK($skill["DownATK"]);
		if($skill["DownMATK"])
			$target->DownMATK($skill["DownMATK"]);
		if($skill["DownDEF"])
			$target->DownDEF($skill["DownDEF"]);
		if($skill["DownMDEF"])
			$target->DownMDEF($skill["DownMDEF"]);
	}

}

function DamageHP(&$target,$value) {
	print('<span class="dmg" style="font-color:#f53;">'.$target->Name("bold")."</span> 受到");
	print("<span class='dmg bold'>  ".$value."</span> 伤害 ");
	$target->HpDamage($value);
	print("<br />\n");
}

function DamageHP2(&$target,$value) {
	print('<span class="dmg" style="font-color:#f53;">'.$target->Name("bold")."</span> 受到");
	print("<span class='dmg bold'>  ".$value."</span> 伤害 ");
	$target->HpDamage2($value);
	print("<br />\n");
}

function DamageSP(&$target,$value) {
	print('<span class="spdmg" style="font-color:#f53;">'.$target->Name("bold")."</span> 受到");
	print("<span class='spdmg bold'>  ".$value."</span> 伤害 ");
	$target->SpDamage($value);
	print("<br />\n");
}

function RecoverHP(&$target,$value) {
	print($target->Name("bold").' <span class="recover">回复了 <span class="bold">'.$value.' HP</span></span>');
	$target->HpRecover($value);
	print("<br />\n");
}

function RecoverSP(&$target,$value) {
	print($target->Name("bold").' <span class="support">回复了 <span class="bold">'.$value.' SP</span></span>');
	$target->SpRecover($value);
	print("<br />\n");
}

function AbsorbHP(&$target,$value,&$user,$value2) {
	print(' 从 '.$target->Name(bold));
	$target->HpDamage($value);
	print('吸取 <span class="recover"><span class="bold">'.$value.'</span> HP</span>');
	$user->HpRecover($value);
	print("<br />\n");
}

function AbsorbSP(&$target,$value,&$user,$value2) {
	print(' 从 '.$target->Name(bold));
	$target->SpDamage($value);
	print('吸取 <span class="support"><span class="bold">'.$value.'</span> SP</span>');
	$user->SpRecover($value);
	print("<br />\n");
}

function CalcBasicDamage($skill,$user,&$target,$option=null) {
	if($skill["type"] == 0) {
		if($skill["inf"] == "dex")
			$str	= $user->DEX;
		else
			$str	= $user->STR;
		$dmg	= sqrt($str)*10;
		$dmg	+= $user->atk[0];
		$dmg	*= $skill["pow"]/100;
		if($user->SPECIAL["Pierce"]["0"]) {
			$Pierce	= $user->SPECIAL["Pierce"]["0"] * $skill["pow"]/100;
		}
	} else {
		$int	= $user->INT;
		$dmg	= sqrt($int)*10;
		$dmg	+= $user->atk[1];
		$dmg	*= $skill["pow"]/100;
		if($user->SPECIAL["Pierce"]["1"]) {
			$Pierce	= $user->SPECIAL["Pierce"]["1"] * $skill["pow"]/100;
		}
	}

	if($option["multiply"])
		$dmg	*= $option["multiply"];

	if($target->SPECIAL["Barrier"]) {
		$target->GetSpecial("Barrier",false);
		print("攻击无效.<br />\n");
		$dmg	= 0;
	}

	$min	= $dmg*(1/10);

	if(!$option["pierce"]) {
		if($skill["type"] == 0) {
			$dmg	*= 1 - $target->def["0"]/100;
			$dmg	-= $target->def["1"];
		} else {
			$dmg	*= 1 - $target->def["2"]/100;
			$dmg	-= $target->def["3"];
		}
	}
	if($dmg < $min)
		$dmg	= $min;
	$dmg	+=	$Pierce;
	return ceil($dmg);
}

	function CalcRecoveryValue($skill,$user,$target) {
		$int	= $user->INT;
		$heal	= sqrt($int)*10;
		$heal	+= $user->atk["1"];
		$heal	*= $skill["pow"]/100;
		$heal	= ceil($heal);
		return $heal;
	}
?>
