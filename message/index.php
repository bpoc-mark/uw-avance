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

  <title>トップメッセージ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Message">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Message</h1>
          <p class="p-header01--jp">トップメッセージ</p>
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
              <a href="" class="c-breadcrumb__link">トップメッセージ</a>
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
                <a href="/message/" class="page-menu--link page-menu--link__active">トップメッセージ</a>
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
              <h2 class="ttl">私たちの夢</h2>
              <div class="row">
                <div class="col">
                  <ul class="message">
                    <li class="message__item">
                      <h3 class="message__ttl">挑戦と変化</h3>
                      <p class="message__desc">
                        アバンセシステムの使命は、平和で豊かな生活を世界の人々に提供していくことです。<br>
                        私たちはソフトウェアやシステムの力によって、この重い任務を果たそうと活動しています。<br>
                        <br>
                        私たちの日々の働きや行動を使命と結びつけているのが、当社がポリシーとして掲げる「挑戦」と「変化」です。<br>
                        挑戦は価値あることですが、それだけでは足りません。<br>
                        大切なのは、挑戦によって明らかになる課題をどう捉えるか。<br>
                        至らない点を挙げるだけでなく、前向きに「では、どう変わるか」を考え、成功への道筋を照らすのが、私たちのやり方です。<br>
                        使命の達成は、この「挑戦」と「変化」を積み重ねた先にあると確信しています。<br>
                        さらには、そうした変化の土壌がつくられ、変化が持続的に生まれるようになってほしい。<br>
                        それこそが、私たちの夢です。
                      </p>
                    </li>
                    <li class="message__item">
                      <h3 class="message__ttl">人のためになることを成す</h3>
                      <p class="message__desc">
                        制御系の技術を中核として1999年に当社を設立したとき、<br>
                        私には「人のためになることを成す」という強い想いがありました。<br>
                        その想いを社員が共有し、すべての仕事の根底に据えてきたからこそ、<br>
                        私たちがご提供するソフトウェアやシステムがお客様に評価されたのだと思います。<br>
                        設立から20年以上を経て、皆様のご支援によって当社は浜松地域の元気企業として認知されるまで成長しました。<br>
                        一流メーカーや大学にお引き立ていただき、<br>
                        私たちの製品がより良い社会づくりの一端を担っていることは大きな喜びです。
                      </p>
                    </li>
                    <li class="message__item">
                      <h3 class="message__ttl">転換期に活きるアバンセの技術</h3>
                      <p class="message__desc">
                        今、IT業界のみならず、世界が転換期を迎えています。<br>
                        目まぐるしく変わる社会で、当社の使命をどう果たしていくのかが、問われています。<br>
                        <br>
                        そのような情勢にあって、確かなこともあります。<br>
                        その1つは、世の中のあらゆる製品がコンピュータで制御される時代の到来です。<br>
                        すでに、パソコンやスマートフォンをはじめ、<br>
                        家電や自動車、ビル、工場など様々なものがネットワークにつながるIoT化が進んでいます。<br>
                        つまり、当社の得意分野の市場が拡大し、私たちが果たす役割はますます大きくなっています。<br>
                        <br>
                        もう1つの確かなことは、社会や経済の不安定さの裏返しとして、<br>
                        安心・安定を求めて変化を避けようとするマインドが広がっていることです。<br>
                        企業や従業員を守るため、仕方のないこととは言え、「挑戦」と「変化」がなければ前進もありません。<br>
                        そこで当社は、ソフトウェアとシステムの技術で難題に挑む姿勢を世の中に発信し続けています。<br>
                        例えば、製造業のIoTを活用した事業継承の円滑化や、農業のIT化など、多様な問題を解決に導ければ、<br>
                        ほんのわずかでも社会に希望をもたらすことができると考えるからです。<br>
                        <br>
                        私たちは社会がどう移り変わっても、お客様が成長するためのお役に立てるよう、技術を磨き続けます。<br>
                        同じように、当社の成長も追求し、将来は社会を支える基幹企業として、<br>
                        平和で豊かな生活を世界の人々に提供していく使命を果たしてまいります。
                      </p>
                    </li>
                  </ul>
                  <h3 class="ceo"><span>代表取締役社長</span><br>村山 邦彦</h3>
                </div>
                <div class="col">
                  <img src="/images/message/img_1.jpg" alt="村山 邦彦">
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
