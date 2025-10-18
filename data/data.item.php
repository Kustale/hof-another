<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

if(file_exists(DATA_ENCHANT))
	include(DATA_ENCHANT);

function LoadItemData($no) {
	$base	= substr($no,0,4);
	$refine	= (int)substr($no,4,2);
	$option0	= substr($no,6,3);
	$option1	= substr($no,9,3);
	$option2	= substr($no,12,3);


	switch($base) {
		case "1000":
$item	= array(
"name"	=> "短剑",
"type"	=> "剑",
"buy"	=> "500",
"img"	=> "we_sword026.png",
"atk"	=> array(10,0),
"handle"=> "1",
"need"	=> array("6001"=>"4",),
); break;
		case "1001":
$item	= array(
"name"	=> "长刀",
"type"	=> "剑",
"buy"	=> "1000",
"img"	=> "we_sword026.png",
"atk"	=> array(15,0),
"handle"=> "2",
"need"	=> array("6001"=>"6","6002"=>"2",),
); break;
		case "1002":
$item	= array(
"name"	=> "重剑",
"type"	=> "剑",
"buy"	=> "3000",
"img"	=> "we_sword026.png",
"atk"	=> array(20,0),
"handle"=> "2",
"need"	=> array("6001"=>"4","6002"=>"4",),
); break;
		case "1003":
$item	= array(
"name"	=> "刺剑",
"type"	=> "剑",
"buy"	=> "5000",
"img"	=> "we_sword026.png",
"atk"	=> array(25,0),
"handle"=> "3",
"need"	=> array("6001"=>"2","6002"=>"8",),
); break;
		case "1004":
$item	= array(
"name"	=> "砍刀",
"type"	=> "剑",
"buy"	=> "8000",
"img"	=> "we_sword026.png",
"atk"	=> array(30,0),
"handle"=> "4",
"need"	=> array("6002"=>"8","6003"=>"2",),
); break;
		case "1005":
$item	= array(
"name"	=> "长剑",
"type"	=> "剑",
"buy"	=> "14000",
"img"	=> "we_sword026.png",
"atk"	=> array(40,0),
"handle"=> "5",
"need"	=> array("6003"=>"12",),
); break;
		case "1006":
$item	= array(
"name"	=> "宽剑",
"type"	=> "剑",
"buy"	=> "20000",
"img"	=> "we_sword026.png",
"atk"	=> array(50,0),
"handle"=> "6",
"need"	=> array("6002"=>"4","6003"=>"16",),
); break;
		case "1007":
$item	= array(
"name"	=> "弯刀",
"type"	=> "剑",
"buy"	=> "35000",
"img"	=> "we_sword026.png",
"atk"	=> array(60,0),
"handle"=> "7",
"need"	=> array("6003"=>"24",),
); break;
		case "1008":
$item	= array(
"name"	=> "波形刀",
"type"	=> "剑",
"buy"	=> "40000",
"img"	=> "we_sword026.png",
"atk"	=> array(80,0),
"handle"=> "8",
"need"	=> array("6003"=>"32",),
); break;
		case "1009":
$item	= array(
"name"	=> "四震之剑",
"type"	=> "剑",
"buy"	=> "50000",
"img"	=> "we_sword026.png",
"atk"	=> array(80,80),
"handle"=> "9",
"need"	=> array("6003"=>"40","6004"=>"10",),
); break;
		case "1010":
$item	= array(
"name"	=> "复仇之剑",
"type"	=> "剑",
"buy"	=> "60000",
"img"	=> "we_sword026.png",
"atk"	=> array(90,90),
"handle"=> "10",
"need"	=> array("6003"=>"60","6004"=>"20","6005"=>"4",),
); break;
		case "1011":
$item	= array(
"name"	=> "基佐的快刀",
"type"	=> "剑",
"buy"	=> "70000",
"img"	=> "we_sword026.png",
"atk"	=> array(100,100),
"handle"=> "11",
"need"	=> array("6004"=>"40","6005"=>"20",),
); break;
		case "1012":
$item	= array(
"name"	=> "屠戮之刃",
"type"	=> "剑",
"buy"	=> "80000",
"img"	=> "we_sword026.png",
"atk"	=> array(110,110),
"handle"=> "12",
"need"	=> array("6004"=>"60","6005"=>"40",),
); break;
		case "1013":
$item	= array(
"name"	=> "子午七星剑",
"type"	=> "剑",
"buy"	=> "100000",
"img"	=> "we_sword026.png",
"atk"	=> array(120,120),
"handle"=> "13",
"need"	=> array("6005"=>"100",),
); break;
		case "1020":
$item	= array(
"name"	=> "戮龙剑",
"type"	=> "剑",
"buy"	=> "90000",
"img"	=> "we_sword026.png",
"atk"	=> array(20,0),
"handle"=> "8",
"P_PIERCE"=> array(30,0),
"need"	=> array("6002"=>"15","6800"=>"1",),
"option"	=> "无视物理防御+30 ,",
); break;
		case "1021":
$item	= array(
"name"	=> "权天使",
"type"	=> "剑",
"buy"	=> "140000",
"img"	=> "we_sword026.png",
"atk"	=> array(30,0),
"P_SPD"	=> 10,
"handle"=> "1",
"option"	=> "SPD+10 ,",
"need"	=> array(),
); break;
		case "1022":
$item	= array(
"name"	=> "光天使",
"type"	=> "剑",
"buy"	=> "160000",
"img"	=> "we_sword026.png",
"atk"	=> array(80,0),
"def"	=> array(5,0,5,0),
"P_SPD"	=> 5,
"handle"=> "9",
"option"	=> "Def/Mdef+5 ,SPD+5 ,",
"need"	=> array("6002"=>"30","6003"=>"10","6802"=>"1",),
); break;
		case "1023":
$item	= array(
"name"	=> "香蕉剑",
"type"	=> "剑",
"buy"	=> "1000",
"img"	=> "banana.png",
"atk"	=> array(3,0),
"P_SPD"	=> 1,
"handle"=> "0",
"option"	=> "SPD+1 ,",
"need"	=> array("6600"=>"3","6602"=>"1",),
); break;
		case "1024":
$item	= array(
"name"	=> "血光摄魂刃",
"type"	=> "剑",
"buy"	=> "180000",
"img"	=> "we_sword026.png",
"atk"	=> array(50,0),
"handle"=> "15",
"P_PIERCE"=> array(50,0),
"need"	=> array("6005"=>"50","6802"=>"10","6803"=>"1",),
"option"	=> "无视物理防御+50 ,",
); break;
		case "1025":
$item	= array(
"name"	=> "千年之光",
"type"	=> "剑",
"buy"	=> "200000",
"img"	=> "we_sword026.png",
"atk"	=> array(100,0),
"def"	=> array(10,0,10,0),
"P_SPD"	=> 10,
"handle"=> "12",
"option"	=> "Def/Mdef+10 ,SPD+10 ,",
"need"	=> array("6120"=>"10","6121"=>"5","6122"=>"1",),
); break;

		case "1100":
$item	= array(
"name"	=> "杀手剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "1000",
"img"	=> "we_sword006.png",
"atk"	=> array(30,0),
"handle"=> "2",
"need"	=> array("6001"=>"8",),
); break;
		case "1101":
$item	= array(
"name"	=> "大剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "5000",
"img"	=> "we_sword006.png",
"atk"	=> array(45,0),
"handle"=> "3",
"need"	=> array("6001"=>"6","6002"=>"4",),
); break;
		case "1102":
$item	= array(
"name"	=> "小型大剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "10000",
"img"	=> "we_sword006.png",
"atk"	=> array(65,0),
"handle"=> "5",
"need"	=> array("6001"=>"6","6002"=>"8",),
); break;
		case "1103":
$item	= array(
"name"	=> "巨剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "20000",
"img"	=> "we_sword006.png",
"atk"	=> array(80,0),
"handle"=> "6",
"need"	=> array("6001"=>"2","6002"=>"6","6003"=>"8",),
); break;
		case "1104":
$item	= array(
"name"	=> "斩首剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "30000",
"img"	=> "we_sword006.png",
"atk"	=> array(100,0),
"handle"=> "8",
"need"	=> array("6002"=>"10","6003"=>"20",),
); break;
		case "1105":
$item	= array(
"name"	=> "雕纹巨剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "40000",
"img"	=> "we_sword006.png",
"atk"	=> array(120,0),
"handle"=> "10",
"need"	=> array("6003"=>"30","6004"=>"10",),
); break;
		case "1106":
$item	= array(
"name"	=> "毁伤巨剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "50000",
"img"	=> "we_sword006.png",
"atk"	=> array(140,0),
"handle"=> "12",
"need"	=> array("6003"=>"50","6004"=>"20",),
); break;
		case "1107":
$item	= array(
"name"	=> "战刃巨剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "60000",
"img"	=> "we_sword006.png",
"atk"	=> array(160,0),
"handle"=> "14",
"need"	=> array("6004"=>"30","6005"=>"10",),
); break;
		case "1108":
$item	= array(
"name"	=> "天选之剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "70000",
"img"	=> "we_sword006.png",
"atk"	=> array(180,0),
"handle"=> "16",
"need"	=> array("6004"=>"50","6005"=>"30",),
); break;
		case "1109":
$item	= array(
"name"	=> "凝血巨剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "80000",
"img"	=> "we_sword006.png",
"atk"	=> array(200,0),
"handle"=> "18",
"need"	=> array("6005"=>"100",),
); break;
		case "1120":
$item	= array(
"name"	=> "斩龙剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "90000",
"img"	=> "we_sword006.png",
"atk"	=> array(10,0),
"handle"=> "10",
"need"	=> array(),
"P_PIERCE"=> array(50,0),
"need"	=> array("6002"=>"5","6003"=>"10","6800"=>"1",),
"option"	=> "无视物理防御+50 ,",
); break;
		case "1121":
$item	= array(
"name"	=> "邪龙魔剑",
"type"	=> "双手剑",
"dh"	=> true,
"buy"	=> "100000",
"img"	=> "we_sword006.png",
"atk"	=> array(40,0),
"handle"=> "20",
"need"	=> array(),
"P_PIERCE"=> array(70,0),
"need"	=> array("6005"=>"20","6120"=>"10","6121"=>"2","6803"=>"2",),
"option"	=> "无视物理防御+70 ,",
); break;
		case "1200":
$item	= array(
"name"	=> "短剑",
"type"	=> "匕首",
"buy"	=> "1000",
"img"	=> "we_sword010.png",
"atk"	=> array(7,0),
"handle"=> "1",
); break;
		case "1201":
$item	= array(
"name"	=> "Kukuri",
"type"	=> "匕首",
"buy"	=> "10000",
"img"	=> "we_sword010.png",
"atk"	=> array(21,0),
"handle"=> "3",
"need"	=> array("6001"=>12,"6020"=>4),
); break;
		case "1202":
$item	= array(
"name"	=> "斯巴达短剑",
"type"	=> "匕首",
"buy"	=> "20000",
"img"	=> "we_sword010.png",
"atk"	=> array(28,0),
"handle"=> "4",
"need"	=> array("6001"=>16,"6020"=>4),
); break;
		case "1203":
$item	= array(
"name"	=> "古罗马短剑",
"type"	=> "匕首",
"buy"	=> "40000",
"img"	=> "we_sword010.png",
"atk"	=> array(34,0),
"handle"=> "5",
"need"	=> array("6002"=>12,"6020"=>4),
); break;
		case "1204":
$item	= array(
"name"	=> "暗杀匕首",
"type"	=> "匕首",
"buy"	=> "50000",
"img"	=> "we_sword010.png",
"atk"	=> array(40,0),
"handle"=> "6",
"need"	=> array("6003"=>10,"6020"=>4),
); break;
		case "1205":
$item	= array(
"name"	=> "破甲剑",
"type"	=> "匕首",
"buy"	=> "60000",
"img"	=> "we_sword010.png",
"atk"	=> array(20,0),
"handle"=> "6",
"P_PIERCE"	=>array(20,0),
"option"	=> "无视物理防御+20 ,",
"need"	=> array("6003"=>20,"6022"=>4),
); break;
		case "1206":
$item	= array(
"name"	=> "破甲剑",
"type"	=> "匕首",
"buy"	=> "100000",
"img"	=> "we_sword010.png",
"atk"	=> array(40,0),
"handle"=> "10",
"P_PIERCE"	=>array(40,0),
"option"	=> "无视物理防御+40 ,",
"need"	=> array("6005"=>20,"6803"=>5),
); break;
		case "1207":
$item	= array(
"name"	=> "精灵匕首",
"type"	=> "匕首",
"buy"	=> "70000",
"img"	=> "we_sword010.png",
"atk"	=> array(50,0),
"handle"=> "7",
"need"	=> array("6003"=>40,"6023"=>1),
); break;
		case "1208":
$item	= array(
"name"	=> "血祭匕首",
"type"	=> "匕首",
"buy"	=> "80000",
"img"	=> "we_sword010.png",
"atk"	=> array(60,0),
"handle"=> "8",
"need"	=> array("6004"=>30,"6023"=>5),
); break;
		case "1209":
$item	= array(
"name"	=> "精魄匕首",
"type"	=> "匕首",
"buy"	=> "90000",
"img"	=> "we_sword010.png",
"atk"	=> array(80,0),
"handle"=> "9",
"need"	=> array("6005"=>20,"6023"=>10),
); break;
		case "1220":
$item	= array(
"name"	=> "香蕉匕首",
"type"	=> "匕首",
"buy"	=> "1000",
"img"	=> "banana.png",
"atk"	=> array(1,0),
"P_SPD"	=> 1,
"handle"=> "0",
"option"	=> "SPD+1 ,",
"need"	=> array("6600"=>"3","6602"=>"1",),
); break;
		case "1221":
$item	= array(
"name"	=> "幸运匕首",
"type"	=> "匕首",
"buy"	=> "1000",
"img"	=> "banana.png",
"atk"	=> array(10,0),
"P_SPD"	=> 5,
"handle"=> "0",
"option"	=> "SPD+5 ,",
"need"	=> array("6120"=>"5","6804"=>"1",),
); break;
		case "1300":
$item	= array(
"name"	=> "战戟",
"type"	=> "枪",
"dh"	=> true,
"buy"	=> "1000",
"img"	=> "we_spear016.png",
"atk"	=> array(28,0),
"handle"=> "2",
); break;
		case "1400":
$item	= array(
"name"	=> "投枪",
"type"	=> "矛",
"buy"	=> "1000",
"img"	=> "we_spear012.png",
"atk"	=> array(14,0),
"handle"=> "2",
); break;
		case "1500":
$item	= array(
"name"	=> "大型斧",
"type"	=> "斧",
"dh"	=> true,
"buy"	=> "1000",
"img"	=> "we_axe013b.png",
"atk"	=> array(35,0),
"handle"=> "2",
); break;
		case "1600":
$item	= array(
"name"	=> "战斧",
"type"	=> "短柄斧",
"buy"	=> "1000",
"img"	=> "we_axe003.png",
"atk"	=> array(17,0),
"handle"=> "2",
); break;
		case "1700":
$item	= array(
"name"	=> "棒",
"type"	=> "魔杖",
"buy"	=> "1000",
"img"	=> "we_staff002.png",
"atk"	=> array(1,5),
"handle"=> "1",
"need"	=> array("6020"=>"2","6001"=>"1",),
); break;
		case "1701":
$item	= array(
"name"	=> "短棒",
"type"	=> "魔杖",
"buy"	=> "2000",
"img"	=> "we_staff002.png",
"atk"	=> array(5,10),
"handle"=> "2",
"need"	=> array("6020"=>"4","6001"=>"1",),
); break;
		case "1702":
$item	= array(
"name"	=> "木棍",
"type"	=> "魔杖",
"buy"	=> "4000",
"img"	=> "we_staff002.png",
"atk"	=> array(8,15),
"handle"=> "3",
"need"	=> array("6020"=>"8","6002"=>"1",),
); break;
		case "1703":
$item	= array(
"name"	=> "银棍",
"type"	=> "魔杖",
"buy"	=> "6000",
"img"	=> "we_staff002.png",
"atk"	=> array(6,20),
"handle"=> "4",
"need"	=> array("6002"=>"8","6020"=>"2"),
); break;
		case "1704":
$item	= array(
"name"	=> "战斗棍",
"type"	=> "魔杖",
"buy"	=> "10000",
"img"	=> "we_staff002.png",
"atk"	=> array(10,26),
"handle"=> "5",
"need"	=> array("6020"=>"10","6002"=>"4",),
); break;
		case "1705":
$item	= array(
"name"	=> "漂亮的棍",
"type"	=> "魔杖",
"buy"	=> "18000",
"img"	=> "we_staff002.png",
"atk"	=> array(5,32),
"handle"=> "6",
"need"	=> array("6021"=>"6","6002"=>"4",),
); break;
		case "1706":
$item	= array(
"name"	=> "巫师棍",
"type"	=> "魔杖",
"buy"	=> "25000",
"img"	=> "we_staff002.png",
"atk"	=> array(2,40),
"handle"=> "7",
"need"	=> array("6021"=>"10","6002"=>"4",),
); break;
		case "1707":
$item	= array(
"name"	=> "幽灵魔杖",
"type"	=> "魔杖",
"buy"	=> "30000",
"img"	=> "we_staff002.png",
"atk"	=> array(8,50),
"handle"=> "8",
"need"	=> array("6022"=>"20","6004"=>"5",),
); break;
		case "1708":
$item	= array(
"name"	=> "紫心魔杖",
"type"	=> "魔杖",
"buy"	=> "35000",
"img"	=> "we_staff002.png",
"atk"	=> array(10,60),
"handle"=> "9",
"need"	=> array("6023"=>"15","6004"=>"10",),
); break;
		case "1709":
$item	= array(
"name"	=> "精魂之杖",
"type"	=> "魔杖",
"buy"	=> "40000",
"img"	=> "we_staff002.png",
"atk"	=> array(10,70),
"handle"=> "10",
"need"	=> array("6024"=>"10","6005"=>"10",),
); break;
		case "1710":
$item	= array(
"name"	=> "黑龙杖",
"type"	=> "魔杖",
"buy"	=> "50000",
"img"	=> "we_staff002.png",
"atk"	=> array(10,80),
"handle"=> "12",
"need"	=> array("6024"=>"30","6005"=>"20",),
); break;
		case "1800":
$item	= array(
"name"	=> "杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "2000",
"img"	=> "we_staff008b.png",
"atk"	=> array(8,25),
"handle"=> "2",
"need"	=> array("6002"=>"2","6020"=>"4"),
); break;
		case "1801":
$item	= array(
"name"	=> "长杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "5000",
"img"	=> "we_staff008b.png",
"atk"	=> array(4,37),
"handle"=> "3",
"need"	=> array("6021"=>"8"),
); break;
		case "1802":
$item	= array(
"name"	=> "魔术杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "14000",
"img"	=> "we_staff008b.png",
"atk"	=> array(15,49),
"handle"=> "5",
"need"	=> array("6002"=>"2","6021"=>"8",),
); break;
		case "1803":
$item	= array(
"name"	=> "银杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "20000",
"img"	=> "we_staff008b.png",
"atk"	=> array(10,60),
"handle"=> "6",
"need"	=> array("6002"=>"12","6022"=>"1",),
); break;
		case "1804":
$item	= array(
"name"	=> "金杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "30000",
"img"	=> "we_staff008b.png",
"atk"	=> array(10,72),
"handle"=> "7",
"need"	=> array("6002"=>"16","6160"=>"4",),
); break;
		case "1805":
$item	= array(
"name"	=> "水晶杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "35000",
"img"	=> "we_staff008b.png",
"atk"	=> array(12,84),
"need"	=> array("6002"=>"20","6120"=>"1",),
"handle"=> "8",
); break;
		case "1806":
$item	= array(
"name"	=> "混沌法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "40000",
"img"	=> "we_staff008b.png",
"atk"	=> array(14,96),
"need"	=> array("6023"=>"30","6120"=>"10","6121"=>"1",),
"handle"=> "9",
); break;
		case "1807":
$item	= array(
"name"	=> "邪念法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "45000",
"img"	=> "we_staff008b.png",
"atk"	=> array(16,108),
"need"	=> array("6024"=>"10","6122"=>"2",),
"handle"=> "10",
); break;
		case "1808":
$item	= array(
"name"	=> "禁锢法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "50000",
"img"	=> "we_staff008b.png",
"atk"	=> array(20,120),
"need"	=> array("6024"=>"30","6803"=>"1",),
"handle"=> "12",
); break;

		case "1810":
$item	= array(
"name"	=> "魔法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "20000",
"img"	=> "we_staff008b.png",
"atk"	=> array(3,24),
"handle"=> "4",
"P_MAXSP"	=> "60",
"option"	=> "SP+60 ,",
"need"	=> array("6020"=> 8,"6021"=> 8,),
); break;
		case "1811":
$item	= array(
"name"	=> "天堂杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "35000",
"img"	=> "we_staff008b.png",
"atk"	=> array(12,32),
"handle"=> "6",
"P_MAXSP"	=> "90",
"option"	=> "SP+90 ,",
"need"	=> array("6020"=> 12,"6021"=> 12,),
); break;
		case "1812":
$item	= array(
"name"	=> "四季",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "60000",
"img"	=> "we_staff008b.png",
"atk"	=> array(12,40),
"handle"=> "8",
"P_MAXSP"	=> "130",
"option"	=> "SP+130 ,",
"need"	=> array("6020"=> 16,"6021"=> 16,),
); break;
		case "1813":
$item	= array(
"name"	=> "驱魔法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "80000",
"img"	=> "we_staff008b.png",
"atk"	=> array(12,50),
"handle"=> "10",
"P_MAXSP"	=> "180",
"option"	=> "SP+180 ,",
"need"	=> array("6024"=> 30,"6005"=> 20,"6803"=> 1,),
); break;
		case "1814":
$item	= array(
"name"	=> "圣魂法杖",
"type"	=> "杖",
"dh"	=> true,
"buy"	=> "100000",
"img"	=> "we_staff008b.png",
"atk"	=> array(12,60),
"handle"=> "12",
"P_MAXSP"	=> "250",
"option"	=> "SP+250 ,",
"need"	=> array("6024"=> 50,"6005"=> 30,"6804"=> 1,),
); break;
		case "1900":	
$item	= array(
"name"	=> "青铜锤",
"type"	=> "锤",
"buy"	=> "1000",
"img"	=> "we_axe015b.png",
"atk"	=> array(5,5),
"handle"=> "2",
); break;
		case "2000":	
$item	= array(
"name"	=> "短弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "1000",
"img"	=> "we_bow001.png",
"atk"	=> array(20,0),
"handle"=> "2",
"need"	=> array("6020"=>"6","6181"=>"1",),
); break;
		case "2001":
$item	= array(
"name"	=> "复合弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "4000",
"img"	=> "we_bow001.png",
"atk"	=> array(30,0),
"handle"=> "6",
"need"	=> array("6020"=>"9","6181"=>"2",),
); break;
		case "2002":
$item	= array(
"name"	=> "大型弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "8000",
"img"	=> "we_bow001.png",
"atk"	=> array(40,0),
"handle"=> "12",
"need"	=> array("6021"=>"6","6181"=>"2",),
); break;
		case "2003":
$item	= array(
"name"	=> "猎手弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "14000",
"img"	=> "we_bow001.png",
"atk"	=> array(50,0),
"handle"=> "16",
"need"	=> array("6020"=>"4","6021"=>"4","6181"=>"4",),
); break;
		case "2004":
$item	= array(
"name"	=> "银弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "20000",
"img"	=> "we_bow001.png",
"atk"	=> array(60,0),
"handle"=> "20",
"need"	=> array("6002"=>"4","6021"=>"6","6182"=>"2",),
); break;
		case "2005":
$item	= array(
"name"	=> "锋利射手",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "30000",
"img"	=> "we_bow001.png",
"atk"	=> array(70,0),
"handle"=> "24",
"need"	=> array("6021"=>"12","6182"=>"4",),
); break;
		case "2006":
$item	= array(
"name"	=> "罗宾汉弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "45000",
"img"	=> "we_bow001.png",
"atk"	=> array(80,0),
"handle"=> "28",
"need"	=> array("6021"=>"4","6022"=>"14","6182"=>"6",),
); break;
		case "2007":
$item	= array(
"name"	=> "变阻弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "60000",
"img"	=> "we_bow001.png",
"atk"	=> array(90,0),
"handle"=> "30",
"need"	=> array("6021"=>"8","6022"=>"20","6182"=>"10",),
); break;
		case "2008":
$item	= array(
"name"	=> "亚特米斯弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "75000",
"img"	=> "we_bow001.png",
"atk"	=> array(140,0),
"handle"=> "35",
"need"	=> array("6021"=>"12","6022"=>"28","6182"=>"16",),
); break;
		case "2009":
$item	= array(
"name"	=> "七星连射弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "90000",
"img"	=> "we_bow001.png",
"atk"	=> array(160,0),
"handle"=> "40",
"need"	=> array("6023"=>"20","6022"=>"30","6185"=>"10",),
); break;
		case "2010":
$item	= array(
"name"	=> "银色三角弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "105000",
"img"	=> "we_bow001.png",
"atk"	=> array(180,0),
"handle"=> "45",
"need"	=> array("6023"=>"30","6024"=>"20","6185"=>"15",),
); break;
		case "2011":
$item	= array(
"name"	=> "狩猎女神之弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "120000",
"img"	=> "we_bow001.png",
"atk"	=> array(200,0),
"handle"=> "50",
"need"	=> array("6023"=>"50","6024"=>"30","6121"=>"1",),
); break;
		case "2020":
$item	= array(
"name"	=> "龙翼弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "150000",
"img"	=> "we_bow001.png",
"atk"	=> array(40,0),
"handle"=> "30",
"P_PIERCE"=> array(40,0),
"need"	=> array("6022"=>"10","6182"=>"5","6801"=>"1",),
"option"	=> "无视物理防御+40 ,",
); break;
		case "2021":
$item	= array(
"name"	=> "惊魂弓",
"type"	=> "弓",
"dh"	=> true,
"buy"	=> "200000",
"img"	=> "we_bow001.png",
"atk"	=> array(80,0),
"handle"=> "50",
"P_PIERCE"=> array(60,0),
"need"	=> array("6024"=>"40","6182"=>"20","6804"=>"3",),
"option"	=> "无视物理防御+60 ,",
); break;

		case "2100":
$item	= array(
"name"	=> "弩手",
"type"	=> "弩",
"dh"	=> true,
"buy"	=> "1000",
"img"	=> "we_bow013.png",
"atk"	=> array(25,0),
"handle"=> "2",
); break;
		case "2200":
$item	= array(
"name"	=> "驯兽鞭",
"type"	=> "鞭",
"buy"	=> "1000",
"img"	=> "we_other007.png",
"atk"	=> array(20,0),
"handle"=> "4",
"P_SUMMON"	=> "10",
"need"	=> array("6181"=>"8",),
); break;
		case "2201":
$item	= array(
"name"	=> "长鞭",
"type"	=> "鞭",
"buy"	=> "20000",
"img"	=> "we_other007.png",
"atk"	=> array(30,0),
"handle"=> "8",
"P_SUMMON"	=> "15",
"need"	=> array("6040"=>"4","6181"=>"12",),
); break;
		case "2202":
$item	= array(
"name"	=> "蟒鞭",
"type"	=> "鞭",
"buy"	=> "30000",
"img"	=> "we_other007.png",
"atk"	=> array(40,0),
"handle"=> "12",
"P_SUMMON"	=> "20",
"need"	=> array("6040"=>"6","6181"=>"16",),
); break;
		case "2203":
$item	= array(
"name"	=> "蝎鞭",
"type"	=> "鞭",
"buy"	=> "40000",
"img"	=> "we_other007.png",
"atk"	=> array(50,0),
"handle"=> "16",
"P_SUMMON"	=> "25",
"need"	=> array("6040"=>"12","6181"=>"24","6000"=>"24",),
); break;
		case "2204":
$item	= array(
"name"	=> "猎魂鞭",
"type"	=> "鞭",
"buy"	=> "50000",
"img"	=> "we_other007.png",
"atk"	=> array(60,0),
"handle"=> "20",
"P_SUMMON"	=> "30",
"need"	=> array("6041"=>"10","6184"=>"30","6004"=>"20",),
); break;
		case "2205":
$item	= array(
"name"	=> "暗王鞭",
"type"	=> "鞭",
"buy"	=> "60000",
"img"	=> "we_other007.png",
"atk"	=> array(70,0),
"handle"=> "24",
"P_SUMMON"	=> "35",
"need"	=> array("6041"=>"20","6184"=>"60","6005"=>"10",),
); break;
		case "2206":
$item	= array(
"name"	=> "幽冥鞭",
"type"	=> "鞭",
"buy"	=> "80000",
"img"	=> "we_other007.png",
"atk"	=> array(80,0),
"handle"=> "28",
"P_SUMMON"	=> "40",
"need"	=> array("6041"=>"40","6185"=>"50","6121"=>"2",),
); break;
		case "2210":
$item	= array(
"name"	=> "金属鞭",
"type"	=> "鞭",
"buy"	=> "50000",
"img"	=> "we_other007.png",
"atk"	=> array(80,0),
"handle"=> "8",
"P_SUMMON"	=> "4",
"need"	=> array("6040"=>"4","6001"=>"24",),
); break;
		case "2211":
$item	= array(
"name"	=> "银尾鞭",
"type"	=> "鞭",
"buy"	=> "70000",
"img"	=> "we_other007.png",
"atk"	=> array(120,0),
"handle"=> "10",
"P_SUMMON"	=> "8",
"need"	=> array("6040"=>"12","6002"=>"32",),
); break;
		case "2212":
$item	= array(
"name"	=> "黑莲鞭",
"type"	=> "鞭",
"buy"	=> "90000",
"img"	=> "we_other007.png",
"atk"	=> array(140,0),
"handle"=> "12",
"P_SUMMON"	=> "12",
"need"	=> array("6041"=>"10","6004"=>"30",),
); break;
		case "2213":
$item	= array(
"name"	=> "异灵鞭",
"type"	=> "鞭",
"buy"	=> "100000",
"img"	=> "we_other007.png",
"atk"	=> array(160,0),
"handle"=> "14",
"P_SUMMON"	=> "16",
"need"	=> array("6041"=>"20","6005"=>"30","6121"=>"1",),
); break;
		case "3000":
$item	= array(
"name"	=> "木盾",
"type"	=> "盾",
"buy"	=> "1000",
"img"	=> "shield_001m.png",
"def"	=> array(5,5,0,0),
"handle"=> "1",
"need"	=> array("6001"=>"1","6020"=>"4",),
); break;
		case "3001":
$item	= array(
"name"	=> "Baccrar",
"type"	=> "盾",
"buy"	=> "2000",
"img"	=> "shield_001m.png",
"def"	=> array(8,8,3,3),
"handle"=> "2",
"need"	=> array("6001"=>"4","6020"=>"2",),
); break;
		case "3002":
$item	= array(
"name"	=> "铁盾",
"type"	=> "盾",
"buy"	=> "4000",
"img"	=> "shield_001m.png",
"def"	=> array(12,5,5,5),
"handle"=> "3",
"need"	=> array("6003"=>"6",),
); break;
		case "3003":
$item	= array(
"name"	=> "鸢盾",
"type"	=> "盾",
"buy"	=> "5000",
"img"	=> "shield_001m.png",
"def"	=> array(5,20,10,5),
"handle"=> "3",
"need"	=> array("6001"=>"2","6002"=>"6",),
); break;
		case "3004":
$item	= array(
"name"	=> "强力盾",
"type"	=> "盾",
"buy"	=> "8000",
"img"	=> "shield_001m.png",
"def"	=> array(0,0,20,15),
"handle"=> "4",
"need"	=> array("6002"=>"8","6021"=>"4",),
); break;
		case "3005":
$item	= array(
"name"	=> "重盾",
"type"	=> "盾",
"buy"	=> "8000",
"img"	=> "shield_001m.png",
"def"	=> array(15,10,8,8),
"handle"=> "4",
"need"	=> array("6002"=>"8","6003"=>"8"),
); break;
		case "3006":
$item	= array(
"name"	=> "圆盾",
"type"	=> "盾",
"buy"	=> "10000",
"img"	=> "shield_001m.png",
"def"	=> array(15,20,10,10),
"handle"=> "5",
"need"	=> array("6002"=>"4","6003"=>"16"),
); break;
		case "3007":
$item	= array(
"name"	=> "塔盾",
"type"	=> "盾",
"buy"	=> "15000",
"img"	=> "shield_001m.png",
"def"	=> array(18,15,15,10),
"handle"=> "6",
"need"	=> array("6002"=>"8","6003"=>"20"),
); break;
		case "3008":
$item	= array(
"name"	=> "精灵盾",
"type"	=> "盾",
"buy"	=> "18000",
"img"	=> "shield_001m.png",
"def"	=> array(0,0,30,20),
"handle"=> "6",
"need"	=> array("6002"=>"32",),
); break;
		case "3009":
$item	= array(
"name"	=> "太阳盾",
"type"	=> "盾",
"buy"	=> "25000",
"img"	=> "shield_001m.png",
"def"	=> array(20,20,18,15),
"handle"=> "7",
"need"	=> array("6003"=>"20","6004"=>"10"),
); break;
		case "3010":
$item	= array(
"name"	=> "抗魔盾",
"type"	=> "盾",
"buy"	=> "30000",
"img"	=> "shield_001m.png",
"def"	=> array(0,0,40,40),
"handle"=> "7",
"need"	=> array("6004"=>"50",),
); break;
		case "3011":
$item	= array(
"name"	=> "超合金盾",
"type"	=> "盾",
"buy"	=> "35000",
"img"	=> "shield_001m.png",
"def"	=> array(15,150,20,20),
"handle"=> "8",
"need"	=> array("6004"=>"20","6004"=>"10"),
); break;
		case "3012":
$item	= array(
"name"	=> "魔王盾",
"type"	=> "盾",
"buy"	=> "40000",
"img"	=> "shield_001m.png",
"def"	=> array(25,50,20,40),
"handle"=> "8",
"need"	=> array("6004"=>"30","6005"=>"20","6121"=>"1",),
); break;
		case "3100":	
$item	= array(
"name"	=> "课本",
"type"	=> "书",
"buy"	=> "200",
"img"	=> "book_002.png",
"atk"	=> array(0,2),
"def"	=> array(0,5,0,0),
"handle"=> "1",
); break;
		case "3101":
$item	= array(
"name"	=> "咒语字典",
"type"	=> "书",
"buy"	=> "5000",
"img"	=> "book_002.png",
"atk"	=> array(0,5),
"def"	=> array(2,2,2,2),
"handle"=> "2",
"need"	=> array("6182"=>"28",),
); break;
		case "3102":
$item	= array(
"name"	=> "咒语日记",
"type"	=> "书",
"buy"	=> "8000",
"img"	=> "book_002.png",
"atk"	=> array(0,7),
"def"	=> array(2,0,2,0),
"handle"=> "3",
"need"	=> array("6182"=>"28",),
); break;
		case "3103":
$item	= array(
"name"	=> "圣经",
"type"	=> "书",
"buy"	=> "10000",
"img"	=> "book_002.png",
"atk"	=> array(0,4),
"def"	=> array(0,0,8,3),
"handle"=> "3",
"need"	=> array("6182"=>"36",),
); break;
		case "3104":
$item	= array(
"name"	=> "召唤之书",
"type"	=> "书",
"buy"	=> "12000",
"img"	=> "book_002.png",
"atk"	=> array(0,3),
"def"	=> array(0,0,4,5),
"handle"=> "3",
"P_SUMMON"	=> "10",
"need"	=> array("6182"=>"36",),
); break;
		case "3105":
$item	= array(
"name"	=> "世界百科全书",
"type"	=> "书",
"buy"	=> "15000",
"img"	=> "book_002.png",
"atk"	=> array(5,0),
"def"	=> array(10,5,7,0),
"handle"=> "5",
"need"	=> array("6182"=>"58",),
); break;
		case "3106":
$item	= array(
"name"	=> "马杰洛的祈祷",
"type"	=> "书",
"buy"	=> "20000",
"img"	=> "book_002.png",
"atk"	=> array(0,10),
"def"	=> array(5,10,10,15),
"handle"=> "6",
"need"	=> array("6185"=>"50",),
); break;
		case "5000":	
$item	= array(
"name"	=> "皮甲",
"type"	=> "甲",
"buy"	=> "1000",
"img"	=> "armor_016b.png",
"def"	=> array(18,15,7,0),
"handle"=> "1",
"need"	=> array("6040"=>"8"),
); break;
		case "5001":
$item	= array(
"name"	=> "板甲",
"type"	=> "甲",
"buy"	=> "2000",
"img"	=> "armor_016b.png",
"def"	=> array(20,15,10,5),
"handle"=> "2",
"need"	=> array("6040"=>"10","6001"=>"2",),
); break;
		case "5002":
$item	= array(
"name"	=> "链甲",
"type"	=> "甲",
"buy"	=> "5000",
"img"	=> "armor_016b.png",
"def"	=> array(25,15,13,10),
"handle"=> "3",
"need"	=> array("6001"=>"14",),
); break;
		case "5003":
$item	= array(
"name"	=> "锁子甲",
"type"	=> "甲",
"buy"	=> "6000",
"img"	=> "armor_016b.png",
"def"	=> array(30,20,15,5),
"handle"=> "4",
"need"	=> array("6001"=>"16","6002"=>"2",),
); break;
		case "5004":
$item	= array(
"name"	=> "银甲",
"type"	=> "甲",
"buy"	=> "8000",
"img"	=> "armor_016b.png",
"def"	=> array(35,25,18,10),
"handle"=> "5",
"need"	=> array("6002"=>"18",),
); break;
		case "5005":
$item	= array(
"name"	=> "半铠甲",
"type"	=> "甲",
"buy"	=> "10000",
"img"	=> "armor_016b.png",
"def"	=> array(15,70,24,15),
"handle"=> "5",
"need"	=> array("6002"=>"12","6003"=>"6",),
); break;
		case "5006":
$item	= array(
"name"	=> "龙甲",
"type"	=> "甲",
"buy"	=> "14000",
"img"	=> "armor_016b.png",
"def"	=> array(40,30,25,15),
"handle"=> "6",
"need"	=> array("6002"=>"40","6003"=>"2",),
); break;
		case "5007":
$item	= array(
"name"	=> "镀铠甲",
"type"	=> "甲",
"buy"	=> "10000",
"img"	=> "armor_016b.png",
"def"	=> array(20,100,25,20),
"handle"=> "6",
"need"	=> array("6002"=>"16","6003"=>"8",),
); break;
		case "5008":
$item	= array(
"name"	=> "SprintArmor",
"type"	=> "甲",
"buy"	=> "18000",
"img"	=> "armor_016b.png",
"def"	=> array(42,35,27,20),
"handle"=> "7",
"need"	=> array("6002"=>"24","6003"=>"10",),
); break;
		case "5009":
$item	= array(
"name"	=> "战斗军甲",
"type"	=> "甲",
"buy"	=> "18000",
"img"	=> "armor_016b.png",
"def"	=> array(60,40,0,0),
"handle"=> "7",
"need"	=> array("6001"=>"12","6002"=>"12","6003"=>"12",),
); break;
		case "5010":
$item	= array(
"name"	=> "槽甲",
"type"	=> "甲",
"buy"	=> "25000",
"img"	=> "armor_016b.png",
"def"	=> array(45,35,28,20),
"handle"=> "8",
"need"	=> array("6001"=>"15","6181"=>"15",),
); break;
		case "5011":
$item	= array(
"name"	=> "恶魔甲",
"type"	=> "甲",
"buy"	=> "20000",
"img"	=> "armor_016b.png",
"def"	=> array(20,140,15,70),
"handle"=> "8",
"need"	=> array("6002"=>"50",),
); break;
		case "5012":
$item	= array(
"name"	=> "袍甲",
"type"	=> "甲",
"buy"	=> "25000",
"img"	=> "armor_016b.png",
"def"	=> array(47,35,28,30),
"handle"=> "9",
); break;
		case "5013":
$item	= array(
"name"	=> "金甲",
"type"	=> "甲",
"buy"	=> "40000",
"img"	=> "armor_016b.png",
"def"	=> array(50,35,30,35),
"handle"=> "10",
"need"	=> array("6002"=>"10","6160"=>"2",),
); break;
		case "5014":
$item	= array(
"name"	=> "白金甲",
"type"	=> "甲",
"buy"	=> "50000",
"img"	=> "armor_016b.png",
"def"	=> array(52,40,32,40),
"handle"=> "12",
"need"	=> array("6002"=>"20","6161"=>"5",),
); break;
		case "5015":
$item	= array(
"name"	=> "水晶甲",
"type"	=> "甲",
"buy"	=> "80000",
"img"	=> "armor_016b.png",
"def"	=> array(55,35,32,45),
"handle"=> "13",
"need"	=> array("6002"=>"40","6120"=>"1",),
); break;
		case "5016":
$item	= array(
"name"	=> "复合板甲",
"type"	=> "甲",
"buy"	=> "120000",
"img"	=> "armor_016b.png",
"def"	=> array(60,40,35,45),
"handle"=> "16",
"need"	=> array("6003"=>"40","6120"=>"2",),
); break;
		case "5017":
$item	= array(
"name"	=> "赤铁甲",
"type"	=> "甲",
"buy"	=> "160000",
"img"	=> "armor_016b.png",
"def"	=> array(65,50,38,50),
"handle"=> "18",
"need"	=> array("6004"=>"50","6121"=>"5",),
); break;
		case "5018":
$item	= array(
"name"	=> "青金甲",
"type"	=> "甲",
"buy"	=> "200000",
"img"	=> "armor_016b.png",
"def"	=> array(70,60,40,60),
"handle"=> "20",
"need"	=> array("6005"=>"50","6122"=>"2",),
); break;
		case "5100":	
$item	= array(
"name"	=> "棉汗衫",
"type"	=> "衣服",
"buy"	=> "500",
"img"	=> "armor_014e.png",
"def"	=> array(5,5,5,5),
"handle"=> "1",
"need"	=> array("6180"=>"4",),
); break;
		case "5101":
$item	= array(
"name"	=> "皮夹克",
"type"	=> "衣服",
"buy"	=> "1000",
"img"	=> "armor_014e.png",
"def"	=> array(10,0,10,0),
"handle"=> "2",
"need"	=> array("6040"=>"4","6180"=>"4",),
); break;
		case "5102":
$item	= array(
"name"	=> "轻夹克",
"type"	=> "衣服",
"buy"	=> "2000",
"img"	=> "armor_014e.png",
"def"	=> array(15,5,15,5),
"handle"=> "3",
"need"	=> array("6040"=>"2","6180"=>"8",),
); break;
		case "5103":
$item	= array(
"name"	=> "长外套",
"type"	=> "衣服",
"buy"	=> "5000",
"img"	=> "armor_014e.png",
"def"	=> array(18,5,18,5),
"handle"=> "4",
"need"	=> array("6040"=>"6","6180"=>"10",),
); break;
		case "5104":
$item	= array(
"name"	=> "硬夹克",
"type"	=> "衣服",
"buy"	=> "9000",
"img"	=> "armor_014e.png",
"def"	=> array(23,7,23,7),
"handle"=> "5",
"need"	=> array("6040"=>"10","6180"=>"10",),
); break;
		case "5105":
$item	= array(
"name"	=> "褶外套",
"type"	=> "衣服",
"buy"	=> "14000",
"img"	=> "armor_014e.png",
"def"	=> array(25,10,25,10),
"handle"=> "6",
"need"	=> array("6040"=>"4","6183"=>"12",),
); break;
		case "5106":
$item	= array(
"name"	=> "贵族外套",
"type"	=> "衣服",
"buy"	=> "18000",
"img"	=> "armor_014e.png",
"def"	=> array(28,12,28,12),
"handle"=> "7",
"need"	=> array("6040"=>"6","6183"=>"20",),
); break;
		case "5107":
$item	= array(
"name"	=> "王者外套",
"type"	=> "衣服",
"buy"	=> "22000",
"img"	=> "armor_014e.png",
"def"	=> array(30,15,30,15),
"handle"=> "8",
"need"	=> array("6040"=>"4","6183"=>"15","6184"=>"15",),
); break;
		case "5108":
$item	= array(
"name"	=> "赤星外套",
"type"	=> "衣服",
"buy"	=> "26000",
"img"	=> "armor_014e.png",
"def"	=> array(32,20,32,20),
"handle"=> "9",
"need"	=> array("6041"=>"5","6185"=>"10","6121"=>"1",),
); break;
		case "5109":
$item	= array(
"name"	=> "女神外套",
"type"	=> "衣服",
"buy"	=> "30000",
"img"	=> "armor_014e.png",
"def"	=> array(35,25,35,25),
"handle"=> "10",
"need"	=> array("6041"=>"10","6185"=>"20","6122"=>"1",),
); break;
		case "5200":	
$item	= array(
"name"	=> "棉长袍",
"type"	=> "长袍",
"buy"	=> "1000",
"img"	=> "armor_012.png",
"def"	=> array(0,5,30,10),
"handle"=> "1",
"need"	=> array("6180"=>"4",),
); break;
		case "5201":
$item	= array(
"name"	=> "银长袍",
"type"	=> "长袍",
"buy"	=> "1500",
"img"	=> "armor_012.png",
"def"	=> array(2,5,35,15),
"handle"=> "2",
"need"	=> array("6002"=>"1","6180"=>"6",),
); break;
		case "5202":
$item	= array(
"name"	=> "小精灵长袍",
"type"	=> "长袍",
"buy"	=> "3000",
"img"	=> "armor_012.png",
"def"	=> array(3,10,40,20),
"handle"=> "3",
"need"	=> array("6180"=>"8","6184"=>"2",),
); break;
		case "5203":
$item	= array(
"name"	=> "仙女长袍",
"type"	=> "长袍",
"buy"	=> "5000",
"img"	=> "armor_012.png",
"def"	=> array(4,10,45,25),
"handle"=> "4",
"need"	=> array("6180"=>"12","6184"=>"4",),
); break;
		case "5204":
$item	= array(
"name"	=> "十字长袍",
"type"	=> "长袍",
"buy"	=> "8000",
"img"	=> "armor_012.png",
"def"	=> array(5,10,48,25),
"handle"=> "5",
"need"	=> array("6180"=>"14","6184"=>"4",),
); break;
		case "5205":
$item	= array(
"name"	=> "白色长袍",
"type"	=> "长袍",
"buy"	=> "10000",
"img"	=> "armor_012.png",
"def"	=> array(6,10,50,25),
"handle"=> "6",
"need"	=> array("6183"=>"8","6184"=>"8",),
); break;
		case "5206":
$item	= array(
"name"	=> "神圣长袍",
"type"	=> "长袍",
"buy"	=> "14000",
"img"	=> "armor_012.png",
"def"	=> array(7,10,52,30),
"handle"=> "7",
"need"	=> array("6183"=>"12","6184"=>"12",),
); break;
		case "5207":
$item	= array(
"name"	=> "梦魇长袍",
"type"	=> "长袍",
"buy"	=> "18000",
"img"	=> "armor_012.png",
"def"	=> array(8,15,56,40),
"handle"=> "8",
"need"	=> array("6185"=>"20","6121"=>"2",),
); break;
		case "5208":
$item	= array(
"name"	=> "凤凰长袍",
"type"	=> "长袍",
"buy"	=> "25000",
"img"	=> "armor_012.png",
"def"	=> array(10,20,60,50),
"handle"=> "9",
"need"	=> array("6185"=>"40","6122"=>"1",),
); break;
		case "5500":
$item	= array(
"name"	=> "生命指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "2",
"P_MAXHP"	=> "50",
"option"	=> "MAXHP+50, ",
); break;
		case "5501":
$item	= array(
"name"	=> "魔法指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "2",
"P_MAXSP"	=> "20",
"option"	=> "MAXSP+20, ",
); break;

		case "5510":
$item	= array(
"name"	=> "力量指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "3",
"P_STR"	=> "30",
"option"	=> "STR+30, ",
); break;
		case "5515":
$item	= array(
"name"	=> "智慧指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "3",
"P_INT"	=> "30",
"option"	=> "INT+30, ",
); break;
		case "5520":
$item	= array(
"name"	=> "灵巧指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "3",
"P_DEX"	=> "30",
"option"	=> "DEX+30, ",
); break;
		case "5525":
$item	= array(
"name"	=> "速度指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "2",
"P_SPD"	=> "10",
"option"	=> "SPD+10, ",
); break;
		case "5530":
$item	= array(
"name"	=> "幸运指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "3",
"P_LUK"	=> "30",
"option"	=> "LUK+30, ",
); break;
		case "5540":
$item	= array(
"name"	=> "大生命指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "4",
"P_MAXHP"	=> "500",
"option"	=> "MAXHP+500, ",
); break;
		case "5550":
$item	= array(
"name"	=> "大魔法指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "4",
"P_MAXSP"	=> "200",
"option"	=> "MAXSP+200, ",
); break;

		case "5600":
$item	= array(
"name"	=> "狂暴指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "2",
"P_STR"	=> "100",
"M_MAXHP"	=> "-50",
"option"	=> "STR+100, HP-50% ,",
); break;

		case "5700":
$item	= array(
"name"	=> "全能指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"handle"=> "5",
"P_STR"	=> "30",
"P_INT"	=> "30",
"P_DEX"	=> "30",
"P_SPD"	=> "30",
"P_LUK"	=> "30",
"M_MAXHP"	=> "15",
"M_MAXSP"	=> "15",
"option"	=> "STR+40,INT+40,DEX+40,SPD+40,LUK+40,HP+15%,SP+15%,",
); break;
		case "5800":
$item	= array(
"name"	=> "召唤指环",
"type"	=> "道具",
"buy"	=> "10000",
"img"	=> "acce_024.png",
"P_SUMMON"	=> "10",
"handle"=> "4",
"option"	=> "SUMMON+10%",
); break;
		case "6000":
$item	= array(
"name"	=> "石头",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "5",
"img"	=> "item_009z.png",
); break;
		case "6001":
$item	= array(
"name"	=> "钢",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "mat_001.png",
); break;
		case "6002":
$item	= array(
"name"	=> "银",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "20",
"img"	=> "mat_001.png",
); break;
		case "6003":
$item	= array(
"name"	=> "铁",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "30",
"img"	=> "mat_001.png",
); break;
		case "6004":
$item	= array(
"name"	=> "赤铁",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "30",
"img"	=> "item_010.png",
); break;
		case "6005":
$item	= array(
"name"	=> "青金",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "30",
"img"	=> "item_013.png",
); break;
		case "6020":
$item	= array(
"name"	=> "木料",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "20",
"img"	=> "mat_025.png",
); break;
		case "6021":
$item	= array(
"name"	=> "橡树",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "30",
"img"	=> "mat_025.png",
); break;
		case "6022":
$item	= array(
"name"	=> "柏树",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "40",
"img"	=> "mat_025.png",
); break;
		case "6023":
$item	= array(
"name"	=> "银杉",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "40",
"img"	=> "mat_025.png",
); break;
		case "6024":
$item	= array(
"name"	=> "神木",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "40",
"img"	=> "mat_025.png",
); break;
		case "6040":
$item	= array(
"name"	=> "皮革",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "mat_024.png",
); break;
		case "6041":
$item	= array(
"name"	=> "厚皮",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "mat_022.png",
); break;
		case "6060":
$item	= array(
"name"	=> "骨头",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "mat_016.png",
); break;
		case "6080":
$item	= array(
"name"	=> "兽牙",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "mat_013.png",
); break;
		case "6100":
$item	= array(
"name"	=> "羽毛",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "20",
"img"	=> "mat_008.png",
); break;
		case "6120":
$item	= array(
"name"	=> "钻石",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "100",
"img"	=> "gem_02.png",
); break;
		case "6121":
$item	= array(
"name"	=> "水晶",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "100",
"img"	=> "mat_033.png",
); break;
		case "6122":
$item	= array(
"name"	=> "虹石",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "100",
"img"	=> "mat_033b.png",
); break;
		case "6140":
$item	= array(
"name"	=> "噪声",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "other_007.png",
); break;
		case "6160":
$item	= array(
"name"	=> "金币",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "500",
"img"	=> "acce_005.png",
); break;
		case "6161":
$item	= array(
"name"	=> "银币",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "250",
"img"	=> "acce_005b.png",
); break;
		case "6162":
$item	= array(
"name"	=> "铜币",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "100",
"img"	=> "acce_005c.png",
); break;
		case "6163":
$item	= array(
"name"	=> "金砖",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "50000",
"img"	=> "mat_003.png",
); break;
		case "6180":
$item	= array(
"name"	=> "棉花",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6181":
$item	= array(
"name"	=> "藤",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6182":
$item	= array(
"name"	=> "大麻",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6183":
$item	= array(
"name"	=> "羊毛",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6184":
$item	= array(
"name"	=> "丝",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6185":
$item	= array(
"name"	=> "银线",
"type"	=> "材料",
"buy"	=> "10000",
"sell"	=> "10",
"img"	=> "other_008.png",
); break;
		case "6200":
$item	= array(
"name"	=> "噪音",
"type"	=> "材料",
"buy"	=> "1000",
"sell"	=> "10",
"img"	=> "other_007.png",
); break;
		case "6600":
$item	= array(
"name"	=> "香蕉",
"type"	=> "材料",
"buy"	=> "100",
"sell"	=> "50",
"img"	=> "banana.png",
); break;
		case "6601":
$item	= array(
"name"	=> "黄金香蕉",
"type"	=> "材料",
"buy"	=> "100",
"sell"	=> "5000",
"img"	=> "banana.png",
); break;
		case "6602":
$item	= array(
"name"	=> "香蕉金属",
"type"	=> "材料",
"buy"	=> "100",
"sell"	=> "50",
"img"	=> "banana.png",
); break;
		case "6800":
$item	= array(
"name"	=> "龙牙",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "10",
"img"	=> "mat_013.png",
); break;
		case "6801":
$item	= array(
"name"	=> "龙翼",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "10",
"img"	=> "mat_011.png",
); break;
		case "6802":
$item	= array(
"name"	=> "断剑",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "10",
"img"	=> "we_sword026.png",
); break;
		case "6803":
$item	= array(
"name"	=> "添加剂",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "10",
"img"	=> "rpg070.gif",
); break;
		case "6804":
$item	= array(
"name"	=> "幸运草",
"type"	=> "材料",
"buy"	=> "100000",
"sell"	=> "10",
"img"	=> "rpg076.gif",
); break;
		case "7000":
$item	= array(
"name"	=> "力量球",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_019.png",
"Add"	=> "X00",
); break;
		case "7001":
$item	= array(
"name"	=> "魔法球",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_019.png",
"Add"	=> "X01",
); break;
		case "7100":
$item	= array(
"name"	=> "哥布林之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M01",
); break;
		case "7101":
$item	= array(
"name"	=> "蝙蝠之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M02",
); break;
		case "7102":
$item	= array(
"name"	=> "骷髅勇士之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M03",
); break;
		case "7103":
$item	= array(
"name"	=> "骷髅战士之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M04",
); break;
		case "7104":
$item	= array(
"name"	=> "骷髅射手之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M05",
); break;
		case "7105":
$item	= array(
"name"	=> "骨头萨满之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M06",
); break;
		case "7106":
$item	= array(
"name"	=> "独眼巨人之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M07",
); break;
		case "7107":
$item	= array(
"name"	=> "哥布林铁匠之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M08",
); break;
		case "7108":
$item	= array(
"name"	=> "模仿兽之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M09",
); break;
		case "7109":
$item	= array(
"name"	=> "骷髅队长之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M10",
); break;
		case "7110":
$item	= array(
"name"	=> "邪恶巫师之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M11",
); break;
		case "7111":
$item	= array(
"name"	=> "眼球怪之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M12",
); break;
		case "7112":
$item	= array(
"name"	=> "邪恶佣人之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M13",
); break;
		case "7113":
$item	= array(
"name"	=> "人马猎手之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M14",
); break;
		case "7114":
$item	= array(
"name"	=> "人马骑士之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M15",
); break;
		case "7115":
$item	= array(
"name"	=> "巴风特之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M16",
); break;
		case "7116":
$item	= array(
"name"	=> "巴风特王之泪",
"type"	=> "材料",
"buy"	=> "300000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M17",
); break;
		case "7117":
$item	= array(
"name"	=> "链锤兵之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M18",
); break;
		case "7118":
$item	= array(
"name"	=> "巨剑兵之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M19",
); break;
		case "7119":
$item	= array(
"name"	=> "黑暗桃乐斯之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M20",
); break;
		case "7120":
$item	= array(
"name"	=> "堕落女祭司之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M21",
); break;
		case "7121":
$item	= array(
"name"	=> "金属哥布林之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M22",
); break;
		case "7122":
$item	= array(
"name"	=> "地狱兽之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M23",
); break;
		case "7123":
$item	= array(
"name"	=> "地狱炮手之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M24",
); break;
		case "7124":
$item	= array(
"name"	=> "血色制裁者之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M25",
); break;
		case "7125":
$item	= array(
"name"	=> "嗜血骷髅之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M26",
); break;
		case "7126":
$item	= array(
"name"	=> "食人魔之泪",
"type"	=> "材料",
"buy"	=> "3000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M27",
); break;
		case "7127":
$item	= array(
"name"	=> "冰域之国的使炎师之泪",
"type"	=> "材料",
"buy"	=> "30000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M28",
); break;
		case "7128":
$item	= array(
"name"	=> "血腥玛丽之泪",
"type"	=> "材料",
"buy"	=> "30000",
"sell"	=> "100",
"img"	=> "item_018.png",
"Add"	=> "M29",
); break;
		case "7500":
$item	= array(
"name"	=> "重命名卡",
"type"	=> "其他",
"buy"	=> "5000",
"sell"	=> "0",
"img"	=> "item_035.png",
); break;
		case "7510":
$item	= array(
"name"	=> "重置水晶(状态1)",
"type"	=> "其他",
"buy"	=> "1000000",
"sell"	=> "100",
"img"	=> "gem_03.png",
); break;
		case "7511":
$item	= array(
"name"	=> "重置水晶(状态30)",
"type"	=> "其他",
"buy"	=> "500000",
"sell"	=> "100",
"img"	=> "gem_03.png",
); break;
		case "7512":
$item	= array(
"name"	=> "重置水晶(状态50)",
"type"	=> "其他",
"buy"	=> "200000",
"sell"	=> "100",
"img"	=> "gem_03.png",
); break;
		case "7513":
$item	= array(
"name"	=> "重置水晶(状态100)",
"type"	=> "其他",
"buy"	=> "50000",
"sell"	=> "100",
"img"	=> "gem_03.png",
); break;
		case "7520":
$item	= array(
"name"	=> "重置水晶(技能)",
"type"	=> "其他",
"buy"	=> "300000",
"sell"	=> "100",
"img"	=> "gem_03.png",
); break;
		case "8000":
$item	= array(
"name"	=> "古代洞穴",
"type"	=> "地图",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "book_003.png",
); break;
		case "8001":
$item	= array(
"name"	=> "古代洞穴 B2",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8002":
$item	= array(
"name"	=> "古代洞穴 B3",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8003":
$item	= array(
"name"	=> "古代洞穴 B4",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8004":
$item	= array(
"name"	=> "古代洞穴 B5",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8005":
$item	= array(
"name"	=> "古代洞穴 B6",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8009":
$item	= array(
"name"	=> "滴冻山入口",
"type"	=> "地图",
"buy"	=> "500",
"sell"	=> "100",
"img"	=> "book_003.png",
); break;
		case "8010":
$item	= array(
"name"	=> "滴冻山中腹",
"type"	=> "地图",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "book_003.png",
); break;
		case "8011":
$item	= array(
"name"	=> "滴冻山顶上",
"type"	=> "地图",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "book_003.png",
); break;
		case "8012":
$item        = array(
"name"        => "海岸",
"type"        => "地图",
"buy"        => "10000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8013":
$item        = array(
"name"        => "沼泽",
"type"        => "地图",
"buy"        => "15000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8014":
$item        = array(
"name"        => "海洋",
"type"        => "地图",
"buy"        => "15000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8015":
$item        = array(
"name"        => "火山中腹",
"type"        => "地图",
"buy"        => "10000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8016":
$item        = array(
"name"        => "火山顶上",
"type"        => "地图",
"buy"        => "15000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8017":
$item        = array(
"name"        => "沙漠",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8018":
$item        = array(
"name"        => "村庄",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8019":
$item        = array(
"name"        => "沙漠深处",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8020":
$item        = array(
"name"        => "贼之巢穴",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8022":
$item        = array(
"name"        => "沙漠尽头",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8023":
$item        = array(
"name"        => "秘术之国",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8024":
$item        = array(
"name"        => "深蓝海域",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8025":
$item        = array(
"name"        => "亚特兰蒂斯",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8026":
$item	= array(
"name"	=> "古代洞穴 B7",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8027":
$item	= array(
"name"	=> "古代洞穴 B8",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8028":
$item	= array(
"name"	=> "古代洞穴 B9",
"type"	=> "钥匙",
"buy"	=> "5000",
"sell"	=> "100",
"img"	=> "item_032.png",
); break;
		case "8029":
$item        = array(
"name"        => "神秘绿洲",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "8030":
$item        = array(
"name"        => "RPG城",
"type"        => "地图",
"buy"        => "20000",
"sell"        => "100",
"img"        => "book_003.png",
); break;
		case "9000":
$item	= array(
"name"	=> "拍卖会员卡",
"type"	=> "特殊",
"buy"	=> "9999",
"sell"	=> "100",
"img"	=> "item_035.png",
); break;
		default:
			return false;
	}

	$item["no"]	= $no;
	$item["base_name"]	= $item["name"];
	switch($item["type"]) {
		case "剑":
		case "双手剑":
		case "匕首":
		case "魔杖":
		case "杖":
		case "弓":
		case "鞭":
			$item["type2"]	= "WEAPON";
			break;
		case "盾":
		case "书":
		case "甲":
		case "衣服":
		case "长袍":
			$item["type2"]	= "GUARD";
			break;
		default:
			$item["type2"]	= "其他";
			break;
	}
	if($refine) {
		$item["refine"]	= $refine;
		$item["name"]	= "+".$refine." ".$item["name"];
		if(isset($item["atk"]["0"])) {
			$item["atk"]["0"]	*= ( 1 + ($refine*$refine)/100 );
			$item["atk"]["0"]	= ceil($item["atk"]["0"]);
		}
		if(isset($item["atk"]["1"])) {
			$item["atk"]["1"]	*= ( 1 + ($refine*$refine)/100 );
			$item["atk"]["1"]	= ceil($item["atk"]["1"]);
		}
		$RefineRate	= 1 + 0.3 * ($refine/10);
		if(isset($item["def"]["0"]))
			$item["def"]["0"]	= ceil($item["def"]["0"] * $RefineRate);
		if(isset($item["def"]["1"]))
			$item["def"]["1"]	= ceil($item["def"]["1"] * $RefineRate);
		if(isset($item["def"]["2"]))
			$item["def"]["2"]	= ceil($item["def"]["2"] * $RefineRate);
		if(isset($item["def"]["3"]))
			$item["def"]["3"]	= ceil($item["def"]["3"] * $RefineRate);
			
	}
	if($option0)
		AddEnchantData($item,$option0);
	if($option1)
		AddEnchantData($item,$option1);
	if($option2)
		AddEnchantData($item,$option2);
	return $item;
}
?>