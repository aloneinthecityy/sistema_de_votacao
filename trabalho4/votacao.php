<!DOCTYPE html> 

<html lang="PT-BR"> 

    <head> 

        <title> Login </title> 

        <link rel="stylesheet" type="text/css" href="votacao.css"> 

        <meta charset="utf-8"> 
<?php
session_start();
if(isset($_SESSION['usuario'])){
echo "Bem vindo(a) a eleição" . " " .  $_SESSION['usuario'] . "!" ."<br>";
echo "<h3> Qual foi (ou ainda é) o programador mais famoso da área de computação? </h3>";
echo "<form action='salvar.php' method='POST'>";
echo "<select class='form-control' name='voto'>";
echo "<option value='Ada Lovelace'>Ada Lovelace</option>";
echo "<option value='Edsger Dijkstra'>Edsger Dijkstra</option>";
echo  "<option value='Grace Murray Hopper'>Grace Murray Hopper</option>";
echo "<option value='Tim BernersLee'>Tim BernersLee</option>";
echo "<option value='VOTO BRANCO'>VOTO BRANCO</option>";
echo "</select>";
echo "<input type='submit' name='submit' value=Ir>";
echo "</form>";
}
else{
  header("Location: index.html");
}
?>
<h3>Deseja fazer logout?<h3>
<a href='logout.php'><button>Logout</button></a>
</html>