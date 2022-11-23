<?php
    // Code for inserting form data into database

    include('connection.php'); // Module for connection  with database

    $nome = $_POST["fname"]; // Post of "first name"
    $email = $_POST["email"]; // Post of "e-mail"

    try {
    $result = mysqli_query($mysqli, "INSERT INTO registered (fname, email) VALUES ('$nome', '$email')"); // SQL instruction
    $message = 'Obrigado pela inscrição na nossa newsletter, ' . $nome . '!'; // Message that will appear in HTML body
    } catch (Exception $error) {
    $message = 'Um erro ocorreu. Tente novamente.'; // Message that will appear in HTML body if error occurs
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/header/logo-atual.png" type="image/x-icon">
    <!-- Main CSS End-->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+SC:wght@400;500&family=Alegreya+Sans+SC:wght@700&family=Antic+Didone&family=Barlow+Semi+Condensed:wght@600&family=Birthstone&family=League+Spartan:wght@500&family=Roboto+Condensed:wght@300&family=Titillium+Web&family=Vollkorn:wght@700&display=swap" rel="stylesheet">
    <!-- Google Fonts End -->
    <!-- Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- Material Design End -->
    <!-- Media CSS -->
    <link rel="stylesheet" href="css/media.css">
    <!-- Media CSS End-->
</head>
<body onresize="resizeNav()">
    <div id="load">

    </div>
    <nav>
        <div id="upper-nav">
            <a id="logo-full" href="index.html">
                <img width="200" src="img/header/logo-atual.png" alt="" id='logo'>
                <h1 id="logo-titulo">YOGUI-SE</h1>
            </a>
        </div>
        <div id="lower-nav">
            <span onclick="openNav()" id="menu" class="material-symbols-outlined">menu</span>
            <!-- Tag above is the "hamburger" menu that appears only in smaller screens-->
            <ul id="nav-links">
                <li class="link-item"><a class="link-nav" href="index.html">Home</a></li>
                <li class="link-item"><a class="link-nav" href="praticas.html">Práticas</a></li>
                <li class="link-item"><a class="link-nav" href="yoga.html">Yoga</a></li>
                <li class="link-item"><a class="link-nav" href="galeria.html">Galeria</a></li>
                <li class="link-item"><a class="link-nav" href="sobre.html">Sobre</a></li>
            </ul>
        </div>
    </nav>
    <header>
        <div id="container-header">
            <h2 id="banner-mensagem">Obrigado pela inscrição!</h2>
        </div>
    </header>
    <main>
        <article id="subscribe">
            <h3><?php echo $message ?></h3> <!-- Display message generated above in PHP code-->
            <p>Prepararemos um conteúdo muito interessante, não esqueça de conferir!</p>
            <a href="index.html">Voltar</a>
        </article>
    </main>
    <footer>
        <section id="flinks">
            <a href="index.html">
                <img width="150" src="img/footer/logo-white.png" alt="" id='logo'>
                <h2>YOGUI-SE</h2>
            </a>
            <div id="fplists">
                <a href="https://open.spotify.com/playlist/3kt1ECK2KyWXvyU8EsEBZG?si=6q5wtF--QFKrF9QiTLrckg&utm_source=whatsapp">
                    <img width="75" src="img/footer/spotify.png" alt="">
                </a>
                <a href="https://www.youtube.com/playlist?list=PLhpXJMVi2GnDadfoeLEAI6bq41LtMYLY7">
                    <img width="75" src="img/footer/youtube.png" alt="">
                </a>
            </div>
            <div id="fmail-info">
                <img width="70" src="img/footer/mail.png" alt="">
                <span>yogui.se2022@gmail.com</span>
            </div>
        </section>
        <section class="fnavs" id="fnav-1">
            <div>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Estresse</a></li>
                    <li><a href="index.html">Benefícios</a></li>
                </ul>
                <ul>
                    <li><a href="praticas.html">Práticas</a></li>
                    <li><a href="facaagora.html">Faça agora</a></li>
                    <li><a href="meditacoes.html">Meditações</a></li>
                    <li><a href="pranayamas.html">Respirações</a></li>
                    <li><a href="asanas.html">Posturas</a></li>
                </ul>
            </div>
        </section>
        <section class="fnavs" id="fnav-2">
            <div>
                <ul>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="sobre.html">Quem somos</a></li>
                    <li><a href="sobre.html">Destaques</a></li>
                </ul>
                <ul>
                    <li><a href="yoga.html">Yoga</a></li>
                    <li><a href="yoga.html">Frases</a></li>
                    <li><a href="yoga.html">O que é</a></li>
                    <li><a href="yoga.html">História</a></li>
                </ul>
            </div>
        </section>
        <section id="fform">
            <h3>Mais conteúdo sobre Yoga?</h3>
            <form action="cadastro.php" method="post">
                <input type="text" name="fname" placeholder="Nome" id="" required>
                <input type="email" name="email" id="" placeholder="E-mail" required>
                <input type="submit" value="Cadastrar">
            </form>
        </section>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>