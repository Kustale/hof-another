<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function AddEnchantData(&$item, $opt) {
	switch($opt) {
		case 100:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "Atk+1, ";
			break;
		case 101:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "Atk+2, ";
			break;
		case 102:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "Atk+3, ";
			break;
		case 103:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "Atk+4, ";
			break;
		case 104:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "Atk+5, ";
			break;
		case 105:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "Atk+6, ";
			break;
		case 106:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "Atk+7, ";
			break;
		case 107:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "Atk+8, ";
			break;
		case 108:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "Atk+9, ";
			break;
		case 109:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "Atk+10, ";
			break;
		case 110:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 11;
			if(isset($item["option"])) $item["option"]	.= "Atk+11, ";
			break;
		case 111:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 12;
			if(isset($item["option"])) $item["option"]	.= "Atk+12, ";
			break;
		case 112:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 13;
			if(isset($item["option"])) $item["option"]	.= "Atk+13, ";
			break;
		case 113:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 14;
			if(isset($item["option"])) $item["option"]	.= "Atk+14, ";
			break;
		case 114:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 15;
			if(isset($item["option"])) $item["option"]	.= "Atk+15, ";
			break;
		case 115:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 16;
			if(isset($item["option"])) $item["option"]	.= "Atk+16, ";
			break;
		case 116:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 17;
			if(isset($item["option"])) $item["option"]	.= "Atk+17, ";
			break;
		case 117:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 18;
			if(isset($item["option"])) $item["option"]	.= "Atk+18, ";
			break;
		case 118:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 19;
			if(isset($item["option"])) $item["option"]	.= "Atk+19, ";
			break;
		case 119:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "Atk+20, ";
			break;
		case 150:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "Matk+1, ";
			break;
		case 151:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "Matk+2, ";
			break;
		case 152:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "Matk+3, ";
			break;
		case 153:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "Matk+4, ";
			break;
		case 154:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "Matk+5, ";
			break;
		case 155:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "Matk+6, ";
			break;
		case 156:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "Matk+7, ";
			break;
		case 157:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "Matk+8, ";
			break;
		case 158:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "Matk+9, ";
			break;
		case 159:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "Matk+10, ";
			break;
		case 160:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 11;
			if(isset($item["option"])) $item["option"]	.= "Matk+11, ";
			break;
		case 161:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 12;
			if(isset($item["option"])) $item["option"]	.= "Matk+12, ";
			break;
		case 162:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 13;
			if(isset($item["option"])) $item["option"]	.= "Matk+13, ";
			break;
		case 163:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 14;
			if(isset($item["option"])) $item["option"]	.= "Matk+14, ";
			break;
		case 164:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 15;
			if(isset($item["option"])) $item["option"]	.= "Matk+15, ";
			break;
		case 165:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 16;
			if(isset($item["option"])) $item["option"]	.= "Matk+16, ";
			break;
		case 166:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 17;
			if(isset($item["option"])) $item["option"]	.= "Matk+17, ";
			break;
		case 167:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 18;
			if(isset($item["option"])) $item["option"]	.= "Matk+18, ";
			break;
		case 168:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 19;
			if(isset($item["option"])) $item["option"]	.= "Matk+19, ";
			break;
		case 169:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "Matk+20, ";
			break;
		case 200:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.05);
			if(isset($item["option"])) $item["option"]	.= "Atk+5%, ";
			break;
		case 201:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.10);
			if(isset($item["option"])) $item["option"]	.= "Atk+10%, ";
			break;
		case 202:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.15);
			if(isset($item["option"])) $item["option"]	.= "Atk+15%, ";
			break;
		case 203:
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.20);
			if(isset($item["option"])) $item["option"]	.= "Atk+20%, ";
			break;
		case 250:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.05);
			if(isset($item["option"])) $item["option"]	.= "Matk+5%, ";
			break;
		case 251:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.10);
			if(isset($item["option"])) $item["option"]	.= "Matk+10%, ";
			break;
		case 252:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.15);
			if(isset($item["option"])) $item["option"]	.= "Matk+15%, ";
			break;
		case 253:
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.20);
			if(isset($item["option"])) $item["option"]	.= "Matk+20%, ";
			break;
		case 300:
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "Def+1, ";
			break;
		case 301:
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "Def+2, ";
			break;
		case 302:
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "Def+3, ";
			break;
		case 303:
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "Def+4, ";
			break;
		case 304:
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "Def+5, ";
			break;
		case 350:
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "Mdef+1, ";
			break;
		case 351:
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "Mdef+2, ";
			break;
		case 352:
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "Mdef+3, ";
			break;
		case 353:
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "Mdef+4, ";
			break;
		case 354:
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "Mdef+5, ";
			break;
		case 400:
			break;
		case 'H00':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+10, ";
			break;
		case 'H01':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+20, ";
			break;
		case 'H02':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+30, ";
			break;
		case 'H03':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 40;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+40, ";
			break;
		case 'H04':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 50;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+50, ";
			break;
		case 'H05':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 60;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+60, ";
			break;
		case 'HM0':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+1%, ";
			break;
		case 'HM1':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+2%, ";
			break;
		case 'HM2':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+3%, ";
			break;
		case 'HM3':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+4%, ";
			break;
		case 'HM4':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+5%, ";
			break;
		case 'HM5':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+6%, ";
			break;
		case 'S00':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+10, ";
			break;
		case 'S01':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+20, ";
			break;
		case 'S02':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+30, ";
			break;
		case 'S03':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 40;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+40, ";
			break;
		case 'SM0':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+1%, ";
			break;
		case 'SM1':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+2%, ";
			break;
		case 'SM2':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+3%, ";
			break;
		case 'SM3':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+4%, ";
			break;
		case 'SM4':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+5%, ";
			break;
		case 'SM5':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+6%, ";
			break;
		case 'P00':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "STR+1, ";
			break;
		case 'P01':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "STR+2, ";
			break;
		case 'P02':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "STR+3, ";
			break;
		case 'P03':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "STR+4, ";
			break;
		case 'P04':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "STR+5, ";
			break;
		case 'P05':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "STR+6, ";
			break;
		case 'P06':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "STR+7, ";
			break;
		case 'P07':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "STR+8, ";
			break;
		case 'P08':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "STR+9, ";
			break;
		case 'P09':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "STR+10, ";
			break;
		case 'I00':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "INT+1, ";
			break;
		case 'I01':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "INT+2, ";
			break;
		case 'I02':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "INT+3, ";
			break;
		case 'I03':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "INT+4, ";
			break;
		case 'I04':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "INT+5, ";
			break;
		case 'I05':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "INT+6, ";
			break;
		case 'I06':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "INT+7, ";
			break;
		case 'I07':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "INT+8, ";
			break;
		case 'I08':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "INT+9, ";
			break;
		case 'I09':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "INT+10, ";
			break;
		case 'D00':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "DEX+1, ";
			break;
		case 'D01':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "DEX+2, ";
			break;
		case 'D02':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "DEX+3, ";
			break;
		case 'D03':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "DEX+4, ";
			break;
		case 'D04':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "DEX+5, ";
			break;
		case 'D05':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "DEX+6, ";
			break;
		case 'D06':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "DEX+7, ";
			break;
		case 'D07':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "DEX+8, ";
			break;
		case 'D08':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "DEX+9, ";
			break;
		case 'D09':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "DEX+10, ";
			break;
		case 'A00':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "SPD+1, ";
			break;
		case 'A01':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "SPD+2, ";
			break;
		case 'A02':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "SPD+3, ";
			break;
		case 'A03':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "SPD+4, ";
			break;
		case 'A04':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "SPD+5, ";
			break;
		case 'A05':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "SPD+6, ";
			break;
		case 'A06':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "SPD+7, ";
			break;
		case 'A07':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "SPD+8, ";
			break;
		case 'A08':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "SPD+9, ";
			break;
		case 'A09':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "SPD+10, ";
			break;
		case 'L00':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 1;
			if(isset($item["option"])) $item["option"]	.= "LUK+1, ";
			break;
		case 'L01':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 2;
			if(isset($item["option"])) $item["option"]	.= "LUK+2, ";
			break;
		case 'L02':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 3;
			if(isset($item["option"])) $item["option"]	.= "LUK+3, ";
			break;
		case 'L03':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 4;
			if(isset($item["option"])) $item["option"]	.= "LUK+4, ";
			break;
		case 'L04':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "LUK+5, ";
			break;
		case 'L05':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 6;
			if(isset($item["option"])) $item["option"]	.= "LUK+6, ";
			break;
		case 'L06':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 7;
			if(isset($item["option"])) $item["option"]	.= "LUK+7, ";
			break;
		case 'L07':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 8;
			if(isset($item["option"])) $item["option"]	.= "LUK+8, ";
			break;
		case 'L08':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 9;
			if(isset($item["option"])) $item["option"]	.= "LUK+9, ";
			break;
		case 'L09':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "LUK+10, ";
			break;
		case 'X00':
			if($item["type2"] == "WEAPON") {
				if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 5;
				if(isset($item["option"])) $item["option"]	.= "Atk+5, ";
				if(isset($item["AddName"])) $item["AddName"]	= "힘";
			} else {
				if(isset($item["def"]["0"])) $item["def"]["0"]	+= 2;
				if(isset($item["option"])) $item["option"]	.= "Def+2, ";
				if(isset($item["AddName"])) $item["AddName"]	= "안정적인";
			}
			break;
		case 'X01':
			if($item["type2"] == "WEAPON") {
				if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 5;
				if(isset($item["option"])) $item["option"]	.= "Matk+5, ";
				if(isset($item["AddName"])) $item["AddName"]	= "지혜";
			} else {
				if(isset($item["def"]["2"])) $item["def"]["2"]	+= 2;
				if(isset($item["option"])) $item["option"]	.= "Mdef+2, ";
				if(isset($item["AddName"])) $item["AddName"]	= "지혜로운";
			}
			break;
		case 'M01':
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "Matk+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "고블린";
			break;
		case 'M02':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+20, ";
			if(isset($item["AddName"])) $item["AddName"]	= "박쥐";
			break;
		case 'M03':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+20, ";
			if(isset($item["AddName"])) $item["AddName"]	= "해골 용사";
			break;
		case 'M04':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "Atk+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "해골 전사";
			break;
		case 'M05':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "DEX+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "해골 궁수";
			break;
		case 'M06':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 50;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+50, ";
			if(isset($item["AddName"])) $item["AddName"]	= "본 샤먼";
			break;
		case 'M07':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 100;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+100, ";
			if(isset($item["AddName"])) $item["AddName"]	= "물벼룩";
			break;
		case 'M08':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "STR+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "고블린 대장장이";
			break;
		case 'M09':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "INT+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "모조 짐승";
			break;
		case 'M10':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "Atk+20, ";
			if(isset($item["AddName"])) $item["AddName"]	= "스컬 캡틴";
			break;
		case 'M11':
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 20;
			if(isset($item["option"])) $item["option"]	.= "Matk+20, ";
			if(isset($item["AddName"])) $item["AddName"]	= "사악한 마법사";
			break;
		case 'M12':
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+10%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "눈알 괴물";
			break;
		case 'M13':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "LUK+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "사악한 하인";
			break;
		case 'M14':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "SPD+10, ";
			if(isset($item["AddName"])) $item["AddName"]	= "켄타우로스 사냥꾼";
			break;
		case 'M15':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 10;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+10%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "켄타우로스 기사";
			break;
		case 'M16':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.10);
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.10);
			if(isset($item["option"])) $item["option"]	.= "Atk+10%, Matk+10%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "바포메트";
			break;
		case 'M17':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.20);
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.20);
			if(isset($item["option"])) $item["option"]	.= "Atk+20%, Matk+20%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "바포메트b";
			break;
		case 'M18':
			if(isset($item["P_STR"])) $item["P_STR"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "STR+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "체인 해머 솔저";
			break;
		case 'M19':
			if(isset($item["P_DEX"])) $item["P_DEX"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "DEX+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "대검 병사";
			break;
		case 'M20':
			if(isset($item["P_INT"])) $item["P_INT"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "INT+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "다크 도로시";
			break;
		case 'M21':
			if(isset($item["P_LUK"])) $item["P_LUK"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "LUK+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "타락한 여사제";
			break;
		case 'M22':
			if(isset($item["P_MAXHP"])) $item["P_MAXHP"]	+= 200;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+200, ";
			if(isset($item["AddName"])) $item["AddName"]	= "메탈 고블린";
			break;
		case 'M23':
			if(isset($item["def"]["0"])) $item["def"]["0"]	+= 5;
			if(isset($item["def"]["2"])) $item["def"]["2"]	+= 5;
			if(isset($item["option"])) $item["option"]	.= "Def+5,Mdef+5, ";
			if(isset($item["AddName"])) $item["AddName"]	= "지옥 짐승";
			break;
		case 'M24':
			if(isset($item["P_SPD"])) $item["P_SPD"]	+= 15;
			if(isset($item["option"])) $item["option"]	.= "SPD+15, ";
			if(isset($item["AddName"])) $item["AddName"]	= "헬거너";
			break;
		case 'M25':
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "Matk+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "블러드 퍼니셔";
			break;
		case 'M26':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	+= 30;
			if(isset($item["option"])) $item["option"]	.= "Atk+30, ";
			if(isset($item["AddName"])) $item["AddName"]	= "피에 굶주린 해골";
			break;
		case 'M27':
			if(isset($item["P_MAXSP"])) $item["P_MAXSP"]	+= 100;
			if(isset($item["option"])) $item["option"]	.= "MAXSP+100, ";
			if(isset($item["AddName"])) $item["AddName"]	= "오우거";
			break;
		case 'M28':
			if(isset($item["M_MAXHP"])) $item["M_MAXHP"]	+= 15;
			if(isset($item["M_MAXSP"])) $item["M_MAXSP"]	+= 15;
			if(isset($item["option"])) $item["option"]	.= "MAXHP+15%,MAXSP+15%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "얼음과 불꽃";
			break;
		case 'M29':
			if(isset($item["atk"]["0"])) $item["atk"]["0"]	= round($item["atk"]["0"] * 1.25);
			if(isset($item["atk"]["1"])) $item["atk"]["1"]	= round($item["atk"]["1"] * 1.25);
			if(isset($item["option"])) $item["option"]	.= "Atk+25%, Matk+25%, ";
			if(isset($item["AddName"])) $item["AddName"]	= "블러디 메리";
			break;
	}
}
?>