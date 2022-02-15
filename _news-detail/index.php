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

  <title><?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="News-Details">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">News</h1>
          <p class="p-header01--jp">新着情報</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">新着情報</a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">タイトルが入りますタイトルが入りますタイトル</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="news_section">
        <div class="wrapper">
          <div class="container">
            <div class="news">
              <div class="news__datecat">
                <span class="news__datecat--date">2021.01.01</span>
                <span class="news__datecat--separator"></span>
                <span class="news__datecat--cat">お知らせ</span>
              </div>
              <h2 class="news__title">タイトルが入りますタイトルが入りますタイトルが入ります</h2>
              <div class="news__content">
                <h3>見出しです見出しです見出しです見出しです見出しです。</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
                <img src="/images/news/img_1.jpg" alt="見出しです見出しです見出しです見出しです見出しです。">
                <h3>見出しです見出しです見出しです見出しです。<br>見出しです見出しです見出しです見出しです見出しです。</h3>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。</p>
                <a href="">テキストリンクです。</a>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <ul class="post_nav">
            <li class="post_nav--prev">
              <a href="">PREV</a>
            </li>
            <li class="post_nav--list">
              <a href="">LIST</a>
            </li>
            <li class="post_nav--next">
              <a href="">NEXT</a>
            </li>
          </ul>
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
