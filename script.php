<?php 
	session_start();
?>

<?php
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Language</title>';
echo '</head>';
echo '<body>';
foreach ($_POST['lang'] as $keys=>$values) echo "$values". $_SESSION['login'];
echo '</body>';
echo '</html>';
?>