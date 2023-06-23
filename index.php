<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> TM educação </title>

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

            body{
                background-color: var(--cor-primaria);
            }

            .form{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: var(--cor-secundaria);
                width: 300px;
                height: 280px;
                border-radius: 4px;
                box-shadow: 5px 5px red;
            }

            .form .titulo{
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
                transform: translate(100px, 60px);
                width: 100px;
                border: none;
                border-radius: 2px;
                cursor: pointer;
                transition: all 0.3s;
            }

            .form button:hover{
                background-color: var(--cor-primaria);
            }
            
            .form button {
                color: white;
            }

            .form p {
                font-size: small;
                transform: translate(35px, 70px);
                font-weight: 600;
            }

        </style>

    </head>

    <body>

        <div class="form">

            <h3 class="titulo"> Login </h3>

            <form action="login.php" method="post">

                <input type="text" name="nome" placeholder="Nome">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit">  Entrar </button>

            </form>

            <p>Não tem conta ainda? <a href="formulario.php" class="cadastrar"> Casdastrar </a></p>
            <p> Não pretende acessar? <a href="home-principal.php" class="cadastrar"> Voltar </a> </p>  

        </div>

        <script src="./script.js"></script>

    </body>

</html>