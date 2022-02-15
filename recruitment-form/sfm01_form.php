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
	<meta property="og:title" content="採用エントリー | <?php echo SITE_NAME ?>">
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title>採用エントリー | <?php echo SITE_NAME ?></title>

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
					<h1 class="p-header01--en">Recruitment Entry</h1>
					<p class="p-header01--jp">採用エントリー</p>
				</div>
			</section>
			<section class="c-breadcrumb">
				<div class="container">
					<ul class="c-breadcrumb__wrap pc">
						<li class="c-breadcrumb__item">
							<a class="c-breadcrumb__link">HOME</a>
						</li>
						<li class="c-breadcrumb__item">
							<a class="  c-breadcrumb__link">採用エントリー</a>
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
								詳しくは<a href="/privacy-policy/">プライバシーポリシー</a>をご覧ください。
							</p>
							<form method="post" name="sfm-form" id="sfm-form" action="./">
								<table>

									<tr>
										<th class="p-t-25">お名前<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="name_s" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th class="p-t-25">フリガナ</th>
										<td><input type="text" name="furigana" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th class="p-t-25">生年月日<span class="need">[ 必須 ]</span></th>
										<td>
											<div class="birthdate">
												<div class="year">
													<select id="year" name="year_s"  required value="" title="">
														<option name="year_s[]" value="" disabled="disabled" selected hidden>---</option>
														<option name="year_s[]" value="1950">1950</option>
														<option name="year_s[]" value="1951">1951</option>
														<option name="year_s[]" value="1952">1952</option>
														<option name="year_s[]" value="1953">1953</option>
														<option name="year_s[]" value="1954">1954</option>
														<option name="year_s[]" value="1955">1955</option>
														<option name="year_s[]" value="1956">1956</option>
														<option name="year_s[]" value="1957">1957</option>
														<option name="year_s[]" value="1958">1958</option>
														<option name="year_s[]" value="1959">1959</option>
														<option name="year_s[]" value="1960">1960</option>
														<option name="year_s[]" value="1961">1961</option>
														<option name="year_s[]" value="1962">1962</option>
														<option name="year_s[]" value="1963">1963</option>
														<option name="year_s[]" value="1964">1964</option>
														<option name="year_s[]" value="1965">1965</option>
														<option name="year_s[]" value="1966">1966</option>
														<option name="year_s[]" value="1967">1967</option>
														<option name="year_s[]" value="1968">1968</option>
														<option name="year_s[]" value="1969">1969</option>
														<option name="year_s[]" value="1970">1970</option>
														<option name="year_s[]" value="1971">1971</option>
														<option name="year_s[]" value="1972">1972</option>
														<option name="year_s[]" value="1973">1973</option>
														<option name="year_s[]" value="1974">1974</option>
														<option name="year_s[]" value="1975">1975</option>
														<option name="year_s[]" value="1976">1976</option>
														<option name="year_s[]" value="1977">1977</option>
														<option name="year_s[]" value="1978">1978</option>
														<option name="year_s[]" value="1979">1979</option>
														<option name="year_s[]" value="1980">1980</option>
														<option name="year_s[]" value="1981">1981</option>
														<option name="year_s[]" value="1982">1982</option>
														<option name="year_s[]" value="1983">1983</option>
														<option name="year_s[]" value="1984">1984</option>
														<option name="year_s[]" value="1985">1985</option>
														<option name="year_s[]" value="1986">1986</option>
														<option name="year_s[]" value="1987">1987</option>
														<option name="year_s[]" value="1988">1988</option>
														<option name="year_s[]" value="1989">1989</option>
														<option name="year_s[]" value="1990">1990</option>
														<option name="year_s[]" value="1991">1991</option>
														<option name="year_s[]" value="1992">1992</option>
														<option name="year_s[]" value="1993">1993</option>
														<option name="year_s[]" value="1994">1994</option>
														<option name="year_s[]" value="1995">1995</option>
														<option name="year_s[]" value="1996">1996</option>
														<option name="year_s[]" value="1997">1997</option>
														<option name="year_s[]" value="1998">1998</option>
														<option name="year_s[]" value="1999">1999</option>
														<option name="year_s[]" value="2000">2000</option>
														<option name="year_s[]" value="2001">2001</option>
														<option name="year_s[]" value="2002">2002</option>
														<option name="year_s[]" value="2003">2003</option>
														<option name="year_s[]" value="2004">2004</option>
														<option name="year_s[]" value="2005">2005</option>
														<option name="year_s[]" value="2006">2006</option>
														<option name="year_s[]" value="2007">2007</option>
														<option name="year_s[]" value="2008">2008</option>
														<option name="year_s[]" value="2009">2009</option>
														<option name="year_s[]" value="2010">2010</option>
														<option name="year_s[]" value="2011">2011</option>
														<option name="year_s[]" value="2012">2012</option>
														<option name="year_s[]" value="2013">2013</option>
														<option name="year_s[]" value="2014">2014</option>
														<option name="year_s[]" value="2015">2015</option>
														<option name="year_s[]" value="2016">2016</option>
														<option name="year_s[]" value="2017">2017</option>
														<option name="year_s[]" value="2018">2018</option>
														<option name="year_s[]" value="2019">2019</option>
														<option name="year_s[]" value="2020">2020</option>
														<option name="year_s[]" value="2021">2021</option>
														<option name="year_s[]" value="2022">2022</option>
													</select>
													<span>年</span>
												</div>
												<div class="month">
													<select id="month" name="month_s"  required value="" title="">
														<option name="month_s[]" value="" disabled="disabled" selected hidden>---</option>
														<option name="month_s[]" value="January">January</option>
														<option name="month_s[]" value="February">February</option>
														<option name="month_s[]" value="March">March</option>
														<option name="month_s[]" value="April">April</option>
														<option name="month_s[]" value="May">May</option>
														<option name="month_s[]" value="June">June</option>
														<option name="month_s[]" value="July">July</option>
														<option name="month_s[]" value="August">August</option>
														<option name="month_s[]" value="September">September</option>
														<option name="month_s[]" value="October">October</option>
														<option name="month_s[]" value="November">November</option>
														<option name="month_s[]" value="December">December</option>
													</select>
													<span>月</span>
												</div>
												<div class="day">
													<select id="day" name="day_s"  required value="" title="">
														<option name="day_s[]" value="" disabled="disabled" selected hidden>---</option>
														<option name="day_s[]" value="01">01</option>
														<option name="day_s[]" value="02">02</option>
														<option name="day_s[]" value="03">03</option>
														<option name="day_s[]" value="04">04</option>
														<option name="day_s[]" value="05">05</option>
														<option name="day_s[]" value="06">06</option>
														<option name="day_s[]" value="07">07</option>
														<option name="day_s[]" value="08">08</option>
														<option name="day_s[]" value="09">09</option>
														<option name="day_s[]" value="10">10</option>
														<option name="day_s[]" value="11">11</option>
														<option name="day_s[]" value="12">12</option>
														<option name="day_s[]" value="13">13</option>
														<option name="day_s[]" value="14">14</option>
														<option name="day_s[]" value="15">15</option>
														<option name="day_s[]" value="16">16</option>
														<option name="day_s[]" value="17">17</option>
														<option name="day_s[]" value="18">18</option>
														<option name="day_s[]" value="19">19</option>
														<option name="day_s[]" value="20">20</option>
														<option name="day_s[]" value="21">21</option>
														<option name="day_s[]" value="22">22</option>
														<option name="day_s[]" value="23">23</option>
														<option name="day_s[]" value="24">24</option>
														<option name="day_s[]" value="25">25</option>
														<option name="day_s[]" value="26">26</option>
														<option name="day_s[]" value="27">27</option>
														<option name="day_s[]" value="28">28</option>
														<option name="day_s[]" value="29">29</option>
														<option name="day_s[]" value="30">30</option>
														<option name="day_s[]" value="31">31</option>
													</select>
													<span>日</span>
												</div>
											</div>
										</td>
									</tr>

									<tr>
										<th class="p-t-25">最終学歴</th>
										<td><input type="text" name="finaleducation" value="" title="" placeholder=""></td>
									</tr>

									<tr class="address">
										<th class="p-t-25">ご住所<span class="need">[ 必須 ]</span></th>
										<td>
											<span class="zip-wrap">
												<input class="zip_s" type="text" name="zip_s" size="10" maxlength="8" placeholder="">
											</span>
											<input class="ad_btn" type="button" value="住所自動入力"><br>
											<input class="text02" type="text" name="address_s" size="60" placeholder="">
										</td>
									</tr>

									<tr>
										<th class="p-t-25">お電話番号</th>
										<td><input type="text" name="tel" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th class="p-t-25">メールアドレス<span class="need">[ 必須 ]</span></th>
										<td><input type="text" name="email_s" value="" title="" placeholder=""></td>
									</tr>

									<tr>
										<th>職務経歴1<span class="need">[ 必須 ]</span></th>
										<td><textarea name="work1_s" title=""></textarea></td>
									</tr>

									<tr>
										<th>職務経歴2</th>
										<td><textarea name="work2" title=""></textarea></td>
									</tr>

									<tr>
										<th>自己PR・質問・将来の夢etc.<br>ご自由にお書き下さい。</th>
										<td><textarea name="work3" title=""></textarea></td>
									</tr>

								</table>

								<p class="b-desc">
								ご送信前には、当社の<a href="/privacy-policy/">プライバシーポリシー</a>をよくお読みいただき<br class="pc">
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
				year_s: {
					required: true,
				},
				month_s: {
					required: true,
				},
				day_s: {
					required: true,
				},
				zip_s: {
					required: true
				},
				work1_s: {
					required: true
				},
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
						} else if (element.attr("name") == "year_s" || element.attr("name") == "month_s" || element.attr("name") == "day_s") {
							error.insertAfter(".birthdate");
						}else if (element.attr("name") == "check_s[]") {
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
				AjaxZip3.zip2addr('zip_s', '', 'address_s', 'address_s');
			});
		});
	</script>
</body>

</html>
