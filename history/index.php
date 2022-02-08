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

  <title>会社案内 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="History">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">History</h1>
          <p class="p-header01--jp">沿革</p>
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
              <a href="" class="c-breadcrumb__link">沿革 </a>
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
                <a href="/development/" class="page-menu--link">開発環境実績</a>
              </li>
              <li class="page-menu--item">
                <a href="/history/" class="page-menu--link page-menu--link__active">沿革</a>
              </li>
            </ul>
         </div>
        </div>
      </nav>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <ul class="history">
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">1999年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">2月</span>
                      <p class="info">「人のためになることを成したい」という想いを抱きアバンセシステム有限会社設立</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">5月</span>
                      <p class="info">浜松市南区三島町に事務所開設、同年11月安松町に移転</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2000年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">4月</span>
                      <p class="info">現NECアクセステクニカ様と取引開始</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">5月</span>
                      <p class="info">
                        資本金1000万円に増資<br>
                        株式会社アバンセシステムと商号変更
                      </p>
                    </div>
                    <div class="date_cont">
                      <span class="date">7月</span>
                      <p class="info">浜松ホトニクス様と取引開始</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">8月</span>
                      <p class="info">ヤマハ発動機様と取引開始<br>資本金を2000万円に増資</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2001年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">5月</span>
                      <p class="info">浜松市東区将監町に事務所移転</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">10月</span>
                      <p class="info">プライムアースEVエナジー様（旧パナソニックEVエナジー様）と取引開始</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2003年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">6月</span>
                      <p class="info">浜松市東区宮竹町に事務所移転</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2005年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">3月</span>
                      <p class="info">浜松市南区青屋町に自社ビルを建設し移転</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2006年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">2月</span>
                      <p class="info">資本金を3000万円に増資</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2007年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">1月</span>
                      <p class="info">自社ビル3Fを増床</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2007年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">1月</span>
                      <p class="info">自社ビル3Fを増床</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">6月</span>
                      <p class="info">グループ会社　株式会社アバンセサポート　設立</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2009年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">8月</span>
                      <p class="info">経済産業省「地域経済情報化基盤整備補助事業」に<br>「三河・遠州地域モデルベース開発推進コンソーシアム」が採択</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2011年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">1月</span>
                      <p class="info">クラウド・コンピューティングサービス「JECC」を発表初の自社展示会、講演会を開催</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">7月</span>
                      <p class="info">キングソフト株式会社と販売代理店契約を締結</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2012年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">2月</span>
                      <p class="info">静岡大学・静岡県立大学共同開発<br><a href="https://www.anpic.jp/" target="_blank">安否確認システム「ANPIC」リリース</a></p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2013年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">11月</span>
                      <p class="info">情報セキュリティマネジメントシステム（ISMS）認証の取得活動に着手</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2014年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">4月</span>
                      <p class="info">東京営業所開設</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2015年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">7月</span>
                      <p class="info">ISO27001（ISMS）認証を取得</p>
                    </div>
                    <div class="date_cont">
                      <span class="date">11月</span>
                      <p class="info">静岡営業所開設</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2016年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">12月</span>
                      <p class="info">資本金を6000万円に増資</p>
                    </div>
                  </div>
                </li>
                <li class="history--item">
                  <div class="history--item__left">
                    <p class="year">2021年</p>
                  </div>
                  <div class="history--item__right">
                    <div class="date_cont">
                      <span class="date">6月</span>
                      <p class="info">関連会社株式会社アバンセサポートを吸収合併</p>
                    </div>
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
