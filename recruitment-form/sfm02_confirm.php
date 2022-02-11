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
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>お問い合わせ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header class="lp-header-01">
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main id="Contact" class="sfm2">
      <section class="p-header01">
				<div class="p-header01--cont">
					<h1 class="p-header01--en">Recruitment Entry</h1>
					<p class="p-header01--jp">採用エントリー</p>
				</div>
			</section>
			<section class="c-breadcrumb">
				<div class="container">
					<ul class="c-breadcrumb__wrap pc">
						<li class="c-breadcrumb__item">
							<a href="" class="c-breadcrumb__link">HOME</a>
						</li>
						<li class="c-breadcrumb__item">
							<a href="" class="  c-breadcrumb__link">採用エントリー</a>
						</li>
					</ul>
				</div>
			</section>
      <section class="form-sec">
        <div class="wrapper">
          <div class="form_wrap container">
            <div class="content">
              <p class="h-desc">
								弊社に関するお問合せは以下のフォームをご利用ください。人材採用のご応募はエントリーシートよりお願いいたします。<br>
								ご入力いただきました個人情報につきましては、お問合せにお応えする目的以外に利用されることはありません。<br>
								詳しくは<a href="">プライバシーポリシー</a>をご覧ください。
							</p>
              <form method="post" name="sfm-form" id="sfm-form" action="./">
                <table>

                  <tr>
                    <th class="p-t-25">お名前<span class="need">[ 必須 ]</span></th>
                    <td><?php echo $sfm_html->name; ?></td>
                  </tr>

                  <tr>
                    <th class="p-t-25">フリガナ</th>
                    <td><?php echo $sfm_html->furigana; ?></td>
                  </tr>

                  <tr>
                    <th class="p-t-25">生年月日<span class="need">[ 必須 ]</span></th>
                    <td><?php echo $sfm_html->month; ?> <?php echo $sfm_html->day; ?>, <?php echo $sfm_html->year; ?></td>
                  </tr>

                  <tr>
                    <th class="p-t-25">最終学歴</th>
                    <td><?php echo $sfm_html->finaleducation; ?></td>
                  </tr>

                  <tr class="address">
                    <th class="p-t-25">ご住所<span class="need">[ 必須 ]</span></th>
                    <td>
                      <p>〒<?php echo $sfm_html->zip; ?></p>
                      <p><?php echo $sfm_html->address; ?></p>
                    </td>
                  </tr>

                  <tr>
                    <th class="p-t-25">お電話番号</th>
                    <td><?php echo $sfm_html->tel; ?></td>
                  </tr>

                  <tr>
                    <th class="p-t-25">メールアドレス<span class="need">[ 必須 ]</span></th>
                    <td><?php echo $sfm_html->email; ?></td>
                  </tr>

                  <tr>
                    <th>職務経歴1<span class="need">[ 必須 ]</span></th>
                    <td><?php echo $sfm_html->work1; ?></td>
                  </tr>

                  <tr>
                    <th>職務経歴2</th>
                    <td><?php echo $sfm_html->work2; ?></td>
                  </tr>

                  <tr>
                    <th>自己PR・質問・将来の夢etc.<br>ご自由にお書き下さい。</th>
                    <td><?php echo $sfm_html->work3; ?></td>
                  </tr>

                </table>

                <div class="submit_area">
                  <?php echo $sfm_submit; ?>
                </div><!-- submit_area -->

              </form>
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
