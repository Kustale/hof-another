hall of fame rpg

Copyright (C) TEKITO PROJECT for JUICE.

Modded by https://github.com/Remileon/hof

PHP8 version by Kustale.

php8 버전 -> 일단 메인화면, 설명, 가입 화면은 고쳐짐. 나머지는 작업중

= 소스 코드 주석 있는거 고치는데 방해되서 싹다 지우고 쪼개져 있던 코드 약간 줄이면서 합체함.

한국어 버전 -> 작업중(중문같은 일문이랑 일문 같은 중문이라 번역기가 인식을 못함...)

작업 내용 : (다 php 5.6에서 뭘 다 바꿔놧는지...)

작업 전에 주석 달아 놓은거 거치적 거려서 전부 지워버림(없어도 되잖애...)
$_GET $_POST 에서 오류가(php 5.6부터 난리)가 잔뜩 생겨서 따로 만들어 둠 -> __GET, __POST ...
count에 값이 없을때 워닝 뜨는거 수정 -> __count
class/에 있는 코드들 function에 같은 이름이 들어 있는거 php7에서 오류(php8은 컷)를 뿜는데 마침 __construct 방법이 있어서 전부 수정
중간에 php 코드 쪼개진거 적절히 echo를 붙여서 합체 -> echo <<< + 여기에 약간 모딩
변수에 [""]이런거 없을때 오류 나는거 일일이 "추가함
ereg -> preg_match
코드 길다고 울어대서 줄여줌.
중문, 일문 있는거 번역중(덜 완성)
