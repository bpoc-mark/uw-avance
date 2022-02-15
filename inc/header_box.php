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
											} ?>" >事業内容</a></li>
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
