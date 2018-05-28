<?php 
$login = $_COOKIE['login'];
$perfil = $_COOKIE['perfil'];
$newlogin = $_POST['login'];
$newsenha = MD5($_POST['senha']);
$newperfil = $_POST['perfil'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query_select = "SELECT login FROM usuarios WHERE login = '$newlogin'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['login']; 
mysqli_close($connect);
if(isset($login)){
	if($newlogin == "" || $newlogin == null || $newperfil == "" || $newperfil == null || $newsenha == "" || $newsenha == null){
		echo"<script language='javascript' type='text/javascript'>alert('Todos os campos devem ser preenchidos');window.location.href='cadastroForm.php';</script>";
	}else{
		if($logarray == $newlogin){
			echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastroForm.php';</script>";
			die();
		}else{
			$query = "INSERT INTO usuarios (login,senha, perfil) VALUES ('$newlogin','$newsenha', '$newperfil')";
			$insert = mysqli_query($connect, $query);
			if($insert){
				echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
			}else{
				echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastroForm.php'</script>";
			}
		}
	}
}else{	
	echo"<script language='javascript' type='text/javascript'>alert('Para acessar o sistema, faça login!');</script>";
	header("Location:login.html");
}
?>
