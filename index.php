<?php 
	session_start();
?>
<?php 
	if(isset($_POST['uname']) && isset($_POST['pwd'])){
$users = [
["login" => 'Vasisualiy', 'password' => '12345'],
["login" => 'Afanasiy', 'password' => '54321'],
["login" => 'Petro', 'password' => 'EkUC42nzmu'],
["login" => 'Pedrolus', 'password' => 'Cogito_ergo_sum'],
["login" => 'Sasha', 'password' => 'Ignorantia_non_excusat'],
];
		foreach($users as $key){
			if($_POST['uname']==$key["login"] AND $_POST['pwd']==$key["password"])
				$_SESSION["login"]=$key["login"];
		}
	}
	if(isset($_SESSION['login'])){
		echo "<a href='5.php'>click here</a>";
	} else{
?>
	<form method="post">
		<input placeholder="username" name="uname">
		<input placeholder="password" name="pwd">
		<input type="submit" value="Авторизоваться">
	</form>
<?php
	}
?>