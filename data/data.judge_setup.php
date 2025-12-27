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
			$judge["exp"]	= "반드시";
			break;
		case 1001:
			$judge["exp"]	= "이 판단 건너뛰기";
			break;
		case 1099:
			$judge["exp"]	= "HP";
			$judge["css"]	= true;
			break;
		case 1100:
			$judge["exp"]	= "자신의 HP가 {$Quantity}(%)이상";
			break;
		case 1101:
			$judge["exp"]	= "자신의 HP가 {$Quantity}(%)이하";
			break;
		case 1105:
			$judge["exp"]	= "자신의 HP가 {$Quantity}이상";
			break;
		case 1106:
			$judge["exp"]	= "자신의 HP가 {$Quantity}이하";
			break;
		case 1110:
			$judge["exp"]	= "최대 HP가 {$Quantity}이상";
			break;
		case 1111:
			$judge["exp"]	= "최대 HP가 {$Quantity}이하";
			break;
		case 1121:
			$judge["exp"]	= "우리의 HP가 {$Quantity}(%)이하";
			break;
		case 1125:
			$judge["exp"]	= "우리의 평균 HP가 {$Quantity}(%)이상";
			break;
		case 1126:
			$judge["exp"]	= "우리의 평균 HP가 {$Quantity}(%)이하";
			break;
		case 1199:
			$judge["exp"]	= "SP";
			$judge["css"]	= true;
			break;
		case 1200:
			$judge["exp"]	= "자신의 SP가{$Quantity}(%)이상";
			break;
		case 1201:
			$judge["exp"]	= "자신의 SP가{$Quantity}(%)이하";
			break;
		case 1205:
			$judge["exp"]	= "자신의 SP가{$Quantity}이상";
			break;
		case 1206:
			$judge["exp"]	= "자신의 SP가{$Quantity}이하";
			break;
		case 1210:
			$judge["exp"]	= "최대 SP가{$Quantity}이상";
			break;
		case 1211:
			$judge["exp"]	= "최대 SP가{$Quantity}이하";
			break;
		case 1221:
			$judge["exp"]	= "우리의 SP가{$Quantity}(%)이하";
			break;
		case 1225:
			$judge["exp"]	= "우리의 평균 SP가 {$Quantity}(%)이상";
			break;
		case 1226:
			$judge["exp"]	= "우리의 평균 SP가 {$Quantity}(%)이하";
			break;
		case 1399:
			$judge["exp"]	= "생사";
			$judge["css"]	= true;
			break;
		case 1400:
			$judge["exp"]	= "우리의 생존자가 {$Quantity}인 이상";
			break;
		case 1401:
			$judge["exp"]	= "우리의 생존자가 {$Quantity}인 이하";
			break;
		case 1405:
			$judge["exp"]	= "우리의 사망자가 {$Quantity}인 이상";
			break;
		case 1406:
			$judge["exp"]	= "우리의 사망자가 {$Quantity}인 이하";
			break;
		case 1410:
			$judge["exp"]	= "우리의 최전선 생존자들이 {$Quantity}인 이상";
			break;
		case 1449:
			$judge["exp"]	= "생사(적)";
			$judge["css"]	= true;
			break;
		case 1450:
			$judge["exp"]	= "적의 생존자들이 {$Quantity}인 이상";
			break;
		case 1451:
			$judge["exp"]	= "적의 생존자들이 {$Quantity}인 이하";
			break;
		case 1455:
			$judge["exp"]	= "적의 사망자들이 {$Quantity}인 이상";
			break;
		case 1456:
			$judge["exp"]	= "적의 사망자들이 {$Quantity}인 이하";
			break;
		case 1499:
			$judge["exp"]	= "충전 + 주문";
			$judge["css"]	= true;
			break;
		case 1500:
			$judge["exp"]	= "충전 상태 {$Quantity}인 이상";
			break;
		case 1501:
			$judge["exp"]	= "충전 상태 {$Quantity}인 이하";
			break;
		case 1505:
			$judge["exp"]	= "찬송 상태{$Quantity}인 이상";
			break;
		case 1506:
			$judge["exp"]	= "찬송 상태{$Quantity}인 이하";
			break;
		case 1510:
			$judge["exp"]	= "충전 중 찬송 중{$Quantity}인 이상";
			break;
		case 1511:
			$judge["exp"]	= "충전 중 찬송 중{$Quantity}인 이하";
			break;
		case 1549:
			$judge["exp"]	= "(적에게) 외침";
			$judge["css"]	= true;
			break;
		case 1550:
			$judge["exp"]	= "적의 돌격 {$Quantity}인 이상";
			break;
		case 1551:
			$judge["exp"]	= "적의 돌격 {$Quantity}인 이하";
			break;
		case 1555:
			$judge["exp"]	= "적의 주문 상태 {$Quantity}인 이상";
			break;
		case 1556:
			$judge["exp"]	= "적의 주문 상태 {$Quantity}인 이하";
			break;
		case 1560:
			$judge["exp"]	= "적의 돌진 상태 {$Quantity}인 이상";
			break;
		case 1561:
			$judge["exp"]	= "적의 돌진/주문 상태 {$Quantity}인 이하";
			break;
		case 1599:
			$judge["exp"]	= "독";
			$judge["css"]	= true;
			break;
		case 1600:
			$judge["exp"]	= "독이 든 상태에 있다";
			break;
		case 1610:
			$judge["exp"]	= "우리편의 독 상태 {$Quantity}인 이상";
			break;
		case 1611:
			$judge["exp"]	= "우리편의 독 상태 {$Quantity}인 이하";
			break;
		case 1612:
			$judge["exp"]	= "우리편의 독 상태 {$Quantity}% 이상";
			break;
		case 1613:
			$judge["exp"]	= "우리편의 독 상태 {$Quantity}% 이하";
			break;
		case 1614:
			$judge["exp"]	= "독(적)";
			$judge["css"]	= true;
			break;
		case 1615:
			$judge["exp"]	= "적의 독 상태 {$Quantity}인 이상";
			break;
		case 1616:
			$judge["exp"]	= "적의 독 상태 {$Quantity}인 이하";
			break;
		case 1617:
			$judge["exp"]	= "적의 독 상태 {$Quantity}% 이상";
			break;
		case 1618:
			$judge["exp"]	= "적의 독 상태 {$Quantity}% 이하";
			break;
		case 1699:
			$judge["exp"]	= "대기열";
			$judge["css"]	= true;
			break;
		case 1700:
			$judge["exp"]	= "나는 앞줄에 있어요";
			break;
		case 1701:
			$judge["exp"]	= "나는 뒷줄에 있어요";
			break;
		case 1710:
			$judge["exp"]	= "우리의 앞줄{$Quantity}인 이상";
			break;
		case 1711:
			$judge["exp"]	= "우리의 앞줄{$Quantity}인 이하";
			break;
		case 1712:
			$judge["exp"]	= "우리의 앞줄{$Quantity}인";
			break;
		case 1715:
			$judge["exp"]	= "우리 뒷줄{$Quantity}인 이상";
			break;
		case 1716:
			$judge["exp"]	= "우리 뒷줄{$Quantity}인 이하";
			break;
		case 1717:
			$judge["exp"]	= "우리 뒷줄{$Quantity}인";
			break;
		case 1749:
			$judge["exp"]	= "대기열(적)";
			$judge["css"]	= true;
			break;
		case 1750:
			$judge["exp"]	= "적의 앞줄{$Quantity}인 이상";
			break;
		case 1751:
			$judge["exp"]	= "적의 앞줄{$Quantity}인 이하";
			break;
		case 1752:
			$judge["exp"]	= "적의 앞줄{$Quantity}인";
			break;
		case 1755:
			$judge["exp"]	= "적군 뒷줄{$Quantity}인 이상";
			break;
		case 1756:
			$judge["exp"]	= "적군 뒷줄{$Quantity}인 이하";
			break;
		case 1757:
			$judge["exp"]	= "적군 뒷줄{$Quantity}인";
			break;
		case 1799:
			$judge["exp"]	= "소환";
			$judge["css"]	= true;
			break;
		case 1800:
			$judge["exp"]	= "우리가 소환한 생물들 {$Quantity}마리 이상";
			break;
		case 1801:
			$judge["exp"]	= "우리가 소환한 생물들 {$Quantity}마리 이하";
			break;
		case 1805:
			$judge["exp"]	= "우리가 소환한 생물들 {$Quantity}마리";
			break;
		case 1819:
			$judge["exp"]	= "소환 (적)";
			$judge["css"]	= true;
			break;
		case 1820:
			$judge["exp"]	= "적의 소환 {$Quantity}마리 이상";
			break;
		case 1821:
			$judge["exp"]	= "적의 소환 {$Quantity}마리 이하";
			break;
		case 1825:
			$judge["exp"]	= "적의 소환 {$Quantity}마리";
			break;
		case 1839:
			$judge["exp"]	= "매직 서클";
			$judge["css"]	= true;
			break;
		case 1840:
			$judge["exp"]	= "우리의 마법진의 수 {$Quantity}개 이상";
			break;
		case 1841:
			$judge["exp"]	= "우리의 마법진의 수 {$Quantity}개 이하";
			break;
		case 1845:
			$judge["exp"]	= "우리의 마법진의 수 {$Quantity}개";
			break;
		case 1849:
			$judge["exp"]	= "매직 서클(적)";
			$judge["css"]	= true;
			break;
		case 1850:
			$judge["exp"]	= "적의 마법진의 수 {$Quantity}개 이상";
			break;
		case 1851:
			$judge["exp"]	= "적의 마법진의 수 {$Quantity}개 이하";
			break;
		case 1855:
			$judge["exp"]	= "적의 마법진의 수 {$Quantity}개";
			break;
		case 1899:
			$judge["exp"]	= "지정된 수의 작업";
			$judge["css"]	= true;
			break;
		case 1900:
			$judge["exp"]	= "내 액션 카운트 {$Quantity}회 이상";
			break;
		case 1901:
			$judge["exp"]	= "내 액션 카운트 {$Quantity}회 이하";
			break;
		case 1902:
			$judge["exp"]	= "내 라운드 {$Quantity}";
			break;
		case 1919:
			$judge["exp"]	= "라운드 제한";
			$judge["css"]	= true;
			break;
		case 1920:
			$judge["exp"]	= "제{$Quantity}회 필히";
			break;
		case 1939:
			$judge["exp"]	= "확률";
			$judge["css"]	= true;
			break;
		case 1940:
			$judge["exp"]	= "{$Quantity}%의 확률";
			break;
		case 9000:
			$judge["exp"]	= "적 레벨이 초과 {$Quantity}이상";
			break;
		default:
			$judge	= false;
	}
	return $judge;
}
?>