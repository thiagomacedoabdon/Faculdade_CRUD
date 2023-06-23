<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        
        <title> TM educação </title>

        <style>

            @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap');

            :root {
                --cor-primaria: #4f9cf9;
                --cor-secundaria: #ffffffb7;
                --cor-terciaria: rgb(15, 63, 130);

            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Source Code Pro', monospace;
                text-decoration: none;
            }

            body {
                background-color: var(--cor-secundaria)
            }

            p {
                color: #1515159c;
            }

            .container-nav {
                max-width: 1300px;
                margin: 0 auto;
                padding: 20px 5%;
            }

            header {
                width: 100%;
                padding: 30px 4%;
                position: fixed;
                top: 0;
                left: 0;
                transition: .5s;
            }

            .menu-nav {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .menu-nav li {
                list-style-type: none;
            }

            .menu-nav .ul {
                display: flex;
            }

            .menu-nav .ul a {
                color: white;
                margin: 0 15px;
                text-transform: uppercase;
                font-size: 18px;
                display: inline-block;
            }

            .menu-nav .ul a::after {
                content: "";
                height: 3px;
                width: 0%;
                margin: 0 auto;
                display: block;
                background-color: white;
                border-radius: 10px;
                transition: 0.3s;
            }

            .menu-nav .ul a:hover::after {
                width: 100%;
            }

            .menu-nav ul input {
                margin: 0 10px;
            }

            .menu-nav .btn {
                color: white;
                background-color: var(--cor-primaria);
                padding: 5px 5px;
                border-radius: 8px;
                cursor: pointer;
                display: inline-block;
                border: none;
                transition: 0.4s;
            }

            .menu-nav .btn:hover {
                background-color: rgb(221, 139, 139);
            }

            .menu-nav .logo {
                height: 50px;
                cursor: pointer;
                transition: all 0.3s;
            }

            .menu-nav .logo:hover {
                transform: scale(1.3);
            }

            header.rolagem {
                background-color: var(--cor-terciaria);
                padding: 10px 4%;
            }


            /*************************
            /*********BANNER**********
            *************************/

            .banner {
                height: 100vh;
                background-image: url(./img/background-home.jpg);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .banner .container-banner .banner-texto {
                justify-content: center;
                text-align: center;
            }

            .banner .banner-texto h1 {
                color: white;
                font-size: 60px;
            }

            .banner .banner-texto p {
                font-size: 18px;
                color: rgb(221, 139, 139);
                margin-bottom: 20px;
            }

            .banner .icone {
                width: 30px;
                cursor: pointer;
                transition: all 0.3s;
            }

            .banner .banner-texto .icone:hover {
                transform: scale(1.3);
            }

            /*************************
            /**********SOBRE**********
            *************************/

            .sobre {
                height: 100vh;
                padding: 120px 30px;
            }

            .sobre .container-sobre {
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }

            .sobre .container-sobre .sobre-texto {
                width: 50%;
            }

            h3 {
                font-size: 30px;
                padding-bottom: 20px;
            }

            .sobre .container-sobre .sobre-img img {
                width: 300px;
                height: auto;
            }


            /*************************
            /********SERVIÇOS*********
            *************************/

            .servicos {
                height: 100vh;
                padding: 200px 30px;
            }

            .servicos h3 {
                text-align: center;
                padding: 0px;
            }

            .servicos p {
                margin: 5px 0 20px 0;
                text-align: center;
            }

            .servicos .card p {
                margin: 15px;
            }

            .servicos-cards {
                display: flex;
                justify-content: center;
            }

            .servicos-cards .card {
                background-color: var(--cor-primaria);
                margin: 12px;
                border-radius: 10px;
                text-align: center;
                width: 300px;
                transition: 0.3s;
            }

            .servicos-cards .card img {
                margin: 20px auto;
            }

            .servicos-cards .card:hover {
                background-color: var(--cor-terciaria);
                margin-top: -5px;
            }

            .servicos-cards .card:hover p {
                color: white;
            }

            .lista-alunos {
                max-width: 80%;
                margin: 0 auto;
                padding-top: 200px;
            }

            /*************************
            /*********FOOTER**********
            *************************/

            footer {
                background-color: var(--cor-terciaria);
                padding: 10px;
                text-align: center;
            }

            footer p {
                color: white;
            }

            footer p a {
                color: white;
                font-size: 15px;
                font-weight: 800;
            }

        </style>

    </head>

    <body>

        <header id="header" class="header">

            <div class="container-nav">

                <nav class="menu-nav" id="nav">

                    <a href="#">
                        <img src="./img/logo.png" alt="logo" class="logo">
                    </a>

                    <ul class="ul">

                        <li><a href="#header">home</a></li>
                        <li><a href="#sobre">sobre</a></li>
                        <li><a href="#servicos">serviços</a></li>
                        <form action="index.php" method="POST">
                            <button id="" type="submit" class="btn"> LOGIN </button>
                        </form>
                    </ul>

                </nav>

        </header>

        <section class="banner">

            <div class="container-banner">

                <div class="banner-texto">

                    <h1> TM EduTec </h1>
                    <p> Aprender se torna muito mais fácil </p>

                    <a href="#">
                        <img src="./img/email.png" alt="email" class="icone">
                    </a>
                    <a href="#">
                        <img src="./img/whatsapp.png" alt="whatsapp" class="icone">
                    </a>
                    <a href="#">
                        <img src="./img/instagram.png" alt="instagram" class="icone">
                    </a>

                </div>

            </div>

        </section>

        <section class="sobre" id="sobre">

            <div class="container-sobre">

                <div class="sobre-texto">

                    <h3> Conheça a nossa história </h3>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto suscipit, alias possimus reiciendis
                        nam molestias voluptatum ea ratione porro. A veniam saepe, laudantium velit nulla maiores sed neque
                        quos perferendis.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto suscipit, alias possimus reiciendis
                        nam molestias voluptatum ea ratione porro. A veniam saepe, laudantium velit nulla maiores sed neque
                        quos perferendis.
                    </p>

                </div>

                <div class="sobre-img">

                    <img src="./img/sobre.png" alt="img-sobre">

                </div>

            </div>

            <div class="container-sobre">

                <div class="sobre-img">

                    <img src="./img/sobre2.png" alt="img-sobre">

                </div>

                <div class="sobre-texto">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto suscipit, alias possimus reiciendis
                        nam molestias voluptatum ea ratione porro. A veniam saepe, laudantium velit nulla maiores sed neque
                        quos perferendis.
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto suscipit, alias possimus reiciendis
                        nam molestias voluptatum ea ratione porro. A veniam saepe, laudantium velit nulla maiores sed neque
                        quos perferendis.
                    </p>

                </div>

            </div>

        </section>

        <section class="servicos" id="servicos">

            <div class="container-servicos">

                <h3> Nossos serviços</h3>
                <p> Podemos fazer mais juntos </p>

            </div>

            <div class="servicos-cards">

                <div class="card">

                    <img src="./img/digital-marketing.png" alt="">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, obcaecati! Voluptas, odio? Porro
                        eveniet vitae pariatur fugiat quasi quos reiciendis minus, ea ex laborum! Iure quas consectetur
                        error at incidunt!
                    </p>

                </div>

                <div class="card">

                    <img src="./img/virtual_store.png" alt="">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, obcaecati! Voluptas, odio? Porro
                        eveniet vitae pariatur fugiat quasi quos reiciendis minus, ea ex laborum! Iure quas consectetur
                        error at incidunt!
                    </p>

                </div>

                <div class=" card">

                    <img src="./img/trophy.png" alt="">

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, obcaecati! Voluptas, odio? Porro
                        eveniet vitae pariatur fugiat quasi quos reiciendis minus, ea ex laborum! Iure quas consectetur
                        error at incidunt!
                    </p>

                </div>

            </div>

        </section>

        <footer>
            <p>Desenvolvido por <a href="https://github.com/thiagomacedoabdon">Thiago Macedo</a></p>
        </footer>

        <script src="./script.js"></script>
    </body>

</html>