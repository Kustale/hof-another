<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

include_once(DATA_JUDGE_SETUP);
?>
<div style="margin:0 15px">
<h4>판정(judge)</h4>
<table border="0" cellspacing="0">
  <tbody>
		<tr>
			<td class="td6">물론입니다</td>
			<td class="td6">반드시 실행됩니다</td>
		</tr>
			<td class="td9">다음 심판으로 이동합니다</td>
			<td class="td9">"물론"은 건너뜁니다</td>
		</tr>
    <tr>
		<td class="td6">HP가 10% 이상일 때<br>
		HP가 20% 이상일 때<br>
		HP가 30% 이상일 때<br>
		HP가 40% 이상일 때<br>
		HP가 50% 이상일 때<br>
		HP가 60% 이상일 때<br>
		HP가 70% 이상일 때<br>
		HP가 80% 이상일 때<br>
		HP가 90% 이상일 때<br>
		HP가 10% 미만일 때<br>
		HP가 20% 미만일 때<br>
		HP가 30% 미만일 때<br>
		HP가 40% 미만일 때<br>
		HP가 50% 미만일 때<br>
		HP가 60% 미만일 때<br>
		HP가 70% 미만일 때<br>
		HP가 80% 미만일 때<br>
		HP가 90% 미만일 때</td>
		<td valign="top" class="td6">HP가 **%보다 높거나 낮을 때<br>
		실행됩니다.</td>
    </tr>
	<tr>
		<td class="td9">아군 캐릭터의 HP가 10% 미만일 때<br>
		아군 캐릭터의 HP가 30% 미만일 때<br>
		아군 캐릭터의 HP가 50% 미만일 때<br>
		아군 캐릭터의 HP가 70% 미만일 때<br>
		아군 캐릭터의 HP가 90% 미만일 때</td>
		<td valign="top" class="td9">HP가 **% 이하이고 인원이 2명 이상일 때<br>
		실행합니다.</td>
	</tr>
	<tr>
		<td class="td6">평균 HP가 10% 이상일 때<br>
		평균 HP가 30% 이상일 때<br>
		평균 HP가 50% 이상일 때<br>
		평균 HP가 70% 이상일 때<br>
		평균 HP가 90% 이상일 때<br>
		평균 HP가 10% 미만일 때<br>
		평균 HP가 30% 미만일 때<br>
		평균 HP가 50% 미만일 때<br>
		평균 HP가 70% 미만일 때<br>
		평균 HP가 90% 미만일 때</td>
		<td valign="top" class="td6">평균 HP가 **% 미만/초과일 때<br>
		 실행됩니다.</td>
	</tr>
	<tr>
		<td class="td9">SP가 10% 이상일 때<br>
		SP가 20% 이상일 때<br>
		SP가 30% 이상일 때<br>
		SP가 40% 이상일 때<br>
		SP가 50% 이상일 때<br>
		SP가 60% 이상일 때<br>
		SP가 70% 이상일 때<br>
		SP가 80% 이상일 때<br>
		SP가 90% 이상일 때<br>
		SP가 10% 미만일 때<br>
		SP가 20% 미만일 때<br>
		SP가 30% 미만일 때<br>
		SP가 40% 미만일 때<br>
		SP가 50% 미만일 때<br>
		SP가 60% 미만일 때<br>
		자신의 SP일 때 70% 미만일 때<br>
		자신의 SP가 80% 미만일 때<br>
		자신의 SP가 90% 미만일 때</td>
		<td valign="top" class="td9">SP가 **% 초과/미만일 때<br>
		실행됩니다.</td>
	</tr>
	<tr>
		<td class="td6">SP가 10% 미만일 때<br>
		SP가 30% 미만인 캐릭터가 우리 팀에 있을 때<br>
		SP가 50% 미만인 캐릭터가 우리 팀에 있을 때<br>
		SP가 70% 미만인 캐릭터가 우리 팀에 있을 때<br>
		SP가 90% 미만인 캐릭터가 우리 팀에 있을 때</td>
		<td valign="top" class="td6">SP가 **% 미만인 캐릭터가 두 명 이상 있을 때<br>
		실행합니다.</td>
		</tr>
	<tr>
		<td class="td9">평균 SP가 10% 이상일 때<br>
		평균 SP가 30% 이상일 때<br>
		평균 SP가 50% 이상일 때<br>
		평균 SP가 70% 이상일 때<br>
		평균 SP가 90% 이상일 때<br>
		평균 SP가 10% 미만일 때<br>
		평균 SP가 30% 미만일 때<br>
		평균 SP가 50% 미만일 때<br>
		평균 SP가 70% 미만일 때<br>
		평균 SP가 90% 미만일 때</td>
		<td valign="top" class="td9">평균 SP가 **% 이상/이하일 때<br>
		실행됩니다.</td>
	</tr>
	<tr>
		<td class="td6">1명 이상이 쓰러졌을 때<br>
		2명 이상이 쓰러졌을 때<br>
		3명 이상이 쓰러졌을 때<br>
		자신만 살아남았을 때<br>
		2명 이상이 살아남았을 때<br>
		3명 이상이 살아남았을 때<br>
		4명 이상이 살아남았을 때</td>
		<td valign="top" class="td6">우리 편<br>
		생존자 수<br>
		사망자 수<br>
		적절하게 실행하세요.</td>
	</tr>
	<tr>
		<td class="td9">10% 확률<br>
		30% 확률<br>
		50% 확률<br>
		70% 확률<br>
		90% 확률</td>
		<td valign="top" class="td9">확률</td>
	</tr>
	<tr>
		<td class="td6">첫 번째 턴에서<br>
		두 번째 턴에서<br>
		세 번째 턴에서<br>
		네 번째 턴에서<br>
		다섯 번째 턴에서</td>
		<td valign="top" class="td6">지정된 턴에 실행합니다.</td>
	</tr>
	<tr>
		<td class="td9">"보장됨" 1개<br>
		"보장됨" 2개<br>
		"보장됨" 3개</td>
		<td valign="top" class="td9">"보장됨"이 사용되는 횟수입니다.</td>
	</tr>
	<tr>
		<td class="td6">아군에 캐스팅 캐릭터가 있을 때<br>
		아군에 캐스팅 캐릭터가 없을 때<br>
		적군에 캐스팅 캐릭터가 있을 때<br>
		적군에 캐스팅 캐릭터가 없을 때</td>
		<td valign="top" class="td6">아군/적군<br>
		캐스팅 캐릭터가 있을 때/없을 때<br>
		실행 시점</td>
	</tr>
	<tr>
		<td class="td9">누군가가 중독되었을 때<br>
		2명 이상이 중독되었을 때<br>
		3명 이상이 중독되었을 때<br>
		4명 이상이 중독되었을 때</td>
		<td valign="top" class="td9">중독된 캐릭터 수<br>
		중독된 캐릭터 수에 해당하는 경우 실행됩니다.</td>
	</tr>
	<tr>
		<td class="td6">앞줄에 서 있는 본인<br>
		우리 팀 앞줄에 아무도 없습니다<br>
		우리 팀 앞줄에 1명이 있습니다<br>
		우리 팀 앞줄에 2명 이하가 있습니다<br>
		우리 팀 앞줄에 3명 이하가 있습니다<br>
		우리 팀 앞줄에 4명 이하가 있습니다<br>
		우리 팀 앞줄에 1명이 있습니다<br>
		우리 팀 앞줄에 2명 이상가 있습니다<br>
		우리 팀 앞줄에 3명 이상가 있습니다<br>
		우리 팀 앞줄에 4명 이상가 있습니다<br>
		뒷줄에 있는 본인<br>
		우리 팀 뒷줄에 있습니다<br>
		우리 팀 뒷줄에 1명이 있습니다<br>
		우리 팀 뒷줄에 2명 이하가 있습니다<br>
		우리 팀 뒷줄에 3명 이하가 있습니다<br>
		우리 팀 뒷줄에 4명 이하가 있는 경우<br>
		우리 편 뒷줄에 1명 이상이 있는 경우<br>
		우리 편 뒷줄에 2명 이상이 있는 경우<br>
		우리 편 뒷줄에 3명 이상이 있는 경우<br>
		우리 편 뒷줄에 4명 이상이 있는 경우</td>
		<td valign="top" class="td6">자신의 위치<br>
		<br>
		또는<br>
		<br>
		대기열에 있는 인원 수가 일치하면 실행합니다.<br>
		(사망자 제외)</td>
	</tr>
	<tr>
		<td class="td9">적의 앞줄에 적이 있을 때<br>
		적의 앞줄이 비어 있을 때<br>
		적의 뒷줄에 적이 있을 때<br>
		적의 뒷줄이 비어 있을 때</td>
		<td valign="top" class="td9">적의 대기열 번호가 일치하면 실행합니다.<br>
		(사망한 적 제외)</td>
	</tr>
	<tr>
		<td class="td6">소환 없음<br>
		소환 1회<br>
		소환 2회 이상</td>
		<td valign="top" class="td6">소환의 존재 여부에 따라 실행됩니다.</td>
	</tr>
  </tbody>
</table>

</div>