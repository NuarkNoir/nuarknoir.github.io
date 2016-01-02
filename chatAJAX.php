<?
session_start();

if(isset($_GET['logout'])){	
	
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>Участник ". $_SESSION['name'] ." вышел из чата</i><br></div>");
	fclose($fp);
	
	session_destroy();
	header("Location: index.php");
}

function loginForm(){
	echo'
	<div id="loginform">
	<form action="index.php" method="post">
		<p>Пожалуйста, напишите ваш имя и нажмите кнопку войти</p>
		<label for="name">Имя:</label>
		<input type="text" name="name" id="name" />
		<input type="submit" name="enter" id="enter" value="Войти в чат" />
	</form>
	</div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		echo '<span class="error">Пожалуйста, введите свое имя</span>';
	}
}
?>
<!DOCTYPE html>
<html  lang="ru-RU">
<head>
<title>Chat - Модуль</title>
  <meta content="text/html; charset=windows-1251" http-equiv="Content-Type" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<?php
if(!isset($_SESSION['name'])){
	loginForm();
}
else{
?>
<div id="wrapper">
	<div id="menu">
		<p class="welcome">Добро пожаловать! <b><?php echo $_SESSION['name']; ?></b></p>
		<p class="logout"><a id="exit" href="#">Выход</a></p>
		<div style="clear:both"></div>
	</div>	
	<div id="chatbox"><?php
	if(file_exists("log.html") && filesize("log.html") > 0){
		$handle = fopen("log.html", "r");
		$contents = fread($handle, filesize("log.html"));
		fclose($handle);
		
		echo $contents;
	}
	?></div>
	
	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg" size="63" />
		<input name="submitmsg" type="submit"  id="submitmsg" value="Отправить" />
	</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 2500);	//Reload file every 2.5 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Вы уверены что хотите закончить общение?");
		if(exit==true){window.location = 'index.php?logout=true';}		
	});
});
</script>
<?php
}
?>
</body>
</html>