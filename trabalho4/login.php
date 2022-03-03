<?php
if(isset($_POST['email'])){ 

    if($_POST['email'] == 'admin@admin' && $_POST['senha'] == 'admin'){ 
        session_start();
        $_SESSION['usuario'] = $_POST['nome'];
        header("Location: votacao.php");
        } 

        else{ 

            echo "<script>

            alert ('Usuário ou senha inválidos!'); 

            window.location.href='index.html';  

            </script>"; 

        } 

    } 
 

?>
</html>