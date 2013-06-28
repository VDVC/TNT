<?php //install.php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv='content-type' content='text/xhtml;
		charset=ISO-8859-1' />
	<title>TNT Setup</title>
</head>
<body>

<?php
if (isset($_POST['save'])) {
	$cfgfile = 'settings.php';
	$cfgcont =	'<?php //settings.php'."\n"
				.'// user data for MySQL DB'."\n"
				.'  $db_cfg = array ('."\n"
				.'    "host" => "'.$_POST['host'].'",'."\n"
				.'    "user" => "'.$_POST['user'].'",'."\n"
				.'    "pass" => "'.$_POST['pass'].'"'."\n"
				.'  );'."\n"
				.'?>'."\n";
	echo	"<p>Saved folowing settings to config file:<br />\n".
			"host=".$_POST['host']."<br />\n".
			"user=".$_POST['user']."<br />\n".
			"pass=".$_POST['pass']."</p>\n";
	$handle = fopen($cfgfile, 'w');
	fwrite($handle, $cfgcont);
	fclose($handle);
}
?>
	<h1>New Settings</h1>
	<form method='post' action='install.php'>
		<p>
			host: <input type='text' name='host'/><br />
			user: <input type='text' name='user'/><br />
			pass: <input type='text' name='pass'/><br />
			<input type='submit' name='save' value='Save!' />
		</p>
	</form>
	<p>
		<a href="http://validator.w3.org/check?uri=referer">
			<img src="http://www.w3.org/Icons/valid-xhtml11"
				alt="Valid XHTML 1.1" height="31" width="88" />
		</a>
	</p>
</body>
</html>
