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

  <title>大学教育ソリューション | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Service-Education">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__service-education">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Service</h1>
          <p class="p-header01--jp">大学教育ソリューション</p>
        </div>
      </section>
      <section class="c-breadcrumb">
        <div class="container">
          <ul class="c-breadcrumb__wrap pc">
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">HOME</a>
            </li>
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">事業内容 大学教育ソリューション</a>
            </li>
          </ul>
        </div>
      </section>
      <section class="sect_1">
        <div class="container">
          <div class="content">
            <h2>学内ネットワーク関連システムなどの開発から<br>管理運用までトータルにサポートします。</h2>
            <p>
              大学のコンピュータ・ネットワークや各種システムは、教育や研究だけでなく、<br>
              学生や教職員のあらゆる活動に欠かせない生活基盤です。<br>
              弊社は学内ネットワーク関連システムなどの開発・整備、運用支援、新サービスの提案などを通して、<br>
              組織を支える情報インフラの持続的な管理・運用をサポートします。<br>
              また、研究開発したシステム・サービスをベースとして、大学へ導入可能なソリューションを提供しています。
            </p>
          </div>
        </div>
      </section>
      <section class="service">
        <div class="service__wrapper">
          <div class="container">
            <div class="service__wrapper--row">
              <div class="service__wrapper--col service__wrapper--col__img1">
                <img src="/images/service-education/sp/img_1.jpg" class="sp" alt="主な事業">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">主な事業</h3>
                  <ul class="sub_list">
                    <li class="sub_item">
                      <h4 class="sub_ttl">全学情報基盤に対する<br>利用状況分析システムなどの研究開発・運営サポート</h4>
                      <p class="desc">大学で学生や教職員が使用する全学情報基盤に対して利用状況分析システムなどの研究開発と運用支援を行っています。具体的には、全学無線LANの運用管理・利用状況分析、新しいサービスの提供、運用のフォローなどを行います。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">導入後、ニーズの変化を追い続ける</h4>
                      <p class="desc">システムやサービスの使われ方は、時間の経過とともに変わります。インフラ構築時に学生や教職員から必要とされた機能が数年後に不要になり、新しい機能を求められるケースは珍しくありません。弊社は保守業務の一環としてログ情報を分析したり、管理者の定例会議に参加したりする中でニーズの変化をとらえ、サービス向上につながる改善策を積極的に提案します。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">すき間を埋めるシステムやサービス</h4>
                      <p class="desc">大学の研究・教育活動を支える全学情報基盤システムは、多種・多様なシステムとの認証連携、ネットワークの安定運用と品質向上のために利用状況の継続的な把握が重要です。しかし、システム間やネットワーク間に連携不足などのすき間が生じがちです。弊社は全体のシステムを円滑に運用するため、すき間を解消するシステム・サービスの提案・開発を得意としています。</p>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">大学発の教育ICTサービス「SACASS」</h4>
                      <p class="desc">大学におけるオンライン教育の知見を活用して開発したシステム・サービスをベースに、運用支援などを含むソリューションとして提供しているのが、「SACASS（サーカス）」です。シンプルなシステム構成と、低コストで実現できるサービスが評価され、多くの大学や自治体に採用されています。詳しくは<a href="">こちら</a>をご覧ください。</p>
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
                <img src="/images/service-education/sp/img_2.jpg" class="sp" alt="開発実績">
              </div>
              <div class="service__wrapper--col">
                <div class="service__wrapper--col__content">
                  <h3 class="ttl">開発実績</h3>
                  <ul class="sub_list">
                    <li class="sub_item">
                      <h4 class="sub_ttl">eduroam利用環境の構築と運用支援</h4>
                      <p class="desc">世界100以上の国・地域でキャンパス無線LANのデファクト・スタンダードとなっているeduroam(エデュローム)利用環境の構築実績があります。</p>
                      <div class="list_wrap">
                        <ul class="list_wrap--con">
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              eduroamとは<br>
                              eduroamは世界100以上の国・地域の学術機関などに導入されている国際学術無線LANローミング基盤です。日本では「eduroam JP」の名称でNII（情報・システム研究機構 国立情報学研究所）が運用・サポート・技術開発を行っています。eduroamに参加している大学の学生・教職員は国内外の訪問先で設定変更などを行うことなく無線LANに接続できます。
                            </p>
                          </li>
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              ゲスト用無線LANの準備業務を省力化<br>
                              eduroamに参加している大学では、研究会などでゲストを迎えるたびにネットワーク環境を準備する必要がありません。eduroam利用環境を構築することで、ゲスト用無線LANの準備・運用業務の大幅な省力化が可能になります。また、eduroamアカウントを保持していない学外者にゲスト用アカウントを発行するシステムも開発します。同システムは教職員であれば誰でも操作でき、アカウント発行が可能。従来、ゲスト用無線LANの管理・運用を担っていた職員の手間を省くことができ、ゲストを招く教職員にとっても利便性が向上します。
                            </p>
                          </li>
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              学内トラフィック負荷を軽減<br>
                              教育ICTサービス利用者の増加などにより、ネットワーク負荷の軽減が課題となっています。そこで、eduroam利用環境の構築に伴い、学内の主要施設に複数の商用回線を追加。学内のインターネット通信を振り替えるデータオフロードの仕組みをつくり、学内ネットワークの負荷分散を実現します。
                            </p>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sub_item">
                      <h4 class="sub_ttl">デジタルサイネージシステムの開発</h4>
                      <p class="desc">過去に弊社が納入したデジタルサイネージシステムが更新時期を迎えたため、操作性を改善させた新システムを開発しました。</p>
                      <div class="list_wrap">
                        <ul class="list_wrap--con">
                          <li class="list_wrap--item">
                            <p class="list_wrap--txt">
                              GUIが大幅に進化<br>
                              過去に納入したデジタルサイネージシステムは、設置から年数が経過し、コンテンツ更新の際の使い勝手などについて改善の要望が寄せられてました。弊社は管理者から実際の使用状況などをヒアリングし、GUIの向上や配信の仕組みの変更などを含む全面更新を提案し、採用されています。
                            </p>
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
