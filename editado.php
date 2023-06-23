<?php

    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone'
        WHERE id=$id";

        $result = $conexao->query($sqlInsert);
        
    }
    header('Location: dashboard.php');

?>
