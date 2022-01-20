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
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<div class="main_content">
				<section class="sect_1">
					<div class="main_video">
						<video src="/images/top/sect_1/bg_video.mp4" loop="" autoplay="" muted="" playsinline=""></video>
					</div>
					<div class="content">
						<h2>Avance Revolution</h2>
						<h3>「挑戦」と「変化」で<br class="sp">システム･アプリケーション開発に革命を</h3>
					</div>
					<a href="" class="scroll">SCROLL<span></span></a>
				</section>
				<section class="sect_2">
					<div class="wrapper">
						<div class="container">
							<div class="row">
								<div class="col c-anim-up">
									<div class="c-header01">
										<h3 class="c-header01__en">Service</h3>
										<p class="c-header01__jp">サービス紹介</p>
									</div>
									<p class="desc">
										サービスを包括したテキストを入れたいです。<br class="pc">
										サービスを包括したテキストを入れたいですサービスを包括したテキストを入れたいですサービスを包括したテキストを入れたいです。
									</p>
								</div>
								<div class="col c-anim-up">
									<a href="">
										<div class="card">
											<picture >
												<source srcset="/images/top/sect_2/sp/img1.jpg" media="(max-width: 899px)">
												<img src="/images/top/sect_2/img1.jpg" alt="車載関連" class="">
											</picture>
											<div class="card--content">
												<span class="card--content__num">01.</span>
												<h3 class="card--content__title">車載関連</h3>
												<p class="card--content__desc">車載ソフトウェア開発のご要望に豊富な実績とノウハウでお応えし</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col c-anim-up">
									<a href="">
										<div class="card">
											<picture >
												<source srcset="/images/top/sect_2/sp/img2.jpg" media="(max-width: 899px)">
												<img src="/images/top/sect_2/img2.jpg" alt="IoT関連" class="">
											</picture>
											<div class="card--content">
												<span class="card--content__num">02.</span>
												<h3 class="card--content__title">IoT関連</h3>
												<p class="card--content__desc">テキストが入りますテキストが入りますテキストが入ります。</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col c-anim-up">
									<a href="">
										<div class="card">
											<picture >
												<source srcset="/images/top/sect_2/sp/img3.jpg" media="(max-width: 899px)">
												<img src="/images/top/sect_2/img3.jpg" alt="生産関連" class="">
											</picture>
											<div class="card--content">
												<span class="card--content__num">03.</span>
												<h3 class="card--content__title">生産関連</h3>
												<p class="card--content__desc">テキストが入りますテキストが入りますテキストが入ります。</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col c-anim-up">
									<a href="">
										<div class="card">
											<picture >
												<source srcset="/images/top/sect_2/sp/img4.jpg" media="(max-width: 899px)">
												<img src="/images/top/sect_2/img4.jpg" alt="大学教育関連" class="">
											</picture>
											<div class="card--content">
												<span class="card--content__num">04.</span>
												<h3 class="card--content__title">大学教育関連</h3>
												<p class="card--content__desc">テキストが入りますテキストが入りますテキストが入ります。</p>
											</div>
										</div>
									</a>
								</div>
								<div class="col c-anim-up">
									<a href="">
										<div class="card">
											<picture >
												<source srcset="/images/top/sect_2/sp/img5.jpg" media="(max-width: 899px)">
												<img src="/images/top/sect_2/img5.jpg" alt="安否確認システム" class="">
											</picture>
											<div class="card--content">
												<span class="card--content__num">05.</span>
												<h3 class="card--content__title">安否確認システム</h3>
												<p class="card--content__desc">テキストが入りますテキストが入りますテキストが入ります。</p>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="sect_3">
				<div class="wrapper">
					<div class="container">
						<div class="content">
							<div class="row">
								<div class="col">
									<figure class="sp">
										<img src="/images/top/sect_3/sp/img_1.jpg" alt="">
									</figure>
								</div>
								<div class="col">
									<div class="c-header01">
										<h3 class="c-header01__en c-anim-up">Company</h3>
										<p class="c-header01__jp c-anim-up">会社案内</p>
									</div>
									<p class="desc c-anim-up">
									テキストが入りますテキストが入りますテキストが入ります。<br>
									テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります。<br>
									テキストが入りますテキストが入りますテキストが入りますテキスト。<br>
									</p>
									<a href="" class="c-button01 c-button01--primary c-button01--lg"><span class="c-button01--text">会社案内</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="bg">
							<figure class="sp">
								<img src="/images/top/sect_4/sp/bg_img.jpg" alt="">
							</figure>
							<div class="content">
								<div class="c-header01">
									<h3 class="c-header01__en c-anim-up">Avance.Lab</h3>
									<p class="c-header01__jp c-anim-up">アバンセ ラボ</p>
								</div>
								<p class="desc c-anim-up">
								テキストが入りますテキストが入りますテキストが入ります。<br>
								テキストが入りますテキストが入りますテキスト<br class="pc">
								テキストが入りますテキストが入りますテキストが入りますテキスト。
								</p>
								<a href="" class="c-button01 c-button01--secondary c-button01--lg"><span class="c-button01--text">採用情報</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_5">
				<div class="wrapper">
					<div class="container">
						<div class="bg_cont">
							<div class="bg_cont--content">
								<h3 class="bg_cont--content__title c-anim-up">向上心を持って、一流のSEとして<br>私たちと共に働きませんか？</h3>
								<a href="" class="c-button01 c-button01--secondary c-button01--lg"><span class="c-button01--text">採用情報</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_6">
				<div class="wrapper">
					<div class="container">
						<div class="c-header01">
							<h3 class="c-header01__en c-anim-up">News</h3>
							<p class="c-header01__jp c-anim-up">新着情報</p>
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
						<a href="" class="c-button01 c-button01--primary c-button01--sm"><span class="c-button01--text">一覧</span></a>
					</div>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

	<script>
		const secth2 = document.querySelector('.main_content .sect_1 .content h2');
		const secth3 = document.querySelector('.main_content .sect_1 .content h3');
		window.addEventListener('load', function() {
			secth2.classList.add('isOpened');
			secth3.classList.add('isOpened');
		});
		setTimeout( function () {
			secth2.classList.add('isOpened');
			secth3.classList.add('isOpened');
		}, 2000);

		$(function () {
			$(window).on("scroll load", function () {
				var t = $(this).scrollTop();
				var sect3pos = $('.sect_3').offset().top;
				var sect6pos = $('.sect_6').offset().top;
				var sect3_new_pos = sect3pos - t;
				var sect6_new_pos = sect6pos - t;
				console.log(sect3_new_pos)
				if (sect3_new_pos < 500) {
					$('.sect_3 .wrapper .content .row .col:first-child').addClass('showAnim');
				}
				if (sect6_new_pos < 400) {
					$('.sect_6 .wrapper .news .news__item').addClass('showAnim');
				}
			});
		});
	</script>
</body>

</html>
