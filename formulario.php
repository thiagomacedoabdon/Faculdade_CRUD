<?php

if (isset($_POST['submit'])) {

   
 
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, senha) 
        VALUES('$nome', '$email', '$telefone', '$senha')");
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap');

        :root {
            --cor-primaria: rgb(1, 19, 58);
            --cor-secundaria: rgb(230, 231, 237);
            --cor-terciaria: rgb(58, 101, 161);

        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Source Code Pro', monospace;
            text-decoration: none;
        }

        body {
            background-color: var(--cor-primaria);
        }

        .form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: var(--cor-secundaria);
            width: 350px;
            height: 420px;
            border-radius: 4px;
            box-shadow: 5px 5px red;
        }

        .form .titulo {
            text-align: center;
            transform: translateY(30px);
        }

        .form input {
            transform: translateY(50px);
            border: 1px solid var(--cor-primaria);
            display: block;
            margin: 15px auto 0 auto;
            height: 30px;
            width: 80%;
            padding: 5px;
        }

        .form button {
            margin-top: 20px;
            padding: 5px;
            background: var(--cor-terciaria);
            transform: translate(130px, 60px);
            width: 100px;
            border: none;
            border-radius: 2px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .form button:hover {
            background-color: var(--cor-primaria);
        }

        .form button {
            color: white;
        }


        .form p {
            font-size: small;
            transform: translate(95px, 70px);
            font-weight: 600;
        }
    </style>

</head>

<body>

    <div class="form">

        <h3 class="titulo"> Cadastro </h3>

        <form action="formulario.php" method="POST">

            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="email" placeholder="Email" required>
            <input type="tel" name="telefone" placeholder="Telefone" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <input type="password" name="senha" placeholder="Confirmar senha" required>
            <button type="submit" name="submit">  Enviar </button>

        </form>

        <p>Já tem conta? <a href="index.php" class="cadastrar"> Voltar </a></p>

    </div>

    <script src="./script.js"></script>

</body>

</html>