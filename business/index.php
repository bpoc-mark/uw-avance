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

  <title><?php echo SITE_NAME ?> | 事業内容</title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Business">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Business</h1>
          <p class="p-header01--jp">事業内容</p>
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
              <a href="" class="c-breadcrumb__link">事業内容 </a>
            </li>
          </ul>
        </div>
      </section>
      <nav class="page-menu pc">
        <div class="container">
         <div class="content">
            <ul class="page-menu--list">
              <li class="page-menu--item">
                <a href="" class="page-menu--link">会社案内</a>
              </li>
              <li class="page-menu--item">
                <a href="" class="page-menu--link">トップメッセージ</a>
              </li>
              <li class="page-menu--item">
                <a href="" class="page-menu--link page-menu--link__active">事業内容</a>
              </li>
              <li class="page-menu--item">
                <a href="" class="page-menu--link">開発環境実績</a>
              </li>
              <li class="page-menu--item">
                <a href="" class="page-menu--link">沿革</a>
              </li>
            </ul>
         </div>
        </div>
      </nav>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <h2 class="ttl">通信、楽器、輸送用機器をはじめ幅広い業界の <br>ソフトウェアニーズに対応</h2>
              <p>
                当社の事業内容はアプリケーションソフト、ミドルウェア、ファームウェア（組み込み）の3領域にわたり、<br>
                幅広い業界のソフトウェア開発のニーズにお応えしています。<br>
                これまでに楽器分野、光技術分野、通信分野、輸送用機器分野などで数々の実績を重ね、お客様の製品開発をバックアップしてまいりました。<br>
                <br>
                私たちの願いは、お客様の商品開発に付加価値を提供するパートナーであり続けることです。<br>
                そのためにコア技術（アプリケーション、組み込み）を磨き上げ、永遠の未完を目指します。
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <div class="row">
                <div class="col">
                  <h2 class="ttl">サービスフィールド</h2>
                  <p>
                    現代社会の利便性を支える工業製品の各種のソフトウェアを開発しています。<br>
                    これまでの実績を踏まえ、幅広い領域に挑戦しています。
                  </p>
                </div>
                <div class="col">
                  <img src="/images/business/img_1.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3">
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
      <div class="c-service01">
        <div class="container">
          <div class="c-service01--row">
            <div class="c-service01--col">
              <a href="" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg1">
                    <img src="/images/common/card-footer/sp/img_1.jpg" alt="車載関連" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">01.</span><span class="c-service01__content--ttl">車載関連</span></h3>
                    <p class="c-service01__content--desc pc">テキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="c-service01--col">
              <a href="" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg2">
                    <img src="/images/common/card-footer/sp/img_2.jpg" alt="IoT関連" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">02.</span><span class="c-service01__content--ttl">IoT関連</span></h3>
                    <p class="c-service01__content--desc pc">テキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="c-service01--col">
              <a href="" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg3">
                    <img src="/images/common/card-footer/sp/img_3.jpg" alt="生産関連" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">03.</span><span class="c-service01__content--ttl">生産関連</span></h3>
                    <p class="c-service01__content--desc pc">テキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="c-service01--col">
              <a href="" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg4">
                    <img src="/images/common/card-footer/sp/img_4.jpg" alt="大学教育関連" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">04.</span><span class="c-service01__content--ttl">大学教育関連</span></h3>
                    <p class="c-service01__content--desc pc">テキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="c-service01--col">
              <a href="" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg5">
                    <img src="/images/common/card-footer/sp/img_5.jpg" alt="安否確認システム" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">05.</span><span class="c-service01__content--ttl">安否確認システム</span></h3>
                    <p class="c-service01__content--desc pc">テキストが入りますテキストが入りますテキストが入ります。</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
