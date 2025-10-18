<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

class Item {
	var $item;

	var $base,$refine;
	var $option0,$option1,$option2;

	var $type;

	function Item($no) {
		mt_srand();
		$this->SetItem($no);
	}

	function SetItem($no) {
		if(!$no) return false;
		$this->item	= $no;

		$this->base	= substr($no,0,4);//
		$this->refine	= (int)substr($no,4,2);
		if(!$this->refine)
			$this->refine	= 0;
		$this->option0	= substr($no,6,3);
		$this->option1	= substr($no,9,3);
		$this->option2	= substr($no,12,3);

		if($item = LoadItemData($this->base)) {
			$this->type	= $item["type"];
		}
	}

	function CreateItem() {
		$this->refine	= false;
		$this->option0	= false;
		$this->option1	= false;
		$this->option2	= false;
		list($low,$high)	= ItemAbilityPossibility($this->type);

		$prob	= mt_rand(1,9);
		switch($prob) {
			case 1:
			case 2:
			case 3:
				$AddLow	= true;
				break;
			case 4:
			case 5:
			case 6:
				$AddHigh	= true;
				break;
			case 7:
			case 8:
			case 9:
				$AddLow	= true;
				$AddHigh	= true;
				break;
		}

		if($AddHigh) {
			$prob	= mt_rand(0,__count($high)-1);
			$this->option1	= $high["$prob"];
		}
		if($AddLow) {
			$prob	= mt_rand(0,__count($low)-1);
			$this->option2	= $low["$prob"];
		}
	}

	function AddSpecial($opt) {
		$this->option0	= $opt;
	}

	function CanRefine() {
		$possible	= CanRefineType();
		if (REFINE_LIMIT <= $this->refine)
			return false;
		else if(in_array($this->type,$possible))
			return true;
		else
			return false;
	}

	function ItemRefine() {
		if($this->RefineProb($this->refine)) {
			print("+".$this->refine." -> ");
			$this->refine++;
			print("+".$this->refine." <span class=\"recover\">成功</span> !<br />\n");
			return true;
		} else {
			print("+".$this->refine." -> ");
			print("+".($this->refine + 1)." <span class=\"dmg\">失败</span>.<br />\n");
			return false;
		}
	}

	function RefineProb($now) {
		$prob	= mt_rand(0,99);
		switch($now) {
			case 0:
			case 1:
			case 2:
			case 3:
				return true;
			case 4:
				if($prob < 90)
				return true;
			case 5:
				if($prob < 75)
				return true;
			case 6:
				if($prob < 60)
				return true;
			case 7:
				if($prob < 45)
				return true;
			case 8:
				if($prob < 30)
				return true;
			case 9:
				if($prob < 15)
				return true;
		}
		return false;
	}

	function ReturnItem() {
		if(!$this->refine && !$this->option0 && !$this->option1 && !$this->option2 )
			return $this->base;
		
		$item	= $this->base.
				sprintf("%02d",$this->refine).
				$this->option0.
				$this->option1.
				$this->option2;
		return $item;
	}
}
?>
