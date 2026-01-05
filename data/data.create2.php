<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function CanCreate2($user) {
	$create1	= array(1030,1127,1231,1232,1233,1234,1235,1306,1405,1506,1605,1724,1725,1726,1759,1760,1819,2027,2054,2112,2113,2114,2218,3016,3111,3415,3416,3417,5020,5114,5214,);
	$create2	= array_merge($create1,
	array(9021,9022,9023,9024,)
	);
	
	return $create2;
	
	
}
function HaveNeeds($item,$UserItem) {
	if(!$UserItem) return false;
	if(!$item["need"]) return false;
	foreach($item["need"] as $NeedNo => $Amount) {
		if($UserItem[$NeedNo] < $Amount)
			return false;
	}
	return true;
}

function ItemAbilityPossibility($type) {
	switch($type) {
		case "Sword":
		case "Dual-wielding Sword":
		case "Katana":
		case "Dagger":
		case "Wand":
		case "Staff":
		case "Bow":
		case "Whip":
		case "Soul Banner":
		case "Pistol":
		case "Spear":
		case "Secondary Pistol":
		case "Scepter":
		case "Axe":
		case "Spear":
		case "Spear":
		case "Contract Stone":
		case "Evil Sword":
		case "Shuriken":
		case "Scythe":
		case "Battle Axe":
		case "Holy Cross":
		case "Dual Swords (Secondary)":
		case "Dual Swords (Main)":
		case "Claw":
		case "Magic Broom":
		case "Flying Sword":
		case "Dust whisk":
		case "Talisman":
		
			$low	= array(
			100,101,102,103,104,
			105,106,107,108,109,
			150,151,152,153,154,
			155,156,157,158,159,
			204,200,205,201,
			254,250,255,251,
			'H00','H01','H02',
			'HM0','HM1','HM2',
			'S00','S01',
			'SM0','SM1','SM2',
			'A00','A01','A02','A03','A04',
			);
			$high	= array(
			110,111,112,113,114,
			115,116,117,118,119,
			160,161,162,163,164,
			165,166,167,168,169,
			202,206,203,
			252,256,253,
			'H03','H04','H05',
			'HM3','HM4','HM5',
			'S02','S03',
			'SM3','SM4','SM5',
			'A05','A06','A07','A08','A09',
			);
			break;
		case "Shield":
 		case "Crystal Ball":
 		case "Book":
 		case "Armor":
 		case "Clothes":
 		case "Robe":
 		case "Back":
 		case "Headwear":
			$low	= array(
			300,301,
			350,351,
			'H00','H01','H02',
			'HM0','HM1','HM2',
			'S00','S01',
			'SM0','SM1','SM2',
			'A00','A01','A02','A03','A04',
			);
			$high	= array(
			302,303,304,
			352,353,354,
			'H03','H04','H05',
			'HM3','HM4','HM5',
			'S02','S03',
			'SM3','SM4','SM5',
			'A05','A06','A07','A08','A09',
			);
			break;
		
		case "Medal":
			$low	= array(
			202,206,203,
			252,256,253,
			);
			$high	= array(
			'HM5',
			'SM5',
			'A05','A09',
			304,354,
			);
			break;
	}
	return array($low,$high);
}
?>