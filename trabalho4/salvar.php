<!DOCTYPE html> 

<html lang="PT-BR"> 

    <head> 

        <title> Login </title> 

        <link rel="stylesheet" type="text/css" href="salvar.css"> 

        <meta charset="utf-8"> 
<?php
if(isset($_POST['submit'])){
    if(isset($_COOKIE['voto'])){
        echo "<h3>Seu voto foi efetuado! Lembrando que é permitido votar somente uma vez.</h3>";
    }
    else{
        setcookie("voto",'sim', time()+18000);
        $arquivo = fopen("votos.txt", 'a');
        fputs($arquivo,$_POST['voto']."\n");

        fclose($arquivo);
        header("Location: resultado.php");
        }
}

?>
<h3>Ver resultados<h3>
<a href='resultado.php'><button>resultados</button></a>
</html>
</html>

