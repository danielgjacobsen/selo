<?php
    ini_set('display_errors', true);
    error_reporting(E_ALL);
    $login_cookie = $_COOKIE['login'];
    $time = $_POST['time'];
    if(!isset($login_cookie)){
      echo"<script language='javascript' type='text/javascript'>alert('Necessário realizar login para acessar esta funcionalidade!');window.location.href='login.html';</script>";
      die();
    }
    setcookie("time",$time);
	  header("Location:radar-avaliacoes.php");
?>
