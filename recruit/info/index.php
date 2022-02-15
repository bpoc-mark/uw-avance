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

  <title>採用情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Recruit-Info">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__recruit-info">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Recruit</h1>
          <p class="p-header01--jp">採用情報</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">採用情報 </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="container">
          <div class="content">
            <h2>
            あなたもエンジニアになりませんか？<br>
未経験から成長できる環境があります
            </h2>
            <p>
            アバンセシステムは経験・知識ゼロの人材をエンジニアへと育てるインキュベーター（孵卵器）です。<br>
これまでに多くの人が未経験者から成長し、社会に役立つ仕事を成し遂げてきました。<br>
「IT業界で新しいものを生み出したい」「プログラマーになりたい」と考えている方。<br>
あなたも思い切ってアバンセシステムに飛び込んで、将来を変えてみませんか？
            </p>
          </div>
        </div>
      </section>
      <section class="recruit"> 
        <div class="recruit__wrapper">
          <div class="container">
            <div class="recruit__wrapper--row">
              <div class="recruit__wrapper--col recruit__wrapper--col__img1">
                <img src="/images/recruit/recruit-info/sp/img_1.jpg" class="sp" alt="人への想い">
              </div>
              <div class="recruit__wrapper--col">
                <div class="recruit__wrapper--col__content">
                  <h3 class="ttl">人への想い</h3>
                  <p class="desc">
                  アバンセシステムのエンジニアたちは理系出身でも文系出身でも同じように活躍しています。アバンセシステムで活躍するエンジニアの経歴は、実に多様です。<br>
理系・文系・美術系。誰もが優れた技術で確かな成果を出しながら、一人ひとりの個性を発揮して新しい仕事を生み出しています。
                  </p>
                  <a href="/recruit/people/" class="c-button01 c-button01--primary c-button01--lg"><span class="c-button01--text">人への想い</span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="recruit__wrapper recruit__wrapper--reverse" id="seniors-interview">
          <div class="container">
            <div class="recruit__wrapper--row">
              <div class="recruit__wrapper--col recruit__wrapper--col__img2">
                <img src="/images/recruit/recruit-info/sp/img_2.jpg" class="sp" alt="先輩インタビュー">
              </div>
              <div class="recruit__wrapper--col">
                <div class="recruit__wrapper--col__content">
                  <h3 class="ttl">先輩インタビュー</h3>
                  <p class="desc">
                  アバンセシステムで活躍する先輩の声をご紹介します。
                  </p>
                  <ul class="interview">
                    <li class="interview--item">
                      <a href="/recruit/interview-2009/" class="interview--link">
                        <div class="interview--item--row">
                          <div class="interview--item--col">
                            <span class="interview--item--col__num">01.</span>
                          </div>
                          <div class="interview--item--col">
                            <h4 class="interview--item--col__ttl">話題の技術でソフトを開発できる</h4>
                            <p class="interview--item--col__desc">2009年入社Oさん</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="interview--item">
                      <a href="/recruit/interview-2013/" class="interview--link">
                        <div class="interview--item--row">
                          <div class="interview--item--col">
                            <span class="interview--item--col__num">02.</span>
                          </div>
                          <div class="interview--item--col">
                            <h4 class="interview--item--col__ttl">開発した新機能が動いたときには、<br class="sp">感動しました<br class="pc">「未経験者にやさしい」<br class="sp">と聞いて入社</h4>
                            <p class="interview--item--col__desc">2013年入社Hさん</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="interview--item">
                      <a href="/recruit/interview-2015/" class="interview--link">
                        <div class="interview--item--row">
                          <div class="interview--item--col">
                            <span class="interview--item--col__num">03.</span>
                          </div>
                          <div class="interview--item--col">
                            <h4 class="interview--item--col__ttl">お客様の顔が見えるBtoB<br class="sp">ソフト開発の魅力</h4>
                            <p class="interview--item--col__desc">2015年入社Nさん</p>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="interview--item">
                      <a href="/recruit/interview-2019/" class="interview--link">
                        <div class="interview--item--row">
                          <div class="interview--item--col">
                            <span class="interview--item--col__num">04.</span>
                          </div>
                          <div class="interview--item--col">
                            <h4 class="interview--item--col__ttl">アバンセの研修はプログラミング<br class="sp">初心者にやさしい</h4>
                            <p class="interview--item--col__desc">2019年入社Aさん</p>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="c-service01">
        <div class="container">
          <div class="c-service01--row">
            <div class="c-service01--col">
              <a href="/recruit/application-requirements/" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg1">
                    <img src="/images/recruit/recruit-info/card-footer/sp/img_1.jpg" alt="募集要項" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--ttl">募集要項</span></h3>
                    <p class="c-service01__content--desc pc">現在募集している中途採用の募集要項です。</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="c-service01--col">
              <a href="/recruit/form/" class="c-service01__link">
                <div class="c-service01__content">
                  <div class="c-service01__content--col c-service01__content--col--bg2">
                    <img src="/images/recruit/recruit-info/card-footer/sp/img_2.jpg" alt="エントリーフォーム" class="sp">
                  </div>
                  <div class="c-service01__content--col">
                    <h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--ttl">エントリーフォーム</span></h3>
                    <p class="c-service01__content--desc pc">中途採用のエントリーはこちらはら受け付けております。</p>
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
