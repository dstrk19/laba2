<?php 
  session_start();
?>
<?php
if (!isset($_SESSION['login'])){
  header("Location:http://localhost/laba2/index.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Language</title>
</head>
<body>
<?php 
if (isset ($_POST['lang']) && isset ($_POST['lang'])) 
foreach ($_POST['lang'] as $keys=>$values) echo "$values". $_SESSION['login'];
?> 
</body>
</html>