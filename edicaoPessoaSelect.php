<?php
  ini_set('display_errors', true);
  error_reporting(E_ALL);
  $login_cookie = $_COOKIE['login'];
  $perfil_cookie = $_COOKIE['perfil'];
  if(isset($_COOKIE['time'])) {
    $time_cookie = $_COOKIE['time'];
  }else{
    $time_cookie = "";
  }
  if(!isset($login_cookie)){
    echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
    die();
  }
  $connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
  $query = "SELECT time FROM avaliacoes WHERE login = '$login_cookie' group by time order by time";
  $select = mysqli_query($connect, $query);
  $optionTime = '';
  while($row = mysqli_fetch_assoc($select)){
    $optionTime .= '<option value = "'.$row['time'].'">'.$row['time'].'</option>';
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
	   	<script>
			var jsTime = "";
			function showPessoas(str) {
			    if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				document.getElementById("txtAval").innerHTML = "";
				return;
			    } else { 
				jsTime = str;
				if (window.XMLHttpRequest) {
				    // code for IE7+, Firefox, Chrome, Opera, Safari
				    xmlhttp = new XMLHttpRequest();
				} else {
				    // code for IE6, IE5
				    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				    }
				};
				xmlhttp.open("GET","getpessoas.php?q="+str,true);
				xmlhttp.send();
			    }
			}
			function showAvaliacao(str) {
			    if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				document.getElementById("txtAval").innerHTML = "";
				return;
			    } else { 
				if (window.XMLHttpRequest) {
				    // code for IE7+, Firefox, Chrome, Opera, Safari
				    xmlhttp = new XMLHttpRequest();
				} else {
				    // code for IE6, IE5
				    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtAval").innerHTML = this.responseText;
				    }
				};
				xmlhttp.open("GET","getavaliacao.php?p="+str+"&t="+jsTime,true);
				xmlhttp.send();
			    }
			}
			function validaCampos() {
				if(document.forms["myForm"]["time"].value == "") {
					alert("o campo Time precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["pessoa"].value == "") {
					alert("o campo Pessoa precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Agressividade"].value == "") {
					alert("o campo Agressividade precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Desenv_Relacionamento"].value == "") {
					alert("o campo Desenv. Relacionamento precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Facilidade_Mudancas"].value == "") {
					alert("o campo Facilidade com Mudanças precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Extroversao"].value == "") {
					alert("o campo Extroversão precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Dominancia"].value == "") {
					alert("o campo Dominância precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Desenv_Trab"].value == "") {
					alert("o campo Desenv. Trabalho precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Formalidade"].value == "") {
					alert("o campo Formalidade precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Condescendencia"].value == "") {
					alert("o campo Condescendência precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Perfil_Tecnico"].value == "") {
					alert("o campo Perfil Técnico precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Exatidao"].value == "") {
					alert("o campo Exatidão precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Detalhismo"].value == "") {
					alert("o campo Detalhismo precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Perfil_Artistico"].value == "") {
					alert("o campo Perfil Artístico precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Paciencia"].value == "") {
					alert("o campo Paciência precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Empatia"].value == "") {
					alert("o campo Empatia precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Sociabilidade"].value == "") {
					alert("o campo Sociabilidade precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Entusiasmo"].value == "") {
					alert("o campo Entusiasmo precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Cap_Sonhar"].value == "") {
					alert("o campo Capacidade de Sonhar precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Automotivacao"].value == "") {
					alert("o campo Automotivação precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Concentracao"].value == "") {
					alert("o campo Concentração precisa ser preenchido!");
					return false;
				}
				if(document.forms["myForm"]["Independencia"].value == "") {
					alert("o campo Independência precisa ser preenchido!");
					return false;
				}
			    }
	    	</script>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<form action="edicaoPessoa.php" method="post">
			<fieldset>
				<div class="campo">
					<label>Time</label>
					<select name="selTime" id="selTime" onchange="showPessoas(this.value)" style="width: 500px">
						<option value="">Selecione o time</option>
				      		<?php echo $optionTime; ?>
				  	</select>
				</div>
				<div class="campo" id="txtHint"><b>Selecione o time para abrir a lista das pessoas...</b></div>
			</fieldset>
			<fieldset id="txtAval">
			</fieldset>
		</form>
	</body>
<html>
