<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Поиск - nuarknoir_github_io</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Nuark.Noir" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 12.0.1.15 - www.websitex5.com" />
		<meta property="og:locale" content="ru-RU" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://nuarknoir.github.io/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="nuarknoir_github_io" />
		<meta property="og:image" content="http://nuarknoir.github.io/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1000">
		<meta property="og:image:height" content="1000">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="css/styleSearch.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="css/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?15"></script>
		<script type="text/javascript" src="res/x5engine.js?15"></script>
		<script type="text/javascript">
			x5engine.boot.push(function () { x5engine.utils.checkBrowserCompatibility(); });
		</script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Поиск - nuarknoir_github_io</h1>
				
			</div>
			<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
			<a id="imGoToMenu"></a><p class="imHidden">Главное меню:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Главная</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imLevel">
						<span class="imMnMnFirstBg">
							<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Проекты</span></span>
						</span>
				<ul class="auto">
					<li id="imMnMnNode4" class=" imPage">
						<a href="sr34.html">
							<span class="imMnMnBorder">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Спарсеное R34</span></span>
							</span>
						</a>
					</li></ul></li>
				<li id="imMnMnNode5" class=" imLevel">
						<span class="imMnMnFirstBg">
							<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">DevZone</span></span>
						</span>
				<ul class="auto">
					<li id="imMnMnNode6" class=" imPage">
						<a href="chat.html">
							<span class="imMnMnBorder">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Chat</span></span>
							</span>
						</a>
					</li></ul></li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Результаты поиска</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>

				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
				<div class="imTemplateContent" onclick=" return x5engine.utils.imPopUpWin('http://steamcommunity.com/id/Nuark__Reborned/', '', -1, -1, true);" onmouseover="x5engine.imTip.Show(this, { text: 'Мой Стим', width: 180});" style="position: absolute; top: -1px; left: -1px; width: 81px; height: 81px; cursor: pointer;"></div>
				<div class="imTemplateContent" onclick=" return x5engine.utils.imPopUpWin('https://vk.com/fierynuarkstonedoubaccforfriends', '', -1, -1, true);" onmouseover="x5engine.imTip.Show(this, { text: 'Мой ВКонтакт', width: 180});" style="position: absolute; top: -1px; left: 81px; width: 81px; height: 81px; cursor: pointer;"></div>
				<div class="imTemplateContent" onclick=" return x5engine.utils.imPopUpWin('https://www.youtube.com/channel/UCrQhLIkDCkZ9uCsLYfMU_nw', '', -1, -1, true);" onmouseover="x5engine.imTip.Show(this, { text: 'Мой ЮТуб', width: 180});" style="position: absolute; top: 0px; left: 163px; width: 81px; height: 81px; cursor: pointer;"></div>
				<div class="imTemplateContent" onclick=" return x5engine.utils.imPopUpWin('http://nuark.deviantart.com', '', -1, -1, true);" onmouseover="x5engine.imTip.Show(this, { text: 'Мой дэвиантАрт', width: 180});" style="position: absolute; top: 1px; left: 244px; width: 82px; height: 82px; cursor: pointer;"></div>
				<div class="imTemplateContent" style="position: absolute; top: 0px; left: 860px; width: 100px; height: 64px; overflow: hidden;"><!-- Begin ShinyStat Free code -->

<div align=center>

<a href="https://www.shinystat.com" target="_top">

<img src="https://noscript.shinystat.com/cgi-bin/shinystat.cgi?USER=Nuark" alt="Free stats" border="0" /></a>

</div>

<!-- End ShinyStat Free code -->

</div>
				<div id="imFooterResponsiveContent">Nuark.Noir`s GDCP 2015. All rights reserved.</div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a> | <a href="#imGoToMenu" title="Прочесть этот сайт заново">Назад к главному меню</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
