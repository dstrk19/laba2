<?php 
  session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Language</title>
</head>
<body>
<?php foreach ($_POST['lang'] as $keys=>$values) echo "$values". $_SESSION['login'];?> 
</body>
</html>