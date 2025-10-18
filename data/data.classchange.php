<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

function CanClassChange($char,$class) {
	switch($class) {
		case "101":
			if(19 < $char->level && $char->job == 100)
				return true;
			return false;
		case "102":
			if(24 < $char->level && $char->job == 100)
				return true;
			return false;
		case "103":
			if(22 < $char->level && $char->job == 100)
				return true;
			return false;
		case "201":
			if(19 < $char->level && $char->job == 200)
				return true;
			return false;
		case "202":
			if(24 < $char->level && $char->job == 200)
				return true;
			return false;
		case "203":
			if(21 < $char->level && $char->job == 200)
				return true;
			return false;
		case "301":
			if(24 < $char->level && $char->job == 300)
				return true;
			return false;
		case "302":
			if(19 < $char->level && $char->job == 300)
				return true;
			return false;
		case "401":
			if(19 < $char->level && $char->job == 400)
				return true;
			return false;
		case "402":
			if(24 < $char->level && $char->job == 400)
				return true;
			return false;
		case "403":
			if(21 < $char->level && $char->job == 400)
				return true;
			return false;
		case "111":
			if(54 < $char->level && $char->job == 101)
				return true;
			return false;
		case "112":
			if(59 < $char->level && $char->job == 101)
				return true;
			return false;
		case "121":
			if(54 < $char->level && $char->job == 102)
				return true;
			return false;
		case "122":
			if(59 < $char->level && $char->job == 102)
				return true;
			return false;
		case "131":
			if(54 < $char->level && $char->job == 103)
				return true;
			return false;
		case "132":
			if(59 < $char->level && $char->job == 103)
				return true;
			return false;
		case "211":
			if(54 < $char->level && $char->job == 201)
				return true;
			return false;
		case "212":
			if(59 < $char->level && $char->job == 201)
				return true;
			return false;
		case "221":
			if(54 < $char->level && $char->job == 202)
				return true;
			return false;
		case "222":
			if(59 < $char->level && $char->job == 202)
				return true;
			return false;
		case "231":
			if(54 < $char->level && $char->job == 203)
				return true;
			return false;
		case "232":
			if(59 < $char->level && $char->job == 203)
				return true;
			return false;
		case "311":
			if(54 < $char->level && $char->job == 301)
				return true;
			return false;
		case "312":
			if(59 < $char->level && $char->job == 301)
				return true;
			return false;
		case "321":
			if(54 < $char->level && $char->job == 302)
				return true;
			return false;
		case "322":
			if(59 < $char->level && $char->job == 302)
				return true;
			return false;
		case "411":
			if(54 < $char->level && $char->job == 401)
				return true;
			return false;
		case "412":
			if(59 < $char->level && $char->job == 401)
				return true;
			return false;
		case "421":
			if(54 < $char->level && $char->job == 402)
				return true;
			return false;
		case "422":
			if(59 < $char->level && $char->job == 402)
				return true;
			return false;
		case "431":
			if(54 < $char->level && $char->job == 403)
				return true;
			return false;
		case "432":
			if(59 < $char->level && $char->job == 403)
				return true;
			return false;
		default:
			return false;
	}
}
?>