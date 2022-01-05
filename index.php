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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<!-- <header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header> -->

		<main>
			<section class="sect_6">
				<div class="wrapper">
					<div class="container">
						<div class="c-header01">
							<h3 class="c-header01__en">News</h3>
							<p class="c-header01__jp">新着情報</p>
						</div>
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
						</ul>
						<a href="" class="c-button01 c-button01--primary c-button01--sm">一覧</a>
					</div>
				</div>
			</section>
		</main>

		<!-- <footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer> -->
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
