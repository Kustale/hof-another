<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

	if(!function_exists("LoadSkillData"))
		include(DATA_SKILL);
?>
<div style="margin:15px">
<!-- ---------------------------------------------------------------- -->
<a name="content"></a>
<h4>목차</h4>
<UL>
<LI><A href="#mj">행동에 대한 다중 판단</A> 
<LI><A href="#twenty">약 20% 확률.</A> 
<LI><A href="#def">방어력에 관해서.</A> 
<LI><A href="#res">약점 속성 및 상태 이상 원인.</A> </LI></UL><!-- ---------------------------------------------------------------- --><A name=mj></A>
<H4>행동에 대한 다중 판단<A href="#content">↑</A></H4>
<DIV style="MARGIN: 0px 20px">
<P>"* think over" 기술을 배우면<BR>상황에 따라 여러 가지 판단을 내릴 수 있습니다.</P>
<P><IMG class=vcent src="./image/char/mon_079.gif">전사 타입이라면...<IMG class=vcent src="./image/char/mon_080r.gif"></P>
<TABLE cellSpacing=5>
<TBODY>
<TR>
<TD>1</TD>
<TD><SELECT> <OPTION>필요</OPTION> <OPTION selected>자신의 HP가 50% 이하인 경우</OPTION> <OPTION>자신의 SP가 20% 이상일 때</OPTION> <OPTION>자신의 SP가 30% 이상인 경우</OPTION> <OPTION>처음 행동할 때</OPTION></SELECT> </TD>
<TD><SELECT> <OPTION>Attack</OPTION> <OPTION>Bash</OPTION> <OPTION>RagingBlow</OPTION> <OPTION>Reinforce</OPTION> <OPTION>SelfRecovery</OPTION> <OPTION selected>* think over</OPTION></SELECT> </TD>

<td><?php ShowSkillDetail(LoadSkillData(9000))?></td>
</tr>
<tr>
<TD>2</TD>
<TD><SELECT> <OPTION>필요</OPTION> <OPTION>자신의 HP가 50% 이하인 경우</OPTION> <OPTION selected>자신의 SP가 20% 이상인 경우</OPTION> <OPTION>자신의 SP가 30% 이상인 경우</OPTION> <OPTION>처음 행동할 때</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Attack</OPTION> <OPTION>Bash</OPTION> <OPTION>RagingBlow</OPTION> <OPTION>Reinforce</OPTION> <OPTION selected>SelfRecovery</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<td><?php ShowSkillDetail(LoadSkillData(3121))?></td>
</tr>
<tr>
<TD>3</TD>
<TD><SELECT> <OPTION>필요</OPTION> <OPTION>자신의 HP가 50% 이하인 경우</OPTION> <OPTION>자신의 SP가 20% 이상인 경우</OPTION> <OPTION>자신의 SP가 30% 이상인 경우</OPTION> <OPTION selected>처음 행동할 때</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Attack</OPTION> <OPTION>Bash</OPTION> <OPTION>RagingBlow</OPTION> <OPTION selected>Reinforce</OPTION> <OPTION>SelfRecovery</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<td><?php ShowSkillDetail(LoadSkillData(3110))?></td>
</tr>
<tr>
<TD>4</TD>
<TD><SELECT> <OPTION>필요</OPTION> <OPTION>자신의 HP가 50% 이하인 경우</OPTION> <OPTION>자신의 SP가 20% 이상인 경우</OPTION> <OPTION selected>자신의 SP가 30% 이상인 경우</OPTION> <OPTION>처음 행동할 때</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Attack</OPTION> <OPTION>Bash</OPTION> <OPTION selected>RagingBlow</OPTION> <OPTION>Reinforce</OPTION> <OPTION>SelfRecovery</OPTION> <OPTION>* think over</OPTION></SELECT></TD>

<td><?php ShowSkillDetail(LoadSkillData(1017))?></td>
</tr>
<tr>
<TD>5</TD>
<TD><SELECT> <OPTION selected>필요</OPTION> <OPTION>자신의 HP가 50% 이하인 경우</OPTION> <OPTION>자신의 SP가 20% 이상인 경우</OPTION> <OPTION>자신의 SP가 30% 이상인 경우</OPTION> <OPTION>처음 행동할 때</OPTION></SELECT></TD>
<TD><SELECT> <OPTION selected>Attack</OPTION> <OPTION>Bash</OPTION> <OPTION>RagingBlow</OPTION> <OPTION>Reinforce</OPTION> <OPTION>SelfRecovery</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<td><?php ShowSkillDetail(LoadSkillData(1000))?></td>
</tr>
</tbody>
</table>이 상황에서 1과 2 모두
<UL>
<LI>자신의 HP가 50% 미만이고 
<LI>SP가 20% 이상일 경우 </LI></UL>
<P>"SelfRecovery"은 두 가지 모두 적합한 경우에만 사용해야 합니다..</P><!-- ----------------------------------- -->
<P>과정 설명...</P>
<TABLE cellSpacing=5>
<TBODY>
<TR>
<TD>1</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT> </TD>
<TD><SELECT> <OPTION>Skill 1</OPTION> <OPTION>Skill 2</OPTION> <OPTION>Skill 3</OPTION> <OPTION selected>* think over</OPTION></SELECT> </TD>
<TD>↓ 판단을 내리기에 적합하지 않을 때는 3번으로 가세요.</TD></TR>
<TR>
<TD>2</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT></TD>
<TD><SELECT> <OPTION selected>Skill 1</OPTION> <OPTION>Skill 2</OPTION> <OPTION>Skill 3</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<TD>← 조건 1+2가 만족되면 스킬 1을 사용하세요.</TD></TR>
<TR>
<TD>3</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Skill 1</OPTION> <OPTION>Skill 2</OPTION> <OPTION>Skill 3</OPTION> <OPTION selected>* think over</OPTION></SELECT></TD>
<TD>↓ 판단을 내리기에 적합하지 않을 때는 6번으로 가세요.</TD></TR>
<TR>
<TD>4</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Skill 1</OPTION> <OPTION>Skill 2</OPTION> <OPTION>Skill 3</OPTION> <OPTION selected>* think over</OPTION></SELECT></TD>
<TD>↓ 판단을 내리기에 적합하지 않을 때는 6번으로 가세요.</TD></TR>
<TR>
<TD>5</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Skill 1</OPTION> <OPTION selected>Skill 2</OPTION> <OPTION>Skill 3</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<TD>← 3+4+5 판단이 적합하다면 스킬 2를 사용하세요.</TD></TR>
<TR>
<TD>6</TD>
<TD><SELECT> <OPTION selected>언제</OPTION></SELECT></TD>
<TD><SELECT> <OPTION>Skill 1</OPTION> <OPTION>Skill 2</OPTION> <OPTION selected>Skill 3</OPTION> <OPTION>* think over</OPTION></SELECT></TD>
<TD>← 6점 판단이 적합하다면 스킬 3을 사용하세요.</TD></TR></TBODY></TABLE>
<P>...?</P></DIV><!-- ---------------------------------------------------------------- --><A name=twenty></A>
<H4>약 20% 확률.<A href="#content">↑</A></H4>
<P>동시에, 결합된 행동에 대한 다중 판단의 확률은 70%이고, 30%의 확률(?)이 있습니다.<BR>0.7 * 0.3 = 0.21 = 21%</P><!-- ---------------------------------------------------------------- --><A name=def></A>
<H4>방어력에 관해서.<A href="#content">↑</A></H4>
<P>첫 번째 부분은 피해 감소 비율이고, 두 번째 부분은 직접 차감되는 값입니다.</P><!-- ---------------------------------------------------------------- --><A name=res></A>
<H4>약점 속성 및 상태 이상 원인.<A href="#content">↑</A></H4>
<P>전투에서는 이에 상응하는 대응이 없습니다.</P></DIV>