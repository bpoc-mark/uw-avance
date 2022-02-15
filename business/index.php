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

  <title>事業内容 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Business">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
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
              <a class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">会社案内 </a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">事業内容 </a>
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
                <a href="/business/" class="page-menu--link page-menu--link__active">事業内容</a>
              </li>
              <li class="page-menu--item">
                <a href="/development/" class="page-menu--link">開発環境実績</a>
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
              <h2 class="ttl">車載ソリューション、IoTソリューション、生産管理ソリューション、大学教育ソリューションをはじめ<br>幅広い業界のソフトウェアニーズに対応</h2>
              <p>
              当社の事業内容はアプリケーションソフト、ミドルウェア、ファームウェア（組み込み）の3領域にわたり、<br class="pc">
              幅広い業界のソフトウェア開発のニーズにお応えしています。<br>
              これまでに車載ソリューション、IoTソリューション、生産管理ソリューション、大学教育ソリューションなどで数々の実績を重ね、お客様の製品開発をバックアップしてまいりました。<br>
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
                  <img src="/images/company/business/img_1.svg" alt="サービスフィールド">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col c-anim-up">
                <div class="c-header01">
                  <h3 class="c-header01__en">Service</h3>
                  <p class="c-header01__jp">サービス紹介</p>
                </div>
                <p class="desc">
                    アプリケーションソフト、ミドルウェア、ファームウェア（組み込み）の3領域にわたり、<br class="pc">
										幅広い業界のソフトウェア開発のニーズにお応えしています。
                </p>
              </div>
              <div class="col c-anim-up">
                <a href="/service/">
                  <div class="card">
                    <picture >
                      <source srcset="/images/top/sect_2/sp/img1.jpg" media="(max-width: 899px)">
                      <img src="/images/top/sect_2/img1.jpg" alt="車載ソリューション" class="">
                    </picture>
                    <div class="card--content">
                      <span class="card--content__num">01.</span>
                      <h3 class="card--content__title">車載ソリューション</h3>
                      <p class="card--content__desc">車載ソフトウェア開発に豊富な実績とノウハウでお応えします。</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="/service-iot/">
                  <div class="card">
                    <picture >
                      <source srcset="/images/top/sect_2/sp/img2.jpg" media="(max-width: 899px)">
                      <img src="/images/top/sect_2/img2.jpg" alt="IoTソリューション" class="">
                    </picture>
                    <div class="card--content">
                      <span class="card--content__num">02.</span>
                      <h3 class="card--content__title">IoTソリューション</h3>
                      <p class="card--content__desc">お客様のご要望に応じたIoT・IoVシステムをご提案します。</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="/service-production/">
                  <div class="card">
                    <picture >
                      <source srcset="/images/top/sect_2/sp/img3.jpg" media="(max-width: 899px)">
                      <img src="/images/top/sect_2/img3.jpg" alt="生産関連" class="">
                    </picture>
                    <div class="card--content">
                      <span class="card--content__num">03.</span>
                      <h3 class="card--content__title">生産関連</h3>
                      <p class="card--content__desc">生産管理システムと、その先を見据えた仕組みづくりをご提案します。</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="/service-education/">
                  <div class="card">
                    <picture >
                      <source srcset="/images/top/sect_2/sp/img4.jpg" media="(max-width: 899px)">
                      <img src="/images/top/sect_2/img4.jpg" alt="大学教育ソリューション" class="">
                    </picture>
                    <div class="card--content">
                      <span class="card--content__num">04.</span>
                      <h3 class="card--content__title">大学教育ソリューション</h3>
                      <p class="card--content__desc">学内ネットワーク関連システムから管理運用までトータルサポート。</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="/service-safety/">
                  <div class="card">
                    <picture >
                      <source srcset="/images/top/sect_2/sp/img5.jpg" media="(max-width: 899px)">
                      <img src="/images/top/sect_2/img5.jpg" alt="安否確認システム" class="">
                    </picture>
                    <div class="card--content">
                      <span class="card--content__num">05.</span>
                      <h3 class="card--content__title">安否確認システム</h3>
                      <p class="card--content__desc">ユーザー数50万人以上！安否確認システムANPIC。</p>
                    </div>
                  </div>
                </a>
              </div>
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
