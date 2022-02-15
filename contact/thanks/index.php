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

		<main id="Contact" class="sfm3">
			<section class="p-header01">
				<div class="p-header01--cont">
					<h1 class="p-header01--en">Contact</h1>
					<p class="p-header01--jp">お問い合わせ</p>
				</div>
			</section>
			<section class="c-breadcrumb">
				<div class="container">
					<ul class="c-breadcrumb__wrap pc">
						<li class="c-breadcrumb__item">
							<a class="c-breadcrumb__link">HOME</a>
						</li>
						<li class="c-breadcrumb__item">
							<a class="  c-breadcrumb__link">お問い合わせ</a>
						</li>
					</ul>
				</div>
			</section>
			<section class="form-sec">
				<div class="wrapper">
					<div class=" container">
						<div class="send_comp">
							<p>
								この度は、株式会社アバンセシステムへお問合わせ頂き、<br class="pc">誠にありがとうございました。<br><br>
								内容を確認後、ご入力されたメールアドレス宛にお返事致します。<br><br>なお、ご記入頂いたメールアドレス宛てに自動返信メールをお送りしております。<br>自動返信メールが届いていない場合は、メールアドレスが誤っている可能性がございます。<br>その際は大変お手数ですが、再度お問合わせくださいませ。</p>
							<a href="/" class="c-button01 c-button01--primary c-button01--lg"><span class="c-button01--text">トップへ戻る</span></a>
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
