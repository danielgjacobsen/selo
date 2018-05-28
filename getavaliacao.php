<?php
$p = strval($_GET['p']);
$t = strval($_GET['t']);
$login_cookie = $_COOKIE['login'];
$connect = mysqli_connect('localhost', 'root', '12qwaszx', 'selo');
$query = "SELECT * FROM avaliacoes WHERE login = '$login_cookie' and time = '$t' and pessoa = '$p' ";
$select = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($select)) {
  
  echo "<hr>
        <div class='campo'>
                <label>Time</label>
                <input type='text' id='time' name='time' style='width: 500px' value='" . $row['time'] . "'>
        </div>
        <div class='campo'>
                <label>Pessoa</label>
                <input type='text' id='pessoa' name='pessoa' style='width: 500px' value='" . $row['pessoa'] . "'>
        </div>
        <div class='campo'>
                <label>L&iacute;der</label>
                <label>";
  if($row['lider']=="sim"){
    echo "<input type='radio' name='lider' value='sim' checked> Sim ";
  }else{
    echo "<input type='radio' name='lider' value='sim'> Sim ";
  }
  echo "        </label>
                <label>";
  if($row['lider']=="nao"){
    echo "<input type='radio' name='lider' value='nao' checked> N&atilde;o ";
  }else{
    echo "<input type='radio' name='lider' value='nao'> N&atilde;o ";
  }
  echo "                    
                </label>
        </div>
        <div class='campo'>
					<label>Agressividade</label>
					<input type='number' id='Agressividade' name='Agressividade' style='width: 50px' value=" . $row['Agressividade'] . ">
				</div>
				<div class='campo'>
					<label>Desenv. Relacionamento</label>
					<input type='number' id='Desenv_Relacionamento' name='Desenv_Relacionamento' style='width: 50px' value=" . $row['Desenv_Relacionamento'] . ">
				</div>
				<div class='campo'>
					<label>Facilidade com Mudan&ccedil;as</label>
					<input type='number' id='Facilidade_Mudancas' name='Facilidade_Mudancas' style='width: 50px' value=" . $row['Facilidade_Mudancas'] . ">
				</div>
				<div class='campo'>
					<label>Extrovers&atilde;o</label>
					<input type='number' id='Extroversao' name='Extroversao' style='width: 50px' value=" . $row['Extroversao'] . ">
				</div>
				<div class='campo'>
					<label>Domin&acirc;ncia</label>
					<input type='number' id='Dominancia' name='Dominancia' style='width: 50px' value=" . $row['Dominancia'] . ">
				</div>
				<div class='campo'>
					<label>Desenv. Trabalho</label>
					<input type='number' id='Desenv_Trab' name='Desenv_Trab' style='width: 50px' value=" . $row['Desenv_Trab'] . ">
				</div>
				<div class='campo'>
					<label>Formalidade</label>
					<input type='number' id='Formalidade' name='Formalidade' style='width: 50px' value=" . $row['Formalidade'] . ">
				</div>
				<div class='campo'>
					<label>Condescend&ecirc;ncia</label>
					<input type='number' id='Condescendencia' name='Condescendencia' style='width: 50px' value=" . $row['Condescendencia'] . ">
				</div>
				<div class='campo'>
					<label>Perfil T&eacute;cnico</label>
					<input type='number' id='Perfil_Tecnico' name='Perfil_Tecnico' style='width: 50px' value=" . $row['Perfil_Tecnico'] . ">
				</div>
				<div class='campo'>
					<label>Exatid&atilde;o</label>
					<input type='number' id='Exatidao' name='Exatidao' style='width: 50px' value=" . $row['Exatidao'] . ">
				</div>
				<div class='campo'>
					<label>Detalhismo</label>
					<input type='number' id='Detalhismo' name='Detalhismo' style='width: 50px' value=" . $row['Detalhismo'] . ">
				</div>
				<div class='campo'>
					<label>Perfil Art&iacute;stico</label>
					<input type='number' id='Perfil_Artistico' name='Perfil_Artistico' style='width: 50px' value=" . $row['Perfil_Artistico'] . ">
				</div>
				<div class='campo'>
					<label>Paci&ecirc;ncia</label>
					<input type='number' id='Paciencia' name='Paciencia' style='width: 50px' value=" . $row['Paciencia'] . ">
				</div>
				<div class='campo'>
					<label>Empatia</label>
					<input type='number' id='Empatia' name='Empatia' style='width: 50px' value=" . $row['Empatia'] . ">
				</div>
				<div class='campo'>
					<label>Sociabilidade</label>
					<input type='number' id='Sociabilidade' name='Sociabilidade' style='width: 50px' value=" . $row['Sociabilidade'] . ">
				</div>
				<div class='campo'>
					<label>Entusiasmo</label>
					<input type='number' id='Entusiasmo' name='Entusiasmo' style='width: 50px' value=" . $row['Entusiasmo'] . ">
				</div>
				<div class='campo'>
					<label>Capacidade de Sonhar</label>
					<input type='number' id='Cap_Sonhar' name='Cap_Sonhar' style='width: 50px' value=" . $row['Cap_Sonhar'] . ">
				</div>
				<div class='campo'>
					<label>Automotiva&ccedil;&atilde;o</label>
					<input type='number' id='Automotivacao' name='Automotivacao' style='width: 50px' value=" . $row['Automotivacao'] . ">
				</div>
				<div class='campo'>
					<label>Concentra&ccedil;&atilde;o</label>
					<input type='number' id='Concentracao' name='Concentracao' style='width: 50px' value=" . $row['Concentracao'] . ">
				</div>
				<div class='campo'>
					<label>Independ&ecirc;ncia</label>
					<input type='number' id='Independencia' name='Independencia' style='width: 50px' value=" . $row['Independencia'] . ">
				</div>
				<div class='campo'>
					<label>Apagar esta avalia&ccedil;&atilde;o?</label>
					<label>
						<input type='radio' name='apagar' value='sim'> Sim
					</label>
					<label>
						<input type='radio' name='apagar' value='nao' checked=true> N&atilde;o
					</label>
				</div>
				<button type='submit' name='submit'>Salvar</button>";
}

mysqli_close($connect);
?>
