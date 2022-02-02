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

  <title>車載ソフトウェア開発 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Service">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__service">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Service</h1>
          <p class="p-header01--jp">車載ソフトウェア開発</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">事業内容 車載ソフトウェア開発</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="container">
          <div class="content">
            <h2>
              弊社は車載ソフトウェア開発のご要望に<br>
              豊富な実績とノウハウでお応えします。
            </h2>
            <p>車載ECUや電装品を中心とする組み込みシステムの開発では、試作開発から量産開発まで多くの実績があり、<br class="pc">ドライバー層・ミドルウェア層からアプリケーション層の開発まで幅広い技術をご提供します。<br>また、アプリケーションソフトの開発やモデルベース開発（MBD）でも多くの開発実績があり、<br class="pc">お客様のご要望にお応えします。</p>
          </div>
        </div>
      </section>
      <section class="service">
        <div class="service__wrapper">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img1">
                <img src="/images/service/sp/row_1_img.jpg" class="sp" alt="Automotive SPICE®のプロセスモデルに従った開発">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">
                    Automotive SPICE®の<br>
                    プロセスモデルに従った開発
                  </h3>
                  <p class="desc">
                    車載ソフトウェア開発プロセスのフレームワークを定めたAutomotive SPICE®。<br>
                    弊社はこの枠組みに準拠した開発を行っています。<br>
                    Automotive SPICEのプロセスモデルに従った開発により、多種多様な要求に対し、抜け漏れがない要求分析・要件定義を実施します。また、設計から評価までV字プロセスに沿って工程を進め、高品質なソフトウェアをご提供します。
                  </p>
                  <div class="list_wrap">
                    <h4 class="list_wrap--ttl">開発実績</h4>
                    <ul class="list_wrap--con">
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">車載ECUの組み込みソフトウェア開発<br>車両ECU、バッテリー制御ECU（バッテリーマネジメントシステム）など</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">電装品の組み込みソフトウェア開発</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service__wrapper service__wrapper--reverse">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img2">
                <img src="/images/service/sp/row_2_img.jpg" class="sp" alt="CPUの載せ替え（マイコン変更）">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">CPUの載せ替え（マイコン変更）</h3>
                  <p class="desc">車載ECUなどに搭載するCPUは、生産中止などに伴い載せ替えが発生することがありますが、弊社では、その際の代替CPUの選定や、ソフトウェアの移植を得意としています。</p>
                  <div class="list_wrap">
                    <h4 class="list_wrap--ttl">対応実績のあるマイコン</h4>
                    <ul class="list_wrap--con">
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">ルネサスRH850シリーズ</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">ルネサスV850シリーズ</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">ルネサスRL78シリーズ  など</p>
                      </li>
                    </ul>
                  </div>
                  <p class="desc">その他の実績については、<a href="/contact/">お問い合わせ</a>をお願いします。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service__wrapper">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img3">
                <img src="/images/service/sp/row_3_img.jpg" class="sp" alt="車載用アプリケーションソフト開発">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">車載用アプリケーションソフト開発</h3>
                  <p class="desc">
                    車載ECUの開発では、アプリケーションソフトが必要になることがあります。<br>
                    例えば、ECU間の通信データをモニタリングしたい/ロギングしたい、ソフトを書き換えたい、各種パラメータのチューニングをしたいなど、専用のアプリケーションソフトが必要になる場面があります。弊社では、お客様のご要望に応じた多種多様なアプリケーションソフトを開発することが可能です。<br>
                    特に通信に特化した開発はアバンセシステムの得意分野の1つであり、自社製品として開発したCAN通信用のロガーソフトウェア（CANバス上のデータ・トラフィックの解析、CANメッセージ送信を行うWindowsベースのアプリケーション）を採用いただいた実績もあります。
                  </p>
                  <div class="list_wrap">
                    <h4 class="list_wrap--ttl">開発実績</h4>
                    <ul class="list_wrap--con list_wrap--con__flex">
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">車載ECU用検査装置ソフトウェア</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">ECUソフトウェアの書き換えツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">CAN通信データのモニタリング/ロギングツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">シリアル通信データのモニタリング/ロギングツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">CANデータ⇔シリアル通信データ変換ツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">故障診断ツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">パラメータ適合ツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">ステレオカメラキャリブレーションツール</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">スマートデバイスを使用したデジタルメーター</p>
                      </li>
                      <li class="list_wrap--item">
                        <p class="list_wrap--txt">スマートデバイスを使用したロギングツール  など</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service__wrapper service__wrapper--reverse">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img4">
                <img src="/images/service/sp/row_4_img.jpg" class="sp" alt="MATLAB®/Simulink® を使用したモデルベース開発">
              </div>
              <div class="service__wrapper--col">
                <div class="ervice__wrapper--col__content">
                  <h3 class="ttl">MATLAB®/Simulink® を使用した<br>モデルベース開発</h3>
                  <p class="desc">MATLAB®/Simulink® を利用されているお客様の研究開発をサポートします。</p>
                  <ul class="desc_list">
                    <li class="desc_list--item">
                      <p class="desc_list--txt">カスタムツール開発（GUIDE、mファイル）</p>
                    </li>
                    <li class="desc_list--item">
                      <p class="desc_list--txt">コントローラ開発（モデリング、実装、評価）</p>
                    </li>
                    <li class="desc_list--item">
                      <p class="desc_list--txt">プラントモデリング（実験・計測、パラメータ推定）</p>
                    </li>
                    <li class="desc_list--item">
                      <p class="desc_list--txt">カスタムブロック作成、コード生成プログラムのカスタマイズ</p>
                    </li>
                  </ul>
                  <p class="desc mt-0">
                    などに対応が可能です。<br>
                    お客様が高付加価値を生み出すイノベーション領域に専念できるよう、カスタムツールの作成やオペレーション領域については弊社にお任せください。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/card-footer.php"); ?>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
