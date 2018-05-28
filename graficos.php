<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil_cookie = $_COOKIE['perfil'];
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
  $connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
  $query = "SELECT time FROM avaliacoes WHERE login = '$login_cookie' group by time order by time";
  $select = mysqli_query($connect, $query);
  $option = '';
  while($row = mysqli_fetch_assoc($select)){
    $option .= '<option value = "'.$row['time'].'">'.$row['time'].'</option>';
  }
  mysqli_close($connect);
?>
<!doctype html>
	<head>
	   <meta charset='utf-8'>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/menu_styles.css">
	   <link rel="stylesheet" href="css/formulario.css">
	   <title>Selo</title>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<form action="setaTime.php" method="post">
			<fieldset>
				<div class="campo">
					  <label>Time</label>
					  <select name="time" id="time">
					      <?php echo $option; ?>
					  </select>           
				</div>
				<button type="submit" name="submit">Gerar Gráfico</button>
			</fieldset>
		</form>
	</body>
<html>
