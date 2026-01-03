<?php 
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include_once("class.char.php");
class monster extends char{
	var $monster = true;
	var $exphold;
	var $moneyhold;
	var $itemdrop;
	var $summon;

	function __construct($data) {
		$this->SetCharData($data);

	}

	function SaveCharData($id = false) {
		return false;
	}


	function GetNormal($mes=false) {
		if($this->STATE === ALIVE)
			return true;
		if($this->STATE === DEAD) {
			if($this->summon) return true;
			if($mes)
				print($this->Name(bold).' <span class="recover">revived</span>!<br />'."\n");
			$this->STATE = 0;
			return true;
		}
		if($this->STATE === POISON) {
			if($mes)
				print($this->Name(bold)."'s <span class=\"spdmg\">poison</span> has cured.<br />\n");
			$this->STATE = 0;
			return true;
		}
	}

	function CharJudgeDead() {
		if($this->HP < 1 && $this->STATE !== DEAD) {
			$this->STATE	= DEAD;
			$this->HP	= 0;
			$this->ResetExpect();
			return true;
		}
	}

	function SetCharData(&$monster) {

		if(isset($monster["name"])) $this->name		= $monster["name"];
		if(isset($monster["level"])) $this->level	= $monster["level"];

		if (isset($monster["img"]))
			$this->img		= $monster["img"];

		if(isset($monster["str"])) $this->str		= $monster["str"];
		if(isset($monster["int"])) $this->int		= $monster["int"];
		if(isset($monster["dex"])) $this->dex		= $monster["dex"];
		if(isset($monster["spd"])) $this->spd		= $monster["spd"];
		if(isset($monster["luk"])) $this->luk		= $monster["luk"];

		if(isset($monster["maxhp"])) $this->maxhp	= $monster["maxhp"];
		if(isset($monster["hp"])) $this->hp		= $monster["hp"];
		if(isset($monster["maxsp"])) $this->maxsp	= $monster["maxsp"];
		if(isset($monster["sp"])) $this->sp		= $monster["sp"];

		if(isset($monster["position"])) $this->position	= $monster["position"];
		if(isset($monster["guard"])) $this->guard	= $monster["guard"];

		if(is_array($monster["judge"]))
			$this->judge	= $monster["judge"];
		if(is_array($monster["quantity"]))
			$this->quantity	= $monster["quantity"];
		if(is_array($monster["action"]))
			$this->action	= $monster["action"];

		$this->monster		= true;
		if(isset($monster["summon"])) $this->summon		= $monster["summon"];
		if(isset($monster["exphold"])) $this->exphold		= $monster["exphold"];
		if(isset($monster["moneyhold"])) $this->moneyhold	= $monster["moneyhold"];
		if(isset($monster["itemdrop"])) $this->itemdrop		= $monster["itemdrop"];
		if(isset($monster["atk"])) $this->atk	= $monster["atk"];
		if(isset($monster["def"])) $this->def	= $monster["def"];
		if(isset($monster["SPECIAL"])) $this->SPECIAL	= $monster["SPECIAL"];
	}

	function SetBattleVariable($team=false) {
		if(isset($this->IMG))
			return false;

		$this->team		= $team;
		$this->IMG		= $this->img;
		$this->MAXHP	= $this->maxhp;
		$this->HP		= $this->hp;
		$this->MAXSP	= $this->maxsp;
		$this->SP		= $this->sp;
		$this->STR		= $this->str + $this->P_STR;
		$this->INT		= $this->int + $this->P_INT;
		$this->DEX		= $this->dex + $this->P_DEX;
		$this->SPD		= $this->spd + $this->P_SPD;
		$this->LUK		= $this->luk + $this->P_LUK;
		$this->POSITION	= $this->position;
		$this->STATE	= ALIVE;

		$this->expect	= false;
		$this->ActCount	= 0;
		$this->JdgCount	= array();
	}
}
?>
