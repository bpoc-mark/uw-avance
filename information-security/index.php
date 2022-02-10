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

  <title>情報セキュリティ基本方針 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Privacy-Policy">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Information Security Basic Policy</h1>
          <p class="p-header01--jp">情報セキュリティ基本方針</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">情報セキュリティ基本方針</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="information-security-section">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <h2 class="ttl">基本方針</h2>
              <p class="desc">
              当社（株式会社アバンセシステム、株式会社アバンセサポート）は、製造業を主とした企業様からのご依頼によるソフトウェア開発ならびに自社開発アプリケーションパッケージ販売・運用を主たる事業としております。またお客様社内システムの開発、製造、運用保守をはじめ、パブリッククラウドサービスを利用したASP・SaaSサービスも提供しております。ICT技術、インターネット基盤を活用したこれらサービスの提供とお客様の機密情報・個人情報を取り扱っていることを鑑み、情報セキュリティの確保は最重要課題の一つであると認識しております。<br>
              <br>
              そのために当社は、情報セキュリティに対する責任を全うするため、情報セキュリティマネジメントシステムを構築し、当社の事業に対する要求事項、法令、契約上の要求事項、組織のセキュリティ要求事項を社員全員が十分に理解し業務に従事します。<br>
              <br>
              お客様情報や開発情報資産を厳格に管理・保護しお客様や関係者の皆様から真に信頼される企業を目指します。
              </p>
              <p class="iso">
                <span>ISO27001(ISMS)認証</span><br>
                <span>適用規格</span>　ISO/IEC 27001:2013・JIS Q27001:2014<br>
                <span>登録番号</span>　IC15J0397
              </p>
              <p class="representative">
                株式会社アバンセシステム 代表取締役社長<br>
                村山 邦彦
              </p>
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
