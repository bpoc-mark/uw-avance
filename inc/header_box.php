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
			<li class="nav--item"><a href="/" class="nav--link isActive" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>HOME</a></li>
			<li class="nav--item"><a href="/" class="nav--link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>事業内容</a></li>
			<li class="nav--item"><a href="/" class="nav--link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>会社案内</a></li>
			<li class="nav--item"><a href="/" class="nav--link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>アバンセラボ</a></li>
			<li class="nav--item"><a href="/" class="nav--link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>>採用情報</a></li>
			<li class="nav--item"><a href="/" class="nav--link" <?php if ($str[1] == "") {
												echo ' class="here"';
											} ?>> お問い合わせ</a></li>
		</ul>
	</nav>

	<div class="menu sp" id="nav_menu">
		<span class="line line-t"></span>
		<span class="line line-b"></span>
		<p></p>
	</div>

</div>
