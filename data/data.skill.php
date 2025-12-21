<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function LoadSkillData($no) {
	switch($no) {
		case "1000":
$skill	= array(
"name"	=> "공격",
"img"	=> "skill_042.png",
"exp"	=> "일반 공격",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
); break;
		case "1001":
$skill	= array(
"name"	=> "고통스러운 타격",
"img"	=> "skill_032.png",
"exp"	=> "",
"sp"	=> "8",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("enemy","individual",1),
"pow"	=> "160",
"charge"=> array(20,20),
); break;
		case "1002":
$skill	= array(
"name"	=> "화구술",
"img"	=> "skill_018.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "0",
"target"=> array("enemy","multi",4),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(60,0),
); break;
		case "1003":
$skill	= array(
"name"	=> "더블 블로우",
"img"	=> "skill_073.png",
"exp"	=> "",
"sp"	=> "15",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",2),
"pow"	=> "90",
); break;
		case "1011":
$skill	= array(
"name"	=> "파괴적인 무기",
"img"	=> "skill_072.png",
"exp"	=> "공격력이 낮음",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"charge"=> array(0,0),
"DownATK" => "50",
"DownMATK" => "50",
); break;
		case "1012":
$skill	= array(
"name"	=> "장비 파괴",
"img"	=> "skill_072.png",
"exp"	=> "낮은 방어력",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"charge"=> array(0,0),
"DownDEF" => "30",
"DownMDEF" => "30",
); break;
		case "1013":
$skill	= array(
"name"	=> "추력",
"img"	=> "skill_074.png",
"exp"	=> "",
"sp"	=> "15",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "190",
"charge"=> array(0,40),
); break;
		case "1014":
$skill	= array(
"name"	=> "치명적인 추진력",
"img"	=> "skill_074z.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"pow"	=> "360",
"charge"=> array(0,50),
); break;
		case "1015":
$skill	= array(
"name"	=> "연기됨",
"img"	=> "skill_075.png",
"exp"	=> "방어자",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"pow"	=> "150",
"charge"=> array(40,20),
"knockback"	=> "100",
); break;
		case "1016":
$skill	= array(
"name"	=> "피어싱 장비",
"img"	=> "skill_077.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "170",
"charge"=> array(40,40),
"pierce"=> true,
); break;
		case "1017":
$skill	= array(
"name"	=> "앵그리 스트라이크",
"img"	=> "skill_031.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","multi",5),
"pow"	=> "100",
"charge"=> array(40,60),
); break;
		case "1018":
$skill	= array(
"name"	=> "적과 아군 간의 무차별적인 전투",
"img"	=> "skill_031z.png",
"exp"	=> "아군과 적군에 대한 무차별 공격",
"sp"	=> "65",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("all","multi",8),
"pow"	=> "100",
"invalid"	=> true,
"charge"=> array(50,100),
); break;
		case "1019":
$skill	= array(
"name"	=> "찌름",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","multi",6),
"pow"	=> "60",
"charge"=> array(60,60),
"pierce"=> true,
); break;
		case "1020":
$skill	= array(
"name"	=> "파괴적인 정신",
"img"	=> "skill_073z.png",
"exp"	=> "SP가 감소합니다",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","individual",1),
"pow"	=> "120",
); break;
		case "1021":
$skill	= array(
"name"	=> "영혼을 파괴하다",
"img"	=> "skill_072z.png",
"exp"	=> "SP+HP 감소",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "160",
); break;
		case "1022":
$skill	= array(
"name"	=> "돌격",
"img"	=> "skill_033.png",
"exp"	=> "뒷줄 + 앞으로 움직일 때 파워는 4배가 됩니다.",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"charge"=> array(0,30),
); break;
		case "1023":
$skill	= array(
"name"	=> "원샷 탈출",
"img"	=> "skill_033z.png",
"exp"	=> "앞줄 + 뒤줄일때 파워가 3배로 늘어납니다",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"charge"=> array(0,10),
); break;
		case "1024":
$skill	= array(
"name"	=> "삶을 나누다",
"img"	=> "skill_073y.png",
"exp"	=> "객체의 HP 분할",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"charge"=> array(0,50),
); break;
		case "1025":
$skill	= array(
"name"	=> "정신 분열증",
"img"	=> "skill_073x.png",
"exp"	=> "객체의 SP 분할",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "3",
"target"=> array("enemy","individual",1),
); break;
		case "1026":
$skill	= array(
"name"	=> "용감하게 돌격하라",
"img"	=> "skill_033.png",
"exp"	=> "뒷줄에 있을 때 + 앞으로 움직일 때 파워가 3배 증가",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","multi",5),
"pow"	=> "150",
"charge"=> array(0,30),
); break;
		case "1027":
$skill	= array(
"name"	=> "연회",
"img"	=> "skill_033z.png",
"exp"	=> "앞줄에 있을 때의 힘은 6배 더 강하고, 뒷줄에 있을 때의 힘은 더 강합니다.",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "150",
"charge"=> array(0,50),
); break;
		case "1028":
$skill	= array(
"name"	=> "검기",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "100",
"charge"=> array(10,50),
"pierce"=> true,
); break;
		case "1029":
$skill	= array(
"name"	=> "영혼의 장송곡",
"img"	=> "skill_072z.png",
"exp"	=> "SP+HP 감소",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("enemy","all",1),
"pow"	=> "120",
); break;
		case "1030":
$skill	= array(
"name"	=> "거합참",
"img"	=> "skill_074z.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"pow"	=> "600",
"charge"=> array(100,100),
"invalid"	=> "1",
); break;
		case "1031":
$skill	= array(
"name"	=> "천군을 소탕",
"img"	=> "skill_031.png",
"exp"	=> "",
"sp"	=> "110",
"type"	=> "0",
"learn"	=> "11",
"target"=> array("enemy","multi",11),
"pow"	=> "110",
"charge"=> array(10,100),
); break;
		case "1032":
$skill	= array(
"name"	=> "핵탄",
"img"	=> "skill_077.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"pow"	=> "1000",
"charge"=> array(100,100),
"pierce"=> true,
); break;
		case "1033":
$skill	= array(
"name"	=> "무기를 버리다",
"img"	=> "skill_072.png",
"exp"	=> "공격력이 낮음",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"pow"	=> "160",
"charge"=> array(10,30),
"DownATK" => "75",
"DownMATK" => "75",
); break;
		case "1034":
$skill	= array(
"name"	=> "돌파장비",
"img"	=> "skill_072.png",
"exp"	=> "낮은 방어력",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"pow"	=> "160",
"charge"=> array(10,30),
"DownDEF" => "45",
"DownMDEF" => "45",
); break;
		case "1035":
$skill	= array(
"name"	=> "파방참",
"img"	=> "skill_077.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","individual",1),
"pow"	=> "250",
"charge"=> array(20,50),
"pierce"=> true,
); break;
		case "1036":
$skill	= array(
"name"	=> "칼날이 마구 날뛰다",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "350",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("enemy","multi",5),
"pow"	=> "150",
"charge"=> array(50,50),
"pierce"=> true,
); break;
		case "1037":
$skill	= array(
"name"	=> "블레이드 러시",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "400",
"type"	=> "0",
"learn"	=> "24",
"target"=> array("all","all",1),
"pow"	=> "400",
"charge"=> array(40,60),
"pierce"=> true,
); break;
		case "1038":
$skill	= array(
"name"	=> "마봉검",
"img"	=> "skill_077.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "450",
"charge"=> array(40,50),
"DownMATK" => "50",
); break;
		case "1039":
$skill	= array(
"name"	=> "식혼검",
"img"	=> "skill_077z.png",
"exp"	=> "",
"sp"	=> "250",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",3),
"pow"	=> "350",
"charge"=> array(30,50),
"DownMDEF" => "30",
); break;
		case "1040":
$skill	= array(
"name"	=> "음파검",
"img"	=> "skill_077z.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"charge"=> array(60,0),
"DownSPD" => "25",
); break;
		case "1100":
$skill	= array(
"name"	=> "파워 상승",
"img"	=> "skill_057.png",
"exp"	=> "파워 상승",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"=> true,
"sacrifice"	=> "10",
"UpSTR"	=> "100",
); break;
		case "1101":
$skill	= array(
"name"	=> "속도 증가",
"img"	=> "skill_057.png",
"exp"	=> "속도 증가",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"=> true,
"sacrifice"	=> "25",
"PlusSPD"	=> "100",
); break;
		case "1102":
$skill	= array(
"name"	=> "지능 상승",
"img"	=> "skill_057.png",
"exp"	=> "지능 상승",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"=> true,
"sacrifice"	=> "10",
"UpINT"	=> "100",
); break;
		case "1113":
$skill	= array(
"name"	=> "고통",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","individual",1),
"pow"	=> "200",
"sacrifice"	=> "5",
); break;
		case "1114":
$skill	= array(
"name"	=> "속공",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",4),
"pow"	=> "100",
"sacrifice"	=> "15",
); break;
		case "1115":
$skill	= array(
"name"	=> "괴멸",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "1",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","multi",4),
"pow"	=> "200",
"sacrifice"	=> "30",
); break;
		case "1116":
$skill	= array(
"name"	=> "벌을 주다",
"img"	=> "skill_057.png",
"exp"	=> "잃은 체력에 따라 적에게 데미지를 입힙니다.",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","individual",1),
"charge"=> array(100,100),
); break;
		case "1117":
$skill	= array(
"name"	=> "질병",
"img"	=> "skill_057.png",
"exp"	=> "독화",
"sp"	=> "32",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"sacrifice"	=> "20",
"charge"=> array(0,50),
"poison"=> "100",
); break;
		case "1118":
$skill	= array(
"name"	=> "격퇴",
"img"	=> "skill_057.png",
"exp"	=> "적의 후퇴",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"sacrifice"	=> "50",
"charge"=> array(100,100),
"knockback"=> "100",
); break;
		case "1119":
$skill	= array(
"name"	=> "우방 강화",
"img"	=> "skill_057.png",
"exp"	=> "?",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("friend","all",1),
"sacrifice"	=> "200",
"charge"=> array(100,0),
"UpSTR"	=> "60",
"UpINT"	=> "60",
"UpSPD"	=> "60",
"UpATK"	=> "60",
"UpMATK"=> "60",
); break;
		case "1120":
$skill	= array(
"name"	=> "폭주",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("self","individual",1),
"support"=> true,
"sacrifice"	=> "60",
"UpSTR"	=> "60",
"UpINT"	=> "60",
"UpSPD"	=> "60",
"UpATK"	=> "60",
"DownDEF"=> "60",
"DownMDEF"=> "60",
); break;
		case "1121":
$skill	= array(
"name"	=> "학살",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "500",
"sacrifice"	=> "20",
); break;
		case "1122":
$skill	= array(
"name"	=> "피비린내 나는 싸움",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("enemy","multi",5),
"pow"	=> "250",
"sacrifice"	=> "30",
); break;
		case "1123":
$skill	= array(
"name"	=> "미친 학살",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("all","all",1),
"pow"	=> "600",
"sacrifice"	=> "60",
); break;
		case "1124":
$skill	= array(
"name"	=> "무한참",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "15",
"target"=> array("enemy","multi",15),
"pow"	=> "150",
"charge"=> array(150,150),
); break;
		case "1125":
$skill	= array(
"name"	=> "길동무",
"img"	=> "skill_057.png",
"exp"	=> "잃은 체력에 따라 적에게 데미지를 입힙니다.",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "24",
"target"=> array("enemy","individual",1),
"charge"=> array(0,240),
"sacrifice"	=> "24",
); break;
		case "1200":
$skill	= array(
"name"	=> "독 한방",
"img"	=> "skill_074y.png",
"exp"	=> "상대방이 독에 중독되어 있을 경우 위력이 6배 강해집니다.",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"limit"=> array("단검"=>true,),
); break;
		case "1203":
$skill	= array(
"name"	=> "단검질",
"img"	=> "we_sword001.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "1",
"target"=> array("enemy","individual",1),
"pow"	=> "140",
"invalid"	=> "1",
"limit"=> array("단검"=>true,),
); break;
		case "1204":
$skill	= array(
"name"	=> "비수 난타",
"img"	=> "we_sword001z.png",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",4),
"pow"	=> "130",
"invalid"	=> "1",
"limit"=> array("단검"=>true,),
); break;
		case "1205":
$skill	= array(
"name"	=> "산성화된 표면",
"img"	=> "item_027.png",
"exp"	=> "방어저하",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"DownDEF"	=> "30",
"DownMDEF"	=> "30",
); break;
		case "1206":
$skill	= array(
"name"	=> "산성 안개",
"img"	=> "skill_079z.png",
"exp"	=> "방어저하",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","all",1),
"DownDEF"	=> "15",
); break;
		case "1207":
$skill	= array(
"name"	=> "독성 기운",
"img"	=> "skill_005cz.png",
"exp"	=> "전위화",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","all",1),
"umove"	=> "front",
"charge"=> array(30,30),
"poison"=> "80",
); break;
		case "1208":
$skill	= array(
"name"	=> "독살",
"img"	=> "skill_024z.png",
"exp"	=> "중독된 상대는 출혈(지능 관련??)을 겪습니다.",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","all",1),
); break;
		case "1209":
$skill	= array(
"name"	=> "독극물 전파",
"img"	=> "item_031.png",
"exp"	=> "독 상태 능력 증가 + 해독",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("friend","all",1),
"PlusSTR"	=> 50,
"PlusSPD"	=> 50,
"charge"=> array(0,100),
"CurePoison"	=> true,
); break;
		case "1210":
$skill	= array(
"name"	=> "앞줄 실명",
"img"	=> "skill_073x.png",
"exp"	=> "동작 지연",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","all",1),
); break;
		case "1211":
$skill	= array(
"name"	=> "후열치맹",
"img"	=> "skill_073x.png",
"exp"	=> "동작 지연",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","all",1),
); break;
		case "1220":
$skill	= array(
"name"	=> "항독",
"img"	=> "item_026b.png",
"exp"	=> "독내성+50%",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("friend","all",1),
); break;
		case "1221":
$skill	= array(
"name"	=> "암살",
"img"	=> "we_sword001.png",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"pow"	=> "800",
"charge"=> array(40,0),
"invalid"	=> "1",
"limit"=> array("단검"=>true,),
); break;
		case "1222":
$skill	= array(
"name"	=> "독비난타",
"img"	=> "we_sword001z.png",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","multi",10),
"pow"	=> "100",
"invalid"	=> "1",
"poison"=> "100",
"limit"=> array("단검"=>true,),
); break;
		case "1223":
$skill	= array(
"name"	=> "독의 충격",
"img"	=> "skill_074y.png",
"exp"	=> "상대방이 독에 중독되어 있을 경우 위력이 6배 강해집니다.",
"sp"	=> "240",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("enemy","all",1),
"pow"	=> "80",
"limit"=> array("단검"=>true,),
); break;
		case "1224":
$skill	= array(
"name"	=> "모래바람",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "360",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"charge"=> array(0,200),
"pow"	=> "30",
"delay"	=> 60,
"limit"=> array("단검"=>true,),
); break;
		case "1225":
$skill	= array(
"name"	=> "신풍난타",
"img"	=> "we_sword001z.png",
"sp"	=> "210",
"type"	=> "0",
"learn"	=> "18",
"target"=> array("enemy","all",1),
"pow"	=> "240",
"invalid"	=> "1",
"limit"=> array("단검"=>true,),
); break;
		case "1226":
$skill	= array(
"name"	=> "바람의 칼날",
"img"	=> "we_sword001.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("enemy","multi",2),
"pow"	=> "150",
"invalid"	=> "1",
"limit"=> array("단검"=>true,),
); break;
		case "1240":
$skill	= array(
"name"	=> "후려갈기다",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("enemy","multi",2),
"pow"	=> "90",
"limit"=> array("채찍"=>true,),
); break;
		case "1241":
$skill	= array(
"name"	=> "매질",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","multi",4),
"pow"	=> "90",
"limit"=> array("채찍"=>true,),
); break;
		case "1242":
$skill	= array(
"name"	=> "채찍 폭풍",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",6),
"pow"	=> "90",
"limit"=> array("채찍"=>true,),
); break;
		case "1243":
$skill	= array(
"name"	=> "채찍",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",2),
"pow"	=> "80",
"delay"	=> 50,
"limit"=> array("채찍"=>true,),
); break;
		case "1244":
$skill	= array(
"name"	=> "신체 고정",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",2),
"pow"	=> "60",
"delay"	=> 30,
"DownSPD"	=> 30,
"limit"=> array("채찍"=>true,),
); break;
		case "1245":
$skill	= array(
"name"	=> "죽음의 뱀 결속",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","multi",4),
"pow"	=> "100",
"charge"=> array(10,40),
"delay"	=> 40,
"limit"=> array("채찍"=>true,),
); break;
		case "1246":
$skill	= array(
"name"	=> "가시 폭풍",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"charge"=> array(30,0),
"delay"	=> 30,
"limit"=> array("채찍"=>true,),
); break;
		case "2000":
$skill	= array(
"name"	=> "화염 폭풍",
"img"	=> "skill_004a.png",
"exp"	=> "",
"sp"	=> "70",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","multi",6),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(70,0),
); break;
		case "2001":
$skill	= array(
"name"	=> "지옥불",
"img"	=> "skill_006a.png",
"exp"	=> "",
"sp"	=> "320",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",12),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(120,0),
); break;
		case "2002":
$skill	= array(
"name"	=> "불기둥",
"img"	=> "skill_007a.png",
"exp"	=> "힘 Down",
"sp"	=> "40",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","multi",2),
"pow"	=> "140",
"invalid"	=> "1",
"charge"=> array(10,40),
"DownSTR"	=> "40",
); break;
		case "2003":
$skill	= array(
"name"	=> "터지다",
"img"	=> "skill_005a.png",
"exp"	=> "힘 Down",
"sp"	=> "140",
"type"	=> "1",
"learn"	=> "14",
"target"=> array("all","all",1),
"pow"	=> "140",
"charge"=> array(100,40),
"DownSTR"	=> "40",
); break;
		case "2004":
$skill	= array(
"name"	=> "유성우",
"img"	=> "skill_021z.png",
"exp"	=> "",
"sp"	=> "800",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",16),
"pow"	=> "160",
"charge"=> array(160,0),
); break;
		case "2010":
$skill	= array(
"name"	=> "아이스건",
"img"	=> "skill_001b.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "1",
"target"=> array("enemy","individual",3),
"pow"	=> "100",
"charge"=> array(30,0),
); break;
		case "2011":
$skill	= array(
"name"	=> "얼음 창던지기",
"img"	=> "skill_002b.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","individual",3),
"pow"	=> "150",
"charge"=> array(40,0),
); break;
		case "2012":
$skill	= array(
"name"	=> "눈보라",
"img"	=> "skill_006b.png",
"exp"	=> "",
"sp"	=> "240",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",10),
"pow"	=> "90",
"charge"=> array(90,0),
); break;
		case "2013":
$skill	= array(
"name"	=> "고드름",
"img"	=> "skill_034.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "0",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"charge"=> array(30,0),
); break;
		case "2014":
$skill	= array(
"name"	=> "얼음 감옥",
"img"	=> "skill_055.png",
"exp"	=> "방어 Down",
"sp"	=> "40",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "180",
"invalid"	=> "1",
"charge"=> array(40,0),
"DownDEF"	=> "30",
"DownMDEF"	=> "30",
); break;
		case "2015":
$skill	= array(
"name"	=> "파도",
"img"	=> "skill_056z.png",
"exp"	=> "방어자",
"sp"	=> "520",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",24),
"pow"	=> "80",
"charge"=> array(170,100),
"knockback"	=> "100",
); break;
		case "2020":
$skill	= array(
"name"	=> "번개",
"img"	=> "skill_030z.png",
"exp"	=> "",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "1",
"target"=> array("enemy","individual",1),
"pow"	=> "400",
"invalid"	=> "1",
"charge"=> array(50,0),
); break;
		case "2021":
$skill	= array(
"name"	=> "번개구슬",
"img"	=> "skill_054z.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","multi",3),
"pow"	=> "220",
"invalid"	=> "1",
"charge"=> array(70,0),
); break;
		case "2022":
$skill	= array(
"name"	=> "플래시",
"img"	=> "skill_022z.png",
"exp"	=> "동작 지연",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","all",1),
"charge"=> array(30,0),
"delay"	=> "25",
); break;
		case "2023":
$skill	= array(
"name"	=> "마비",
"img"	=> "skill_025.png",
"exp"	=> "동작 지연",
"sp"	=> "15",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "50",
"charge"=> array(30,0),
"delay"	=> "120",
); break;
		case "2024":
$skill	= array(
"name"	=> "뇌우",
"img"	=> "skill_006cz.png",
"exp"	=> "",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","multi",5),
"pow"	=> "300",
"charge"=> array(150,0),
"invalid"	=> "1",
); break;
		case "2025":
$skill	= array(
"name"	=> "하얀 관",
"img"	=> "skill_025.png",
"exp"	=> "동작 지연",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "15",
"target"=> array("enemy","individual",5),
"pow"	=> "150",
"charge"=> array(0,150),
"delay"	=> "150",
); break;
		case "2030":
$skill	= array(
"name"	=> "생명흡수",
"img"	=> "skill_062z.png",
"exp"	=> "HP 흡수",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"pow"	=> "230",
"invalid"	=> "1",
"charge"=> array(10,40),
); break;
		case "2031":
$skill	= array(
"name"	=> "생명의 압박",
"img"	=> "skill_078.png",
"exp"	=> "HP 흡수",
"sp"	=> "70",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"pow"	=> "120",
"charge"=> array(30,80),
); break;
		case "2032":
$skill	= array(
"name"	=> "죽음의 종",
"img"	=> "skill_041z.png",
"exp"	=> "즉사",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"invalid"	=> "1",
"charge"=> array(100,0),
); break;
		case "2033":
$skill	= array(
"name"	=> "탐식",
"img"	=> "skill_062z.png",
"exp"	=> "",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("enemy","individual",1),
"pow"	=> "150",
"invalid"	=> "1",
"charge"=> array(10,50),
); break;
		case "2034":
$skill	= array(
"name"	=> "혈액과 기의 수집",
"img"	=> "skill_078.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("all","all",1),
"pow"	=> "80",
"charge"=> array(80,80),
); break;
		case "2035":
$skill	= array(
"name"	=> "영혼의 수확",
"img"	=> "skill_041z.png",
"exp"	=> "10%즉사",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "13",
"target"=> array("enemy","individual",1),
"invalid"	=> "1",
"charge"=> array(100,100),
); break;
		case "2036":
$skill	= array(
"name"	=> "노기 폭발",
"img"	=> "skill_062z.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"invalid"	=> "1",
"charge"=> array(10,20),
); break;
		case "2040":
$skill	= array(
"name"	=> "사막의 폭풍",
"img"	=> "skill_006d.png",
"exp"	=> "동작 지연",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "80",
"charge"=> array(200,0),
"delay"	=> "80",
); break;
		case "2041":
$skill	= array(
"name"	=> "지진",
"img"	=> "skill_056y.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("all","all",1),
"pow"	=> "200",
"charge"=> array(100,30),
); break;
		case "2042":
$skill	= array(
"name"	=> "침전",
"img"	=> "skill_056.png",
"exp"	=> "",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("all","all",1),
"pow"	=> "350",
"charge"=> array(130,50),
); break;
		case "2043":
$skill	= array(
"name"	=> "모래 폭풍",
"img"	=> "skill_006d.png",
"exp"	=> "동작 지연",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("enemy","all",1),
"pow"	=> "180",
"charge"=> array(80,20),
"delay"	=> "180",
); break;
		case "2044":
$skill	= array(
"name"	=> "신사 폭풍",
"img"	=> "skill_006d.png",
"exp"	=> "동작 지연",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("enemy","all",1),
"pow"	=> "150",
"charge"=> array(200,50),
"delay"	=> "100",
); break;
		case "2045":
$skill	= array(
"name"	=> "산사태",
"img"	=> "skill_056.png",
"exp"	=> "",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("all","all",1),
"pow"	=> "500",
"charge"=> array(150,50),
); break;
		case "2046":
$skill	= array(
"name"	=> "연쇄 번개",
"img"	=> "skill_006cz.png",
"exp"	=> "",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "18",
"target"=> array("enemy","all",1),
"pow"	=> "320",
"charge"=> array(160,0),
"invalid"	=> "1",
); break;
		case "2047":
$skill	= array(
"name"	=> "성운낙하",
"img"	=> "skill_021z.png",
"exp"	=> "",
"sp"	=> "1200",
"type"	=> "1",
"learn"	=> "18",
"target"=> array("enemy","multi",24),
"pow"	=> "200",
"charge"=> array(220,0),
); break;
		case "2048":
$skill	= array(
"name"	=> "한랭연옥",
"img"	=> "skill_002b.png",
"exp"	=> "",
"sp"	=> "360",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","individual",9),
"pow"	=> "180",
"charge"=> array(90,0),
); break;
		case "2049":
$skill	= array(
"name"	=> "빙결계",
"img"	=> "skill_055.png",
"exp"	=> "공격 Down",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "180",
"invalid"	=> "1",
"charge"=> array(60,0),
"DownATK"	=> "30",
"DownMATK"	=> "30",
); break;
		case "2050":
$skill	= array(
"name"	=> "맹렬한 폭격",
"img"	=> "skill_024.png",
"exp"	=> "독화",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","multi",2),
"pow"	=> "200",
"charge"=> array(40,0),
"poison"=> "100",
); break;
		case "2051":
$skill	= array(
"name"	=> "독연",
"img"	=> "skill_079.png",
"exp"	=> "독화",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"pow"	=> "150",
"charge"=> array(70,0),
"poison"=> "100",
); break;
		case "2055":
$skill	= array(
"name"	=> "영혼의 복수",
"img"	=> "skill_065.png",
"exp"	=> "사망자 수가 많을수록 부상자 수도 늘어납니다.",
"sp"	=> "340",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"pow"	=> "50",
"charge"=> array(0,60),
); break;
		case "2056":
$skill	= array(
"name"	=> "좀비 부활",
"img"	=> "skill_061.png",
"exp"	=> "우리 편이 부활했다",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"charge"	=> array(50,100),
"DownMAXHP"=>"30",
"DownDEF"=>"100",
"DownMDEF"=>"100",
"DownSPD"=>"50",
"priority"	=> "Dead",
); break;
		case "2057":
$skill	= array(
"name"	=> "자아 탈바꿈",
"img"	=> "skill_066.png",
"exp"	=> "HP가 60% 이하일 때 사용하세요(1라운드 제한)",
"sp"	=> "250",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"=> array(0,50),
"UpMAXHP"=> 200,
"UpMATK"=> 100,
"UpINT"=> 100,
"UpSPD"=> 50,
); break;
		case "2058":
$skill	= array(
"name"	=> "혈기한계",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(20,10),
"UpMAXHP"=> 200,
"DownMAXSP"=> 100,
); break;
		case "2059":
$skill	= array(
"name"	=> "나무의 영혼 변화",
"img"	=> "skill_066.png",
"exp"	=> "(1라운드 제한)",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,100),
"UpMAXHP"=> 200,
"UpINT"=> 60,
"UpDEF"=> 35,
"UpMDEF"=> 35,
); break;
		case "2060":
$skill	= array(
"name"	=> "마법의 폭발",
"img"	=> "skill_020.png",
"exp"	=> "",
"sp"	=> "140",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "500",
"charge"=> array(0,0),
); break;
		case "2061":
$skill	= array(
"name"	=> "뇌전 입장",
"img"	=> "skill_025.png",
"exp"	=> "동작 지연",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","multi",2),
"pow"	=> "40",
"charge"=> array(60,0),
"delay"	=> "80",
); break;
		case "2062":
$skill	= array(
"name"	=> "자뻑",
"img"	=> "skill_005a.png",
"exp"	=> "",
"sp"	=> "1000",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("all","all",1),
"pow"	=> "1000",
"charge"=> array(200,1000),
); break;
		case "2063":
$skill	= array(
"name"	=> "야성변화",
"img"	=> "skill_066.png",
"exp"	=> "(1라운드 제한)",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,100),
"UpMAXHP"=> 200,
"UpSTR"=> 100,
"UpATK"=> 100,
"UpDEF"=> 100,
"DownINT"=> 100,
"DownMATK"=> 100,
"DownMDEF"=> 100,
); break;
		case "2064":
$skill	= array(
"name"	=> "노쇠",
"img"	=> "skill_066.png",
"sp"	=> "240",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","individual",1),
"DownMAXHP"	=> "20",
"charge"=> array(80,0),
"invalid"	=> true,
); break;
		case "2065":
$skill	= array(
"name"	=> "죽음의 부적",
"img"	=> "skill_066.png",
"sp"	=> "600",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("enemy","all",1),
"DownMAXHP"	=> "10",
"charge"=> array(150,0),
"invalid"	=> true,
); break;
		case "2066":
$skill	= array(
"name"	=> "차원칼",
"img"	=> "skill_077.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "160",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"pow"	=> "240",
"charge"=> array(40,20),
"pierce"=> true,
); break;
		case "2067":
$skill	= array(
"name"	=> "매직 피어싱",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "320",
"type"	=> "1",
"learn"	=> "16",
"target"=> array("enemy","multi",4),
"pow"	=> "200",
"charge"=> array(80,20),
"pierce"=> true,
); break;
		case "2068":
$skill	= array(
"name"	=> "공간폭렬",
"img"	=> "skill_077z.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "24",
"target"=> array("all","all",1),
"pow"	=> "160",
"charge"=> array(120,20),
"pierce"=> true,
); break;
		case "2069":
$skill	= array(
"name"	=> "번개 직격",
"img"	=> "skill_030z.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "2",
"target"=> array("enemy","individual",1),
"pow"	=> "300",
"invalid"	=> "1",
"charge"=> array(20,0),
); break;
		case "2070":
$skill	= array(
"name"	=> "질뢰의 추격",
"img"	=> "skill_054z.png",
"exp"	=> "",
"sp"	=> "180",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","multi",3),
"pow"	=> "240",
"invalid"	=> "1",
"charge"=> array(30,0),
); break;
		case "2071":
$skill	= array(
"name"	=> "전류진동",
"img"	=> "skill_030z.png",
"exp"	=> "",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"invalid"	=> "1",
"charge"=> array(60,0),
); break;
		case "2072":
$skill	= array(
"name"	=> "거대화",
"img"	=> "skill_066.png",
"sp"	=> "400",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("friend","individual",1),
"UpMAXHP"	=> "100",
"charge"=> array(100,0),
"invalid"	=> true,
); break;
		case "2090":
$skill	= array(
"name"	=> "에너지 스틸",
"img"	=> "skill_037.png",
"exp"	=> "SP 흡수",
"sp"	=> "10",
"type"	=> "1",
"learn"	=> "3",
"target"=> array("enemy","individual",1),
"pow"	=> "150",
"invalid"	=> "1",
"charge"=> array(30,0),
); break;
		case "2091":
$skill	= array(
"name"	=> "에너지 수집",
"img"	=> "skill_037.png",
"exp"	=> "SP 흡수",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"pow"	=> "70",
"invalid"	=> "1",
"charge"=> array(100,0),
); break;
		case "2100":
$skill	= array(
"name"	=> "찬란한 빛",
"img"	=> "skill_022.png",
"exp"	=> "",
"sp"	=> "10",
"type"	=> "1",
"learn"	=> "1",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(10,0),
); break;
		case "2101":
$skill	= array(
"name"	=> "성광 폭발",
"img"	=> "skill_010z.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","multi",3),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(40,0),
); break;
		case "2102":
$skill	= array(
"name"	=> "대십자",
"img"	=> "item_036b.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"charge"=> array(70,30),
"MagicCircleDeleteTeam"	=> 1,
); break;
		case "2103":
$skill	= array(
"name"	=> "괴멸타격",
"img"	=> "skill_010z.png",
"exp"	=> "",
"sp"	=> "120",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"pow"	=> "400",
"invalid"	=> "1",
"charge"=> array(20,60),
); break;
		case "2104":
$skill	= array(
"name"	=> "파괴 충격",
"img"	=> "skill_010z.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "300",
"invalid"	=> "1",
"charge"=> array(30,90),
); break;
		case "2110":
$skill	= array(
"name"	=> "방해영창",
"img"	=> "skill_016.png",
"exp"	=> "돌격(찬송)이 방해가 된다",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"invalid"	=> "1",
"priority"	=> "Charge",
"delay"	=> "200",
"charge"	=> array(0,60),
); break;
		case "2111":
$skill	= array(
"name"	=> "방해영창 (전원)",
"img"	=> "skill_016.png",
"exp"	=> "돌격(찬송)은 (전체를) 방해한다",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"invalid"	=> "1",
"priority"	=> "Charge",
"delay"	=> "100",
"charge"	=> array(0,60),
); break;
		case "2112":
$skill	= array(
"name"	=> "족쇄",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"delay"	=> 100,
"invalid"	=> "1",
"charge"=> array(0,100),
); break;
		case "2300":
$skill	= array(
"name"	=> "사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "100",
"invalid"	=> "1",
"priority"	=> "Back",
"charge"=> array(0,0),
"limit"=> array("궁"=>true,),
); break;
		case "2301":
$skill	= array(
"name"	=> "강력사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "200",
"invalid"	=> "1",
"charge"=> array(0,30),
"limit"=> array("궁"=>true),
); break;
		case "2302":
$skill	= array(
"name"	=> "화살비",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","multi",6),
"inf"	=> "dex",
"pow"	=> "60",
"invalid"	=> "1",
"charge"=> array(0,0),
"limit"=> array("궁"=>true),
); break;
		case "2303":
$skill	= array(
"name"	=> "불시 사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "80",
"invalid"	=> "1",
"priority"	=> "Back",
"charge"=> array(0,0),
"delay"	=> "80",
"limit"=> array("궁"=>true),
); break;
		case "2304":
$skill	= array(
"name"	=> "중독 공격",
"img"	=> "item_042.png",
"exp"	=> "독",
"sp"	=> "15",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","multi",2),
"inf"	=> "dex",
"pow"	=> "50",
"invalid"	=> "1",
"charge"=> array(0,0),
"poison"=> "100",
"limit"=> array("궁"=>true),
); break;
		case "2305":
$skill	= array(
"name"	=> "위치 변경 사격",
"img"	=> "item_042.png",
"exp"	=> "방어자",
"sp"	=> "30",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "100",
"charge"=> array(30,0),
"knockback"	=> "100",
"limit"=> array("궁"=>true),
); break;
		case "2306":
$skill	= array(
"name"	=> "관통 사격",
"img"	=> "item_042.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "90",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "180",
"invalid"	=> "1",
"charge"=> array(60,0),
"pierce"=> true,
"limit"=> array("궁"=>true),
); break;
		case "2307":
$skill	= array(
"name"	=> "허리케인 사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "180",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("enemy","multi",16),
"inf"	=> "dex",
"pow"	=> "70",
"invalid"	=> "1",
"charge"=> array(50,80),
"limit"=> array("궁"=>true),
); break;
		case "2308":
$skill	= array(
"name"	=> "겨냥하기",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "130",
"invalid"	=> "1",
"priority"	=> "Back",
"charge"=> array(0,0),
"limit"=> array("궁"=>true),
); break;
		case "2309":
$skill	= array(
"name"	=> "무장해제",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "70",
"invalid"	=> "1",
"priority"	=> "Back",
"DownATK" => "70",
"DownMATK" => "70",
"limit"=> array("궁"=>true),
); break;
		case "2310":
$skill	= array(
"name"	=> "이중 사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "28",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("enemy","multi",2),
"inf"	=> "dex",
"pow"	=> "80",
"invalid"	=> "1",
"priority"	=> "Back",
"limit"=> array("궁"=>true),
); break;
		case "2311":
$skill	= array(
"name"	=> "독운전",
"img"	=> "item_042.png",
"exp"	=> "독",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"inf"	=> "dex",
"pow"	=> "60",
"invalid"	=> "1",
"charge"=> array(0,0),
"poison"=> "100",
"limit"=> array("궁"=>true),
); break;
		case "2312":
$skill	= array(
"name"	=> "마비 산란",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "240",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"inf"	=> "dex",
"pow"	=> "150",
"invalid"	=> "1",
"charge"=> array(120,90),
"delay"	=> "60",
"limit"=> array("궁"=>true),
); break;
		case "2313":
$skill	= array(
"name"	=> "장갑 해제",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "50",
"invalid"	=> "1",
"priority"	=> "Back",
"DownDEF" => "50",
"DownMDEF" => "50",
"limit"=> array("궁"=>true),
); break;
		case "2314":
$skill	= array(
"name"	=> "철갑 사격",
"img"	=> "item_042.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "180",
"type"	=> "0",
"learn"	=> "16",
"target"=> array("enemy","multi",3),
"inf"	=> "dex",
"pow"	=> "160",
"invalid"	=> "1",
"charge"=> array(80,0),
"pierce"=> true,
"limit"=> array("궁"=>true),
); break;
		case "2315":
$skill	= array(
"name"	=> "확산사격",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "160",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"inf"	=> "dex",
"pow"	=> "200",
"invalid"	=> "1",
"charge"=> array(40,80),
"limit"=> array("궁"=>true),
); break;
		case "2316":
$skill	= array(
"name"	=> "갑옷을 입은 산란",
"img"	=> "item_042.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "300",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("enemy","all",1),
"inf"	=> "dex",
"pow"	=> "150",
"invalid"	=> "1",
"charge"=> array(100,0),
"pierce"=> true,
"limit"=> array("궁"=>true),
); break;
		case "2317":
$skill	= array(
"name"	=> "불벼락 한 방",
"img"	=> "item_042.png",
"exp"	=> "",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("enemy","individual",1),
"inf"	=> "dex",
"pow"	=> "450",
"invalid"	=> "1",
"priority"	=> "Back",
"charge"=> array(30,50),
"limit"=> array("궁"=>true),
); break;
		case "2318":
$skill	= array(
"name"	=> "강력한 석궁 푸시샷",
"img"	=> "item_042.png",
"exp"	=> "방어자",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"inf"	=> "dex",
"pow"	=> "80",
"charge"=> array(50,0),
"knockback"	=> "100",
"limit"=> array("궁"=>true),
); break;
		case "2319":
$skill	= array(
"name"	=> "폭발적 관통",
"img"	=> "item_042.png",
"exp"	=> "방어를 무시하다",
"sp"	=> "240",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("all","all",1),
"inf"	=> "dex",
"pow"	=> "360",
"invalid"	=> "1",
"charge"=> array(120,0),
"pierce"=> true,
"limit"=> array("궁"=>true),
); break;
		case "2400":
$skill	= array(
"name"	=> "고블린 소환",
"img"	=> "skill_066.png",
"exp"	=> "고블린 소환",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(30,0),
"summon"	=> "1000",
); break;
		case "2401":
$skill	= array(
"name"	=> "돼지 소환",
"img"	=> "skill_028.png",
"exp"	=> "돼지 소환",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"=> array(0,100),
"summon"	=> "5008",
); break;
		case "2402":
$skill	= array(
"name"	=> "미친 돼지 소환",
"img"	=> "skill_028.png",
"exp"	=> "미친 돼지 소환",
"sp"	=> "250",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("self","individual",1),
"charge"=> array(0,300),
"summon"	=> "5009",
); break;
		case "2403":
$skill	= array(
"name"	=> "거대한 괴물을 소환하다",
"img"	=> "skill_029.png",
"exp"	=> "거대한 괴물을 소환하다",
"sp"	=> "350",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,500),
"summon"	=> "5010",
); break;
		case "2404":
$skill	= array(
"name"	=> "사자 소환",
"img"	=> "skill_028.png",
"exp"	=> "사자 소환",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"=> array(0,100),
"summon"	=> "5011",
"quick"	=> true,
); break;
		case "2405":
$skill	= array(
"name"	=> "곰 소환",
"img"	=> "skill_028.png",
"exp"	=> "곰 소환",
"sp"	=> "250",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("self","individual",1),
"charge"=> array(0,300),
"summon"	=> "5012",
"quick"	=> true,
); break;
		case "2406":
$skill	= array(
"name"	=> "합성 짐승 소환",
"img"	=> "skill_029.png",
"exp"	=> "합성 짐승 소환",
"sp"	=> "350",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,500),
"summon"	=> "5013",
"quick"	=> true,
); break;
		case "2407":
$skill	= array(
"name"	=> "유키오 소환",
"img"	=> "skill_028.png",
"exp"	=> "유키오 소환",
"sp"	=> "250",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("self","individual",1),
"charge"=> array(0,300),
"summon"	=> "5014",
"quick"	=> true,
); break;
		case "2408":
$skill	= array(
"name"	=> "작은 요정 소환",
"img"	=> "skill_028.png",
"exp"	=> "작은 요정 소환",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"=> array(0,100),
"summon"	=> "5015",
"quick"	=> true,
); break;
		case "2409":
$skill	= array(
"name"	=> "날아다니는 하마 소환",
"img"	=> "skill_028.png",
"exp"	=> "날아다니는 하마 소환",
"sp"	=> "250",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("self","individual",1),
"charge"=> array(0,300),
"summon"	=> "5016",
"quick"	=> true,
); break;
		case "2410":
$skill	= array(
"name"	=> "드래곤 소환",
"img"	=> "skill_029.png",
"exp"	=> "드래곤 소환",
"sp"	=> "350",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,500),
"summon"	=> "5017",
"quick"	=> true,
); break;
		case "2411":
$skill	= array(
"name"	=> "미친 돼지왕 소환",
"img"	=> "skill_029.png",
"exp"	=> "미친 돼지왕 소환",
"sp"	=> "550",
"type"	=> "0",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(0,800),
"summon"	=> "5018",
"quick"	=> true,
); break;
		case "2412":
$skill	= array(
"name"	=> "헬하운드 소환",
"img"	=> "skill_029.png",
"exp"	=> "헬하운드 소환",
"sp"	=> "550",
"type"	=> "0",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(0,800),
"summon"	=> "5019",
"quick"	=> true,
); break;
		case "2413":
$skill	= array(
"name"	=> "유성 거북이 소환",
"img"	=> "skill_029.png",
"exp"	=> "유성 거북이 소환",
"sp"	=> "550",
"type"	=> "0",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(0,800),
"summon"	=> "5020",
"quick"	=> true,
); break;
		case "2460":
$skill	= array(
"name"	=> "좀비",
"img"	=> "skill_028.png",
"exp"	=> "좀비",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "2",
"target"=> array("self","individual",1),
"charge"=> array(30,0),
"summon"	=> "5004",
); break;
		case "2461":
$skill	= array(
"name"	=> "식시귀",
"img"	=> "skill_028.png",
"exp"	=> "식시귀",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"=> array(40,0),
"summon"	=> "5005",
); break;
		case "2462":
$skill	= array(
"name"	=> "미라",
"img"	=> "skill_028.png",
"exp"	=> "미라",
"sp"	=> "120",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("self","individual",1),
"charge"=> array(60,0),
"summon"	=> "5006",
); break;
		case "2463":
$skill	= array(
"name"	=> "좀비 컨트롤",
"img"	=> "skill_028.png",
"exp"	=> "3체 소환",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"=> array(50,50),
"summon"	=> array(5004,5005,5004),
); break;
		case "2464":
$skill	= array(
"name"	=> "묘지",
"img"	=> "skill_028.png",
"exp"	=> "3체 소환",
"sp"	=> "360",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("self","individual",1),
"charge"=> array(100,0),
"summon"	=> array(5006,5007,5006),
); break;
		case "2465":
$skill	= array(
"name"	=> "레지던트 이블",
"img"	=> "skill_028.png",
"exp"	=> "5체 소환",
"sp"	=> "560",
"type"	=> "1",
"learn"	=> "16",
"target"=> array("self","individual",1),
"charge"=> array(160,0),
"summon"	=> array(5004,5006,5007,5006,5004),
); break;
		case "2466":
$skill	= array(
"name"	=> "홍마관소환",
"img"	=> "skill_028.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,1000),
"summon"	=> "5203",
); break;
		case "2467":
$skill	= array(
"name"	=> "미라 전사들",
"img"	=> "skill_028.png",
"exp"	=> "미라",
"sp"	=> "240",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"=> array(80,0),
"summon"	=> "5023",
); break;
		case "2468":
$skill	= array(
"name"	=> "머미 스쿼드",
"img"	=> "skill_028.png",
"exp"	=> "3체 소환",
"sp"	=> "480",
"type"	=> "1",
"learn"	=> "16",
"target"=> array("self","individual",1),
"charge"=> array(120,0),
"summon"	=> array(5023,5023,5023),
); break;
		case "2469":
$skill	= array(
"name"	=> "미라 군대",
"img"	=> "skill_028.png",
"exp"	=> "5체 소환",
"sp"	=> "960",
"type"	=> "1",
"learn"	=> "24",
"target"=> array("self","individual",1),
"charge"=> array(180,0),
"summon"	=> array(5007,5023,5024,5023,5007),
); break;
		case "2480":
$skill	= array(
"name"	=> "치유하는 토끼",
"img"	=> "skill_038.png",
"exp"	=> "치유 토끼 소환",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> "5000",
"quick"	=> true,
); break;
		case "2481":
$skill	= array(
"name"	=> "천사들이 내려온다",
"img"	=> "skill_038.png",
"exp"	=> "천사들이 내려온다",
"sp"	=> "160",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("self","individual",1),
"charge"=> array(60,0),
"summon"	=> "5001",
"quick"	=> true,
); break;
		case "2482":
$skill	= array(
"name"	=> "엔젤 엘프",
"img"	=> "skill_038.png",
"exp"	=> "",
"sp"	=> "360",
"type"	=> "1",
"learn"	=> "16",
"target"=> array("self","individual",1),
"charge"=> array(60,60),
"summon"	=> "5021",
"quick"	=> true,
); break;
		case "2483":
$skill	= array(
"name"	=> "신이 강림할 것이다",
"img"	=> "skill_038.png",
"exp"	=> "",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "24",
"target"=> array("self","individual",1),
"charge"=> array(60,120),
"summon"	=> "5022",
"quick"	=> true,
); break;
		case "2500":
$skill	= array(
"name"	=> "이프리트",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "700",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(100,300),
"summon"	=> "5103",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 4,
); break;
		case "2501":
$skill	= array(
"name"	=> "레비아탄",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "700",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(100,300),
"summon"	=> "5104",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 4,
); break;
		case "2502":
$skill	= array(
"name"	=> "천사장",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "900",
"type"	=> "1",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(100,300),
"summon"	=> "5100",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "2503":
$skill	= array(
"name"	=> "타락천사",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "900",
"type"	=> "1",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(100,300),
"summon"	=> "5101",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "2504":
$skill	= array(
"name"	=> "토르",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "1200",
"type"	=> "1",
"learn"	=> "35",
"target"=> array("self","individual",1),
"charge"=> array(100,500),
"summon"	=> "5102",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "2505":
$skill	= array(
"name"	=> "천공룡",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "1800",
"type"	=> "1",
"learn"	=> "50",
"target"=> array("self","individual",1),
"charge"=> array(100,1000),
"summon"	=> "5107",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "2506":
$skill	= array(
"name"	=> "비취룡",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "1800",
"type"	=> "1",
"learn"	=> "50",
"target"=> array("self","individual",1),
"charge"=> array(100,1000),
"summon"	=> "5108",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "2507":
$skill	= array(
"name"	=> "거암룡",
"img"	=> "skill_029.png",
"exp"	=> "",
"sp"	=> "1800",
"type"	=> "1",
"learn"	=> "50",
"target"=> array("self","individual",1),
"charge"=> array(100,1000),
"summon"	=> "5109",
"quick"	=> true,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "3000":
$skill	= array(
"name"	=> "치료하기",
"img"	=> "skill_013a.png",
"exp"	=> "HP 회복",
"sp"	=> "5",
"type"	=> "1",
"learn"	=> "0",
"target"=> array("friend","individual",1),
"pow"	=> "200",
"support"	=> "1",
"priority"	=> "LowHpRate",
"exp"	=> "",
"charge"=> array(30,0),
); break;
		case "3001":
$skill	= array(
"name"	=> "고급 치료",
"img"	=> "skill_013b.png",
"exp"	=> "HP 회복",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("friend","multi",2),
"pow"	=> "300",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(50,0),
); break;
		case "3002":
$skill	= array(
"name"	=> "무리 회복",
"img"	=> "skill_013c.png",
"exp"	=> "HP 회복",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"pow"	=> "150",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(50,0),
); break;
		case "3003":
$skill	= array(
"name"	=> "빠른 회복",
"img"	=> "skill_013b.png",
"exp"	=> "HP 회복",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("friend","multi",2),
"pow"	=> "180",
"support"	=> "1",
"priority"	=> "LowHpRate",
); break;
		case "3004":
$skill	= array(
"name"	=> "전체 회복",
"img"	=> "skill_013b.png",
"exp"	=> "HP 회복",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","multi",3),
"pow"	=> "200",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(40,0),
); break;
		case "3005":
$skill	= array(
"name"	=> "차차 회복",
"img"	=> "skill_013b.png",
"exp"	=> "대상의 HP가 30% 미만일 경우 회복량이 두 배가 됩니다.",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("friend","multi",3),
"pow"	=> "125",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(20,0),
); break;
		case "3006":
$skill	= array(
"name"	=> "군체유합",
"img"	=> "skill_013c.png",
"exp"	=> "HP 회복",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "16",
"target"=> array("friend","all",1),
"pow"	=> "360",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(60,30),
); break;
		case "3007":
$skill	= array(
"name"	=> "슈퍼 치료",
"img"	=> "skill_013b.png",
"exp"	=> "HP 회복",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","multi",3),
"pow"	=> "360",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(60,30),
); break;
		case "3008":
$skill	= array(
"name"	=> "쾌속 치료",
"img"	=> "skill_013a.png",
"exp"	=> "HP 회복",
"sp"	=> "40",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","multi",2),
"pow"	=> "240",
"support"	=> "1",
"priority"	=> "LowHpRate",
); break;
		case "3009":
$skill	= array(
"name"	=> "아물아물",
"img"	=> "skill_013b.png",
"exp"	=> "대상의 HP가 30% 미만일 경우 회복량이 두 배가 됩니다.",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","multi",3),
"pow"	=> "160",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(10,60),
); break;
		case "3010":
$skill	= array(
"name"	=> "원기 회복",
"img"	=> "skill_019.png",
"exp"	=> "SP 회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "0",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3011":
$skill	= array(
"name"	=> "집중정신",
"img"	=> "skill_019z.png",
"exp"	=> "SP 회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(30,0),
); break;
		case "3012":
$skill	= array(
"name"	=> "악마에게 피를",
"img"	=> "skill_019y.png",
"exp"	=> "SP 회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("self","individual",1),
"pow"	=> "100",
"support"	=> "1",
"charge"	=> array(20,0),
); break;
		case "3013":
$skill	= array(
"name"	=> "악마에서 피로",
"img"	=> "exchange.png",
"exp"	=> "HP,SP 교환(%)",
"sp"	=> "10",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3020":
$skill	= array(
"name"	=> "마력상승",
"img"	=> "skill_019.png",
"exp"	=> "최대 SP 상승",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3021":
$skill	= array(
"name"	=> "정신집중",
"img"	=> "skill_019z.png",
"exp"	=> "SP 회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpSPD"	=> "50",
"UpMATK"	=> "25",
"UpATK"	=> "25",
); break;
		case "3030":
$skill	= array(
"name"	=> "이상 회복",
"img"	=> "skill_008.png",
"exp"	=> "비정상적인 회복",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "2",
"target"=> array("friend","all",1),
"support"	=> "1",
"pow"	=> "70",
"charge"	=> array(50,0),
"CurePoison"	=> true,
); break;
		case "3040":
$skill	= array(
"name"	=> "회복",
"img"	=> "mat_026.png",
"exp"	=> "회복",
"sp"	=> "120",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(40,30),
"pow"		=> "600",
"priority"	=> "Dead",
); break;
		case "3041":
$skill	= array(
"name"	=> "죽은 자의 소생",
"img"	=> "skill_008.png",
"exp"	=> "회복",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "25",
"target"=> array("friend","multi",2),
"support"	=> "1",
"charge"	=> array(0,250),
"pow"		=> "250",
"priority"	=> "Dead",
); break;
		case "3042":
$skill	= array(
"name"	=> "죽은 자의 환생",
"img"	=> "mat_026.png",
"exp"	=> "회복",
"sp"	=> "350",
"type"	=> "1",
"learn"	=> "15",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,150),
"pow"		=> "150",
"priority"	=> "Dead",
); break;
		case "3050":
$skill	= array(
"name"	=> "즉각적인 조치를 취하세요",
"img"	=> "skill_015.png",
"exp"	=> "즉각적인 조치를 취하세요",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(200,100),
); break;
		case "3051":
$skill	= array(
"name"	=> "타임 점프",
"img"	=> "skill_015.png",
"exp"	=> "즉각적인 조치를 취하세요",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "30",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,600),
); break;
		case "3052":
$skill	= array(
"name"	=> "무슨일이 일어난지 모르겠어요",
"img"	=> "skill_015.png",
"exp"	=> "즉각적인 조치를 취하세요",
"sp"	=> "90",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,90),
); break;
		case "3055":
$skill	= array(
"name"	=> "찬송가를 빨리 부르다",
"img"	=> "skill_016z.png",
"exp"	=> "찬송가를 빨리 부르다",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,100),
); break;
		case "3056":
$skill	= array(
"name"	=> "초스피드 아리아",
"img"	=> "skill_016z.png",
"exp"	=> "찬송가를 빨리 부르다",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,200),
); break;
		case "3060":
$skill	= array(
"name"	=> "성광 보호",
"img"	=> "skill_045z.png",
"exp"	=> "1라운드 데미지 무효화",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,100),
); break;
		case "3101":
$skill	= array(
"name"	=> "축복",
"img"	=> "skill_008.png",
"exp"	=> "SP 회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "0",
"target"=> array("friend","all",1),
"SpRecoveryRate"	=> 3,
"support"	=> "1",
); break;
		case "3102":
$skill	= array(
"name"	=> "대축복",
"img"	=> "skill_009.png",
"exp"	=> "SP 회복",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("friend","all",1),
"SpRecoveryRate"	=> 5,
"support"	=> "1",
"charge"	=> array(40,0),
); break;
		case "3103":
$skill	= array(
"name"	=> "성역",
"img"	=> "skill_010.png",
"exp"	=> "HP,SP 회복",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"pow"	=> "500",
"SpRecoveryRate"	=> 7,
"support"	=> "1",
"charge"	=> array(50,0),
"MagicCircleDeleteTeam"	=> 2,
"CurePoison"	=> true,
); break;
		case "3104":
$skill	= array(
"name"	=> "신계 강림",
"img"	=> "skill_010.png",
"exp"	=> "HP,SP 회복",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "14",
"target"=> array("friend","all",1),
"pow"	=> "1000",
"SpRecoveryRate"	=> 10,
"support"	=> "1",
"charge"	=> array(100,40),
"MagicCircleDeleteTeam"	=> 4,
"CurePoison"	=> true,
); break;
		case "3105":
$skill	= array(
"name"	=> "초축복",
"img"	=> "skill_009.png",
"exp"	=> "SP 회복",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"SpRecoveryRate"	=> 8,
"support"	=> "1",
"charge"	=> array(80,0),
); break;
		case "3110":
$skill	= array(
"name"	=> "강화",
"img"	=> "skill_059.png",
"exp"	=> "자기 강화",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "2",
"target"=> array("self","individual",1),
"support"	=> "1",
"UpSTR"	=> "30",
); break;
		case "3111":
$skill	= array(
"name"	=> "한도초과",
"img"	=> "skill_059z.png",
"exp"	=> "자기 강화·약",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("self","individual",1),
"support"	=> "1",
"UpSTR"	=> "80",
"DownMAXHP"	=> "20",
); break;
		case "3112":
$skill	= array(
"name"	=> "방어",
"img"	=> "skill_059y.png",
"exp"	=> "자기 강화·약·전위화",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("self","individual",1),
"support"	=> "1",
"UpDEF"=> "20",
"DownSTR"=> "20",
"move"	=> "front",
); break;
		case "3113":
$skill	= array(
"name"	=> "광폭화",
"img"	=> "skill_058z.png",
"exp"	=> "광폭화",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3114":
$skill	= array(
"name"	=> "영격 준비",
"img"	=> "skill_059y.png",
"exp"	=> "자기 강화",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("self","individual",1),
"support"	=> "1",
"UpDEF"=> "80",
"UpMDEF"=> "80",
"DownSPD"=> "80",
"move"	=> "front",
); break;
		case "3115":
$skill	= array(
"name"	=> "기백의 힘",
"img"	=> "skill_059.png",
"exp"	=> "자기 강화",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("self","individual",1),
"charge"	=> array(50,0),
"support"	=> "1",
"UpSTR"	=> "50",
"UpATK"	=> "50",
); break;
		case "3116":
$skill	= array(
"name"	=> "마법 계약",
"img"	=> "skill_059.png",
"exp"	=> "자기 강화",
"sp"	=> "180",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("self","individual",1),
"charge"	=> array(60,0),
"support"	=> "1",
"UpINT"	=> "50",
"UpMATK"	=> "50",
); break;
		case "3120":
$skill	= array(
"name"	=> "응급 처치",
"img"	=> "skill_014.png",
"exp"	=> "자신의 HP 회복",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "1",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3121":
$skill	= array(
"name"	=> "자기회복",
"img"	=> "skill_062.png",
"exp"	=> "",
"sp"	=> "15",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("self","individual",1),
"support"	=> "1",
); break;
		case "3122":
$skill	= array(
"name"	=> "초회복",
"img"	=> "skill_062y.png",
"exp"	=> "손실된 체력의 60%를 회복합니다.",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(0,30),
); break;
		case "3123":
$skill	= array(
"name"	=> "자기 연속 재생",
"img"	=> "skill_062x.png",
"exp"	=> "HP지속 재생력+10%",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(10,10),
"HpRegen"	=> 10,
); break;
		case "3124":
$skill	= array(
"name"	=> "서커 펀치",
"img"	=> "skill_062y.png",
"exp"	=> "HP가 20% 미만일 때 사용하면 손실된 HP의 80%를 회복합니다.",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(0,80),
); break;
		case "3130":
$skill	= array(
"name"	=> "찬송 보조원",
"img"	=> "skill_062x.png",
"exp"	=> "찬송 보조원",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "3",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(0,30),
"HpRegen"	=> 10,
); break;
		case "3135":
$skill	= array(
"name"	=> "성스러운 빛 방패",
"img"	=> "skill_062x.png",
"exp"	=> "1라운드 데미지 무효화",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "3",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(0,30),
); break;
		case "3136":
$skill	= array(
"name"	=> "라이프 쉴드",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "240",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"support"	=> "1",
"pow"	=> "120",
"charge"	=> array(40,20),
); break;
		case "3137":
$skill	= array(
"name"	=> "에너지 실드",
"img"	=> "skill_009.png",
"exp"	=> "",
"sp"	=> "240",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"SpRecoveryRate"	=> 4,
"support"	=> "1",
"charge"	=> array(40,20),
); break;
		case "3138":
$skill	= array(
"name"	=> "바람의 신에게 홀린",
"img"	=> "skill_059.png",
"exp"	=> "속도 향상",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("self","individual",1),
"support"	=> "1",
"UpSPD"	=> "100",
); break;
		case "3139":
$skill	= array(
"name"	=> "바람의 보호",
"img"	=> "skill_044.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "20",
"target"=> array("friend","all",1),
"support"	=> "1",
"UpSPD"	=> "30",
); break;
		case "3200":
$skill	= array(
"name"	=> "용기",
"img"	=> "skill_044.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpSTR"	=> "30",
); break;
		case "3201":
$skill	= array(
"name"	=> "휴전 및 증원군",
"img"	=> "skill_044.png",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,60),
"UpDEF"	=> "50",
); break;
		case "3202":
$skill	= array(
"name"	=> "반마법 장벽",
"img"	=> "skill_044.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,60),
"UpMDEF"	=> "50",
); break;
		case "3205":
$skill	= array(
"name"	=> "두려움",
"img"	=> "skill_048.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"DownSTR"	=> "40",
); break;
		case "3206":
$skill	= array(
"name"	=> "광노",
"img"	=> "skill_048.png",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("enemy","all",1),
"support"	=> "1",
"charge"	=> array(80,80),
"DownSTR"	=> "40",
"DownINT"	=> "40",
"DownSPD"	=> "40",
); break;
		case "3210":
$skill	= array(
"name"	=> "매력",
"img"	=> "skill_046.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpINT"	=> "30",
); break;
		case "3215":
$skill	= array(
"name"	=> "지능 파괴",
"img"	=> "skill_050.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"DownINT"	=> "40",
); break;
		case "3216":
$skill	= array(
"name"	=> "백병전",
"img"	=> "skill_050.png",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("all","all",1),
"support"	=> "1",
"charge"	=> array(100,100),
"DownINT"	=> "100",
"DowMATK"	=> "100",
); break;
		case "3217":
$skill	= array(
"name"	=> "육체적 강화",
"img"	=> "skill_050.png",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("all","all",1),
"support"	=> "1",
"charge"	=> array(100,100),
"UpSTR"	=> "100",
); break;
		case "3220":
$skill	= array(
"name"	=> "방어 지대",
"img"	=> "skill_045.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpDEF"	=> "10",
); break;
		case "3221":
$skill	= array(
"name"	=> "보호 +",
"img"	=> "skill_045.png",
"sp"	=> "90",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(90,0),
"UpDEF"	=> "15",
); break;
		case "3222":
$skill	= array(
"name"	=> "보호 Q",
"img"	=> "skill_045.png",
"sp"	=> "70",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,0),
"UpDEF"	=> "5",
); break;
		case "3230":
$skill	= array(
"name"	=> "파워 존",
"img"	=> "skill_070.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpMDEF"	=> "10",
); break;
		case "3231":
$skill	= array(
"name"	=> "파워 존[자기]",
"img"	=> "skill_070.png",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(30,0),
"UpMDEF"	=> "30",
); break;
		case "3235":
$skill	= array(
"name"	=> "저항 감소",
"img"	=> "skill_071.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("enemy","all",1),
"support"	=> "1",
"charge"	=> array(30,10),
"DownMDEF"	=> "10",
); break;
		case "3250":
$skill	= array(
"name"	=> "역중 보조",
"img"	=> "skill_044.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"PlusSTR"	=> 30,
); break;
		case "3255":
$skill	= array(
"name"	=> "마법 보조",
"img"	=> "skill_046.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"PlusINT"	=> 30,
); break;
		case "3265":
$skill	= array(
"name"	=> "속도보조",
"img"	=> "skill_015.png",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,0),
"PlusSPD"	=> 20,
); break;
		case "3270":
$skill	= array(
"name"	=> "공격 보조",
"img"	=> "skill_015.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(60,0),
"UpATK"	=> "15",
"UpMATK"	=> "15",
); break;
		case "3275":
$skill	= array(
"name"	=> "통제력 강화",
"img"	=> "skill_015.png",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(60,40),
"UpLUK"	=> "100",
); break;
		case "3300":
$skill	= array(
"name"	=> "소환 강화",
"img"	=> "we_other007.png",
"exp"	=> "소환 강화",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpSTR"	=> "80",
"limit"=> array("채찍"=>true,),
); break;
		case "3301":
$skill	= array(
"name"	=> "지능 강화 소환",
"img"	=> "we_other007.png",
"exp"	=> "소환 강화",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpINT"	=> "80",
"limit"=> array("채찍"=>true,),
); break;
		case "3302":
$skill	= array(
"name"	=> "소환 속도 향상",
"img"	=> "we_other007.png",
"exp"	=> "소환 강화",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpSPD"	=> "50",
"limit"=> array("채찍"=>true,),
); break;
		case "3303":
$skill	= array(
"name"	=> "소환된 생물 방어력 강화",
"img"	=> "we_other007.png",
"exp"	=> "소환 강화",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "4",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpDEF"	=> "20",
"UpMDEF"	=> "20",
"limit"=> array("채찍"=>true,),
); break;
		case "3304":
$skill	= array(
"name"	=> "소환된 생물의 전반적인 강화",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpSTR"	=> "150",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3305":
$skill	= array(
"name"	=> "유합",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpINT"	=> "150",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3306":
$skill	= array(
"name"	=> "민첩하다",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,100),
"UpSPD"	=> "100",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3307":
$skill	= array(
"name"	=> "증강",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,50),
"UpDEF"	=> "50",
"UpMDEF"	=> "50",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3308":
$skill	= array(
"name"	=> "전폭적 지원",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "8",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,150),
"UpSTR"	=> "100",
"UpINT"	=> "100",
"UpSPD"	=> "100",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3309":
$skill	= array(
"name"	=> "전체 지지",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "400",
"type"	=> "0",
"learn"	=> "14",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,400),
"UpSTR"	=> "100",
"UpINT"	=> "100",
"UpSPD"	=> "100",
"limit"=> array("채찍"=>true,),
); break;
		case "3310":
$skill	= array(
"name"	=> "야생 동물은 출입 금지입니다.",
"img"	=> "we_other007x.png",
"exp"	=> "약점 소환",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"support"	=> "1",
"charge"	=> array(0,50),
"DownSTR"	=> "50",
"DownINT"	=> "50",
"DownSPD"	=> "50",
"DownDEF"	=> "20",
"DownMDEF"	=> "20",
"priority"	=> "Summon",
"limit"=> array("채찍"=>true,),
); break;
		case "3311":
$skill	= array(
"name"	=> "짐승이 날려버린다",
"img"	=> "we_other007x.png",
"exp"	=> "공격 소환",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "6",
"target"=> array("enemy","individual",1),
"pow"	=> "1500",
"charge"	=> array(0,30),
"priority"	=> "Summon",
); break;
		case "3312":
$skill	= array(
"name"	=> "야생 동물이 덮치다",
"img"	=> "we_other007x.png",
"exp"	=> "공격 소환",
"sp"	=> "300",
"type"	=> "0",
"learn"	=> "12",
"target"=> array("enemy","all",1),
"pow"	=> "1000",
"charge"	=> array(0,60),
); break;
		case "3313":
$skill	= array(
"name"	=> "워크래프트는 강력합니다",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "10",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,100),
"UpMAXHP"	=> "100",
"UpDEF"	=> "20",
"UpMDEF"	=> "20",
"priority"	=> "Summon",
"MagicCircleDeleteTeam"	=> 1,
); break;
		case "3314":
$skill	= array(
"name"	=> "워크래프트 램페이지",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "300",
"type"	=> "0",
"learn"	=> "15",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,100),
"UpATK"	=> "50",
"UpMATK"	=> "50",
"priority"	=> "Summon",
"MagicCircleDeleteTeam"	=> 2,
); break;
		case "3315":
$skill	= array(
"name"	=> "워크래프트의 모든 것이 강력합니다",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "400",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,200),
"UpMAXHP"	=> "100",
"UpDEF"		=> "20",
"UpMDEF"	=> "20",
"MagicCircleDeleteTeam"	=> 3,
); break;
		case "3316":
$skill	= array(
"name"	=> "모든 워크래프트 램페이지",
"img"	=> "we_other007z.png",
"exp"	=> "소환 강화",
"sp"	=> "500",
"type"	=> "0",
"learn"	=> "25",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,200),
"UpATK"	=> "50",
"UpMATK"	=> "50",
"MagicCircleDeleteTeam"	=> 4,
); break;
		case "3317":
$skill	= array(
"name"	=> "워크래프트 소유",
"img"	=> "skill_066.png",
"exp"	=> "자기 강화",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "30",
"target"=> array("self","individual",1),
"charge"=> array(0,150),
"UpMAXHP"=> 200,
"UpMATK"=> 100,
"UpINT"=> 100,
"UpDEF"	=> "25",
"UpMDEF"	=> "25",
"UpSPD"=> 50,
"MagicCircleDeleteTeam"	=> 5,
); break;
		case "3400":
$skill	= array(
"name"	=> "지속 재생",
"img"	=> "skill_062x.png",
"exp"	=> "HP지속 재생+5%",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(10,50),
"HpRegen"	=> 5,
); break;
		case "3401":
$skill	= array(
"name"	=> "마법은 지속적으로 재생됩니다",
"img"	=> "skill_062x.png",
"exp"	=> "SP지속 재생+5%",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(10,50),
"SpRegen"	=> 5,
); break;
		case "3402":
$skill	= array(
"name"	=> "지속적인 치유",
"img"	=> "skill_062x.png",
"exp"	=> "HP지속 재생+10%",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(20,100),
"HpRegen"	=> 10,
); break;
		case "3403":
$skill	= array(
"name"	=> "마법의 치유",
"img"	=> "skill_062x.png",
"exp"	=> "SP지속 재생+10%",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(20,100),
"SpRegen"	=> 10,
); break;
		case "3404":
$skill	= array(
"name"	=> "이중 연속 치유",
"img"	=> "skill_062x.png",
"exp"	=> "HP,SP지속 재생+10%",
"sp"	=> "450",
"type"	=> "1",
"learn"	=> "18",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(30,150),
"HpRegen"	=> 10,
"SpRegen"	=> 10,
); break;
		case "3410":
$skill	= array(
"name"	=> "매직 서클",
"img"	=> "ms_01.png",
"exp"	=> "매직 서클+1",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"	=> array(0,0),
"MagicCircleAdd"	=> 1,
); break;
		case "3411":
$skill	= array(
"name"	=> "더블 매직 서클",
"img"	=> "ms_01.png",
"exp"	=> "매직 서클+2",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "6",
"target"=> array("self","individual",1),
"charge"	=> array(60,0),
"MagicCircleAdd"	=> 2,
); break;
		case "3412":
$skill	= array(
"name"	=> "트리플 매직 서클",
"img"	=> "ms_01.png",
"exp"	=> "매직 서클+3",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"	=> array(80,0),
"MagicCircleAdd"	=> 3,
); break;
		case "3415":
$skill	= array(
"name"	=> "매직 서클",
"img"	=> "ms_01.png",
"exp"	=> "매직 서클+1",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"	=> array(30,0),
"MagicCircleAdd"	=> 1,
); break;
		case "3416":
$skill	= array(
"name"	=> "더블 매직 서클",
"img"	=> "ms_01.png",
"exp"	=> "매직 서클+2",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"	=> array(80,50),
"MagicCircleAdd"	=> 2,
); break;
		case "3420":
$skill	= array(
"name"	=> "매직 서클 제거",
"img"	=> "ms_02.png",
"exp"	=> "상대방의 마법진-1",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"	=> array(30,0),
"MagicCircleDeleteEnemy"	=> 1,
); break;
		case "3421":
$skill	= array(
"name"	=> "매직 서클 제거",
"img"	=> "ms_02.png",
"exp"	=> "상대방의 마법진-1",
"sp"	=> "240",
"type"	=> "1",
"learn"	=> "4",
"target"=> array("self","individual",1),
"charge"	=> array(40,0),
"MagicCircleDeleteEnemy"	=> 1,
); break;
		case "3422":
$skill	= array(
"name"	=> "마법진 클리어",
"img"	=> "ms_02.png",
"exp"	=> "상대방의 마법진-5",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "12",
"target"=> array("self","individual",1),
"charge"	=> array(40,0),
"MagicCircleDeleteEnemy"	=> 5,
); break;
		case "3423":
$skill	= array(
"name"	=> "매직 서클 지우기",
"img"	=> "ms_02.png",
"exp"	=> "상대방의 마법진-2",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "8",
"target"=> array("self","individual",1),
"charge"	=> array(40,0),
"MagicCircleDeleteEnemy"	=> 2,
); break;
		case "3900":
$skill	= array(
"name"	=> "중독",
"img"	=> "acce_003c.png",
"exp"	=> "자기독화",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("self","individual",1),
); break;
		case "3901":
$skill	= array(
"name"	=> "즉사",
"img"	=> "acce_003c.png",
"exp"	=> "사망",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "0",
"target"=> array("self","individual",1),
); break;

		case "4000":
$skill	= array(
"name"	=> "복원",
"img"	=> "inst_002.png",
"exp"	=> "대기열 수정",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "5",
"target"=> array("friend","all",1),
"support"	=> "1",
); break;
		case "4999":
$skill	= array(
"name"	=> "---- 5000 ----------",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
); break;
		case "5000":
$skill	= array(
"name"	=> "지전",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "70",
"charge"=> array(0,20),
); break;
		case "5001":
$skill	= array(
"name"	=> "초음파",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"invalid"	=> "1",
"pow"	=> "50",
"charge"=> array(0,0),
"delay"	=> "20",
); break;
		case "5002":
$skill	= array(
"name"	=> "흡혈",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(0,0),
); break;
		case "5003":
$skill	= array(
"name"	=> "독니",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "200",
"charge"=> array(0,0),
"poison"=> "100",
); break;
		case "5004":
$skill	= array(
"name"	=> "맹독",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "200",
"invalid"	=> "1",
"charge"=> array(0,0),
"poison"=> "100",
); break;
		case "5005":
$skill	= array(
"name"	=> "방어",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "10",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"=> array(0,0),
"UpDEF"	=> "10",
"UpMDEF"=> "10",
); break;
		case "5006":
$skill	= array(
"name"	=> "돌격!!!",
"img"	=> "skill_066.png",
"exp"	=> "폭행 명령",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"=> array(0,50),
"UpSTR"	=> "50",
); break;
		case "5007":
$skill	= array(
"name"	=> "치료하기",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "5",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","individual",1),
"pow"	=> "200",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(0,0),
); break;
		case "5008":
$skill	= array(
"name"	=> "날카로운",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "130",
); break;
		case "5009":
$skill	= array(
"name"	=> "발로 차다",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "200",
); break;
		case "5010":
$skill	= array(
"name"	=> "깨물기",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "90",
"pierce"=> true,
); break;
		case "5011":
$skill	= array(
"name"	=> "베어 폴",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "200",
"knockback"	=> "100",
); break;
		case "5012":
$skill	= array(
"name"	=> "돌 던지기",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "120",
"invalid"	=> "1",
); break;
		case "5013":
$skill	= array(
"name"	=> "공습",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "180",
"invalid"	=> "1",
); break;
		case "5014":
$skill	= array(
"name"	=> "여러 번의 발톱 공격",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",3),
"pow"	=> "70",
"pierce"=> true,
); break;
		case "5015":
$skill	= array(
"name"	=> "눈폭풍",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "100",
"invalid"	=> "1",
"DownSPD"	=> "10",
); break;
		case "5016":
$skill	= array(
"name"	=> "비행",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(20,0),
"support"	=> "1",
"UpSPD"	=> "20",
); break;
		case "5017":
$skill	= array(
"name"	=> "운이 좋은",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(0,30),
"support"	=> "1",
"UpSTR"	=> "30",
"UpINT"	=> "30",
"UpDEX"	=> "30",
"UpSPD"	=> "30",
); break;
		case "5018":
$skill	= array(
"name"	=> "불의 숨결",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "120",
"invalid"	=> "1",
); break;
		case "5019":
$skill	= array(
"name"	=> "번복",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "300",
); break;
		case "5020":
$skill	= array(
"name"	=> "분노의 불길",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "300",
); break;
		case "5021":
$skill	= array(
"name"	=> "물결",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "200",
"knockback"	=> "100",
); break;
		case "5022":
$skill	= array(
"name"	=> "운명의 여신",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> "1",
"pow"	=> "200",
"UpSTR"	=> "20",
"UpINT"	=> "20",
"UpDEX"	=> "20",
"UpSPD"	=> "20",
"UpDEF"	=> "20",
"UpMDEF"	=> "20",
); break;
		case "5023":
$skill	= array(
"name"	=> "운명",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"DownMAXHP"	=> "70",
"invalid"	=> "1",
); break;
		case "5024":
$skill	= array(
"name"	=> "처벌자",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "500",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "500",
); break;
		case "5025":
$skill	= array(
"name"	=> "성스러운 빛의 폭풍",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "150",
"invalid"	=> "1",
); break;
		case "5026":
$skill	= array(
"name"	=> "파괴하다",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "250",
); break;
		case "5027":
$skill	= array(
"name"	=> "와동",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "150",
"DownSPD"	=> "10",
); break;
		case "5028":
$skill	= array(
"name"	=> "다크 라이트",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",3),
"pow"	=> "150",
"invalid"	=> "1",
); break;
		case "5029":
$skill	= array(
"name"	=> "토르의 망치",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"pow"	=> "600",
"invalid"	=> "1",
); break;
		case "5030":
$skill	= array(
"name"	=> "영혼의 부활",
"img"	=> "skill_008.png",
"exp"	=> "회복",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","multi",2),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "400",
"priority"	=> "Dead",
); break;
		case "5031":
$skill	= array(
"name"	=> "망치질",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"	=> array(0,30),
"pow"		=> "220",
); break;
		case "5032":
$skill	= array(
"name"	=> "지상 공격",
"img"	=> "skill_066.png",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"charge"	=> array(0,50),
"pow"	=> "80",
"delay"	=> "50",
); break;
		case "5033":
$skill	= array(
"name"	=> "무기 단조",
"img"	=> "skill_066.png",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"=> true,
"charge"	=> array(50,50),
"UpATK"	=> "50",
); break;
		case "5034":
$skill	= array(
"name"	=> "가고일 소환",
"img"	=> "skill_066.png",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"	=> array(0,100),
"summon"	=> array(1026),
); break;
		case "5035":
$skill	= array(
"name"	=> "불뱀",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"charge"	=> array(50,0),
"pow"	=> "80",
); break;
		case "5036":
$skill	= array(
"name"	=> "응시",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"delay"	=> "30",
); break;
		case "5037":
$skill	= array(
"name"	=> "아이 방사선",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"invalid"	=> true,
"pow"	=> "200",
"DownSTR"	=> "20",
"DownDEF"	=> "20",
); break;
		case "5038":
$skill	= array(
"name"	=> "어둠의 기운",
"img"	=> "skill_066.png",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"pow"	=> "150",
"DownINT"	=> "20",
"charge"	=> array(0,50),
); break;
		case "5039":
$skill	= array(
"name"	=> "독가스",
"img"	=> "skill_066.png",
"sp"	=> "100",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"poison"	=> "100",
); break;
		case "5040":
$skill	= array(
"name"	=> "어둠의 성스러운 빛",
"img"	=> "skill_066.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",6),
"invalid"	=> true,
"pow"	=> "150",
"charge"	=> array(70,0),
); break;
		case "5041":
$skill	= array(
"name"	=> "어둠의 안개",
"img"	=> "skill_066.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> true,
"charge"	=> array(60,30),
"DownMDEF"	=> "60",
); break;
		case "5042":
$skill	= array(
"name"	=> "스노볼",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",2),
"invalid"	=> true,
"pow"	=> "70",
); break;
		case "5043":
$skill	= array(
"name"	=> "큰 눈덩이",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",4),
"invalid"	=> true,
"pow"	=> "50",
); break;
		case "5044":
$skill	= array(
"name"	=> "스키",
"img"	=> "skill_066.png",
"sp"	=> "150",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "150",
"DownSPD"=> "15",
); break;
		case "5045":
$skill	= array(
"name"	=> "얼음기운",
"img"	=> "skill_066.png",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "140",
"DownDEF"=> "10",
); break;
		case "5046":
$skill	= array(
"name"	=> "아이스 장갑",
"img"	=> "skill_066.png",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> true,
"UpDEF"	=> "10",
"UpMDEF"=> "10",
"charge"=> array(10,10),
); break;
		case "5047":
$skill	= array(
"name"	=> "고드름",
"img"	=> "skill_066.png",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",3),
"pow"	=> "100",
"DownDEF"	=> "10",
"charge"=> array(30,0),
); break;
		case "5048":
$skill	= array(
"name"	=> "저주 포효",
"img"	=> "skill_066.png",
"sp"	=> "120",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"DownSTR"	=> "20",
"charge"=> array(10,20),
); break;
		case "5049":
$skill	= array(
"name"	=> "환호하다",
"img"	=> "skill_066.png",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("friend","all",1),
"UpSTR"	=> "40",
"UpINT"	=> "40",
"charge"=> array(40,40),
); break;
		case "5050":
$skill	= array(
"name"	=> "아이스펀치",
"img"	=> "skill_066.png",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",2),
"pow"	=> "200",
"DownDEF"	=> "20",
"charge"	=> array(20,20),
); break;
		case "5051":
$skill	= array(
"name"	=> "눈폭풍",
"img"	=> "skill_066.png",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"	=> array(50,0),
"delay"	=> "50",
); break;
		case "5052":
$skill	= array(
"name"	=> "폭발성 폭탄",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"DownMAXHP"	=> "50",
"invalid"	=> true,
); break;
		case "5053":
$skill	= array(
"name"	=> "빙벽",
"img"	=> "skill_066.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(20,60),
"UpDEF"	=> "20",
"UpMDEF"	=> "60",
); break;
		case "5054":
$skill	= array(
"name"	=> "절대 영도",
"img"	=> "skill_066.png",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("all","all",1),
"charge"=> array(30,0),
"pow"	=> "250",
); break;
		case "5055":
$skill	= array(
"name"	=> "복사 가열",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(40,10),
"pow"	=> "400",
"DownDEF"	=> "10",
); break;
		case "5056":
$skill	= array(
"name"	=> "깨물기",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(0,0),
"pow"	=> "340",
); break;
		case "5057":
$skill	= array(
"name"	=> "발로 차다",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",2),
"charge"=> array(0,0),
"pow"	=> "100",
"pierce"	=> true,
"charge"	=> array(0,70),
); break;
		case "5058":
$skill	= array(
"name"	=> "울부짖는 소리",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(0,30),
"DownSTR"	=> "30",
); break;
		case "5059":
$skill	= array(
"name"	=> "약탈",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(40,40),
"DownDEF"=> 40,
"DownATK"=> 40,
); break;
		case "5060":
$skill	= array(
"name"	=> "장갑 탈취",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(0,30),
"DownDEF"=> 30,
//"DownATK"=> 40,
); break;
		case "5061":
$skill	= array(
"name"	=> "강화약탈",
"img"	=> "skill_066.png",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(10,50),
"DownATK"=> 50,
"DownMATK"=> 50,
); break;
		case "5062":
$skill	= array(
"name"	=> "단검 폭도",
"img"	=> "we_sword001z.png",
"sp"	=> "130",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",8),
"pow"	=> "100",
"charge"=> array(0,70),
"invalid"	=> "1",
); break;
		case "5063":
$skill	= array(
"name"	=> "각성",
"img"	=> "skill_008.png",
"exp"	=> "회복",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","individual",1),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "10",
"priority"	=> "Dead",
); break;
		case "5064":
$skill	= array(
"name"	=> "바나나 로켓",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"	=> array(0,30),
"pow"		=> "300",
); break;
		case "5065":
$skill	= array(
"name"	=> "바나나 사격",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",3),
"invalid"	=> true,
"charge"	=> array(0,0),
"pow"		=> "70",
); break;
		case "5066":
$skill	= array(
"name"	=> "바나나 답글",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "250",
"CurePoison"	=> true,
"SpRecoveryRate"	=> 4,
"support"	=> "1",
); break;
		case "5067":
$skill	= array(
"name"	=> "바나나 보호",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "1",
"learn"	=> "10",
"target"=> array("friend","all",1),
"charge"	=> array(0,0),
"support"	=> "1",
); break;
		case "5068":
$skill	= array(
"name"	=> "노예 소환",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,50),
"summon"	=> array(1100),
); break;
		case "5069":
$skill	= array(
"name"	=> "노예 소환",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,50),
"summon"	=> array(1101),
); break;
		case "5070":
$skill	= array(
"name"	=> "키메라 소환",
"img"	=> "skill_029.png",
"exp"	=> "합성 짐승 소환",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> "5013",
); break;
		case "5071":
$skill	= array(
"name"	=> "유키오 소환",
"img"	=> "skill_029.png",
"exp"	=> "합성 짐승 소환",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> "5014",
); break;
		case "5072":
$skill	= array(
"name"	=> "멧돼지 소환",
"img"	=> "skill_029.png",
"exp"	=> "합성 짐승 소환",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> "5014",
); break;
		case "5073":
$skill	= array(
"name"	=> "사자 소환",
"img"	=> "skill_029.png",
"exp"	=> "합성 짐승 소환",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "20",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> "5011",
); break;
		case "5080":
$skill	= array(
"name"	=> "레드 캐논",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "50",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"delay"	=> 50,
"charge"=> array(50,50),
"pow"	=> "500",
"pierce"=> true,
); break;
		case "5081":
$skill	= array(
"name"	=> "호랑이의 힘",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "300",
"CurePoison"	=> true,
"SpRecoveryRate"	=> 9,
"UpATK"	=> "30",
"UpSTR"	=> "30",
"UpDEF"	=> "30",
"UpMDEF"=> "30",
"UpSPD"	=> "30",
); break;
		case "5082":
$skill	= array(
"name"	=> "형형색색의 불빛이 춤을 춘다",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "250",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(10,50),
"pow"	=> "350",
); break;
		case "5083":
$skill	= array(
"name"	=> "산을 무너뜨리는 무지개 대포",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",16),
"charge"=> array(20,40),
"pow"	=> "320",
"invalid"	=> "1",
); break;
		case "5084":
$skill	= array(
"name"	=> "벌칸 플래시",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",6),
"charge"=> array(30,60),
"pow"	=> "360",
"invalid"	=> "1",
); break;
		case "5085":
$skill	= array(
"name"	=> "물의 요정 공주",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "180",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> "1",
"pow"	=> "180",
"charge"	=> array(10,80),
); break;
		case "5086":
$skill	= array(
"name"	=> "실프의 뿔피리",
"img"	=> "skill_016z.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(100,100),
"UpSPD"	=> "100",
); break;
		case "5087":
$skill	= array(
"name"	=> "게으른 삼석탑",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "30",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",3),
"delay"	=> 30,
"charge"=> array(30,0),
"pow"	=> "300",
"invalid"	=> "1",
"DownSPD"	=> "30",
"pierce"=> true,
); break;
		case "5088":
$skill	= array(
"name"	=> "금속 피로",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"delay"	=> 60,
"charge"=> array(60,0),
"pow"	=> "600",
"DownDEF"	=> "60",
"DownMDEF"	=> "60",
); break;
		case "5089":
$skill	= array(
"name"	=> "로얄 플레임",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(50,0),
"pow"	=> "500",
); break;
		case "5090":
$skill	= array(
"name"	=> "조용한 세레나데",
"img"	=> "skill_037.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "100",
"invalid"	=> "1",
"charge"=> array(0,100),
); break;
		case "5091":
$skill	= array(
"name"	=> "The World!",
"img"	=> "we_other007y.png",
"exp"	=> "",
"sp"	=> "320",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("all","all",1),
"delay"	=> 320,
"invalid"	=> "1",
"charge"=> array(160,160),
); break;
		case "5092":
$skill	= array(
"name"	=> "킬러 퍼펫",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(10,60),
"pow"	=> "160",
"pierce"=> true,
); break;
		case "5093":
$skill	= array(
"name"	=> "새겨진 붉은 영혼",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "60",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",6),
"charge"=> array(10,60),
"pow"	=> "160",
"pierce"=> true,
); break;
		case "5094":
$skill	= array(
"name"	=> "밤안개 속의 유령 살인마",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "160",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",16),
"charge"=> array(0,160),
"pow"	=> "160",
"invalid"	=> "1",
); break;
		case "5095":
$skill	= array(
"name"	=> "완벽한 하녀",
"img"	=> "banana.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "160",
"CurePoison"	=> true,
"SpRecoveryRate"	=> 8,
"UpATK"	=> "16",
"UpMATK"=> "16",
"UpSTR"	=> "16",
"UpDEF"	=> "16",
"UpMDEF"=> "16",
"UpSPD"	=> "16",
"UpINT"	=> "16",
); break;
		case "5096":
$skill	= array(
"name"	=> "궁니르의 창",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(0,80),
"pow"	=> "800",
"invalid"	=> "1",
); break;
		case "5097":
$skill	= array(
"name"	=> "진홍색 악마",
"img"	=> "skill_078.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",14),
"delay"	=> 40,
"pow"	=> "400",
"charge"=> array(10,40),
"invalid"	=> "1",
"pierce"=> true,
); break;
		case "5098":
$skill	= array(
"name"	=> "잠들지 않는 붉은 도시",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(0,30),
"pow"	=> "300",
"invalid"	=> "1",
); break;
		case "5099":
$skill	= array(
"name"	=> "한밤의 여왕",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"UpMAXHP"=> 200,
"UpATK"=> 100,
"UpMATK"=> 100,
"UpSTR"=> 100,
"UpINT"=> 100,
"UpSPD"=> 100,
"UpDEF"=> 100,
"UpMDEF"=> 100,
); break;
		case "5100":
$skill	= array(
"name"	=> "현자의 돌",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"	=> array(10,0),
"UpMATK"=> "100",
"UpDEF"	=> "100",
"UpMDEF"=> "100",
"UpSPD"	=> "100",
"UpINT"	=> "100",
); break;
		case "5101":
$skill	= array(
"name"	=> "4중 장벽",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(40,0),
"pow"	=> "400",
"invalid"	=> "1",
); break;
		case "5102":
$skill	= array(
"name"	=> "객관적 장벽",
"img"	=> "item_027.png",
"exp"	=> "",
"sp"	=> "180",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> "1",
"DownDEF"	=> "18",
"DownMDEF"	=> "18",
"DownATK"	=> "18",
"DownMATK"	=> "18",
"DownSTR"	=> "18",
"DownINT"	=> "18",
"DownSPD"	=> "18",
"DownLUK"	=> "18",
); break;
		case "5103":
$skill	= array(
"name"	=> "버려진 역에서 내리기 위한 여정",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",20),
"delay"	=> 20,
"charge"=> array(200,200),
"pow"	=> "200",
"invalid"	=> "1",
"pierce"=> true,
); break;
		case "5104":
$skill	= array(
"name"	=> "궤도 변화",
"img"	=> "skill_037.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "180",
"invalid"	=> "1",
"charge"=> array(0,180),
); break;
		case "5105":
$skill	= array(
"name"	=> "시체 해부는 영원히",
"img"	=> "item_027.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"delay"	=> 20,
"pow"	=> "200",
"charge"=> array(20,0),
"pierce"=> true,
"UpATK"	=> "20",
"UpSTR"	=> "20",
); break;
		case "5106":
$skill	= array(
"name"	=> "치먼 둔자",
"img"	=> "item_027.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(40,40),
"UpDEF"	=> "40",
"UpMDEF"=> "40",
); break;
		case "5107":
$skill	= array(
"name"	=> "천상의 음악",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(20,0),
"pow"	=> "200",
"DownSPD"	=> "20",
); break;
		case "5108":
$skill	= array(
"name"	=> "경기 중 공",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "20",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",4),
"charge"=> array(20,40),
"pow"	=> "240",
"umove"	=> "front",
"invalid"	=> "1",
"pierce"=> true,
); break;
		case "5109":
$skill	= array(
"name"	=> "여우 악마 광선",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",8),
"charge"=> array(10,80),
"pow"	=> "180",
"invalid"	=> "1",
); break;
		case "5110":
$skill	= array(
"name"	=> "전귀후귀의 수호",
"img"	=> "skill_062x.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"support"	=> "1",
"charge"	=> array(0,80),
"HpRegen"	=> 8,
); break;
		case "5111":
$skill	= array(
"name"	=> "기니텐에 의지하여",
"img"	=> "skill_013c.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"pow"	=> "800",
"support"	=> "1",
"priority"	=> "LowHpRate",
"charge"=> array(80,0),
); break;
		case "5112":
$skill	= array(
"name"	=> "암벽 방어",
"img"	=> "skill_066.png",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(10,10),
"UpDEF"	=> "100",
"UpMDEF"	=> "100",
); break;
		case "5113":
$skill	= array(
"name"	=> "암석충격",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",12),
"charge"=> array(30,30),
"pow"	=> "300",
"invalid"	=> "1",
); break;
		case "5114":
$skill	= array(
"name"	=> "거암 무장",
"img"	=> "skill_066.png",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(10,10),
"UpATK"	=> "100",
"UpMATK"	=> "100",
); break;
		case "5115":
$skill	= array(
"name"	=> "에메랄드 쇼크",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "350",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(30,50),
"pow"	=> "350",
"delay"	=> 30,
"invalid"	=> "1",
"DownDEF"	=> "30",
"DownMDEF"=> "30",
"pierce"=> true,
); break;
		case "5116":
$skill	= array(
"name"	=> "비취결정",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"	=> array(0,0),
"UpATK"	=> "100",
"UpMATK"	=> "100",
"UpSPD"	=> "100",
); break;
		case "5117":
$skill	= array(
"name"	=> "천벌",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "600",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"delay"	=> 60,
"charge"=> array(60,60),
"pow"	=> "600",
"pierce"=> true,
); break;
		case "5118":
$skill	= array(
"name"	=> "천벌 허리케인",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",10),
"charge"=> array(50,100),
"pow"	=> "500",
"invalid"	=> "1",
); break;
		case "5119":
$skill	= array(
"name"	=> "Master spark",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(0,120),
"pow"	=> "900",
"invalid"	=> "1",
); break;
		case "5120":
$skill	= array(
"name"	=> "Final spark",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(20,120),
"pow"	=> "800",
"invalid"	=> "1",
); break;
		case "5121":
$skill	= array(
"name"	=> "맹살",
"img"	=> "skill_041z.png",
"exp"	=> "즉사",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> "1",
"charge"=> array(100,0),
); break;
		case "5122":
$skill	= array(
"name"	=> "죽은 나비의 춤",
"img"	=> "skill_041z.png",
"exp"	=> "즉사",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"invalid"	=> "1",
"charge"=> array(10,0),
); break;
		case "5123":
$skill	= array(
"name"	=> "환상향의 황천귀가",
"img"	=> "skill_008.png",
"exp"	=> "회복",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","multi",2),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "1000",
"priority"	=> "Dead",
); break;
		case "5124":
$skill	= array(
"name"	=> "호접몽지무",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "400",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","multi",40),
"charge"=> array(40,0),
"pow"	=> "400",
"invalid"	=> "1",
); break;
		case "5125":
$skill	= array(
"name"	=> "미래영겁참",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "330",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",11),
"charge"=> array(20,20),
"pow"	=> "440",
"invalid"	=> "1",
); break;
		case "5126":
$skill	= array(
"name"	=> "현세참",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "140",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(10,40),
"pow"	=> "1400",
"invalid"	=> "1",
); break;
		case "5127":
$skill	= array(
"name"	=> "육근청정참",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "150",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(50,0),
"pow"	=> "250",
"pierce"=> true,
); break;
		case "5128":
$skill	= array(
"name"	=> "메가 플레어",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","individual",1),
"charge"=> array(10,0),
"pow"	=> "400",
"pierce"=> true,
); break;
		case "5129":
$skill	= array(
"name"	=> "지옥의 인공태양",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "500",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(50,0),
"pow"	=> "500",
"invalid"	=> "1",
); break;
		case "5130":
$skill	= array(
"name"	=> "자동 토카막 장치",
"img"	=> "skill_062x.png",
"exp"	=> "HP,SP지속 재생+10%",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("self","individual",1),
"support"	=> "1",
"charge"	=> array(10,0),
"HpRegen"	=> 10,
"SpRegen"	=> 10,
"UpATK"	=> "100",
"UpMATK"	=> "100",
"UpSPD"	=> "100",
); break;
		case "5131":
$skill	= array(
"name"	=> "드림씰",
"img"	=> "skill_066.png",
"sp"	=> "500",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"DownMAXHP"	=> "50",
"DownMAXSP"	=> "50",
"invalid"	=> true,
); break;
		case "5132":
$skill	= array(
"name"	=> "음양보옥",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("enemy","multi",2),
"charge"=> array(40,0),
"pow"	=> "400",
"pierce"=> true,
); break;
		case "5133":
$skill	= array(
"name"	=> "봉마진",
"img"	=> "skill_037.png",
"exp"	=> "SP 흡수",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "300",
"invalid"	=> "1",
"charge"=> array(0,0),
); break;
		case "5134":
$skill	= array(
"name"	=> "몽상천생",
"img"	=> "skill_057.png",
"exp"	=> "",
"sp"	=> "100",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"charge"=> array(10,0),
"pow"	=> "1000",
"invalid"	=> "1",
); break;
		case "5135":
$skill	= array(
"name"	=> "뱀파이어 부활",
"img"	=> "skill_008.png",
"exp"	=> "회복",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","multi",4),
"support"	=> "1",
"charge"	=> array(0,0),
"pow"		=> "800",
"priority"	=> "Dead",
); break;
		case "5136":
$skill	= array(
"name"	=> "간격",
"img"	=> "skill_041z.png",
"exp"	=> "즉사",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"invalid"	=> "1",
"charge"=> array(0,0),
); break;
		case "5799":
$skill	= array(
"name"	=> "----5799--------",
"img"	=> "skill_066.png",
"sp"	=> "0",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("enemy","all",1),
"pow"	=> "0",
); break;
		case "5800":
$skill	= array(
"name"	=> "그룹 소환",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"=> "1012",
); break;
		case "5801":
$skill	= array(
"name"	=> "노예 소환",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,0),
"summon"	=> array(1012,1012,1012,1012,1012),
); break;
		case "5802":
$skill	= array(
"name"	=> "죽은 자가 다시 살아난다",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "80",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(30,0),
"summon"	=> array(5003),
); break;
		case "5803":
$skill	= array(
"name"	=> "출산",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"charge"=> array(0,150),
); break;
		case "5804":
$skill	= array(
"name"	=> "노예 소환",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1034,1034),
); break;
		case "5805":
$skill	= array(
"name"	=> "짖는",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "40",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1038),
"charge"	=> array(0,30),
); break;
		case "5806":
$skill	= array(
"name"	=> "썰매사슴",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1047),
); break;
		case "5807":
$skill	= array(
"name"	=> "사냥꾼 늑대를 소환하세요",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1091),
); break;
		case "5808":
$skill	= array(
"name"	=> "콜록콜록",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5102),
); break;
		case "5809":
$skill	= array(
"name"	=> "소환",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1086),
); break;
		case "5810":
$skill	= array(
"name"	=> "콜록콜록",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5103),
); break;
		case "5811":
$skill	= array(
"name"	=> "불이 돌아온다",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1076),
); break;
		case "5812":
$skill	= array(
"name"	=> "불이 돌아온다",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5101),
); break;
		case "5813":
$skill	= array(
"name"	=> "대천사",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5100),
); break;
		case "5814":
$skill	= array(
"name"	=> "물의 정령을 소환하세요",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "200",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1060),
); break;
		case "5815":
$skill	= array(
"name"	=> "부화",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(1082),
); break;
		case "5816":
$skill	= array(
"name"	=> "화염벽",
"img"	=> "skill_066.png",
"sp"	=> "300",
"type"	=> "1",
"learn"	=> "99",
"target"=> array("friend","all",1),
"charge"	=> array(60,30),
"UpDEF"	=> "60",
"UpMDEF"	=> "30",
); break;
		case "5817":
$skill	= array(
"name"	=> "팔운람",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5105),
); break;
		case "5818":
$skill	= array(
"name"	=> "오렌지",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5106),
); break;
		case "5819":
$skill	= array(
"name"	=> "블러드 배트",
"img"	=> "skill_066.png",
"exp"	=> "",
"sp"	=> "0",
"type"	=> "0",
"learn"	=> "99",
"target"=> array("self","individual",1),
"summon"	=> array(5110,5110,5110,5110,5110),
); break;
		case "7000":
$skill	= array(
"name"	=> "생명과 생화학",
"img"	=> "acce_003c.png",
"exp"	=> "HP+30",
"learn"	=> "2",
"passive"	=> 1,
"p_maxhp"	=> "30",
); break;
		case "7001":
$skill	= array(
"name"	=> "삶의 급류",
"img"	=> "acce_003c.png",
"exp"	=> "HP+80",
"learn"	=> "9",
"passive"	=> 1,
"p_maxhp"	=> "80",
); break;
		case "7002":
$skill	= array(
"name"	=> "삶은 초월한다",
"img"	=> "acce_003c.png",
"exp"	=> "HP+200",
"learn"	=> "21",
"passive"	=> 1,
"P_MAXHP"	=> "200",
); break;
		case "7003":
$skill	= array(
"name"	=> "생명 보조1",
"img"	=> "acce_003c.png",
"exp"	=> "HP+30",
"learn"	=> "4",
"passive"	=> 1,
"P_MAXHP"	=> "30",
); break;
		case "7004":
$skill	= array(
"name"	=> "생명 보조2",
"img"	=> "acce_003c.png",
"exp"	=> "HP+70",
"learn"	=> "9",
"passive"	=> 1,
"P_MAXHP"	=> "70",
); break;
		case "7005":
$skill	= array(
"name"	=> "생명 보조3",
"img"	=> "acce_003c.png",
"exp"	=> "HP+150",
"learn"	=> "21",
"passive"	=> 1,
"P_MAXHP"	=> "150",
); break;
		case "7005":
$skill	= array(
"name"	=> "생명 보조3",
"img"	=> "acce_003c.png",
"exp"	=> "HP+150",
"learn"	=> "21",
"passive"	=> 1,
"P_MAXHP"	=> "150",
); break;
		case "9000":
$skill	= array(
"name"	=> "* 계속 생각하다",
"name2"	=> "* 이것을 고려해보세요 (?)",
"exp"	=> "SWTO 용어로 복수 결정은 \"그리고\"입니다.",
"img"	=> "skill_040.png",
"learn"	=> "4",
"type"	=> false,
"pow"	=> false,
); break;
	}
	if(!$skill)
		return false;
	$skill	+= array("no"=>"$no");
	return $skill;
}
?>