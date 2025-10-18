<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function LoadJudgeData($no) {
	$Quantity	= '←←';
	switch($no) {
		case 1000:
			$judge["exp"]	= "必定";
			break;
		case 1001:
			$judge["exp"]	= "跳过此判断";
			break;
		case 1099:
			$judge["exp"]	= "HP";
			$judge["css"]	= true;
			break;
		case 1100:
			$judge["exp"]	= "自己的HP {$Quantity}(%)以上";
			break;
		case 1101:
			$judge["exp"]	= "自己的HP {$Quantity}(%)以下";
			break;
		case 1105:
			$judge["exp"]	= "自己的HP {$Quantity}以上";
			break;
		case 1106:
			$judge["exp"]	= "自己的HP {$Quantity}以下";
			break;
		case 1110:
			$judge["exp"]	= "最大HP {$Quantity}以上";
			break;
		case 1111:
			$judge["exp"]	= "最大HP {$Quantity}以下";
			break;
		case 1121:
			$judge["exp"]	= "我方 HP{$Quantity}(%)以下";
			break;
		case 1125:
			$judge["exp"]	= "我方平均HP {$Quantity}(%)以上";
			break;
		case 1126:
			$judge["exp"]	= "我方平均HP {$Quantity}(%)以下";
			break;
		case 1199:
			$judge["exp"]	= "SP";
			$judge["css"]	= true;
			break;
		case 1200:
			$judge["exp"]	= "自己的SP{$Quantity}(%)以上";
			break;
		case 1201:
			$judge["exp"]	= "自己的SP{$Quantity}(%)以下";
			break;
		case 1205:
			$judge["exp"]	= "自己的SP{$Quantity}以上";
			break;
		case 1206:
			$judge["exp"]	= "自己的SP{$Quantity}以下";
			break;
		case 1210:
			$judge["exp"]	= "最大SP{$Quantity}以上";
			break;
		case 1211:
			$judge["exp"]	= "最大SP{$Quantity}以下";
			break;
		case 1221:
			$judge["exp"]	= "我方 SP{$Quantity}(%)以下";
			break;
		case 1225:
			$judge["exp"]	= "我方平均SP {$Quantity}(%)以上";
			break;
		case 1226:
			$judge["exp"]	= "我方平均SP {$Quantity}(%)以下";
			break;
		case 1399:
			$judge["exp"]	= "生死";
			$judge["css"]	= true;
			break;
		case 1400:
			$judge["exp"]	= "我方的生存者 {$Quantity}人以上";
			break;
		case 1401:
			$judge["exp"]	= "我方的生存者 {$Quantity}人以下";
			break;
		case 1405:
			$judge["exp"]	= "我方的死者 {$Quantity}人以上";
			break;
		case 1406:
			$judge["exp"]	= "我方的死者 {$Quantity}人以下";
			break;
		case 1410:
			$judge["exp"]	= "我方前排的生存者 {$Quantity}人以上";
			break;
		case 1449:
			$judge["exp"]	= "生死(敌)";
			$judge["css"]	= true;
			break;
		case 1450:
			$judge["exp"]	= "敌方的生存者 {$Quantity}人以上";
			break;
		case 1451:
			$judge["exp"]	= "敌方的生存者 {$Quantity}人以下";
			break;
		case 1455:
			$judge["exp"]	= "敌方的死者 {$Quantity}人以上";
			break;
		case 1456:
			$judge["exp"]	= "敌方的死者 {$Quantity}人以下";
			break;
		case 1499:
			$judge["exp"]	= "蓄力+咏唱";
			$judge["css"]	= true;
			break;
		case 1500:
			$judge["exp"]	= "蓄力状态的 {$Quantity}人以上";
			break;
		case 1501:
			$judge["exp"]	= "蓄力状态的 {$Quantity}人以下";
			break;
		case 1505:
			$judge["exp"]	= "咏唱状态的{$Quantity}人以上";
			break;
		case 1506:
			$judge["exp"]	= "咏唱状态的{$Quantity}人以下";
			break;
		case 1510:
			$judge["exp"]	= "蓄力咏唱状态的{$Quantity}人以上";
			break;
		case 1511:
			$judge["exp"]	= "蓄力咏唱状态的{$Quantity}人以下";
			break;
		case 1549:
			$judge["exp"]	= "咏唱(敌)";
			$judge["css"]	= true;
			break;
		case 1550:
			$judge["exp"]	= "敌方蓄力状态的 {$Quantity}人以上";
			break;
		case 1551:
			$judge["exp"]	= "敌方蓄力状态的 {$Quantity}人以下";
			break;
		case 1555:
			$judge["exp"]	= "敌方咏唱状态的 {$Quantity}人以上";
			break;
		case 1556:
			$judge["exp"]	= "敌方咏唱状态的 {$Quantity}人以下";
			break;
		case 1560:
			$judge["exp"]	= "敌方咏唱蓄力状态的 {$Quantity}人以上";
			break;
		case 1561:
			$judge["exp"]	= "敌方蓄力咏唱状态的 {$Quantity}人以下";
			break;
		case 1599:
			$judge["exp"]	= "毒";
			$judge["css"]	= true;
			break;
		case 1600:
			$judge["exp"]	= "自己处于毒状态";
			break;
		case 1610:
			$judge["exp"]	= "我方毒状态 {$Quantity}人以上";
			break;
		case 1611:
			$judge["exp"]	= "我方毒状态 {$Quantity}人以下";
			break;
		case 1612:
			$judge["exp"]	= "我方毒状态 {$Quantity}% 以上";
			break;
		case 1613:
			$judge["exp"]	= "我方毒状态 {$Quantity}% 以下";
			break;
		case 1614:
			$judge["exp"]	= "毒(敌)";
			$judge["css"]	= true;
			break;
		case 1615:
			$judge["exp"]	= "敌方毒状态 {$Quantity}人以上";
			break;
		case 1616:
			$judge["exp"]	= "敌方毒状态 {$Quantity}人以下";
			break;
		case 1617:
			$judge["exp"]	= "敌方毒状态 {$Quantity}% 以上";
			break;
		case 1618:
			$judge["exp"]	= "敌方毒状态 {$Quantity}% 以下";
			break;
		case 1699:
			$judge["exp"]	= "队列";
			$judge["css"]	= true;
			break;
		case 1700:
			$judge["exp"]	= "自己在前排";
			break;
		case 1701:
			$judge["exp"]	= "自己在后排";
			break;
		case 1710:
			$judge["exp"]	= "我方前排{$Quantity}人以上";
			break;
		case 1711:
			$judge["exp"]	= "我方前排{$Quantity}人以下";
			break;
		case 1712:
			$judge["exp"]	= "我方前排{$Quantity}人";
			break;
		case 1715:
			$judge["exp"]	= "我方后排{$Quantity}人以上";
			break;
		case 1716:
			$judge["exp"]	= "我方后排{$Quantity}人以下";
			break;
		case 1717:
			$judge["exp"]	= "我方后排{$Quantity}人";
			break;
		case 1749:
			$judge["exp"]	= "队列(敌)";
			$judge["css"]	= true;
			break;
		case 1750:
			$judge["exp"]	= "敌方前排{$Quantity}人以上";
			break;
		case 1751:
			$judge["exp"]	= "敌方前排{$Quantity}人以下";
			break;
		case 1752:
			$judge["exp"]	= "敌方前排{$Quantity}人";
			break;
		case 1755:
			$judge["exp"]	= "敌方后排{$Quantity}人以上";
			break;
		case 1756:
			$judge["exp"]	= "敌方后排{$Quantity}人以下";
			break;
		case 1757:
			$judge["exp"]	= "敌方后排{$Quantity}人";
			break;
		case 1799:
			$judge["exp"]	= "召唤";
			$judge["css"]	= true;
			break;
		case 1800:
			$judge["exp"]	= "我方的召唤物 {$Quantity}匹以上";
			break;
		case 1801:
			$judge["exp"]	= "我方的召唤物 {$Quantity}匹以下";
			break;
		case 1805:
			$judge["exp"]	= "我方的召唤物 {$Quantity}匹";
			break;
		case 1819:
			$judge["exp"]	= "召唤(敌)";
			$judge["css"]	= true;
			break;
		case 1820:
			$judge["exp"]	= "敌方的召唤物 {$Quantity}匹以上";
			break;
		case 1821:
			$judge["exp"]	= "敌方的召唤物 {$Quantity}匹以下";
			break;
		case 1825:
			$judge["exp"]	= "敌方的召唤物 {$Quantity}匹";
			break;
		case 1839:
			$judge["exp"]	= "魔法阵";
			$judge["css"]	= true;
			break;
		case 1840:
			$judge["exp"]	= "我方的魔法阵数 {$Quantity}个以上";
			break;
		case 1841:
			$judge["exp"]	= "我方的魔法阵数 {$Quantity}个以下";
			break;
		case 1845:
			$judge["exp"]	= "我方的魔法阵数 {$Quantity}个";
			break;
		case 1849:
			$judge["exp"]	= "魔法阵(敌)";
			$judge["css"]	= true;
			break;
		case 1850:
			$judge["exp"]	= "敌方的魔法阵数 {$Quantity}个以上";
			break;
		case 1851:
			$judge["exp"]	= "敌方的魔法阵数 {$Quantity}个以下";
			break;
		case 1855:
			$judge["exp"]	= "敌方的魔法阵数 {$Quantity}个";
			break;
		case 1899:
			$judge["exp"]	= "指定行动回数";
			$judge["css"]	= true;
			break;
		case 1900:
			$judge["exp"]	= "自己的行动回数 {$Quantity}回以上";
			break;
		case 1901:
			$judge["exp"]	= "自己的行动回数 {$Quantity}回以下";
			break;
		case 1902:
			$judge["exp"]	= "自己的第 {$Quantity}回合";
			break;
		case 1919:
			$judge["exp"]	= "回合限制";
			$judge["css"]	= true;
			break;
		case 1920:
			$judge["exp"]	= "第{$Quantity}回 必定";
			break;
		case 1939:
			$judge["exp"]	= "概率";
			$judge["css"]	= true;
			break;
		case 1940:
			$judge["exp"]	= "{$Quantity}%的概率";
			break;
		case 9000:
			$judge["exp"]	= "敌方Lv超过{$Quantity}以上";
			break;
		default:
$judge	= false;
	}
	return $judge;
}
?>