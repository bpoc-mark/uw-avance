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

  <title>人への想い | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Recruit-People">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>  
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="p-header01 p-header01--bg p-header01--bg__recruit-info">
        <div class="p-header01--cont">
          <h1 class="p-header01--en">Recruit</h1>
          <p class="p-header01--jp">人への想い</p>
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
            <li class="c-breadcrumb__item">
              <a class="c-breadcrumb__link">人への想い </a>
            </li>
          </ul>
        </div>
      </section>
      <nav class="page-menu pc">
        <div class="container">
         <div class="content">
            <ul class="page-menu--list">
              <li class="page-menu--item">
                <a href="/recruit-info/" class="page-menu--link">採用情報</a>
              </li>
              <li class="page-menu--item">
                <a href="/recruit-people/" class="page-menu--link page-menu--link__active">人への想い</a>
              </li>
              <li class="page-menu--item">
                <a href="/application-requirements/" class="page-menu--link">募集要項</a>
              </li>
              <li class="page-menu--item">
                <a href="/recruitment-form/" class="page-menu--link">エントリーフォーム</a>
              </li>
            </ul>
            <ul class="page-menu--list">
              <li class="page-menu--item page-menu--item--lbl">
                <span class="page-menu--link page-menu--link--lbl">先輩インタビュー</span>
              </li>
              <li class="page-menu--item"> 
                <a class="page-menu--link">2009年入社Oさん</a>
              </li>
              <li class="page-menu--item">
                <a class="page-menu--link">2013年入社Hさん</a>
              </li>
              <li class="page-menu--item">
                <a class="page-menu--link">2015年入社Nさん</a>
              </li>
              <li class="page-menu--item">
                <a class="page-menu--link">2019年入社Aさん</a>
              </li>
            </ul>
         </div>
        </div>
      </nav>
      <div class="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="interview-wrap">
              <ul class="interview-list">
                <li class="item">
                  <h3 class="ttl">
                    あなたもエンジニアになりませんか？<br>
                    未経験から成長できる環境があります
                  </h3>
                  <p class="desc">
                    アバンセシステムは経験・知識ゼロの人材をエンジニアへと育てるインキュベーター（孵卵器）です。<br>
                    これまでに多くの人が未経験者から成長し、社会に役立つ仕事を成し遂げてきました。<br>
                    「IT業界で新しいものを生み出したい」「プログラマーになりたい」と考えている方。<br>
                    あなたも思い切ってアバンセシステムに飛び込んで、将来を変えてみませんか？<br>
                    即戦力にならなくても大丈夫。<br>
                    これから知識を身につけ、経験を積んでいく意欲のある方を歓迎します。
                  </p>
                </li>
                <li class="item">
                  <h3 class="ttl">理系にも文系にも、門戸は開かれています</h3>
                  <p class="desc">
                    長い目で見ると、アバンセシステムのエンジニアたちは理系出身でも文系出身でも同じように活躍しています。<br>
                    たしかに、理系は入社時にプログラミングの知識などでアドバンテージがあります。<br>
                    しかし、ソフトウェアをつくるためには、お客様に仕様を文書でご説明する仕事なども重要で、こちらは文系が強い傾向にあります。<br>
                    つまり、理系でも文系でも、学生時代に触れてこなかった分野の力を積極的に鍛えることで、一人前のエンジニアに近づいていくというわけです。<br>
                    アバンセシステムで活躍するエンジニアの経歴は、実に多様です。<br>
                    理系・文系・美術系。誰もが優れた技術で確かな成果を出しながら、一人ひとりの個性を発揮して新しい仕事を生み出しています。
                  </p>
                  <img src="/images/recruit-people/img_1.jpg" alt="理系にも文系にも、門戸は開かれています">
                </li>
                <li class="item">
                  <h3 class="ttl">人を育むとは信じること</h3>
                  <p class="desc">
                    人を育むためには、その人の可能性を信じることです。<br>
                    人を信じるためには、それだけの余裕がなければなりません。<br>
                    アバンセシステムで人を育てる側に立つ管理職やリーダーたちが、心のゆとりを大切にしているのは、そのためです。<br>
                    大切なのは若手を信用して任せた仕事が失敗したとき。<br>
                    若手を叱るのは簡単です。できなかった理由を挙げることは誰にでもできます。<br>
                    しかし、それではエンジニア個人や会社の前進につながりません。<br>
                    そうではなく、失敗したときこそ成長の道筋を考えてあげるべきです。<br>
                    言い換えれば、失敗に終わった挑戦をどう変化につなげるかを重視します。
                  </p>
                </li>
                <li class="item">
                  <h3 class="ttl">ぜひ、新しいことに挑んでください</h3>
                  <p class="desc">
                    ひたむきに技術を磨いてきた社員が「これをやってみたい」と言うなら、「やってみろ」と応じるのがアバンセシステム。<br>
                    新しいことに挑みたいエンジニアには、いくらでもチャンスがあります。<br>
                    実際、アバンセシステムをこれまで導いてきたのは、人のやらないことに挑む開発者魂です。<br>
                    その気持ちを同じくする人が私たちの仲間になってくれるなら、こんなにうれしいことはありません。<br>
                    例えば、脚光を浴びていてもITを使ったビジネスが成立しにくい分野や、まだ日の目を見ていない技術に、どうしても心が奪われてしまう人。<br>
                    アバンセシステムにもそのような先輩たちがたくさんいます。<br>
                    先輩たちはそれぞれが関心のある分野について勉強しながら、独自のシステムやソフトウェアを実現する機会をうかがっています。
                  </p>
                  <img src="/images/recruit-people/img_2.jpg" alt="ぜひ、新しいことに挑んでください">
                </li>
                <li class="item">
                  <h3 class="ttl">成長を続けるために</h3>
                  <p class="desc">
                    アバンセシステムに仕事をご依頼いただいているお客様には一流メーカーや大学などが多く、それが私たちの経営の安定につながっています。<br>
                    ただ、お客様の安定的な成長をお手伝いするためには、現状維持ではなく前進を続けなければならないのは当然のこと。<br>
                    新しく私たちの仲間になってくださる皆さんと力を合わせ、未知の分野にも挑んでいきたいと思います。<br>
                    人のためになることを成す。<br>
                    周りのために努力し、自分たちも成長する好循環を生み出すことが、社会貢献につながる。<br>
                    これが、アバンセシステムの根底にある想いです。
                  </p>
                </li>
              </ul>
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
