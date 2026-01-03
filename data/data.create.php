<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function CanCreate($user) {
	$create1	= array(1000,1001,1002,1003,1004,1005,1006,1007,1008,1009,1010,1011,1012,1013,1020,1021,1022,1023,1024,1025);
	$create2	= array_merge($create1,
	array(1100,1101,1102,1103,1104,1105,1106,1107,1108,1109,1120,1121)
	);
	$create3	= array_merge($create2,
	array(1201,1202,1203,1204,1205,1206,1207,1208,1209,1220,1221)
	);
	$create4	= array_merge($create3,
	array(1700,1701,1702,1703,1704,1705,1706,1707,1708,1709,1710,)
	);
	$create5	= array_merge($create4,
	array(1800,1801,1802,1803,1804,1805,1806,1807,1808,1810,1811,1812,1813,1814,)
	);
	$create6	= array_merge($create5,
	array(2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2020,2021,)
	);
	$create7	= array_merge($create6,
	array(2200,2201,2202,2203,2204,2205,2206,2210,2211,2212,2213,)
	);
	$create8	= array_merge($create7,
	array(3000,3001,3002,3003,3004,3005,3006,3007,3008,3009,3010,3011,3012,)
	);
	$create9	= array_merge($create8,
	array(3101,3102,3103,3104,3105,3106,)
	);
	$create10	= array_merge($create9,
	array(5000,5001,5002,5003,5004,5005,5006,5007,5008,5009,5010,5011,5012,5013,5014,5015,5016,5017,5018,)
	);
	$create11	= array_merge($create10,
	array(5100,5101,5102,5103,5104,5105,5106,5107,5108,5109,)
	);
	$create12	= array_merge($create11,
	array(5200,5201,5202,5203,5204,5205,5206,5207,5208,)
	);
	return $create12;
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
	$low = array();
	$high = array();
	switch($type) {
		case "Sword":
		case "TwoHandSword":
		case "Dagger":
		case "Wand":
		case "Staff":
		case "Bow":
		case "Whip":
			$low	= array(
			100,101,102,103,104,
			105,106,107,108,109,
			150,151,152,153,154,
			155,156,157,158,159,
			200,201,
			250,251,
			'H00','H01','H02',
			'HM0','HM1','HM2',
			'S00','S01',
			'SM0','SM1','SM2',
			'P00','P01','P02','P03','P04',
			'I00','I01','I02','I03','I04',
			'D00','D01','D02','D03','D04',
			'A00','A01','A02','A03','A04',
			'L00','L01','L02','L03','L04',
			);
			$high	= array(
			110,111,112,113,114,
			115,116,117,118,119,
			160,161,162,163,164,
			165,166,167,168,169,
			202,203,
			252,253,
			'H03','H04','H05',
			'HM3','HM4','HM5',
			'S02','S03',
			'SM3','SM4','SM5',
			'P05','P06','P07','P08','P09',
			'I05','I06','I07','I08','I09',
			'D05','D06','D07','D08','D09',
			'A05','A06','A07','A08','A09',
			'L05','L06','L07','L08','L09',
			);
			break;
		case "Shield":
		case "Book":
		case "Armor":
		case "Cloth":
		case "Robe":
			$low	= array(
			300,301,
			350,351,
			'H00','H01','H02',
			'HM0','HM1','HM2',
			'S00','S01',
			'SM0','SM1','SM2',
			'P00','P01','P02','P03','P04',
			'I00','I01','I02','I03','I04',
			'D00','D01','D02','D03','D04',
			'A00','A01','A02','A03','A04',
			'L00','L01','L02','L03','L04',
			);
			$high	= array(
			302,303,304,
			352,353,354,
			'H03','H04','H05',
			'HM3','HM4','HM5',
			'S02','S03',
			'SM3','SM4','SM5',
			'P05','P06','P07','P08','P09',
			'I05','I06','I07','I08','I09',
			'D05','D06','D07','D08','D09',
			'A05','A06','A07','A08','A09',
			'L05','L06','L07','L08','L09',
			);
			break;
	}
	return array($low,$high);
}
?>