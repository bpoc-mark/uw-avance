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

<body id="Company">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Company</h1>
          <p class="p-header01--jp">会社案内</p>
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
          </ul>
        </div>
      </section>
      <nav class="page-menu pc">
        <div class="container">
         <div class="content">
            <ul class="page-menu--list">
              <li class="page-menu--item">
                <a href="/company/" class="page-menu--link page-menu--link__active">会社案内</a>
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
              <h3>会社概要</h3>
              <div class="table-wrap">
                <table class="company_info">
                  <tbody>
                    <tr>
                      <th>商号</th>
                      <td>株式会社アバンセシステム</td>
                    </tr>
                    <tr>
                      <th>所在地</th>
                      <td>
                      本社　　　：〒435-0037 静岡県浜松市南区青屋町601-10<br>
                      東京営業所：〒164-8512 東京都中野区中野4-1-1中野サンプラザ9F
                      </td>
                    </tr>
                    <tr>
                      <th>代表者</th>
                      <td>代表取締役社長　村山 邦彦</td>
                    </tr>
                    <tr>
                      <th>資本金</th>
                      <td>7,920万円（資本準備金 200万円）</td>
                    </tr>
                    <tr>
                      <th>設立</th>
                      <td>1999年2月</td>
                    </tr>
                    <tr>
                      <th>従業員数</th>
                      <td>48名（男性：37名、女性：11名　2021年6月現在）</td>
                    </tr>
                    <tr>
                      <th>主要取引銀行</th>
                      <td>
                        浜松磐田信用金庫 植松支店<br>
                        静岡銀行 浜松営業部<br>
                        日本政策金融公庫　浜松支店
                      </td>
                    </tr>
                    <tr>
                      <th>免許等</th>
                      <td>
                        <ul>
                          <li>
                            <p>
                              ファームウェア開発<br>
                              アプリケーションソフト開発<br>
                              システム開発<br>
                              MATLAB®/Simulink®受託開発<br>
                              スマートデバイスアプリ開発
                            </p>
                          </li>
                          <li>
                            <p>
                              Webサイト構築<br>
                              クラウドサービス<br>
                              ソリューションサービス<br>
                              開発技術者派遣等
                            </p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <th>免許等</th>
                      <td>労働者派遣事業許可　派22-300841</td>
                    </tr>
                    <tr>
                      <th>TEL / FAX</th>
                      <td>
                        本社　　　： TEL <a href="tel:053-411-8037">053-411-8037</a> / FAX 053-411-8038<br>
                        東京営業所： TEL <a href="tel:053-411-8037">053-411-8037</a>
                      </td>
                    </tr>
                    <tr>
                      <th>主要取引先</th>
                      <td>
                        <ul>
                          <li>
                            <p>
                              ヤマハ発動機株式会社<br>
                              浜松ホトニクス株式会社<br>
                              プライムアースEVエナジー株式会社<br>
                              ヤマハ株式会社<br>
                              ヤマハモーターパワープロダクツ株式会社
                            </p>
                          </li>
                          <li>
                            <p>
                              ヤマハモーターエンジニアリング株式会社<br>
                              ヤマハモーターエレクトロニクス株式会社<br>
                              国立大学法人静岡大学<br>
                              株式会社サン電材社<br>
                              他、大手企業・教育機関20数社
                            </p>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col">
                  <img src="/images/company/img_1.jpg " alt="">
                </div>
                <div class="col">
                  <img src="/images/company/img_2.jpg " alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="content">
              <h3>アクセスマップ</h3>
              <div class="map">
                <div class="map__item">
                  <div class="map__item--ttl">
                    <span class="map__item--ttl--office">本社</span>
                    <span class="map__item--ttl--address">〒435-0037 静岡県浜松市南区青屋町601-10</span>
                  </div>
                  <iframe class="map__item--map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.569203768909!2d137.77470571561292!3d34.71604418990322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ae74c599f36db%3A0x4aa19373e45cbcaa!2s601-10%20Aoyach%C5%8D%2C%20Minami%20Ward%2C%20Hamamatsu%2C%20Shizuoka%20435-0037%2C%20Japan!5e0!3m2!1sen!2sph!4v1643263385677!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  <div class="row">
                    <div class="col">
                      <h4 class="sub-ttl">東名高速道路をご利用の方</h4>
                      <ul class="way">
                        <li class="way--item">
                          <p class="way--desc">浜松I.Cで高速道路を降り、豊橋方面へ南下します。</p>
                        </li>
                        <li class="way--item">
                          <p class="way--desc">国道152号線を浜松市街地方面へ向かい、篠ヶ瀬交差点を左（南側）に曲がります。</p>
                        </li>
                        <li class="way--item">
                          <p class="way--desc">JR天竜川駅前から西に約200ｍ進み左手に見える建物が本社となります。</p>
                        </li>
                      </ul>
                    </div>
                    <div class="col">
                      <h4 class="sub-ttl">JR天竜川をご利用の方</h4>
                      <ul class="way">
                        <li class="way--item">
                          <p class="way--desc">浜松I.駅前を西（左手）に進みます。</p>
                        </li>
                        <li class="way--item">
                          <p class="way--desc">約200ｍ程進みますと左手に見える建物が、本社となります。</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>  
                <div class="map__item">
                  <div class="map__item--ttl">
                    <span class="map__item--ttl--office">東京営業所</span>
                    <span class="map__item--ttl--address">〒164-8512 東京都中野区中野4-1-1中野サンプラザ9F</span>
                  </div>
                  <iframe class="map__item--map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.7556039054994!2d139.66248531563068!3d35.70763133613036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f290db7f63c9%3A0xe2e6198288692ab7!2z44Oq44O844K444Oj44K55Lit6YeO44K144Oz44OX44Op44K2!5e0!3m2!1sen!2sph!4v1643265175795!5m2!1sjp!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  <div class="row">
                    <div class="col w-100">
                      <h4 class="sub-ttl">JR中央線・総武線 / 東京メトロ東西線をご利用の方</h4>
                      <ul class="way">
                        <li class="way--item">
                          <p class="way--desc">中野駅北口より、北へ進みます。</p>
                        </li>
                        <li class="way--item">
                          <p class="way--desc">約100m程進みますと左手に見える建物が、中野サンプラザとなります。</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>  
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
