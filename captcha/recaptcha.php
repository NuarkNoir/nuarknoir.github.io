<?php
require_once('../res/x5engine.php');

$captcha = new ReCaptcha('rossmoor');
echo $captcha->check($_POST['rsp']);
