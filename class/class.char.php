<?php 
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include(DATA_JOB);

class char{

	var $fp;
	var $file;
	var $Number;

	var $user;

	var $name, $gender, $job, $job_name, $img, $birth, $level, $exp;
	var $maxhp, $hp, $maxsp, $sp, $str, $int, $dex, $spd, $luk;
	var $statuspoint;
	var $skillpoint;
	var $weapon, $shield, $armor, $item;
	var $position, $guard;
	var $skill;
	var $Pattern;
	var $PatternMemo;
	var $judge, $quantity, $action;

	var $team;
	var $IMG;
	var $MAXHP, $HP, $MAXSP, $SP, $STR, $INT, $DEX, $SPD, $LUK;
	var $STATE;
	var $POSITION;
	var $P_MAXHP, $P_MAXSP, $P_STR, $P_INT, $P_DEX, $P_SPD,$P_LUK;
	var $M_MAXHP, $M_MAXSP;
	var $SPECIAL;

	var $WEAPON;
	var $atk, $def;
	var $delay;
	var $expect = false;
	var $expect_type;
	var $expect_target;

	var $ActCount;
	var $JdgCount;

	function __construct($file=false) {

		if(!$file)
			return 0;

		$this->Number	= basename($file,".dat");
		$this->file	= $file;
		$this->fp	= FileLock($file);

		$data	= ParseFileFP($this->fp);
		$this->SetCharData($data);
	}

	function fpclose() {
		if(is_resource($this->fp)) {
			fclose($this->fp);
			unset($this->fp);
		}
	}

	function SummonPower() {
		$DEX_PART	= sqrt($this->DEX) * 5; 
		$Strength	= 1 + ($DEX_PART + $this->LUK)/250;
		if($this->SPECIAL["Summon"])
			$Strength	*= (100+$this->SPECIAL["Summon"])/100;
		return $Strength;
	}

	function SacrificeHp($rate) {
		if(!$rate) return false;

		$SelfDamage	= ceil( $this->MAXHP*($rate/100) );
		if($this->POSITION != "front")
			$SelfDamage	*= 2;
		print("<span class=\"dmg\">".$this->Name(bold)." sacrifice ");
		print("<span class=\"bold\">$SelfDamage</span> HP</span>\n");
		$this->HpDamage($SelfDamage);
		print("</span><br />\n");
	}

	function GetSpecial($name,$value) {
		if(is_bool($value)) {
			$this->SPECIAL["$name"]	= $value;
		} else if (is_array($value)) {
			foreach($value as $key => $val) {
				$this->SPECIAL["$name"]["$key"]	+= $val;
			}
		} else {
			$this->SPECIAL["$name"]	+= $value;
		}
	}

	function AutoRegeneration() {
		if($this->SPECIAL["HpRegen"]) {
			$Regen	= round($this->MAXHP * $this->SPECIAL["HpRegen"]/100);
			print('<span class="recover">* </span>'.$this->Name(bold)."<span class=\"recover\"> 自动回复 <span class=\"bold\">".$Regen." HP</span></span> ");
			$this->HpRecover($Regen);
			print("<br />\n");
		}
		if($this->SPECIAL["SpRegen"]) {
			$Regen	= round($this->MAXSP * $this->SPECIAL["SpRegen"]/100);
			print('<span class="support">* </span>'.$this->Name(bold)."<span class=\"support\"> 自动回复 <span class=\"bold\">".$Regen." SP</span></span> ");
			$this->SpRecover($Regen);
			print("<br />\n");
		}
	}

	function ShowCharDetail() {
		$P_MAXHP	= round($this->maxhp * $this->M_MAXHP/100) + $this->P_MAXHP;
		$P_MAXSP	= round($this->maxsp * $this->M_MAXSP/100) + $this->P_MAXSP;
		
		$temp1 = (($P_MAXHP) ? " + ".$P_MAXHP."" : "");
		$temp2 = (($P_MAXSP) ? " + ".$P_MAXSP."" : "");
		$temp3 = (($this->P_STR) ? " + ".$this->P_STR."" : "");
		$temp4 = (($this->P_INT) ? " + ".$this->P_INT."" : "");
		$temp5 = (($this->P_DEX) ? " + ".$this->P_DEX."" : "");
		$temp6 = (($this->P_SPD) ? " + ".$this->P_SPD."" : "");
		$temp7 = (($this->P_LUK) ? " + ".$this->P_LUK."" : "");
		
		print <<<P1
		<table>
		<tr><td valign="top" style="width:180px">{$this->ShowCharLink()}
		</td><td valign="top" style="padding-right:20px">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr><td style="text-align:right">Exp : </td><td>{$this->exp}/{$this->CalcExpNeed()}</td></tr>
		<tr><td style="text-align:right">HP : </td><td>{$this->maxhp}{$temp1}</td></tr>
		<tr><td style="text-align:right">SP : </td><td>{$this->maxsp}{$temp2}</td></tr>
		<tr><td style="text-align:right">STR : </td><td>{$this->str}{$temp3}</td></tr>
		<tr><td style="text-align:right">INT : </td><td>{$this->int}{$temp4}</td></tr>
		<tr><td style="text-align:right">DEX : </td><td>{$this->dex}{$temp5}</td></tr>
		<tr><td style="text-align:right">SPD : </td><td>{$this->spd}{$temp6}</td></tr>
		<tr><td style="text-align:right">LUK : </td><td>{$this->luk}{$temp7}</td></tr>
		</table>
		</td><td valign="top">
		P1;
		if($this->SPECIAL["PoisonResist"])
			print("毒抵抗 +".$this->SPECIAL["PoisonResist"]."%<br />\n");
		if($this->SPECIAL["Pierce"]["0"])
			print("无视物理防御伤害 +".$this->SPECIAL["Pierce"]["0"]."<br />\n");
		if($this->SPECIAL["Pierce"]["1"])
			print("无视魔法防御伤害 +".$this->SPECIAL["Pierce"]["1"]."<br />\n");
		if($this->SPECIAL["Summon"])
			print("召喚力 +".$this->SPECIAL["Summon"]."%<br />\n");
		print <<<P2
		</td></tr></table>
		P2;
	}

	function SetUser($user) {
		$this->user	= $user;
	}

	function ResetExpect() {
		$this->expect	= false;
		$this->expect_type	= false;
		$this->expect_target	= false;
	}

	function Move($posi) {
		if($posi == "front") {
			if($this->POSITION == "front")
				return false;
			$this->POSITION = "front";
			print($this->Name(bold)." 移到前排.<br />\n");
		} else {
			if($this->POSITION != "front")
				return false;
			$this->POSITION = "back";
			print($this->Name(bold)." 移到后排.<br />\n");
		}
	}


	function nextDis() {
		if($this->STATE === DEAD)
			return 100;
		$distance	= (100 - $this->delay)/$this->DelayValue();
		return $distance;
	}

	function DelayReset() {
		if(DELAY_TYPE === 0) {
			$this->delay	= $this->SPD;
		} else if(DELAY_TYPE === 1) {
			$this->delay	= 0;
		}
	}

	function Delay($no) {
		if($this->STATE === DEAD){
			return false;
    }
		if(DELAY_TYPE === 0) {
			$this->delay	+= $no;
		} else if(DELAY_TYPE === 1) {
			$this->delay	+= $no * $this->DelayValue();
		}
	}

	function DelayValue() {
		return sqrt($this->SPD) + DELAY_BASE;
	}

	function DelayByRate($No,$BaseDelay,$Show=false) {
		if(DELAY_TYPE === 0) {
			if($Show) {
				print("(".sprintf("%0.1f",$this->delay));
				print('<span style="font-size:80%"> >>> </span>');
			}
			$Delay	= ($BaseDelay - $this->SPD) * ($No/100);
			$this->delay	-= $Delay;
			if($Show) {
				print(sprintf("%0.1f",$this->delay)."/".sprintf("%0.1f",$BaseDelay).")");
			}
		} else if(DELAY_TYPE === 1) {
			if($Show) {
				print("(".sprintf("%0.0f",$this->delay));
				print('<span style="font-size:80%"> >>> </span>');
			}
			$Delay	= $No;
			$this->delay	-= $Delay;
			if($Show) {
				print(sprintf("%0.0f",floor($this->delay))."/".sprintf("%d",100).")");
			}
		}
	}

	function DelayCut($No,$BaseDelay,$Show=false) {
		if(DELAY_TYPE === 0) {
			$Delay	= ($BaseDelay - $this->delay) * ($No/100);
			if($Show) {
				print("(".sprintf("%0.1f",$this->delay));
				print('<span style="font-size:80%"> >>> </span>');
			}
			$this->delay	+= $Delay;
			if($Show) {
				print(sprintf("%0.1f",$this->delay)."/".sprintf("%0.1f",$BaseDelay).")");
			}
		} else if(DELAY_TYPE === 1) {
			$Delay	= (100 - $this->delay) * ($No/100);
			if($Show) {
				print("(".sprintf("%0.1f",$this->delay));
				print('<span style="font-size:80%"> >>> </span>');
			}
			$this->delay	+= $Delay;
			if($Show) {
				print(sprintf("%0.0f",floor($this->delay))."/".sprintf("%d",100).")");
			}
		}
	}

	function Quick($delay) {
		if(DELAY_TYPE === 0)
			$this->delay	= $delay;
		else if(DELAY_TYPE === 1)
			$this->delay	= 100.1;
	}

	function ChangeName($new) {
		$this->name	= $new;
	}

	function AddPattern($no) {
		if(!is_int($no) && $no < 0) return false;

		$this->PatternExplode();
		array_splice($this->judge,$no,0,"1000");
		array_pop($this->judge);
		array_splice($this->quantity,$no,0,"0");
		array_pop($this->quantity);
		array_splice($this->action,$no,0,"1000");
		array_pop($this->action);
		$this->CutPatterns();
		$this->PatternSave($this->judge,$this->quantity,$this->action);
		return true;
	}

	function DeletePattern($no) {
		if(!is_int($no) && $no < 0) return false;

		$this->PatternExplode();
		array_splice($this->judge,$no,1);
		array_push($this->judge,"1000");
		array_splice($this->quantity,$no,1);
		array_push($this->quantity,"0");
		array_splice($this->action,$no,1);
		array_push($this->action,"1000");
		$this->CutPatterns();
		$this->PatternSave($this->judge,$this->quantity,$this->action);
		return true;
	}

	function CutPatterns() {
		$No	= $this->MaxPatterns();
		while($No < __count($this->judge)) {
			array_pop($this->judge);
		}
		while($No < __count($this->quantity)) {
			array_pop($this->quantity);
		}
		while($No < __count($this->action)) {
			array_pop($this->action);
		}
	}

	function ChangePatternMemo() {
		$temp	= $this->Pattern;
		$this->Pattern	= $this->PatternMemo;
		$this->PatternMemo	= $temp;
		return true;
	}

	function KnockBack($no=1) {
		if($this->POSITION == "front") {
			$this->POSITION = "back";
			print($this->Name(bold)."敲到后排!<br />\n");
		}
	}

	function PlusSTR($no) {
		$this->STR	+= $no;
		print($this->Name(bold)." STR 提升 {$no}<br />\n");
	}
	function PlusINT($no) {
		$this->INT	+= $no;
		print($this->Name(bold)." INT 提升 {$no}<br />\n");
	}
	function PlusDEX($no) {
		$this->DEX	+= $no;
		print($this->Name(bold)." DEX 提升 {$no}<br />\n");
	}
	function PlusSPD($no) {
		$this->SPD	+= $no;
		print($this->Name(bold)." SPD 提升 {$no}<br />\n");
	}
	function PlusLUK($no) {
		$this->LUK	+= $no;
		print($this->Name(bold)." LUK 提升 {$no}<br />\n");
	}

	function UpMAXHP($no) {
		print($this->Name(bold)." MAXHP({$this->MAXHP}) 提升到 ");
		$this->MAXHP	= round($this->MAXHP * (1 + $no/100));
		print("{$this->MAXHP}<br />\n");
	}
	function UpMAXSP($no) {
		print($this->Name(bold)." MAXSP({$this->MAXSP}) 提升到 ");
		$this->MAXSP	= round($this->MAXSP * (1 + $no/100));
		print("{$this->MAXSP}<br />\n");
	}
	function UpSTR($no) {
		$this->STR	= round($this->STR * (1 + $no/100));
		if(($this->str * MAX_STATUS_MAXIMUM/100) < $this->STR) {
			print($this->Name(bold)." STR 提升到最大 (".MAX_STATUS_MAXIMUM."%).<br />\n");
			$this->STR = round($this->str * MAX_STATUS_MAXIMUM/100);
		} else {
			print($this->Name(bold)." STR 提升 {$no}%<br />\n");
		}
	}
	function UpINT($no) {
		$this->INT	= round($this->INT * (1 + $no/100));
		if(($this->int * MAX_STATUS_MAXIMUM/100) < $this->INT) {
			print($this->Name(bold)." INT 提升到最大(".MAX_STATUS_MAXIMUM."%).<br />\n");
			$this->INT = round($this->int * MAX_STATUS_MAXIMUM/100);
		} else {
			print($this->Name(bold)." INT 提升 {$no}%<br />\n");
		}
	}
	function UpDEX($no) {
		$this->DEX	= round($this->DEX * (1 + $no/100));
		if(($this->dex * MAX_STATUS_MAXIMUM/100) < $this->DEX) {
			print($this->Name(bold)." DEX 提升到最大(".MAX_STATUS_MAXIMUM."%).<br />\n");
			$this->DEX = round($this->dex * MAX_STATUS_MAXIMUM/100);
		} else {
			print($this->Name(bold)." DEX 提升 {$no}%<br />\n");
		}
	}
	function UpSPD($no) {
		$this->SPD	= round($this->SPD * (1 + $no/100));
		if(($this->spd * MAX_STATUS_MAXIMUM/100) < $this->SPD) {
			print($this->Name(bold)." SPD 提升到最大(".MAX_STATUS_MAXIMUM."%).<br />\n");
			$this->SPD = round($this->spd * MAX_STATUS_MAXIMUM/100);
		} else {
			print($this->Name(bold)." SPD 提升 {$no}%<br />\n");
		}
	}
	function UpATK($no) {
		$this->atk["0"]	= round($this->atk["0"] * (1 + $no/100));
		print($this->Name(bold)." ATK 提升 {$no}%<br />\n");
	}
	function UpMATK($no) {
		$this->atk["1"]	= round($this->atk["1"] * (1 + $no/100));
		print($this->Name(bold)." MATK 提升 {$no}%<br />\n");
	}
	function UpDEF($no) {
		$up	= floor((100 - $this->def["0"]) * ($no/100) );
		$this->def["0"]	+= $up;
		print($this->Name(bold)." DEF 提升 {$no}%<br />\n");
	}
	function UpMDEF($no) {
		$up	= floor((100 - $this->def["2"]) * ($no/100) );
		print($this->Name(bold)." MDEF 提升 {$no}%<br />\n");
		$this->def["2"]	+= $up;
	}
	function DownMAXHP($no) {
		print($this->Name(bold)." MAXHP({$this->MAXHP}) 下降到 ");
		$this->MAXHP	= round($this->MAXHP * (1 - $no/100));
		if($this->MAXHP < $this->HP)
			$this->HP	= $this->MAXHP;
		print("{$this->MAXHP}<br />\n");
	}
	function DownMAXSP($no) {
		print($this->Name(bold)." MAXSP({$this->MAXSP}) 下降到 ");
		$this->MAXSP	= round($this->MAXSP * (1 - $no/100));
		if($this->MAXSP < $this->SP)
			$this->SP	= $this->MAXSP;
		print("{$this->MAXSP}<br />\n");
	}
	function DownSTR($no) {
		$this->STR	= round($this->STR * (1 - $no/100));
		print($this->Name(bold)." STR 下降 {$no}%<br />\n");
	}
	function DownINT($no) {
		$this->INT	= round($this->INT * (1 - $no/100));
		print($this->Name(bold)." INT 下降 {$no}%<br />\n");
	}
	function DownDEX($no) {
		$this->DEX	= round($this->DEX * (1 - $no/100));
		print($this->Name(bold)." DEX 下降 {$no}%<br />\n");
	}
	function DownSPD($no) {
		$this->SPD	= round($this->SPD * (1 - $no/100));
		print($this->Name(bold)." SPD 下降 {$no}%<br />\n");
	}
	function DownATK($no) {
		$this->atk["0"]	= round($this->atk["0"] * (1 - $no/100));
		print($this->Name(bold)." ATK 下降 {$no}%<br />\n");
	}
	function DownMATK($no) {
		$this->atk["1"]	= round($this->atk["1"] * (1 - $no/100));
		print($this->Name(bold)." MATK 下降 {$no}%<br />\n");
	}
	function DownDEF($no) {
		$this->def["0"]	= round($this->def["0"] * (1 - $no/100));
		print($this->Name(bold)." DEF 下降 {$no}%<br />\n");
	}
	function DownMDEF($no) {
		$this->def["2"]	= round($this->def["2"] * (1 - $no/100));
		print($this->Name(bold)." MDEF 下降 {$no}%<br />\n");
	}

	function MaxPatterns() {
		if($this->int < 10)
			$no	= 2;
		else if($this->int < 15)
			$no	= 3;
		else if($this->int < 30)
			$no	= 4;
		else if($this->int < 50)
			$no	= 5;
		else if($this->int < 80)
			$no	= 6;
		else if($this->int < 120)
			$no	= 7;
		else if($this->int < 160)
			$no	= 8;
		else if($this->int < 200)
			$no	= 9;
		else if($this->int < 250)
			$no	= 10;
		else if($this->int < 300)
			$no	= 11;
		else if($this->int < 350)
			$no	= 12;
		else if($this->int < 400)
			$no	= 13;
		else if($this->int < 450)
			$no	= 14;
		else if($this->int < 500)
			$no	= 15;
		if(29 < $this->level)
			$no++;
		else if(59 < $this->level)
			$no++;
		else if(89 < $this->level)
			$no++;
		return $no;
	}


	function ChangePattern($judge,$action) {
		$this->judge	= array();
		$this->action	= array();
		$max	= $this->MaxPatterns();
		$judge_list	= array_flip(JudgeList());
		$skill_list	= array_flip($this->skill);
		for($i=0; $i<$max; $i++) {
			if(!$judge["$i"])	$this->judge[$i]	= 1000;
			if(!$action["$i"])	$this->action[$i]	= 1000;

			if( isset($judge_list[$judge[$i]]) && isset($skill_list[$action[$i]]) ) {
				$this->judge[$i]	= $judge[$i];
				$this->action[$i]	= $action[$i];
			}
		}
		if($max < __count($this->judge))
			return false;
		return true;
	}

	function PoisonDamage($multiply=1) {
		if($this->STATE !== 2) return false;

		$poison	= $this->PoisonDamageFormula($multiply);
		print("<span class=\"spdmg\">".$this->Name(bold)." 由于中毒受到 ");
		print("<span class=\"bold\">$poison</span> 伤害.\n");
		$this->HpDamage2($poison);
		print("</span><br />\n");
	}

	function PoisonDamageFormula($multiply=1) {
		$damage	= round($this->MAXHP * 0.10) + ceil($this->level/2);
		$damage	*= $multiply;
		return round($damage);
	}

	function GetPoison($BePoison) {
		if($this->STATE === 2)
			return false;
		if($this->SPECIAL["PoisonResist"]) {
			$prob	= mt_rand(0,99);
			$BePoison	*= (1 - $this->SPECIAL["PoisonResist"]/100);
			if($prob < $BePoison) {
				$this->STATE = 2;
				return true;
			} else {
				return "BLOCK";
			}
		}
		$this->STATE = 2;
		return true;
	}

	function GetPoisonResist($no) {
		$Add	= (100 - $this->SPECIAL["PoisonResist"]) * ($no/100);
		$Add	= round($Add);
		$this->SPECIAL["PoisonResist"]	+= $Add;
		print('<span class="support">');
		print($this->Name(bold)." got PoisonResist!(".$this->SPECIAL["PoisonResist"]."%)");
		print("</span><br />\n");
	}

	function Name($string=false) {
		if($string)
			return "<span class=\"{$string}\">{$this->name}</span>";
		else
			return $this->name;
	}

	function CalcExpNeed() {
		switch($this->level) {
			case 40:	$no	= 30000; break;
			case 41:	$no	= 40000; break;
			case 42:	$no	= 50000; break;
			case 43:	$no	= 60000; break;
			case 44:	$no	= 70000; break;
			case 45:	$no	= 80000; break;
			case 46:	$no	= 90000; break;
			case 47:	$no	= 100000; break;
			case 48:	$no	= 120000; break;
			case 49:	$no	= 140000; break;
			case 50:	$no	= 160000; break;
			case 51:	$no	= 180000; break;
			case 52:	$no	= 200000; break;
			case 53:	$no	= 220000; break;
			case 54:	$no	= 240000; break;
			case 55:	$no	= 260000; break;
			case 56:	$no	= 280000; break;
			case 57:	$no	= 300000; break;
			case 58:	$no	= 320000; break;
			case 59:	$no	= 340000; break;
			case 60:	$no	= 360000; break;
			case 61:	$no	= 380000; break;
			case 62:	$no	= 400000; break;
			case 63:	$no	= 420000; break;
			case 64:	$no	= 440000; break;
			case 65:	$no	= 460000; break;
			case 66:	$no	= 480000; break;
			case 67:	$no	= 500000; break;
			case 68:	$no	= 520000; break;
			case 69:	$no	= 540000; break;
			case 70:	$no	= 560000; break;
			case 71:	$no	= 580000; break;
			case 72:	$no	= 600000; break;
			case 73:	$no	= 620000; break;
			case 74:	$no	= 640000; break;
			case 75:	$no	= 660000; break;
			case 76:	$no	= 680000; break;
			case 77:	$no	= 700000; break;
			case 78:	$no	= 720000; break;
			case 79:	$no	= 740000; break;
			case 80:	$no	= 760000; break;
			case 81:	$no	= 780000; break;
			case 82:	$no	= 800000; break;
			case 83:	$no	= 820000; break;
			case 84:	$no	= 840000; break;
			case 85:	$no	= 860000; break;
			case 86:	$no	= 880000; break;
			case 87:	$no	= 900000; break;
			case 88:	$no	= 920000; break;
			case 89:	$no	= 940000; break;
			case 90:	$no	= 960000; break;
			case 91:	$no	= 980000; break;
			case 92:	$no	= 1000000; break;
			case 93:	$no	= 1100000; break;
			case 94:	$no	= 1200000; break;
			case 95:	$no	= 1300000; break;
			case 96:	$no	= 1400000; break;
			case 97:	$no	= 1500000; break;
			case 98:	$no	= 2000000; break;
			case 99:	$no	= 3000000; break;
			case 100:

			case (100 <= $this->level):
				$no	= "MAX"; break;
			case(21 < $this->level):
				$no	= 2*pow($this->level,3)+100*$this->level+100;
				$no	-= substr($no,-2);
				$no /= 5;
				break;
			default:
				$no	= pow($this->level-1,2)/2*100+100;
				$no /= 5;
				break;
		}
		return $no;
	}

	function GetExp($exp) {
		if($this->monster) return false;
		if(MAX_LEVEL <= $this->level) return false;

		$this->exp	+= $exp;
		$need	= $this->CalcExpNeed($this->level);
		if($need <= $this->exp) {
			$this->LevelUp();
			return true;
		}
	}

	function LevelUp() {
		$this->exp	= 0;
		$this->level++;
		$this->statuspoint	+= GET_STATUS_POINT;
		$this->skillpoint	+= GET_SKILL_POINT;
	}

	function ClassChange($job) {
		include_once(DATA_CLASSCHANGE);
		if(CanClassChange($this,$job)) {
			$this->job = $job;
			$this->SetJobData();
			$this->SetHpSp();
			return true;
		}
		return false;
	}

	function Equip($item) {
		$old	= array(
			"weapon"=> $this->weapon,
			"shield"=> $this->shield,
			"armor"	=> $this->armor,
			"item"	=> $this->item
			);

		$return	= array();

		switch($item["type"]) {
			case "剑":
			case "匕首":
			case "矛":
			case "短柄斧":
			case "魔杖":
			case "锤":
			case "双手剑":
			case "枪":
			case "斧":
			case "杖":
			case "弓":
			case "十字弓":
			case "鞭":
				if($this->weapon)
					$return[]	= $this->weapon;
				if($item["dh"] && $this->shield) {
					$return[]	= $this->shield;
					$this->shield	= NULL;
				}
				$this->weapon	= $item["no"];
				break;
			case "盾":
			case "MainGauche":
			case "书":
				if($this->weapon) {
					$weapon	= LoadItemData($this->weapon);
					if($weapon["dh"]) {
						$return[]	= $this->weapon;
						$this->weapon	= NULL;
					}
				}
				if($this->shield)
					$return[]	= $this->shield;
				$this->shield	= $item["no"];
				break;
			case "甲":
			case "衣服":
			case "长袍":
				if($this->armor)
					$return[]	= $this->armor;
				$this->armor	= $item["no"];
				break;
			case "道具":
				if($this->item)
					$return[]	= $this->item;
				$this->item	= $item["no"];
				break;
			default: return false;
		}

		$weapon	= LoadItemData($this->weapon);
		$shield	= LoadItemData($this->shield);
		$armor	= LoadItemData($this->armor);
		$item2	= LoadItemData($this->item);

		$handle	= 0;
		$handle	= $weapon["handle"] + $shield["handle"] + $armor["handle"] + $item2["handle"];
		if($this->GetHandle() < $handle) {
			foreach($old as $key => $val)
				$this->{$key}	= $val;
			return false;
		}

		return $return;
	}

	function CharJudgeDead() {
		if($this->HP < 1 && $this->STATE !== DEAD) {
			$this->STATE	= DEAD;
			$this->HP	= 0;
			$this->ResetExpect();

			return true;
		}
	}

	function GetNormal($mes=false) {
		if($this->STATE === ALIVE)
			return true;
		if($this->STATE === DEAD) {
			if($mes)
				print($this->Name(bold).' <span class="recover">复活</span>!<br />'."\n");
			$this->STATE = 0;
			return true;
		}
		if($this->STATE === POISON) {
			if($mes)
				print($this->Name(bold)."的 <span class=\"spdmg\">中毒</span> 被治愈.<br />\n");
			$this->STATE = 0;
			return true;
		}
	}

	function ShowHpSp() {
		if($this->STATE === 1)
			$sub	= " dmg";
		else if($this->STATE === 2)
			$sub	= " spdmg";
		print("<span class=\"bold{$sub}\">{$this->name}</span>\n");
		if($this->expect_type === 0)
			print('<span class="charge">(蓄力)</span>'."\n");
		else if($this->expect_type === 1)
			print('<span class="charge">(咏唱)</span>'."\n");
		print("<div class=\"hpsp\">\n");
		$sub	= $this->STATE === 1 ? "dmg":"recover";
		print("<span class=\"{$sub}\">HP : {$this->HP}/{$this->MAXHP}</span><br />\n");
		$sub	= $this->STATE === 1 ? "dmg":"support";
		print("<span class=\"{$sub}\">SP : {$this->SP}/{$this->MAXSP}</span>\n");
		print("</div>\n");
	}

	function ShowValueChange($from,$to) {
		print("({$from} > {$to})");
	}

	function HpDamage($damage,$show=true) {
		$Before	= $this->HP;
		$this->HP	-= $damage;
		if($show)
			$this->ShowValueChange($Before,$this->HP);
	}

	function HpDamage2($damage) {
		$Before	= $this->HP;
		$this->HP	-= $damage;
		if($this->HP < 1)
			$this->HP	= 1;
		$this->ShowValueChange($Before,$this->HP);
	}

	function HpPercent() {
		if($this->MAXHP == 0)
			return 0;
		$p	= ($this->HP/$this->MAXHP)*100;
		return $p;
	}

	function SpPercent() {
		if($this->MAXSP == 0)
			return 0;
		$p	= ($this->SP/$this->MAXSP)*100;
		return $p;
	}

	function SpDamage($damage,$show=true) {
		$Before	= $this->SP;
		$this->SP	-= $damage;
		if($this->SP < 1)
			$this->SP	= 0;
		if($show)
		$this->ShowValueChange($Before,$this->SP);
	}

	function HpRecover($recover) {
		$Before	= $this->HP;
		$this->HP	+= $recover;
		if($this->MAXHP < $this->HP) {
			$this->HP	= $this->MAXHP;
		}
		$this->ShowValueChange($Before,$this->HP);
	}

	function SpRecover($recover) {
		$Before	= $this->SP;
		$this->SP	+= $recover;
		if($this->MAXSP < $this->SP) {
			$this->SP	= $this->MAXSP;
		}
		$this->ShowValueChange($Before,$this->SP);
	}

	function LoadPassiveSkills() {
		foreach($this->skill as $no) {
			if($no < 7000 || 8000 <= $no) continue;

			$skill	= LoadSkillData($no);
			if($skill["P_MAXHP"])
				$this->P_MAXHP	+= $skill["P_MAXHP"];
			if($skill["P_MAXSP"])
				$this->P_MAXSP	+= $skill["P_MAXSP"];
			if($skill["P_STR"])
				$this->P_STR	+= $skill["P_STR"];
			if($skill["P_INT"])
				$this->P_INT	+= $skill["P_INT"];
			if($skill["P_DEX"])
				$this->P_DEX	+= $skill["P_DEX"];
			if($skill["P_SPD"])
				$this->P_SPD	+= $skill["P_SPD"];
			if($skill["P_LUK"])
				$this->P_LUK	+= $skill["P_LUK"];

			if($skill["HealBonus"])
				$this->SPECIAL["HealBonus"]	+= $skill["HealBonus"];
		}
	}

	function SetBattleVariable($team=false) {
		if(isset($this->IMG))
			return false;

		$this->PatternExplode();
		$this->CutPatterns();

		$this->LoadPassiveSkills();
		$this->CalcEquips();

		$this->team		= $team;
		$this->IMG		= $this->img;
		$maxhp	+= $this->maxhp * (1 + ($this->M_MAXHP/100)) + $this->P_MAXHP;
		$this->MAXHP	= round($maxhp);
		$hp		+= $this->hp * (1 + ($this->M_MAXHP/100)) + $this->P_MAXHP;
		$this->HP		= round($hp);
		$maxsp	+= $this->maxsp * (1 + ($this->M_MAXSP/100)) + $this->P_MAXSP;
		$this->MAXSP	= round($maxsp);
		$sp		+= $this->sp * (1 + ($this->M_MAXSP/100)) + $this->P_MAXSP;
		$this->SP		= round($sp);
		$this->STR		= $this->str + $this->P_STR;
		$this->INT		= $this->int + $this->P_INT;
		$this->DEX		= $this->dex + $this->P_DEX;
		$this->SPD		= $this->spd + $this->P_SPD;
		$this->LUK		= $this->luk + $this->P_LUK;
		$this->POSITION	= $this->position;
		$this->STATE	= 0;

		$this->expect	= false;
		$this->ActCount	= 0;
		$this->JdgCount	= array();
	}

	function CalcEquips() {
		if($this->monster) return false;
		$equip	= array("weapon","shield","armor","item");
		$this->atk	= array(0,0);
		$this->def	= array(0,0,0,0);
		foreach($equip as $place) {
			if(!$this->{$place}) continue;

			$item	= LoadItemData($this->{$place});
			if($place == "weapon")
					$this->WEAPON	= $item["type"];
			$this->atk[0]	+= $item[atk][0];
			$this->atk[1]	+= $item[atk][1];
			$this->def[0]	+= $item[def][0];
			$this->def[1]	+= $item[def][1];
			$this->def[2]	+= $item[def][2];
			$this->def[3]	+= $item[def][3];

			$this->P_MAXHP	+= $item["P_MAXHP"];
			$this->M_MAXHP	+= $item["M_MAXHP"];
			$this->P_MAXSP	+= $item["P_MAXSP"];
			$this->M_MAXSP	+= $item["M_MAXSP"];

			$this->P_STR	+= $item["P_STR"];
			$this->P_INT	+= $item["P_INT"];
			$this->P_DEX	+= $item["P_DEX"];
			$this->P_SPD	+= $item["P_SPD"];
			$this->P_LUK	+= $item["P_LUK"];

			if($item["P_SUMMON"])
				$this->GetSpecial("Summon",$item["P_SUMMON"]);
			if($item["P_PIERCE"])
				$this->GetSpecial("Pierce",$item["P_PIERCE"]);
		}
	}

	function ShowCharWithLand($land) {
		$temp1 = IMG_OTHER;
		print <<<P3
		<div class="carpet_frame">
		<div class="land" style="background-image : url('{$temp1}land_{$land}.gif');">
		{$this->ShowImage()}
		</div>
		{$this->name}<br>Lv.{$this->level}
		</div>
		P3;
	}


	function SaveCharData($id=false) {

		if($id) {
			$dir	= USER.$id;
		} else {
			if(!$this->user) return false;
			$dir	= USER.$this->user;
		}
		if(!file_exists($dir))
			return false;

		if(isset($this->file))
			$file	= $this->file;
		else
			$file	= $dir."/".$this->birth.".dat";

		if(file_exists($file) && $this->fp) {
			WriteFileFP($this->fp,$this->DataSavingFormat());
			$this->fpclose();
		} else {
			WriteFile($file,$this->DataSavingFormat());
		}

	}


	function DataSavingFormat() {
		$Save	= array("name","gender","job","birth","level","exp",
		"statuspoint","skillpoint",
		"str","int","dex","spd","luk",
		"weapon","shield","armor","item",
		"position","guard",
		"skill",
		"Pattern",
		"PatternMemo",
		);
		foreach($Save as $val) {
			if (!isset($this->{$val})) continue;
			$text	.= "$val=".(is_array($this->{$val}) ? implode("<>",$this->{$val}) : $this->{$val})."\n";
		}
		return $text;
	}


	function ShowChar() {
		static $flag = 0;

		$flag++;
		if( CHAR_ROW%2==0 && $flag%(CHAR_ROW+1)==0 )
			$flag++;
		$temp1 = $flag%2;
print <<<P4
<div class="carpet_frame">
<div class="carpet{$temp1}">{$this->ShowImage()}</div>
{$this->name}<br>Lv.{$this->level} {$this->job_name}
</div>
P4;
	}


	function ShowCharLink() {
		static $flag = 0;

		$flag++;
		if( CHAR_ROW%2==0 && $flag%(CHAR_ROW+1)==0 )
			$flag++;
		
		$temp1 = (($this->statuspoint) ? "<span class=\"bold charge\">*</span>" : "");
		$temp2 = $flag%2;
print <<<P5
<div class="carpet_frame">
<div class="carpet{$temp9}">
<a href="?char={$this->Number}">{$this->ShowImage()}</a></div>
{$this->name}{$temp1}<br>Lv.{$this->level} {$this->job_name}
</div>
P5;
	}

	function ShowCharRadio($birth,$checked=null) {
		static $flag = 0;

		$flag++;
		if( CHAR_ROW%2==0 && $flag%(CHAR_ROW+1)==0 )
			$flag++;
		
		$temp1 = (($checked) ? null : ' class="unselect"');
		$temp2 = (($this->statuspoint) ? '<span class="bold charge">*</span>' : '');
		$temp3 = $flag%2;
print <<<P6
<div class="carpet_frame">
<div class="carpet{$temp3}">
<a href="?char={$this->birth}">{$this->ShowImage()}</a>
</div>
<div onClick="toggleCheckBox('{$flag}')" id="text{$flag}" {$temp1}>
{$this->name}
{$temp2}<br />
Lv.{$this->level} {$this->job_name}
</div>
<input type="checkbox" onclick="Element.toggleClassName('text{$flag}','unselect')" id="box{$flag}" name="char_{$birth}" value="1" {$checked}>
</div>
P6;
	}

	function SetTeam($no) {
		$this->team	= $no;
	}

	function GetImageURL($dir) {
		if(file_exists(IMG_CHAR.$this->img)) {
			if($this->STATE === DEAD) {
				$img = $dir.$this->img;
				if(!file_exists($img)) {
					return $dir.CHAR_NO_IMAGE;
				}
			}
			return $dir.$this->img;
		} else {
			return $dir.CHAR_NO_IMAGE;
		}
	}

	function ShowImage($class=false) {
		$url = $this->GetImageURL(IMG_CHAR);
		if($class)
			print('<img src="'.$url.'" class="'.$class.'">');
		else
			print('<img src="'.$url.'">');
	}

	function SetHpSp()
	{
		$MaxStatus	= MAX_STATUS;

		$jobdata		= LoadJobData($this->job);
		$coe	= $jobdata["coe"];

		$div		= $MaxStatus * $MaxStatus;
		$RevStr		= $MaxStatus - $this->str;
		$RevInt		= $MaxStatus - $this->int;

		$this->maxhp	= 100 * $coe[0] * (1 + ($this->level - 1)/49) * (1 + ($div - $RevStr*$RevStr)/$div);
		$this->maxsp	= 100 * $coe[1] * (1 + ($this->level - 1)/49) * (1 + ($div - $RevInt*$RevInt)/$div);

		$this->maxhp	= round($this->maxhp);
		$this->maxsp	= round($this->maxsp);
	}

	function GetHandle() {
		$handle	= 5 + floor($this->level / 10) + floor($this->dex / 5);
		return $handle;
	}

	function LearnNewSkill($no) {
		include_once(DATA_SKILL_TREE);
		$tree	= LoadSkillTree($this);

		if(!in_array(__POST("newskill"),$tree))
			return array(false,"没有技能树");
		$skill	= LoadSKillData($no);
		if(in_array($no,$this->skill))
			return array(false,"{$skill[name]} 已经习得.");
		if($this->UseSkillPoint($skill["learn"])) {
			$this->GetNewSkill($skill["no"]);
			return array(true,$this->Name()."  {$skill[name]} 已经习得。");
		} else
			return array(false,"技能点数不足");
	}

	function GetNewSkill($no) {
		$this->skill[]	= $no;
		asort($this->skill);
	}

	function UseSKillPoint($no) {
		if($no <= $this->skillpoint) {
			$this->skillpoint	-= $no;
			return true;
		}
		return false;
	}

	function DropExp() {
		if(isset($this->exphold)) {
			$exp	= $this->exphold;
			$this->exphold	= round($exp/2);
			return $exp;
		} else {
			return false;
		}
	}

	function DropMoney() {
		if(isset($this->moneyhold)) {
			$money	= $this->moneyhold;
			$this->moneyhold	= 0;
			return $money;
		} else {
			return false;
		}
	}

	function DropItem() {
		if($this->itemdrop) {
			$item	= $this->itemdrop;
			$this->itemdrop	= false;
			return $item;
		} else {
			return false;
		}
	}

	function SetJobData() {
		if($this->job) {
			$jobdata		= LoadJobData($this->job);
			$this->job_name	= ($this->gender ? $jobdata["name_female"] : $jobdata["name_male"]);
			$this->img		= ($this->gender ? $jobdata["img_female"] : $jobdata["img_male"]);
		}
	}

	function PatternExplode() {
		if($this->judge)
			return false;
		$Pattern	= explode("|",$this->Pattern);
		$this->judge	= explode("<>",$Pattern["0"]);
		$this->quantity	= explode("<>",$Pattern["1"]);
		$this->action	= explode("<>",$Pattern["2"]);
	}

	function PatternSave($judge,$quantity,$action) {
		$this->Pattern	= implode("<>",$judge)."|".implode("<>",$quantity)."|".implode("<>",$action);
		return true;
	}

	function DeleteChar() {
		if(!file_exists($this->file))
			return false;
		if($this->fp) {
			fclose($this->fp);
			unset($this->fp);
		}
		unlink($this->file);
	}

	function SetCharData(&$data) {
		$this->name			= (isset($data["name"]) ? $data["name"] : "");
		$this->gender		= (isset($data["gender"]) ? $data["gender"] : "");
		$this->birth		= (isset($data["birth"]) ? $data["birth"] : "");
		$this->level		= (isset($data["level"]) ? $data["level"] : "");
		$this->exp			= (isset($data["exp"]) ? $data["exp"] : "");
		$this->statuspoint	= (isset($data["statuspoint"]) ? $data["statuspoint"] : "");
		$this->skillpoint	= (isset($data["skillpoint"]) ? $data["skillpoint"] : "");

		$this->job		= (isset($data["job"]) ? $data["job"] : "");
		$this->SetJobData();

		if(isset($data["img"]))
			$this->img		= $data["img"];

		$this->str		= (isset($data["str"]) ? $data["str"] : "");
		$this->int		= (isset($data["int"]) ? $data["int"] : "");
		$this->dex		= (isset($data["dex"]) ? $data["dex"] : "");
		$this->spd		= (isset($data["spd"]) ? $data["spd"] : "");
		$this->luk		= (isset($data["luk"]) ? $data["luk"] : "");

		if (isset($data["maxhp"]) &&
			isset($data["hp"]) &&
			isset($data["maxsp"]) &&
			isset($data["sp"]) ) {
			$this->maxhp	= $data["maxhp"];
			$this->hp		= $data["hp"];
			$this->maxsp	= $data["maxsp"];
			$this->sp		= $data["sp"];
		} else {
			$this->SetHpSp();
			$this->hp		= $this->maxhp;
			$this->sp		= $this->maxsp;
		}

		$this->weapon	= (isset($data["weapon"]) ? $data["weapon"] : "");
		$this->shield	= (isset($data["shield"]) ? $data["shield"] : "");
		$this->armor	= (isset($data["armor"]) ? $data["armor"] : "");
		$this->item		= (isset($data["item"]) ? $data["item"] : "");

		$this->position	= (isset($data["position"]) ? $data["position"] : "");
		$this->guard	= (isset($data["guard"]) ? $data["guard"] : "");

		$this->skill	= (is_array($data["skill"]) ? $data["skill"] : explode("<>",$data["skill"]) );

		$this->Pattern	= (isset($data["Pattern"]) ? $data["Pattern"] : "");

		if(isset($data["PatternMemo"]))
			$this->PatternMemo	= $data["PatternMemo"];

		if(isset($data["judge"]))
			if(is_array($data["judge"]))
				$this->judge	= $data["judge"];
		if(isset($data["quantity"]))
			if(is_array($data["quantity"]))
				$this->quantity	= $data["quantity"];
		if(isset($data["action"]))
			if(is_array($data["action"]))
				$this->action	= $data["action"];

		if(isset($data["monster"])){
			if($this->monster	= $data["monster"]) {
				$this->exphold		= $data["exphold"];
				$this->moneyhold	= $data["moneyhold"];
				$this->itemdrop		= $data["itemdrop"];
				$this->atk	= $data["atk"];
				$this->def	= $data["def"];
				$this->SPECIAL	= $data["SPECIAL"];
			}
		}
		if(isset($data["summon"]))
			$this->summon		= $data["summon"];
	}
}
?>
