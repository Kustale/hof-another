<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

print("--------- Blessing...<br />\n");
$RATE	= 3;
for($MAXSP=10; $MAXSP<1000; $MAXSP++) {
$SPrec	= ceil(sqrt($MAXSP) * $RATE);
$PER	= ($SPrec / $MAXSP) * 100;
print($SPrec."/".$MAXSP." - ".sprintf("%d",$PER)."%");
print("<br />\n");
}
print("--------- Benediction...<br />\n");
$RATE	= 5;
for($MAXSP=10; $MAXSP<1000; $MAXSP++) {
$SPrec	= ceil(sqrt($MAXSP) * $RATE);
$PER	= ($SPrec / $MAXSP) * 100;
print($SPrec."/".$MAXSP." - ".sprintf("%d",$PER)."%");
print("<br />\n");
}
?>