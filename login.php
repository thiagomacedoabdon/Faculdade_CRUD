<?php
    session_start();

    

    if(isset($_POST['submit']) or !empty($_POST['nome']) or !empty($_POST['senha'])) {

        include_once('config.php');
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios 
        WHERE nome = '$nome'
        and senha = '$senha'";

        $result = $conexao->query($sql);

        if( mysqli_num_rows($result) < 1) {

            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
            header('Location: index.php');

        } else {

            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            header('Location: dashboard.php');
        }

    } else {
       
    }

        
    
?>