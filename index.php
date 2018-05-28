<?php
    $login_cookie = $_COOKIE['login'];
    $perfil_cookie = $_COOKIE['perfil'];
    if(!isset($login_cookie)){
	echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
        header("Location:login.html");
    }
?>
<!doctype html>
	<head>
	   <meta charset='utf-8'>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/menu_styles.css">
	   <title>Selo</title>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
	</body>
<html>
