<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://nuarknoir.github.io/',
	'homepage_url' => 'http://nuarknoir.github.io/index.html',
	'public_folder' => '/files',
	'salt' => '0aaw4yoibd9et8lx303bz24155k5a4p2hcy726usq7710us7',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v12 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#808080" style="background-color: #808080;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal bold 9pt Tahoma; color: #FFFFFF; background-color: #000000; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #000000" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt Tahoma; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Nuark.Noir`s GDCP 2015. All rights reserved.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#000000';
$ImMailer->bodyBackgroundEven = '#000000';
$ImMailer->bodyBackgroundOdd = '#0F0F0F';
$ImMailer->bodyBackgroundBorder = '#323232';
$ImMailer->bodySeparatorBorderColor = '#FFFFFF';
$ImMailer->emailBackground = '#808080';
$ImMailer->emailContentStyle = 'font: normal normal bold 9pt Tahoma; color: #FFFFFF; background-color: #000000; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';
ImTopic::$captcha_code = "<div class=\"recaptcha\"></div>
";

// End of file x5settings.php