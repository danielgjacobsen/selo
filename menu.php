<?php
    $menuSel = $_COOKIE['menuSel'];
?>

<div id='cssmenu'>
  <ul>
    <li <?php if($menuSel=='Home'){ echo"class='active'"; } ?>><a href='index.php' onclick='document.cookie = "menuSel=Home"'>Home</a></li>
    <?php
      if($perfil_cookie == "admin"){
        echo"<li><a href='cadastroForm.php'>Usu&aacute;rios</a></li>";
      }
    ?>		
    <li <?php if($menuSel=='Novo'){ echo"class='active'"; } ?>><a href='cadastroPessoaForm.php' onclick='document.cookie = "menuSel=Novo"'>Novo</a></li>
    <li <?php if($menuSel=='Editar'){ echo"class='active'"; } ?>><a href='edicaoPessoaSelect.php' onclick='document.cookie = "menuSel=Editar"'>Editar</a></li>
    <li <?php if($menuSel=='Graficos'){ echo"class='active'"; } ?>><a href='graficos.php' onclick='document.cookie = "menuSel=Graficos"'>Gr&aacute;ficos</a></li>
    <li><a href='logout.php'>Sair</a></li>
  </ul>
</div>
