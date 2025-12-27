<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/
?>
<div style="margin:15px">
<!-- ---------------------------------------------------------------- -->
<a name="content"></a>
<h4>목록</h4>
<ul>
<li><a href="#rule">규칙</a></li>
<li><a href="#menu">메뉴</a></li>
<li><a href="#btl">배틀 플로우</a></li>
<li><a href="#char">캐릭터 디자인</a></li>
<li><a href="#charstat">캐릭터의 기본 능력치</a></li>
<li><a href="#statup">능력치 상승</a></li>
<li><a href="#jdg">전투 중 임무 명령</a></li>
<li><a href="#posi">인물의 위치 관계 및 수비수 보호</a></li>
<li><a href="#equip">캐릭터 장비</a></li>
<li><a href="#skill">캐릭터 스킬</a></li>
<li><a href="#elem">공격 속성</a></li>
<li><a href="#state">캐릭터 상태</a></li>
<li><a href="#jobchange">직업 변경 (경력 전환)</a></li>
<li><a href="#sacrier">사크리에 (광전사)의 공격 방식</a></li>
<li><a href="#ranking">순위</a></li>
<li><a href="?manual2">고급 안내서</a></li>
<li><a href="#cr">사용한 그림</a></li>
</ul>
<a name="rule"></a>
<h4>규칙(Rule) <a href="#content"></a></h4>
<p style="margin-left:50px">이 게임의 목적은 
<br />바로 차트 1위 자리에 오르는 것입니다.<br />
그리고 꾸준히 순위를 유지하고 있습니다.<br />
모험적인 요소가 있는 것은 아닙니다.</p>

<p style="margin-left:50px">스스로 1~5명의 팀을 만들어 싸워서 <br />
랭킹에 올릴 수 있습니다.</p>

<p style="margin-left:50px">1위에 오르기 위해 지속적으로 <br />
적(괴물)과 전투를 벌이며 <br />
적(괴물)으로부터 더 강력한 아이템을 빼앗는 것이 <br />
이 게임의 재미있는 점입니다.<br />
순위 싸움의 적은 다른 플레이어가 될 것입니다.</p>

<p style="margin-left:50px">각 인물은 스킬의 사용 조건 등에 따라, 상세한 설정을 실시합니다.<br />
흠잡을 데 없는 전술 구성을 조정하는 것은 간단한 일이 아닙니다.</p>

<p class="bold u" style="margin-left:50px">차트 기능은 아직 완벽하지 않습니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="menu"></a>
<h4>메뉴(Menu) <a href="#content"></a></h4>
<img src="./image/manual/003.gif">
<p><span class="u bold">로그인하면 다음과 같은 메뉴가 뜬다.</span>
<ul>
<li><span class="bold">Top</span> - 소유자의 일람</li>
<li><span class="bold">전투 (Hunt)</span> - 괴물과 전투</li>
<li><span class="bold">아이템 (Item)</span> - 소지 아이템 일람</li>
<li><span class="bold">상점(Shop)</span> - 소품 매매 및 소비 시간 아르바이트.</li>
<li><span class="bold">순위 (Rank)</span> - 차트.</li>
<li><span class="bold">고용 (Recruit)</span> - 새로운 인물 채용</li>
<li><span class="bold">설정(Setting)</span> - 각종 설정. 말소.</li>
<li><span class="bold">로그(Log)</span> - 과거 전투의 기록을 봅니다.</li>
</ul></p>
<p>또한, <span class="u bold">메뉴의 아래</span>
<ul>
<li /><span class="bold">팀 이름</span> - 이름.
<li /><span class="bold">자금(Funds)</span> - 가진 돈.
<li /><span class="bold">시간(Time)</span> - 시간. 전투 시 감소. 시간이 지나면서 점차 회복될 것입니다.
</ul></p>
<a name="btl"></a>
<!-- ---------------------------------------------------------------- -->
<h4>배틀 플로우 <a href="#content"></a></h4>
<div style="margin-left:50px">
<p>전투 과정은 컴퓨터가 처리합니다.<br />
전투 중에는 밤에 명령을 내릴 수 없습니다.</p>

1. 인물의 능력순에 따라 행동합니다.
<div class="bold" style="margin-left:30px">↓↓↓</div>
2. 인물은 사전 설정에 따라 행동합니다.
<div class="bold" style="margin-left:30px">↓↓↓</div>
3. (1과 2)
<div class="bold" style="margin-left:30px">↓↓↓</div>
4. 다음 조건이 충족되면 전투는 종료됩니다.
<p><span class="bold u">종료조건</span><br />
1. 아군 또는 적군은 전원 싸울 수 없습니다.<br />
2. 누적전투 <?=BATTLE_MAX_TURNS?>라운드는 무승부.</p>
</div>
<!-- ---------------------------------------------------------------- -->
<a name="char"></a>
<h4>캐릭터 디자인<a href="#content"></a></h4>
<p style="margin-left:50px">로그인 후 top 페이지에서 캐릭터를 클릭하면 <br />인물에 관한 페이지가 나타납니다.<br />
<img src="./image/manual/001.gif"><br />
자세한 설명은 다음과 같습니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="charstat"></a>
<h4>캐릭터 기본 능력치 값 <a href="#content"></a></h4>
<p style="margin-left:50px">
<img src="./image/manual/002.gif">
<ul>
<li /><span class="bold">Exp</span> : 업그레이드에 필요한 경험
<li /><span class="bold">MaxHP</span> : 최대 체력. 0이면 녹아웃
<li /><span class="bold">MaxSP</span> : 스킬 사용 시 사용한 값
<li /><span class="bold">Str</span> : 힘. HP 및 물리적 공격력에 영향을 미칩니다.
<li /><span class="bold">Int</span> : 지능. SP와 마법 공격력에 영향을 미칩니다.
<li /><span class="bold">Dex</span> : 민첩함. 더 많은 장비(?) 사냥꾼은 공격력 상승, 소환물 강화.
<li /><span class="bold">Spd</span> : 속도. 높을수록 행동 횟수도 많아지고 공격 간격이 짧아집니다.
<li /><span class="bold">Luk</span> : 강화 소환물 운반.
</ul>
</p>
<!-- ---------------------------------------------------------------- -->
<a name="statup"></a>
<h4>능력치 상승g<a href="#content"></a></h4>
<p style="margin-left:50px">캐릭터가 지속적으로 전투하여 <span class="u">경험치</span>를 업그레이드할 때 <br />
몇 가지 포인트를 얻게 되며, 이를 통해 자유롭게 각종 능력치를 강화할 수 있습니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="jdg"></a>
<h4>전투에서의 인물들의 명령 <a href="#content"></a></h4>
<p style="margin-left:50px">기본적으로 캐릭터 전투는 플레이어가 설정한 동작에 따라 점진적으로 움직입니다.</p>
<div style="margin-left:50px">
<table cellspacing="5"><tbody>
<tr><td class="bold">No</td><td style="text-align:center" class="bold">판정</td>
<td style="text-align:center" class="bold">스킬 사용</td></tr>
<tr><TD>1</TD>
<TD><SELECT>
<OPTION>필요한</OPTION>
<OPTION>자신의 HP가 50% 이상인 경우</OPTION>
<OPTION>자신의 HP가 50% 이하인 경우</OPTION>
<OPTION>동반자 중 HP가 50% 이하인 사람이 있는 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이상인 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이하인 경우</OPTION>
<OPTION>자신의 SP가 50% 이상인 경우</OPTION>
<OPTION>자신의 SP가 50% 이하인 경우</OPTION>
<OPTION>50%의 확률로</OPTION>
<OPTION selected>처음 행동할 때</OPTION>
<OPTION>두번째 행동할 때</OPTION>
<OPTION>세번째 행동할 때</OPTION>
<OPTION>한 번쯤</OPTION>
<OPTION>두 번쯤</OPTION>
<OPTION>세 번쯤</OPTION></SELECT>
</TD>
<TD><SELECT>
<OPTION>스킬 1</OPTION>
<OPTION>스킬 2</OPTION>
<OPTION selected>스킬 3</OPTION>
<OPTION>회복 마법</OPTION>
<OPTION>아이템 사용</OPTION></SELECT>
</TD></TR>
<TR>
<TD>2</TD>
<TD><SELECT>
<OPTION>필요한</OPTION>
<OPTION>자신의 HP가 50% 이상인 경우</OPTION>
<OPTION>자신의 HP가 50% 이하인 경우</OPTION>
<OPTION>동료 중에 HP가 50% 이하인 사람이 있는 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이상인 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이하인 경우</OPTION>
<OPTION selected>자신의 SP가 50% 이상인 경우</OPTION>
<OPTION>자신의 SP가 50% 이하인 경우</OPTION>
<OPTION>50%의 확률로</OPTION>
<OPTION>처음 행동할 때</OPTION>
<OPTION>두번째 행동할 때</OPTION>
<OPTION>세번째 행동할 때</OPTION>
<OPTION>한 번쯤</OPTION>
<OPTION>두 번쯤</OPTION>
<OPTION>세 번쯤</OPTION></SELECT>
</TD>
<TD><SELECT>
<OPTION>스킬 1</OPTION>
<OPTION selected>스킬 2</OPTION>
<OPTION>스킬 3</OPTION>
<OPTION>회복 마법</OPTION>
<OPTION>아이템 사용</OPTION></SELECT>
</TD></TR>
<TR>
<TD>3</TD>
<TD><SELECT>
<OPTION selected>필요</OPTION>
<OPTION>자신의 HP가 50% 이상인 경우</OPTION>
<OPTION>자신의 HP가 50% 이하인 경우</OPTION>
<OPTION>동반자 중 HP가 50% 이하인 인물이 있는 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이상인 경우</OPTION>
<OPTION>동반자의 평균 HP가 50% 이하인 경우</OPTION>
<OPTION>자신의 SP가 50% 이상인 경우</OPTION>
<OPTION>자신의 SP가 50% 이하인 경우</OPTION>
<OPTION>50%의 확률로</OPTION>
<OPTION>처음 행동할 때</OPTION>
<OPTION>두번째 행동할 때</OPTION>
<OPTION>세번째 행동할 때</OPTION>
<OPTION>한 번쯤</OPTION>
<OPTION>두 번쯤</OPTION>
<OPTION>세 번쯤</OPTION></SELECT>
</TD>
<TD><SELECT>
<OPTION selected>스킬 1</OPTION>
<OPTION>스킬 2</OPTION>
<OPTION>스킬 3</OPTION>
<OPTION>회복 마법</OPTION>
<OPTION>아이템 사용</OPTION></SELECT>
</TD></TR></TBODY></TABLE></DIV>
<p style="margin-left:50px">이것은 전투 설정의 예입니다.<br />
캐릭터는 순서대로 움직이며 <br />
<span class="bold">No</span>로 얻은 숫자부터 <span class="bold">판정</span>하고 <br />
판정 조건에 맞으면 <span class="bold">스킬</span>을 수행합니다.<br />
전투 상황이 변할 때, 상황에 따라 다음과 같은 작업을 수행합니다.</p>
<div style="margin-left:50px">
<table><tbody>
<tr><td>"처음 행동할 때"</td><td>"스킬 3"</td></tr>
<tr><td>"자신의 SP가 50% 이상인 경우"</td><td>"스킬 2"</td></tr>
<tr><td>"필요한"</td><td>"스킬 1"</td></tr>
</tbody></table>
</div>
<p style="margin-left:50px">설정, <br />
인물이 첫 행동을 취하여 스킬 3을 사용하는 경우.<br />
둘째, 이후 SP가 50% 이상인 라운드에서 스킬 2를 사용하고 <br />
SP가 49% 이하로 떨어지면 스킬 1을 사용합니다.</p>
<p style="margin-left:50px">판정 조건의 수는 <span class="bold">Int</span>에 따라 증가할 것입니다. (No 증가)<br />
판정된 종류는 로그인 후 표시됩니다(설명에는 간단한 사례만 있습니다).</p>
<!-- ---------------------------------------------------------------- -->
<a name="posi"></a>
<h4>인물의 위치 관계 및 수비수 보호 <a href="#content"></a></h4>
<table><tbody>
<tr><td style="text-align:right">설정 : </td>
<td><input class="vcent" type="radio" checked name="position">전방(Front)</td>
</tr><tr><td></td>
<td><input class="vcent" type="radio" name="position">후방(Backs)</td>
</tr><tr><td>다음 보호 방법 : </td><td>
<select>
<OPTION selected>필요한</OPTION>
<OPTION>보호하지 않음</OPTION>
<OPTION>자신의 체력이 25% 이상이면</OPTION>
<OPTION>자신의 체력이 50% 이상이면</OPTION>
<OPTION>자기 체력이 75% 이상이면</OPTION>
<OPTION>25%의 확률로</OPTION>
<OPTION>50%의 확률로</OPTION>
<OPTION>75%의 확률로</OPTION>
</select>
</td></tr></tbody></table>

<p>캐릭터는 싸울 때 아방가르드냐 수비수냐를 결정합니다.<br />
공격수로 설정할 때, <br />
전투 시 적이 우리 수비수를 공격할 때, <br />
설정된 보호 방식에 부합할 때, <br />
역할이 수비수를 대신하여 공격을 받게 됩니다.</p>

<!-- ---------------------------------------------------------------- -->
<a name="equip"></a>
<h4>캐릭터 장비 <a href="#content"></a></h4>
<p>캐릭터 페이지에는 현재 장비 및 장비 가능 아이템이 표시됩니다.</p>
<p>각 장비 및 인물은 <span class="charge">handle</span> 값, <br />
장비 및 기억 <span class="charge">handle</span> 값을 가지며 인물의 <span class="charge">handle</span> 값을 초과해서는 안 됩니다.<br />
아이템 제한 설정입니다. 덱스와 클래스가 올라가면 <span class="charge">handle</span>도 같이 올라갑니다.</p>

<?php
	$sample	= array(1000,1700,5000);
	foreach($sample as $val) {
		include_once(DATA_ITEM);
		ShowItemDetail(LoadItemData($val));
		print("<br />\n");
	}
?>
<p><ul>
<li><span class="dmg">Atk</span> - 물리적 공격력</li>
<li><span class="spdmg">Matk</span> - 마법 공격력</li>
<li><span class="recover">Def</span> - 물리적 방어</li>
<li><span class="support">Mdef</span> 마법의 방어</li>
<li><span class="charge">h:</span> - handle값</li>
</ul></p>
<!-- ---------------------------------------------------------------- -->
<a name="skill"></a>
<h4>캐릭터 스킬 <a href="#content"></a></h4>
<?php
	$sample	= array(1000,1001,1002,2300,3000,3110);
	foreach($sample as $val) {
		include_once(DATA_SKILL);
		ShowSkillDetail(LoadSkillData($val));
		print("<br />\n");
	}
?>
<p>(이미지) 스킬명 / 대상 - SP 선택 / 소모 / 파워%x횟수 / (준비 : 대기시간) ... ... ...</p>
<ul>
<p><LI><SPAN class=bold>객체</SPAN> - 스킬이 영향을 미치는 객체<BR>
<SPAN class=dmg>enemy</SPAN> - 적<BR>
<SPAN class=recover>friend</SPAN> - 동반자<BR>
<SPAN class=support>self</SPAN> - 사용자 자신에게<BR>
<SPAN class=charge>all</SPAN> - 적-동반자(전체)
<LI><SPAN class=bold>선택</SPAN> - <SPAN class=u>대상(선택)</SPAN>에서 스킬을 사용하는 인물입니다.<BR>
<SPAN class=recover>individual</SPAN> - 개인적으로는.<BR>
<SPAN class=spdmg>multi</SPAN> - (랜덤) 복수.<BR>
<SPAN class=charge>all</SPAN> - 대상자 전원.
<LI><SPAN class=bold>소비 SP</SPAN> - 스킬을 사용할 때 소비하는 SP입니다. 부족하면 실패합니다.
<LI><SPAN class=bold>위력</SPAN> - 기능의 강약.
<LI><SPAN class=bold>횟수</SPAN> - 스킬의 실행 횟수입니다.<BR>
100%x2면 총 200% 위력.
<LI>(<SPAN class=bold>준비</SPAN> : <SPAN class=bold>대기시간</SPAN>)<BR>
스킬 시동에 걸리는 시간. (사용 예: <SPAN class=charge>○○○ 스킬 시동을 걸고 준비합니다. </SPAN>)<BR>
스킬 발동 후 경직 시간입니다.<BR>
숫자가 클수록 시간이 길어집니다.<BR>
<LI><SPAN class=bold>기타</SPAN><BR>
<SPAN class=spdmg>Magic</SPAN> - 마법을 사용하는 기능입니다. 위력과 효과에 영향을 미칩니다.<BR>
<SPAN class=charge>invalid </SPAN>- 상대의 프론트(Front)가 수비하지 않습니다.<BR>
<SPAN class=support>BackAttack</SPAN> - 백그라운드(Back)의 인물이 우선 사용 대상이 됩니다.</LI></UL>

</ul></p>
<p>또한 업그레이드 후에는 <br />
몇 가지 기술 학습 포인트를 얻을 수 있으며, <br />
일정한 포인트를 소모하여 새로운 기술을 습득할 수 있습니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="elem"></a>
<h4>공격 속성 <a href="#content"></a></h4>
<p>불이나 물을 무서워하는 비슷한 설정은 없습니다.</p>
<p>물리학과 마법 두 가지 속성만 있습니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="state"></a>
<h4>캐릭터 상태 <a href="#content"></a></h4>
<ul>
<li><span class="recover">생존</span> - HP가 1 이상인 상태입니다.</li>
<li><span class="dmg">사망</span> - HP가 0인 상태입니다.</li>
<li><span class="spdmg">맹독성</span> - <span class="u">매회 최대 HP와 레벨에 따라</span> 해당 손상을 입으며 사망하지 않습니다.</li>
</ul>
<!-- ---------------------------------------------------------------- -->
<a name="jobchange"></a>
<h4>직업 변경 (경력 전환) <a href="#content"></a></h4>
<p>전임 조건이 충족되면 인물 맨 아래에 표시됩니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="sacrier"></a>
<h4>사크리에 (광전사)의 공격 방식  <a href="#content"></a></h4>
<p style="margin:15px">
<img src="<?=IMG_CHAR?>mon_100r.gif">
<img src="<?=IMG_CHAR?>mon_012.gif"><br />
Sacrier의 대부분의 기술은 HP를 소모할 것입니다.<br />
인물이 <span class="bold u">뒷줄</span>에 있을 때, HP는 평소의 <span class="bold u">2배</span>로 소모됩니다.</p>
<!-- ---------------------------------------------------------------- -->
<a name="ranking"></a>
<h4>랭킹 <a href="#content"></a></h4>

<P>순위표의<BR>
<IMG class=vcent src="./image/icon/crown01.png">1등 1명<BR>
<IMG class=vcent src="./image/icon/crown02.png">2등 2명<BR>
<IMG class=vcent src="./image/icon/crown03.png">3등 3명<BR>
4위 이하 3명<BR>...<BR>동명이인에 여러 명의 인물이 있을 수 있습니다.<BR>
도전하면 순위표에서 자신보다 순위가 높은 사람 중에서 무작위로 뽑힌 사람과 대결하게 되며, <BR>
승리하면 상대와 순위가 바뀌게 됩니다.</P>

<!-- ---------------------------------------------------------------- -->
<A name=cr></A>
<h4>사용한 그림 <a href="#content"></a></h4>
<p><a href="http://whitecafe.sakura.ne.jp/">Whitecatさま</a> - 무기급 스킬<br />
<a href="http://www.geocities.co.jp/Milano-Cat/3319/">Rドさま</a> - 캐릭터</p>
</div>