<?php
/*
Hall of Fame Webgame Code
Copyright (C) TEKITO PROJECT for JUICE ( http://tekito.kanichat.com/ )
Remaked by https://github.com/remileon/hof

Code fixed by Kustale ( jinsu8527@gmail.com )

한국어 버전 by Kustale, FE
*/

// game setting
define("TITLE","명예의 전당 RPG 타운 버전(이었던것)");// 타이트루~
define("MAX_TIME",150000);// 최대 시간
define("TIME_GAIN_DAY",30000);// 하루에 회복하는 총 시간
define("MAX_CHAR",40); // 최대 소지 캐릭터 수
define("MAX_USERS",100); // 최대 등록자 수
define("ABANDONED",60*60*24*30*6); // 게임이 포기된 것으로 간주되는 기간
define("CONTROL_PERIOD",60*60*12); // 정기 관리주기
define("RECORD_IP",1); // IP를 기록할까요? (0=NO 1=YES)

// other
define("DEBUG",0); // 페이지에 Array나 함수명이 등장[개발자 전용] : 0=OFF
define("CHAR_NO_IMAGE","NoImage.gif"); // 캐릭터 이미지가 없을 때 표시되는 이미지
define("SESSION_SWITCH",1); // 0=OFF
define("CHAR_ROW",5); // 한 화면의 문자 열 수
define("CRYPT_KEY",'$1$12345678$'); // 경로 인코딩 키(게임 설치 후 변경하지 마세요)
define("COOKIE_EXPIRE",60*60*24*3); //60*60*24*3
define("UP_PASS","password"); // 업데이트 정보만 사용됩니다.

define("START_TIME",15000); // 게임이 시작될 때 가지고 있는 시간
define("START_MONEY",50000); // 초기 소지금
define("MAX_STATUS",250); // 상태 최대값
define("GET_STATUS_POINT",5); // LVUP 할 때 얻는 스테포 수
define("GET_SKILL_POINT",2); // LVUP했을 때 얻는 기술포의 수치
define("MAX_LEVEL",50); // 최대 레벨
define("SELLING_PRICE",1/5); // 판매가 설정되지 않은 항목의 판매 가격 →
define("REFINE_LIMIT",10); // 정련 한계값

define("EXP_RATE",1); // 경험치를 얻을 수 있는 배율
define("MONEY_RATE",1); // 돈을 받을 수 있는 배율

define("NEW_NAME_COST",300000); // 새 이름으로 변경하는 데 필요한 돈
define("BBS_OUT",""); //외부 BBS가 있으면 그 주소, 없으면 공란 →""
define("BBS_BOTTOM_TOGGLE",1); // 아래에 있던 한 줄 게시판(0=OFF)
define("AUCTION_TOGGLE",1); // 경매가 작동하는지(0=OFF 1=ON)
define("AUCTION_EXHIBIT_TOGGLE",1); // 경매 출품 가능(0=OFF 1=ON)
define("JUDGE_LIST_AUTO_LOAD",0); // 패턴 결정 목록 1=자동 0=수동 추가(약간 가벼운)
define("AUCTION_MAX",100); // 경매 동시에 출품할 수 있는 품수.

// ranking
define("RANK_TEAM_SET_TIME",60*60*4); // 랭킹 팀 설정할 수 있는 주기
define("RANK_BATTLE_NEXT_LOSE",60*6); //실패 후 재도전 시간
define("RANK_BATTLE_NEXT_WIN",60*1); // 랭킹전 이겼을 때 다음 싸울 수 있을 때까지

// battle setting
define("NORMAL_BATTLE_TIME",100); // 일반 몬스터와의 전투에서 소모하는 시간
define("ENEMY_INCREASE",0); // 적의 증원 (랜덤)
define("BATTLE_MAX_TURNS",200); // 전투의 최대 행동 횟수(전투가 수치 이상 길어지면 종료시킨다)
define("TURN_EXTENDS",20); // 결착이 있을 것 같은 경우 연장하는 턴수.
define("BATTLE_MAX_EXTENDS",200); // 연장할 때의 최대 행동 횟수
define("BTL_IMG_TYPE",2); // (0=GD 1=CSS 2=반전된 이미지 사용 CSS)
define("BTL_IMG","./image.php"); // GD 표시
define("BATTLE_STAT_TURNS",10); // 전투 상황을 표시하는 간격
define("DEAD_IMG","mon_145.gif"); // HP=0 캐릭터 이미지
define("MAX_BATTLE_LOG",100); // 전투 로그를 저장하는 건수
define("MAX_BATTLE_LOG_UNION",100); // 전투 로그를 저장하는 건수
define("MAX_BATTLE_LOG_RANK",100); // 전투 로그를 저장하는 건수
define("MAX_STATUS_MAXIMUM",2500); // 초기값 x값(%) 전투 중 능력 상승으로 올라가는 수치의 한계값

define("DELAY_TYPE",1); // 0=구 1=신규
// DELAY_TYPE=0
define("DELAY",2.5); // 딜레이(2 이상이 기준. 수치가 낮으면 SPD가 높은 사람은 유리)
// DELAY_TYPE=1
define("DELAY_BASE",5); // 숫자가 높으면 차이가 나지 않는다.

// union
define("UNION_BATTLE_TIME",10); // 유니온전에서 소모하는 시간
define("UNION_BATTLE_NEXT",60*10); //Union 다음 전투까지의 간격

// files
define("INDEX","index.php");

// CLASS FILE
define("CLASS_DIR", "./class/");
define("BTL_IMG_CSS", CLASS_DIR."class.css_btl_image.php");// CSS 표시
define("CLASS_MAIN", CLASS_DIR."class.main.php");
define("CLASS_USER", CLASS_DIR."class.user.php");
define("CLASS_CHAR", CLASS_DIR."class.char.php");
define("CLASS_MONSTER", CLASS_DIR."class.monster.php");
define("CLASS_UNION", CLASS_DIR."class.union.php");
define("CLASS_BATTLE", CLASS_DIR."class.battle.php");
define("CLASS_SKILL_EFFECT", CLASS_DIR."class.skill_effect.php");
define("CLASS_RANKING", CLASS_DIR."class.rank2.php");
define("CLASS_JS_ITEMLIST", CLASS_DIR."class.JS_itemlist.php");
define("CLASS_SMITHY", CLASS_DIR."class.smithy.php");
define("CLASS_AUCTION", CLASS_DIR."class.auction.php");
define("GLOBAL_PHP", CLASS_DIR."global.php");
define("COLOR_FILE", CLASS_DIR."Color.dat");

// DATA FILE
define("DATA_DIR", "./data/");
define("DATA_BASE_CHAR", DATA_DIR."data.base_char.php");
define("DATA_JOB", DATA_DIR."data.job.php");
define("DATA_ITEM", DATA_DIR."data.item.php");
define("DATA_ENCHANT", DATA_DIR."data.enchant.php");
define("DATA_SKILL", DATA_DIR."data.skill.php");
define("DATA_SKILL_TREE", DATA_DIR."data.skilltree.php");
define("DATA_JUDGE_SETUP", DATA_DIR."data.judge_setup.php");
define("DATA_JUDGE", DATA_DIR."data.judge.php");
define("DATA_MONSTER", DATA_DIR."data.monster.php");
define("DATA_LAND", DATA_DIR."data.land_info.php");
define("DATA_LAND_APPEAR", DATA_DIR."data.land_appear.php");
define("DATA_CLASSCHANGE", DATA_DIR."data.classchange.php");
define("DATA_CREATE", DATA_DIR."data.create.php");
define("DATA_TOWN", DATA_DIR."data.town_appear.php");

define("MANUAL", DATA_DIR."data.manual0.php");
define("MANUAL_HIGH", DATA_DIR."data.manual1.php");

define("GAME_DATA_JOB", DATA_DIR."data.gd_job.php");
define("GAME_DATA_ITEM", DATA_DIR."data.gd_item.php");
define("GAME_DATA_JUDGE", DATA_DIR."data.gd_judge.php");
define("GAME_DATA_MONSTER", DATA_DIR."data.gd_monster.php");

define("TUTORIAL", DATA_DIR."data.tutorial.php");
// DAT
define("AUCTION_ITEM","./auction.dat"); // 항목 경매용 파일
define("AUCTION_ITEM_LOG","./auction_log.dat"); // 항목 경매에 대한 로그 파일

define("REGISTER","./register.dat");
define("UPDATE","./update.dat");
define("CTRL_TIME_FILE","./ctrltime.dat"); // 정기 관리를 위한 시간 기억 파일
define("RANKING","./ranking.dat");
define("BBS_BOTTOM","./bbs.dat");
define("BBS_TOWN","./bbs_town.dat");
define("MANAGE_LOG_FILE","./managed.dat"); // 정기 관리 기록 파일
define("USER_NAME","./username.dat"); // 이름 저장 파일

// dir
define("IMG_CHAR","./image/char/");
define("IMG_CHAR_REV","./image/char_rev/");
define("IMG_ICON","./image/icon/");
define("IMG_OTHER","./image/other/");
define("USER","./user/");
define("UNION","./union/");
define("DATA","data.dat");
define("ITEM","item.dat");

define("LOG_BATTLE_NORMAL","./log/normal/");
define("LOG_BATTLE_RANK","./log/rank/");
define("LOG_BATTLE_UNION","./log/union/");

// 상태 정의
define("FRONT","front");
define("BACK","back");

define("TEAM_0",0);
define("TEAM_1",1);
define("WIN",0);
define("LOSE",1);
define("DRAW","d");

define("ALIVE",0);
define("DEAD",1);
define("POISON",2);

define("CHARGE",0);
define("CAST",1);

?>