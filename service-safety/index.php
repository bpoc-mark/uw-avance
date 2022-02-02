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

  <title>安否確認システム | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Service-Safety">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__service-safety">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Service</h1>
          <p class="p-header01--jp"> 安否確認システム</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">事業内容 安否確認システム</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="container">
          <div class="content">
            <h2>
              ユーザー数50万人以上！<br>
              低コストで“もしも”にそなえる安否確認システムANPIC
            </h2>
            <p>
              安否確認システムANPIC(アンピック)は、<br>
              地震・洪水・津波・インフラ障害などの災害発生時に学生や社員、<br>
              その家族の安否確認や各事務所・営業所の被災確認の初動を速やかに把握できる災害対策支援サービスです。
            </p>
            <div class="img_wrap">
              <img src="/images/service-safety/img_1.png" alt="ユーザー数50万人以上！低コストで“もしも”にそなえる安否確認システムANPIC">
            </div>
          </div>
        </div>
      </section>
      <section class="service">
        <div class="service__wrapper">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img1">
                <img src="/images/service-safety/sp/img_2.jpg" class="sp" alt="ANPICの特徴">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">ANPICの特徴</h3>
                  <ul class="sub_list">
                    <li class="sub_item">
                      <h4 class="sub_ttl">業界、最安価格帯!</h4>
                      <p class="desc">IANPICは、静岡大学・静岡県立大学とアバンセシステムが共同開発した産学連携の安否確認システムです。南海トラフ大地震が予測される静岡県では、以前から安否確認システムの必要性が叫ばれており、多くの組織に使っていただけるように低価格の設定にしています。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">災害時でも安定稼働</h4>
                      <p class="desc">ANPICは、米国のAmazonサーバーを使っているため、日本の地震の影響を受けません。<br>また、アクセスの集中に備えた設計方針を採用しています。メールの他にアプリやLINEからも受信が可能。大災害を想定した複数の通信経路を確保しています。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">ISMS<span>(情報セキュリティマネジメントシステム）</span>の認証取得</h4>
                      <p class="desc">株式会社アバンセシステムは、ISMS情報セキュリティマネジメントシステム規格であるISO/IEC27001の認証を取得しています。ISOの定める国際規格に則った高度な情報セキュリティマネジメントシステムを構築し、お客さまに安心してサービスをご利用いただけるよう管理・運営を徹底しています。</p>
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
