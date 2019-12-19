<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Language</title>
</head>
<body>
<form name="form1" method="post" action="script.php">
	<p>Choose your language</p>
	<p>
<select name=lang[] size=7 multiple>
<option value=Hello,. $_SESSION['login']  >English</option>
<option value=Привет, . $_SESSION['login'] >Russian</option>
<option value=Вітаємо, . $_SESSION['login'] >Ukrainian</option>
<option value=Ciao, . $_SESSION['login']>Italian</option>
<option value=Halo, . $_SESSION['login'] >German</option>
</select>
</p>
<hr size="1">
<p>
<input type="submit" value="Continue">
</p>

