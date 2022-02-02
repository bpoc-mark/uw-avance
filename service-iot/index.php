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

  <title>IoT・IoV関連 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Service-IOT">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__service-iot">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Service</h1>
          <p class="p-header01--jp">IoT・IoV関連</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">事業内容 IoT・IoV関連</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="container">
          <div class="content">
            <h2>
            お客様の業務に応じたIoT<span>（Internet of Things）<br class="sp"></span>ソリューションと、<br class="pc">
            自動車分野に向けた<br class="sp">IoV<span>（Internet of Vehicles）</span>ソリューションを<br class="sp">ご提供します。
            </h2>
            <p>
              車載ソフトウェア開発で豊富な実績を持ち、センシング技術を磨いてきた弊社は、<br>
              IoT・IoV技術でも高頻度のデータ通信による高速レスポンスや様々なデータを表現するUXを実現。<br>
              お客様のあらゆるご要望に応じたシステムをご提案します。
            </p>
          </div>
        </div>
      </section>
      <section class="service">
        <div class="service__wrapper">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img1">
                <img src="/images/service-iot/sp/img_1.jpg" class="sp" alt="主な事業">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">主な事業</h3>
                  <ul class="sub_list">
                    <li class="sub_item">
                      <h4 class="sub_ttl">センシング技術</h4>
                      <p class="desc">IoT・IoVで弊社が強みとするのは、各種センサー類を使った高頻度のセンシングとクラウド、スマートデバイスとの連携です。特にセンシング技術は、少量データの低頻度通信を採用した低価格・省電力のソリューションから、データ加工、解析表示をご提案可能です。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">IoT・IoVコンサルティング</h4>
                      <p class="desc">お客様の業務の生産性を向上させ、製品・サービスの付加価値をさらに高めるため、がお手伝いします。具体的には、ソフトウェア技術、センシング技術、無線の各種規格についての最新のノウハウをご提供。今まで多種多様な問題解決に携わってきた弊社がお客様のご要求に叶う問題解決策をご一緒に探っていきます。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">先進技術への取り組み</h4>
                      <p class="desc">アバンセシステム弊社は社会の変化を先取りし、前進を続けるため、自社チームで先進技術の研究に取り組みます。一例を挙げると、自動運転チームはROS（Robot Operating System）などの基礎技術を自分たちのものとするため、システムの開発プロセスなどの研究を行っています。<br>
                        また、IoTzデバイスの消費電力を抑え、長距離の無線通信を可能にする無線通信規格LPWA（Low Power Wide Area）や、無線通信を経由してデータの送受信を行い、ECUプログラムの書き換えを行うOTA（Over the Air）などについても研究を行っています。</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service__wrapper service__wrapper--reverse">
          <div class="base_img">
            <div class="bg_img"></div>
          </div>
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img1">
                <img src="/images/service-iot/sp/img_2.jpg" class="sp" alt="開発実績">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">開発実績</h3>
                  <ul class="sub_list">
                    <li class="sub_item">
                      <h4 class="sub_ttl">データロガーソフトウェア</h4>
                      <p class="desc">
                        各種ECU（Electronic Control Unit、電子制御装置）から情報を集積し、<br>
                        CCU（Communication Control Unit、無線通信制御装置ユニット）などを経由してスマートフォンやタブレット端末で確認するためのソフトウェアです。<br>
                        クラウドと連携させる例もあります。車両開発や、ECUからのデータロギングに使われています。
                      </p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">Raspberry Piを用いた<br class="sp">ECUデータ受信モジュール</h4>
                      <p class="desc">小型シングルボードコンピューターRaspberry PiをECUに接続させ、CAN通信などによってデータを送受信するモジュールを開発しました。<br>
                        例えば、バッテリー消費や車両速度及びGPSを活用した地図データなどを表示できます。詳しくはこちらをご覧ください。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">クラウドプラットフォームを活用したデータ集積</h4>
                      <p class="desc">AWS（Amazon Web Services）などのプラットフォームを利用することで、IoTによって得たデータを低コストで集積できます。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">画像解析</h4>
                      <div class="list_wrap">
                        <ul class="list_wrap--con">
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              物体の数をカウントするシステム<br>
                              目視によらずカメラの動画データから物体の特徴を捉え、解析して正確な枚数を導き出すシステムを実現しました。
                            </p>
                          </li>
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              顔認識<br>
                              各種の画像解析システムを構築する中で蓄積された画像解析ライブラリーに関するノウハウを顔認識にも応用しています。
                            </p>
                          </li>
                        </ul>
                      </div>
                    </li> 
                    <li class="sub_item">
                      <h4 class="sub_ttl">スマートフォンアプリ<br class="sp">（Android / iOS）</h4>
                      <div class="list_wrap">
                        <ul class="list_wrap--con">
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">チューニングアプリ</p>
                          </li>
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">音源の原因究明アプリ</p>
                          </li>
                        </ul>
                      </div>
                    </li> 
                  </ul>
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
