<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function LoadSkillTree($char) {
	$lnd	= array_flip($char->skill);
	$lnd[key($lnd)]++;
	$list	= array();
	if(	$char->job == 100
	 ||	$char->job == 101
	 ||	$char->job == 102
	 ||	$char->job == 103
	 ||	$char->job == 111
	 ||	$char->job == 112
	 ||	$char->job == 121
	 ||	$char->job == 122
	 ||	$char->job == 131
	 ||	$char->job == 132) {
		if($lnd["1001"])
			$list[]	= "1003";
		if($lnd["1001"])
			$list[]	= "1013";
		if($lnd["1001"])
			$list[]	= "3110";
		if($lnd["1001"])
			$list[]	= "3120";
		if($lnd["1003"])
			$list[]	= "1017";
		if($lnd["1003"])
			$list[]	= "1011";
		if($lnd["1013"])
			$list[]	= "1014";
		if($lnd["1013"])
			$list[]	= "1016";
		if($lnd["3120"])
			$list[]	= "3121";
	}
	if($char->job == 101
	 ||	$char->job == 111
	 ||	$char->job == 112) {
		if($lnd["1003"])
			$list[]	= "1012";
		if($lnd["1017"]) {
			$list[]	= "1018";
			$list[]	= "1022";
		}
		if($lnd["1013"]) {
			$list[]	= "1015";
			$list[]	= "1023";
		}
		if($lnd["1016"])
			$list[]	= "1019";
		if($lnd["3110"]){ 
			$list[]	= "3111";
			$list[]	= "3112";
		}
		if($lnd["3121"]){ 
			$list[]	= "3122";
			$list[]	= "3123";
		}
	}
	if($char->job == 102
	 ||	$char->job == 121
	 ||	$char->job == 122) {
		$list[]	= "1100";
		if($lnd["1100"])
			$list[]	= "1101";
		if($lnd["1101"])
			$list[]	= "1102";
		$list[]	= "1113";
		if($lnd["1113"]) {
			$list[]	= "1114";
			$list[]	= "1117";
		}
		if($lnd["1114"]) {
			$list[]	= "1115";
			$list[]	= "1118";
		}
		if($lnd["1115"])
			$list[]	= "1116";
		if($lnd["1114"] && $lnd["1117"] && $lnd["1102"])
			$list[]	= "1119";
	}
	
	if($char->job == 103
	 ||	$char->job == 131
	 ||	$char->job == 132) {
		if($lnd["1003"])
			$list[]	= "1020";
		if($lnd["1020"]) {
			$list[]	= "1021";
			$list[]	= "1025";
		}
		if($lnd["1021"])
			$list[]	= "1024";
		$list[]	= "2090";
		$list[]	= "3231";
		if($lnd["2090"]) {
			$list[]	= "2091";
			$list[]	= "2110";
			$list[]	= "2111";
		}
		if($lnd["2091"])
			$list[]	= "3421";
		if($lnd["3231"]) {
			$list[]	= "3215";
			$list[]	= "3230";
			$list[]	= "3235";
		}
	}
	if($char->job == 111) {
		if($lnd["3122"]) 
			$list[]	= "3124";
		$list[]	= "3201";
		$list[]	= "3114";
	}
	if($char->job == 112) {
		if($lnd["1011"])
			$list[]	= "1033";
		if($lnd["1012"])
			$list[]	= "1034";
		if($lnd["1022"])
			$list[]	= "1026";
		if($lnd["1023"])
			$list[]	= "1027";
		if($lnd["1017"])
			$list[]	= "1031";
	}
	if($char->job == 121) {
		if($lnd["1100"] && $lnd["1101"] && $lnd["1102"]) 
			$list[]	= "1120";
		if($lnd["1113"]) 
			$list[]	= "1121";
		if($lnd["1115"]) 
			$list[]	= "1122";
		if($lnd["1122"]) 
			$list[]	= "1123";
		$list[]	= "2058";
		$list[]	= "3206";
	}
	if($char->job == 122) {
		if($lnd["2033"]) 
			$list[]	= "2034";
		$list[]	= "2033";
	}
	if($char->job == 131) {
		if($lnd["1021"]) 
			$list[]	= "1029";
		$list[]	= "1030";
		$list[]	= "1038";
		if($lnd["1038"]) 
			$list[]	= "1039";
		if($lnd["1039"]) 
			$list[]	= "1040";
		if($lnd["3421"]) 
			$list[]	= "3422";
	}
	if($char->job == 132) {
		if($lnd["1016"]) 
			$list[]	= "1028";
		if($lnd["1013"]) 
			$list[]	= "1124";
		if($lnd["3110"]) 
			$list[]	= "3115";
		if($lnd["1028"]) 
			$list[]	= "1035";
		if($lnd["1035"]) 
			$list[]	= "1036";
		if($lnd["1036"]) 
			$list[]	= "1037";
		$list[]	= "3216";
		if($lnd["3216"]) 
			$list[]	= "3217";
	}
	if(	$char->job == 200
	||	$char->job == 201
	||	$char->job == 202
	||	$char->job == 203
	||	$char->job == 211
	||	$char->job == 212
	||	$char->job == 221
	||	$char->job == 222
	||	$char->job == 231
	||	$char->job == 232) {
		$list[]	= "3011";
		if($lnd["1002"])
			$list[]	= "2000";
		if($lnd["2000"])
			$list[]	= "2002";
		if($lnd["1002"])
			$list[]	= "2010";
		if($lnd["2010"])
			$list[]	= "2011";
		if($lnd["2011"])
			$list[]	= "2014";
		if($lnd["1002"])
			$list[]	= "2020";
		if($lnd["2020"])
			$list[]	= "2021";
		if($lnd["2021"])
			$list[]	= "2022";
		if($lnd["2021"])
			$list[]	= "2023";
	}
	if($char->job == 201
	||	$char->job == 211
	||	$char->job == 212) {
		if($lnd["2000"])
			$list[]	= "2001";
		if($lnd["2001"])
			$list[]	= "2004";
		if($lnd["2002"])
			$list[]	= "2003";
		if($lnd["2011"])
			$list[]	= "2012";
		if($lnd["2011"] && $lnd["2014"])
			$list[]	= "2015";
		if($lnd["2021"])
			$list[]	= "2024";
		if($lnd["3011"])
			$list[]	= "3012";
		if($lnd["3012"])
			$list[]	= "3013";
		if($lnd["2000"] && $lnd["2021"])
			$list[]	= "2041";
		if($lnd["2041"])
			$list[]	= "2042";
		if($lnd["2011"] && $lnd["2021"])
			$list[]	= "2040";
	}
	if($char->job == 202
	||	$char->job == 221
	||	$char->job == 222) {
		$list[]	= "3020";
		$list[]	= "2500";
		$list[]	= "2501";
		$list[]	= "2502";
		$list[]	= "2503";
		$list[]	= "2504";
		if($lnd["3011"])
			$list[]	= "3012";
		$list[]	= "3410";
		if($lnd["3410"]) {
			$list[]	= "3411";
			$list[]	= "3420";
		}
	}
	if($char->job == 203
	||	$char->job == 231
	||	$char->job == 232) {
		$list[]	= "2030";
		if($lnd["2030"]) {
			$list[]	= "2031";
			$list[]	= "2050";
			$list[]	= "3205";
			$list[]	= "3215";
		}
		if($lnd["2050"])
			$list[]	= "2051";
		$list[]	= "2460";
		if($lnd["2460"]) {
			$list[]	= "2461";
			$list[]	= "2462";
		}
		if($lnd["2461"] && $lnd["2462"])
			$list[]	= "2055"; 
		if($lnd["2461"]) 
			$list[]	= "2463"; 
		if($lnd["2463"])
			$list[]	= "2057"; 
		if($lnd["2462"]) 
			$list[]	= "2464"; 
		if($lnd["2464"])
			$list[]	= "2056"; 
		if($lnd["2463"] && $lnd["2464"])
			$list[]	= "2465"; 
	}
	if($char->job == 211) {
		$list[]	= "3116";
		if($lnd["2024"]) 
			$list[]	= "2046";
		if($lnd["2004"]) 
			$list[]	= "2047";
		if($lnd["2011"]) 
			$list[]	= "2048";
		if($lnd["2014"]) 
			$list[]	= "2049";
	}
	if($char->job == 212) {
		$list[]	= "2069";
		if($lnd["2069"]) 
			$list[]	= "2070";
		if($lnd["2070"]) 
			$list[]	= "2071";
		if($lnd["2040"]) 
			$list[]	= "2044";
		if($lnd["2042"]) 
			$list[]	= "2045";
		if($lnd["2023"]) 
			$list[]	= "2061";
	}
	if($char->job == 221) {
		if($lnd["3411"]) 
			$list[]	= "3412";
		$list[]	= "2505";
		$list[]	= "2506";
		$list[]	= "2507";
	}
	if($char->job == 222) {
		$list[]	= "3275";
		$list[]	= "3313";
		if($lnd["3313"]) 
			$list[]	= "3314";
		if($lnd["3314"]) 
			$list[]	= "3315";
		if($lnd["3315"]) 
			$list[]	= "3316";
		if($lnd["3316"]) 
			$list[]	= "3317";
		if($lnd["3420"]) 
			$list[]	= "3423";
	}
	if($char->job == 231) {
		$list[]	= "3202";
		$list[]	= "2064";
		if($lnd["2064"]) 
			$list[]	= "2065";
		if($lnd["2064"]) 
			$list[]	= "2072";
	}
	if($char->job == 232) {
		$list[]	= "2066";
		if($lnd["2066"]) 
			$list[]	= "2067";
		if($lnd["2067"]) 
			$list[]	= "2068";
		if($lnd["2003"]) 
			$list[]	= "2062";
		if($lnd["2465"]) 
			$list[]	= "2467";
		if($lnd["2467"]) 
			$list[]	= "2468";
		if($lnd["2468"]) 
			$list[]	= "2469";
		$list[]	= "2035";
	}
	if(	$char->job == 300
	 ||	$char->job == 301
	 ||	$char->job == 302
	 ||	$char->job == 311
	 ||	$char->job == 312
	 ||	$char->job == 321
	 ||	$char->job == 322) {
		if($lnd["3000"]) {
			$list[]	= "2100";
			$list[]	= "3001";
			$list[]	= "3003";
		}
		if($lnd["3001"] || $lnd["3003"]) {
			$list[]	= "3002";
			$list[]	= "3004";
			$list[]	= "3030";
		}
		if($lnd["2100"])
			$list[]	= "2480";

		if($lnd["3101"])
			$list[]	= "3102";
	}
	if($char->job == 301
	 ||	$char->job == 311
	 ||	$char->job == 312) {
		if($lnd["2100"]) {
			$list[]	= "2101";
			$list[]	= "3200";
			$list[]	= "3210";
			$list[]	= "3220";
			$list[]	= "3230";
		}
		if($lnd["2101"])
			$list[]	= "2102";
		if($lnd["3220"])
			$list[]	= "3400";
		if($lnd["3230"])
			$list[]	= "3401";
		if($lnd["2480"])
			$list[]	= "2481";

		if($lnd["3102"] && $lnd["3220"] && $lnd["3230"])
			$list[]	= "3103";
		$list[]	= "3415";
	}
	if($char->job == 302
	 ||	$char->job == 321
	 ||	$char->job == 322) {
		if($lnd["3004"]) {
			$list[]	= "3005";
			$list[]	= "3060";
		}
		if($lnd["3060"]) {
			$list[]	= "3050";
			$list[]	= "3055";
		}
		$list[]	= "3250";
		$list[]	= "3255";
		if($lnd["3250"] or $lnd["3255"])
			$list[]	= "3265";
		$list[]	= "3415";
	}
	if($char->job == 311) {
		if($lnd["3400"]) 
			$list[]	= "3402";
		if($lnd["3401"]) 
			$list[]	= "3403";
		if($lnd["3402"] && $lnd["3403"])
			$list[]	= "3404";
		if($lnd["3102"]) 
			$list[]	= "3105";
		if($lnd["3001"]) 
			$list[]	= "3007";
		if($lnd["3003"]) 
			$list[]	= "3008";
		if($lnd["3002"]) 
			$list[]	= "3006";
		$list[]	= "3042";
		if($lnd["3042"]) 
			$list[]	= "3041";
	}
	if($char->job == 312) {
		if($lnd["3415"]) 
			$list[]	= "3416";
		if($lnd["3103"]) 
			$list[]	= "3104";
		if($lnd["2481"]) 
			$list[]	= "2482";
		if($lnd["2482"]) 
			$list[]	= "2483";
	}
	if($char->job == 321) {
		if($lnd["3060"]) {
			$list[]	= "3136";
			$list[]	= "3137";
		}
		$list[]	= "2059";
		if($lnd["3005"]) 
			$list[]	= "3009";
		if($lnd["3055"]) 
			$list[]	= "3056";
		if($lnd["3265"]) 
			$list[]	= "3270";
	}
	if($char->job == 322) {
		$list[]	= "2063";
		if($lnd["2063"]) 
			$list[]	= "3311";
		if($lnd["3311"]) 
			$list[]	= "3312";
		if($lnd["2100"]) 
			$list[]	= "2103";
		if($lnd["2103"]) 
			$list[]	= "2104";
	}
	if( $char->job == 400
	||	$char->job == 401
	||	$char->job == 402
	||	$char->job == 403
	||	$char->job == 411
	||	$char->job == 412
	||	$char->job == 421
	||	$char->job == 422
	||	$char->job == 431
	||	$char->job == 432) {
		$list[]	= "2310";
		if(!$lnd["2300"])
			$list[]	= "2300";
		if($lnd["2300"]) {
			$list[]	= "2301";
			$list[]	= "2302";
			$list[]	= "2303";
		}
	}
	if($char->job == 401
	||	$char->job == 411
	||	$char->job == 412) {
		if($lnd["2303"])
			$list[]	= "2304";
		if($lnd["2301"]){ 
			$list[]	= "2305";
			$list[]	= "2306";
		}
		if($lnd["2306"]) {
			$list[]	= "2308";
			$list[]	= "2309";
		}
		if($lnd["2302"] && $lnd["2305"] && $lnd["2306"])
			$list[]	= "2307";
	}
	if($char->job == 402
	||	$char->job == 421
	||	$char->job == 422) {

		$list[]	= "1240";
		if($lnd["1240"]) {
			$list[]	= "1241";
			$list[]	= "1243";
		}
		if($lnd["1241"]) {
			$list[]	= "1242";
			$list[]	= "1244";
		}
		$list[]	= "2401";
		$list[]	= "2404";
		$list[]	= "2408";
		if($lnd["2401"])
			$list[]	= "2402";
		if($lnd["2402"])
			$list[]	= "2403";
		if($lnd["2404"])
			$list[]	= "2405";
		if($lnd["2405"])
			$list[]	= "2406";
		if($lnd["2408"])
			$list[]	= "2409";
		if($lnd["2409"])
			$list[]	= "2410";
		if($lnd["2408"] && $lnd["2405"])
			$list[]	= "2407";
		$list[]	= "3300";
		$list[]	= "3301";
		$list[]	= "3302";
		$list[]	= "3303";
		if($lnd["3300"])
			$list[]	= "3304";
		if($lnd["3301"])
			$list[]	= "3305";
		if($lnd["3302"])
			$list[]	= "3306";
		if($lnd["3303"])
			$list[]	= "3307";
		if($lnd["3300"] && $lnd["3301"] && $lnd["3302"] && $lnd["3303"]) {
			$list[]	= "3308";
			$list[]	= "3310";
		}
	}
	if($char->job == 403
	||	$char->job == 431
	||	$char->job == 432) {
		$list[]	= "1200";
		if($lnd["1200"]) {
			$list[]	= "1207";
			$list[]	= "1208";
			$list[]	= "1220";
		}
		if($lnd["1208"])
			$list[]	= "1209";
		$list[]	= "1203";
		if($lnd["1203"])
			$list[]	= "1204";
		$list[]	= "1205";
		if($lnd["1205"])
			$list[]	= "1206";
	}
	if($char->job == 411) {
		if($lnd["2309"]) 
			$list[]	= "2313";
		if($lnd["2306"]) 
			$list[]	= "2314";
		if($lnd["2307"]) 
			$list[]	= "2315";
		if($lnd["2314"]) 
			$list[]	= "2316";
		if($lnd["2305"]) 
			$list[]	= "2318";
	}
	if($char->job == 412) {
		if($lnd["2304"]) 
			$list[]	= "2311";
		if($lnd["2303"]) 
			$list[]	= "2312";
		if($lnd["2301"]) 
			$list[]	= "2317";
		if($lnd["2317"]) 
			$list[]	= "2319";
	}
	if($char->job == 421) {
		if($lnd["3308"]) 
			$list[]	= "3309";
		if($lnd["2403"]) 
			$list[]	= "2411";
		if($lnd["2406"]) 
			$list[]	= "2412";
		if($lnd["2410"]) 
			$list[]	= "2413";
	}
	if($char->job == 422) {
		if($lnd["1242"]) 
			$list[]	= "1245";
		if($lnd["1245"]) 
			$list[]	= "1246";
	}
	if($char->job == 431) {
		$list[]	= "1221";
		if($lnd["1221"]) 
			$list[]	= "1222";
		if($lnd["1200"]) 
			$list[]	= "1223";
	}
	if($char->job == 432) {
		$list[]	= "3138";
		if($lnd["3138"]) 
			$list[]	= "3139";
		if($lnd["1206"]) 
			$list[]	= "1224";
		if($lnd["1204"]) 
			$list[]	= "1225";
	}
	if(!$lnd["3010"] && $char->job == "200")
		$list[]	= "3010";
	if(19 < $char->level)
		$list[]	= "4000";
	if(4 < $char->level)
		$list[]	= "9000";
	asort($list);
	return $list;
}
?>