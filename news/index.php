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

  <title>新着情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="News">
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
              <a href="" class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">新着情報</a>
            </li>
            <li class="c-breadcrumb__item">
              <a href="" class="c-breadcrumb__link">タイトルが入りますタイトルが入りますタイトル</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <ul class="news">
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img1.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img2.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">休業のお知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img3.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img4.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img1.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img2.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">休業のお知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img3.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img4.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img1.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img2.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">休業のお知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img3.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="" class="news__link">
                  <figure class="news__img">
                    <img src="/images/top/sect_6/img4.jpg" alt="タイトルが入りますタイトルが入ります">
                  </figure>
                  <div class="news__content">
                    <p class="news__content__wrap"><span class="news__content--date">2021.01.01</span><span class="news__content__wrap--separator">&nbsp;&nbsp;:&nbsp;&nbsp;</span><span class="news__content--cat">お知らせ</span></p>
                    <h4 class="news__content--title">タイトルが入りますタイトルが入ります</h4>
                  </div>
                </a>
              </li>
            </ul>
            <!-- Wordpress -->
            <div class="page_navigation">
              <div class="wp-pagenavi">
                <a class="previouspostslink" href="#" rel="prev">PREV</a>
                <a class="page smaller" href="#">1</a>
                <span class="current">2</span>
                <a class="page larger" href="#">3</a>
                <a class="nextpostslink" href="#" rel="next">NEXT</a>
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
