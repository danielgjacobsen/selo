<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil_cookie = $_COOKIE['perfil'];
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Radar de Avaliações Selo</title>    
    <link href="css/default.css" rel="stylesheet">   
    <link rel="stylesheet" href="css/menu_styles.css">
</head>
<body>
	<?php 
		include 'menu.php';
	?>
	<div class="chart-container">
		<div class="doughnut-chart-container">
			<canvas id="radar-avaliacoes"></canvas>
		</div>
	</div>
	<!-- javascript -->
    	<script src="js/jquery.min.js"></script>
    	<script src="js/Chart.min.js"></script>
    	<script src="js/utils.js"></script>
    	<script src="js/radar-avaliacoes-db-php.js"></script>    
</body>
</html>
