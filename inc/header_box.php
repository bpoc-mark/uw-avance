<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">

	<div class="logo_cont">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><i>'. SITE_NAME .'</i></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><i>'. SITE_NAME .'</i></a></p>';
		}
		?>
	</div>

	<nav class="nav">
		<ul class="nav--list">
			<li class="nav--item"><a href="/" class="nav--link <?php if ($str[1] == "") {
												echo 'isActive';
											} ?>">HOME</a></li>
			<li class="nav--item"><a href="/service/" class="nav--link <?php if ($str[1] == "service") {
												echo 'isActive';
											} ?>" >サービス紹介</a>
				<span class="header-drop-icon sp"></span>
				<div class="nav--submenu">
					<div class="c-service01">
						<div class="container">
							<div class="c-service01--row">
								<div class="c-service01--col">
									<a href="/service/" class="c-service01__link">
										<div class="c-service01__content">
											<div class="c-service01__content--col c-service01__content--col--bg1 pc">
											</div>
											<div class="c-service01__content--col">
												<h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">01.</span><span class="c-service01__content--ttl">車載ソリューション</span></h3>
											</div>
										</div>
									</a>
								</div>
								<div class="c-service01--col">
									<a href="/service/iot/" class="c-service01__link">
										<div class="c-service01__content">
											<div class="c-service01__content--col c-service01__content--col--bg2 pc">
											</div>
											<div class="c-service01__content--col">
												<h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">02.</span><span class="c-service01__content--ttl">IoTソリューション</span></h3>
											</div>
										</div>
									</a>
								</div>
								<div class="c-service01--col">
									<a href="/service/production/" class="c-service01__link">
										<div class="c-service01__content">
											<div class="c-service01__content--col c-service01__content--col--bg3 pc">
											</div>
											<div class="c-service01__content--col">
												<h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">03.</span><span class="c-service01__content--ttl">生産管理ソリューション</span></h3>
											</div>
										</div>
									</a>
								</div>
								<div class="c-service01--col">
									<a href="/service/education/" class="c-service01__link">
										<div class="c-service01__content">
											<div class="c-service01__content--col c-service01__content--col--bg4 pc">
											</div>
											<div class="c-service01__content--col">
												<h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">04.</span><span class="c-service01__content--ttl">大学教育ソリューション</span></h3>
											</div>
										</div>
									</a>
								</div>
								<div class="c-service01--col">
									<a href="/service/safety/" class="c-service01__link">
										<div class="c-service01__content">
											<div class="c-service01__content--col c-service01__content--col--bg5 pc">
											</div>
											<div class="c-service01__content--col">
												<h3 class="c-service01__content--ttl-cont"><span class="c-service01__content--num">05.</span><span class="c-service01__content--ttl">安否確認システム</span></h3>
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>								
			</li>
			<li class="nav--item"><a href="/company/" class="nav--link <?php if ($str[1] == "company") {	
												echo 'isActive';
											} ?>" >会社案内</a></li>
			<li class="nav--item"><a href="/laboratory/" class="nav--link <?php if ($str[1] == "business") {
												echo 'isActive';
											} ?>" >アバンセラボ</a></li>
			<li class="nav--item"><a href="/recruit-info/" class="nav--link <?php if ($str[1] == "recruit-info") {
												echo 'isActive';
											} ?>" >採用情報</a></li>
			<li class="nav--item"><a href="/contact/" class="nav--link <?php if ($str[1] == "contact") {
												echo 'isActive';
											} ?>" > お問い合わせ</a></li>
		</ul>
	</nav>

	<div class="menu sp" id="nav_menu">
		<span class="line line-t"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>

</div>
