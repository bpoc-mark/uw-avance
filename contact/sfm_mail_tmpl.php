<?php

/*--------------------------------------------------------------------------

	フォームメール - sformmmail2　管理者宛に送信されるメールです

--------------------------------------------------------------------------*/

// 受け取る時のSubject（件名）
$mailSubject = '[株式会社●●●●] お問合わせを受け付けました';

//送信メッセージ
$mailMessage = <<< EOD
以下の内容が「お問い合わせフォーム」より送信されました。
内容を確認の上、速やかにお客様へ連絡してください。
────────────────────────────────────

■貴社名
{$sfm_mail->companyname}

■お名前
{$sfm_mail->name}

■ご住所
〒{$sfm_mail->zip}
{$sfm_mail->address}

■メールアドレス
{$sfm_mail->email}

■FAX番号
{$sfm_mail->fax}

■お電話番号
{$sfm_mail->tel}

■お問い合わせ種別
{$sfm_mail->inquiry}

■お問合せ内容
{$sfm_mail->message}


────────────────────────────────────

□ユーザー情報
$sfm_userinfo
EOD;
