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

		<main id="Contact" class="sfm1">
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
							<a href="" class="c-breadcrumb__link">HOME</a>
						</li>
						<li class="c-breadcrumb__item">
							<a href="" class="  c-breadcrumb__link">お問い合わせ</a>
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
										<th class="p-t-25">貴社名<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="companyname_s" value="" title="" placeholder=""></td>
									</tr>


									<tr>
										<th class="p-t-25">お名前<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="name_s" value="" title="" placeholder=""></td>
									</tr>

									<tr class="address">
										<th>ご住所</th>
										<td>
											<span class="zip-wrap">
												<input class="zip" type="text" name="zip" size="10" maxlength="8" placeholder="">
											</span>
											<input class="ad_btn" type="button" value="住所自動入力"><br>
											<input class="text02" type="text" name="address" size="60" placeholder="">
										</td>
									</tr>

									<tr>
										<th class="p-t-25">メールアドレス<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="email_s" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th class="p-t-25">お電話番号<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="tel_s" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th class="p-t-25">FAX番号</th>
										<td><input type="text" name="fax" value="" title="" placeholder=""></td>
									</tr>


									<tr>
										<th>お問い合わせ種別</span></th>
										<td>
											<div class="checkbox">
												<input type="hidden" name="inquiry" />
												<ul class="check-list type">
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="組み込みシステムソリューション" id="type01" />
														<label for="type01">組み込みシステムソリューション</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="ANPIC（安否確認システム）" id="type02" />
														<label for="type02">ANPIC（安否確認システム）</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="Android" id="type03" />
														<label for="type03">Android</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="クラウドサービス" id="type04" />
														<label for="type04">クラウドサービス</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="iPhone/iPad/iPod touch" id="type05" />
														<label for="type05">iPhone/iPad/iPod touch</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="ソフトウェア開発全般" id="type06" />
														<label for="type06">ソフトウェア開発全般</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="MATLAB®/Simulink®開発" id="type07" />
														<label for="type07">MATLAB®/Simulink®開発</label>
													</li>
													<li>
														<input class="checkbox_item" type="checkbox" name="inquiry[]" value="その他" id="type08" />
														<label for="type08">その他</label>
													</li>
												</ul>
											</div>
										</td>
									</tr>

									<tr>
										<th>お問合せ内容</th>
										<td><textarea name="message" title=""></textarea></td>
									</tr>

								</table>

								<p class="b-desc">
								ご送信前には、当社の<a href="">プライバシーポリシー</a>をよくお読みいただき<br class="pc">
								「プライバシーポリシーに同意して送信する」にチェックをしてから、ご送信ください。
								</p>

								<div class="agree_area">
									<input type="checkbox" name="agree" id="checkAgree">
									<label for="checkAgree" class="checkAgree">プライバシーポリシーに同意して送信する</label>
								</div>

								<div class="c-button01 c-button01--primary c-button01--lg">
									<span class="c-button01--text">
										<input id="checkSubmit" type="submit" value="入力内容の確認" class="pushbtn" />
									</span>
								</div>

								<input type="hidden" name="mailToNum" value="0" />
								<input type="hidden" name="mode" value="CONFIRM" />
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
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
				tel: function(value, element) {
					return this.optional(element) || /^[0-9]+[0-9.-]+$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				companyname_s: {
					required: true,
				},
				tel_s: {
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				check_s: {
					required: "チェックボックスを選択してください"
				},
				tel_s: {
					tel: "正しい電話番号を入力してください"
				}
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip', '', 'address', 'address');
			});
		});
	</script>
</body>

</html>
