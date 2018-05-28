<?php 
$login = $_COOKIE['login'];
$selTime = $_POST['selTime'];
$selPessoa = $_POST['selPessoa'];
$time = $_POST['time'];
$pessoa = $_POST['pessoa'];
$lider = $_POST['lider'];
$Agressividade = $_POST['Agressividade'];
$Desenv_Relacionamento = $_POST['Desenv_Relacionamento'];
$Facilidade_Mudancas = $_POST['Facilidade_Mudancas'];
$Extroversao = $_POST['Extroversao'];
$Dominancia = $_POST['Dominancia'];
$Desenv_Trab = $_POST['Desenv_Trab'];
$Formalidade = $_POST['Formalidade'];
$Condescendencia = $_POST['Condescendencia'];
$Perfil_Tecnico = $_POST['Perfil_Tecnico'];
$Exatidao = $_POST['Exatidao'];
$Detalhismo = $_POST['Detalhismo'];
$Perfil_Artistico = $_POST['Perfil_Artistico'];
$Paciencia = $_POST['Paciencia'];
$Empatia = $_POST['Empatia'];
$Sociabilidade = $_POST['Sociabilidade'];
$Entusiasmo = $_POST['Entusiasmo'];
$Cap_Sonhar = $_POST['Cap_Sonhar'];
$Concentracao = $_POST['Concentracao'];
$Automotivacao = $_POST['Automotivacao'];
$Independencia = $_POST['Independencia'];
$apagar = $_POST['apagar'];
setcookie("time",$time);
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
if(isset($login)){
	if($time == "" || $time == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Time precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($pessoa == "" || $pessoa == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Pessoa precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Agressividade == "" || $Agressividade == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Agressividade precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Desenv_Relacionamento == "" || $Desenv_Relacionamento == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Desenv_Relacionamento precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Facilidade_Mudancas == "" || $Facilidade_Mudancas == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Facilidade_Mudancas precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Extroversao == "" || $Extroversao == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Extroversao precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Dominancia == "" || $Dominancia == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Dominancia precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Desenv_Trab == "" || $Desenv_Trab == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Desenv_Trab precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Formalidade == "" || $Formalidade == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Formalidade precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Condescendencia == "" || $Condescendencia == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Condescendencia precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Perfil_Tecnico == "" || $Perfil_Tecnico == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Perfil_Tecnico precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Exatidao == "" || $Exatidao == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Exatidao precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Detalhismo == "" || $Detalhismo == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Detalhismo precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Perfil_Artistico == "" || $Perfil_Artistico == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Perfil_Artistico precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Paciencia == "" || $Paciencia == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Paciencia precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Empatia == "" || $Empatia == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Empatia precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Sociabilidade == "" || $Sociabilidade == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Sociabilidade precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Concentracao == "" || $Concentracao == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Concentracao precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Entusiasmo == "" || $Entusiasmo == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Entusiasmo precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Cap_Sonhar == "" || $Cap_Sonhar == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Cap_Sonhar precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Automotivacao == "" || $Automotivacao == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Automotivacao precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else if($Independencia == "" || $Independencia == null){
		echo"<script language='javascript' type='text/javascript'>alert('O campo Independencia precisa ser preenchido!');window.location.href='cadastroPessoaForm.php';</script>";
	}else{
		if($apagar == "sim"){
			$query = "delete from avaliacoes where login = '$login' AND time = '$selTime' AND pessoa = '$selPessoa'";
		}else{
			$query = "update avaliacoes  set login = '$login',time = '$time',pessoa = '$pessoa',lider = '$lider',Agressividade = $Agressividade,Desenv_Relacionamento = $Desenv_Relacionamento,Facilidade_Mudancas = $Facilidade_Mudancas,Extroversao = $Extroversao,Dominancia = $Dominancia,Desenv_Trab = $Desenv_Trab,Formalidade = $Formalidade,Condescendencia = $Condescendencia,Perfil_Tecnico = $Perfil_Tecnico,Exatidao = $Exatidao,Detalhismo = $Detalhismo,Perfil_Artistico = $Perfil_Artistico,Paciencia = $Paciencia,Empatia = $Empatia,Sociabilidade = $Sociabilidade,Entusiasmo = $Entusiasmo,Cap_Sonhar = $Cap_Sonhar,Automotivacao = $Automotivacao,Independencia = $Independencia,Concentracao = $Concentracao where login = '$login' AND time = '$selTime' AND pessoa = '$selPessoa'";
		}
		$queryExecute = mysqli_query($connect, $query);
		if($queryExecute){
			if($apagar == "sim"){
				echo"<script language='javascript' type='text/javascript'>alert('Avaliação apagada com sucesso!');window.location.href='edicaoPessoaSelect.php'</script>";
			}else{
				echo"<script language='javascript' type='text/javascript'>alert('Cadastrado realizado com sucesso!');window.location.href='edicaoPessoaSelect.php'</script>";
			}
		}else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível atualizar o cadastro. Verifique se já existe avaliação para esta pessoa neste time!');window.location.href='edicaoPessoaSelect.php'</script>";
		}
	}
}else{	
	mysqli_close($connect);
	echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
	header("Location:login.html");
}
mysqli_close($connect);
?>
