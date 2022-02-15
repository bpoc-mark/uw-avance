<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", htmlspecialchars($PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']));


//サイト名
define("SITE_NAME", "株式会社アバンセシステム -安否確認システム 静岡のシステム開発 アプリケーション開発																										
");

//キーワード
define("KEY_WORD", "静岡 システム開発,ソフトウェア開発,アプリケーション開発,アプリ開発,安否確認システム,ANPIC防災,BCP対策,パンデミック対策																										
");

//ディスクリプション
define("DESCRIPTION", "アバンセシステムでは、楽器・光技術・通信・輸送機器の各分野でアプリケーションソフト、ミドルウェア、ファームウェア（組み込み）対応の他、安否確認システム「ANPIC（アンピック）」のご提供と、幅広い業界のソフトウェア開発のニーズにお応えいたします。																										
");

//H1文言
define("SEO_WORDS", "");
