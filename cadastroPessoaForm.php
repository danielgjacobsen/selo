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
?>
<!doctype html>
	<head>
	   <meta charset='utf-8'>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="stylesheet" href="css/menu_styles.css">
	   <link rel="stylesheet" href="css/formulario.css">
	   <script>
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
	   <title>Selo</title>
	</head>
	<body>
		<?php 
			include 'menu.php';
		?>
		<form action="cadastroPessoa.php" method="post" onsubmit="return validaCampos()" name="myForm">
			<fieldset>
				<div class="campo">
					<label for="time">Time</label>
					<input type="text" id="time" name="time" style="width: 500px" value="<?php echo $time_cookie;?>">
				</div>
				<div class="campo">
					<label for="Pessoa">Pessoa</label>
					<input type="text" id="pessoa" name="pessoa" style="width: 500px" value="">
				</div>
				<div class="campo">
					<label>L&iacute;der</label>
					<label>
						<input type="radio" name="lider" value="sim"> Sim
					</label>
					<label>
						<input type="radio" name="lider" value="nao" checked=true> N&atilde;o
					</label>
				</div>
				<div class="campo">
					<label>Agressividade</label>
					<input type="number" id="Agressividade" name="Agressividade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Desenv. Relacionamento</label>
					<input type="number" id="Desenv_Relacionamento" name="Desenv_Relacionamento" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Facilidade com Mudan&ccedil;as</label>
					<input type="number" id="Facilidade_Mudancas" name="Facilidade_Mudancas" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Extrovers&atilde;o</label>
					<input type="number" id="Extroversao" name="Extroversao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Domin&acirc;ncia</label>
					<input type="number" id="Dominancia" name="Dominancia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Desenv. Trabalho</label>
					<input type="number" id="Desenv_Trab" name="Desenv_Trab" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Formalidade</label>
					<input type="number" id="Formalidade" name="Formalidade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Condescend&ecirc;ncia</label>
					<input type="number" id="Condescendencia" name="Condescendencia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Perfil T&eacute;cnico</label>
					<input type="number" id="Perfil_Tecnico" name="Perfil_Tecnico" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Exatid&atilde;o</label>
					<input type="number" id="Exatidao" name="Exatidao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Detalhismo</label>
					<input type="number" id="Detalhismo" name="Detalhismo" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Perfil Art&iacute;stico</label>
					<input type="number" id="Perfil_Artistico" name="Perfil_Artistico" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Paci&ecirc;ncia</label>
					<input type="number" id="Paciencia" name="Paciencia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Empatia</label>
					<input type="number" id="Empatia" name="Empatia" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Sociabilidade</label>
					<input type="number" id="Sociabilidade" name="Sociabilidade" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Entusiasmo</label>
					<input type="number" id="Entusiasmo" name="Entusiasmo" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Capacidade de Sonhar</label>
					<input type="number" id="Cap_Sonhar" name="Cap_Sonhar" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Automotiva&ccedil;&atilde;o</label>
					<input type="number" id="Automotivacao" name="Automotivacao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Concentra&ccedil;&atilde;o</label>
					<input type="number" id="Concentracao" name="Concentracao" style="width: 50px" value="">
				</div>
				<div class="campo">
					<label>Independ&ecirc;ncia</label>
					<input type="number" id="Independencia" name="Independencia" style="width: 50px" value="">
				</div>
				<button type="submit" name="submit">Salvar</button>
			</fieldset>
		</form>
	</body>
<html>
