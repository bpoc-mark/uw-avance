<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>開発環境実績 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Development">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Development Environment</h1>
          <p class="p-header01--jp">開発環境実績</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">会社案内 </a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">開発環境実績</a>
            </li>
          </ul>
        </div>
      </section>
      <nav class="page-menu pc">
        <div class="container">
         <div class="content">
            <ul class="page-menu--list">
              <li class="page-menu--item">
                <a href="/company/" class="page-menu--link">会社案内</a>
              </li>
              <li class="page-menu--item">
                <a href="/message/" class="page-menu--link">トップメッセージ</a>
              </li>
              <li class="page-menu--item">
                <a href="/business/" class="page-menu--link">事業内容</a>
              </li>
              <li class="page-menu--item">
                <a href="/development/" class="page-menu--link page-menu--link__active">開発環境実績</a>
              </li>
              <li class="page-menu--item">
                <a href="/history/" class="page-menu--link">沿革</a>
              </li>
            </ul>
         </div>
        </div>
      </nav>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <table class="software_table" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <th>開発環境・ツール</th>
                    <td>
                      <div class="software">
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio 2010</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio 2005</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio .NET (2002)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Apple Xcode</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Adobe Systems Creative Suite</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Adobe Flex Builder</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Adobe Systems Photoshop</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Access</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">TI Code Composer Studio</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ARM SDT / ADS</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">IAR SYSTEMS Embedded Workbench(EWARM)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas High-performance Embedded Workshop</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microchip Technology MPLAB IDE</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Trac / Subversion / Mantis / CVS / Redmine</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Green Hills Software MULTI</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Ashisuto WinRunner</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Philips ProntoEdit Professional 2</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">International Laboratory GENWARE</p>
                          </li>
                        </ul>
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio 2008</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio .NET 2003</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft VisualStudio 6.0</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">The MathWorks MATLAB®/Simulink®</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">dSPACE RapidPro</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Adobe FLASH</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Adobe Systems Illustrator</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft eMbedded Visual C++</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Word / Excel</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Cycling ‘74 Max（Max/MSP）</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ARM RealView</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">GNU toolchain(GCC/GDB/Cygwin…)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Eclipse</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas HIM / TM</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas PM+ / SM+ / CubeSuite</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Cypress PSoC Designer / PSoC Programmer</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">eSOL eBinder</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Acresso Install Shield</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ActiveState Software Active Perl</p>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>OS</th>
                    <td>
                      <div class="software">
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows 7</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows XP</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows Me</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows 98</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft MS-DOS</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Cygwin</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">RTLinux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Apple iPhone OS(OS X iPhone) / Mac OS X</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Ubuntu Linux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">RedHat Linux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">HI7000 HI7700(iTRON)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">NORTi(iTRON)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">PrKERNEL</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">CentOS</p>
                          </li>
                        </ul>
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows Vista</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows 2000</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows 98 Second Edition</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows 95</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft Windows Embedded CE</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">FreeBSD</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">SH-Linux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Android</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Debian Linux / Fedora Linux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">MontaVista Software MontaVista Linux</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">HI7000/4(iTRON)</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">T-Kernel</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">TOPPERS</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Sun Microsystems Solaris</p>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>言語・環境</th>
                    <td>
                      <div class="software">
                        <ul class="software__list software__list--col3">
                          <li class="software__item">
                            <p class="software__item--txt">C</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ASM</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">MFC</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Perl</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft DDK</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">DirectShow</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Java</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Motif / Qt</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">PostgreSQL</p>
                          </li>
                        </ul>
                        <ul class="software__list software__list--col3">
                          <li class="software__item">
                            <p class="software__item--txt">C++</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">VB</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">PHP HTMLWTL</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">XML</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft WDK</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">OpenGL</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ActionScript</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Python</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microsoft SQL Server</p>
                          </li>
                        </ul>
                        <ul class="software__list software__list--col3">
                          <li class="software__item">
                            <p class="software__item--txt">C#</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">VBA</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Ruby</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">SQL</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Windows SDK</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">DirectX</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Objective-C</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Tcl/Tk</p>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>Hardware</th>
                    <td>
                      <div class="software">
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Renesas SuperH ファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas M16C/R8C ファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas V850/78K0 シリーズ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Microchip PICファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">各種Android端末</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">T-Engine/Solution Engine</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">USB Controller</p>
                          </li>
                        </ul>
                        <ul class="software__list software__list--col2">
                          <li class="software__item">
                            <p class="software__item--txt">Renesas R32C/M32C ファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Renesas H8/H8S ファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">ARM ARMプロセッサファミリ</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">iPod touch / iPhone / iPad</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Armadillo</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">Windows CE 端末</p>
                          </li>
                          <li class="software__item">
                            <p class="software__item--txt">PC/AT互換機 / Mac</p>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <ul class="wrap">
                <li class="wrap--item">
                  <h3 class="wrap--ttl">マルチメディア関連の開発実績</h3>
                  <div class="software">
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">iPod TouchR/iPhoneR/iPadRアプリケーション開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">Android ドライバ・アプリケーション開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">MATLAB®/Simulink® モデル変換対応</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">クラウド デジタルサイネージソリューション</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">VST 2.x系 Host/各種Plug-in、VST 3.x系 各種Plug-in開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">グラフィック系オーサリングツール開発／評価</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">グラフィック系ドライバソフトウェア開発／評価</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">音源デバイス（DSPなど）のソフトウェア開発／評価</p>
                      </li>
                    </ul>
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">多演奏楽器 ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">自動演奏楽器 ファームウェア・ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">電子楽器向けLinuxUIライブラリ開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">カラオケ通信ボード制御ファームウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">音声認識アプリケーション開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">タッチパネルドライバ開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">各種チップ・ボードの評価ソフトウェア開発・テスト</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">アプリケーションのシステムテスト</p>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="wrap--item">
                  <h3 class="wrap--ttl">運送用機器・工場・組織関連の開発実績</h3>
                  <div class="software">
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">テレマティクスシステムの開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">安否情報システム開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">スマートグリッドシステムの開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">工場ライン用集計システム開発・導入</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">工場入退門の管理システム開発・導入</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">CANモニターソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">エンジンコントローラーユニット(ECU)開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">車載ECU制御ソフトウェア開発</p>
                      </li>
                    </ul>
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">車載ECU制御モデル開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">車載ECU監視ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ハイブリッド用バッテリー・ECUの検査装置開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ECUデータの高速ロガーソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ECU用ロガーソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ECU用ポータブルロギングシステム開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">各種治具作成</p>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="wrap--item">
                  <h3 class="wrap--ttl">光・医療・I/F関連の開発実績</h3>
                  <div class="software">
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">USBを使用したH/W－PC通信モジュールの開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">血液成分分析システムのソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">医療画像解析システムのソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">プラズマモニタの制御ファームウェア・ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">分光器制御用ファームウェア・ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">iOS・Android機器情報表示アプリケーション開発</p>
                      </li>
                    </ul>
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">IEEE1394を使用した制御ソフト開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">NI社製DIOを使用した制御ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">RS-232Cを使用したデバイス制御開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">GPIBを使用した制御ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">各種ファイルシステムを使用した開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">各種装置の制御ライブラリ・サンプルソフトウェア作成</p>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="wrap--item">
                  <h3 class="wrap--ttl">通信関連の開発実績</h3>
                  <div class="software">
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">仮想クラウドサーバ提供</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">無線LANを使用したデータ送信機器開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">DLNAを使用したホームネットワーク要素開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">組み込み用 VNC クライアントモジュール開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">UPnPを使用した要素開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">SIP、HTTP、TCP/IP、SSLのポーティング</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">RTPを使用したソフトウェア開発</p>
                      </li>
                    </ul>
                    <ul class="software__list software__list--col2">
                      <li class="software__item">
                        <p class="software__item--txt">IP電話通信制御ソフトウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ルータ系のブートプログラム開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ルータ系のテスト/ダイアグプログラム開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ネットワーク制御チップのマイクロコード作成</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">ネットワーク会議システム ファームウェア開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">次世代Switching Hubの要素開発</p>
                      </li>
                      <li class="software__item">
                        <p class="software__item--txt">Telnet・FTP サーバー/クライアント開発</p>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
