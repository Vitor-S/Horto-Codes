<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js" defer></script>

    <title>Home</title>
</head>

<body>
    <?php include_once("../../components/header.php") ?>
    <main>
        <div id="wrapper">
            <div id="carousel">
                <div id="content">
                    <img src="../../assets/home/carrossel/carrossel_01.png" class="item" />
                    <img src="../../assets/home/carrossel/carrossel_02.png" class="item" />
                    <img src="../../assets/home/carrossel/carrossel_03.png" class="item" />
                    <img src="../../assets/home/carrossel/carrossel_04.png" class="item" />
                    <img src="../../assets/home/carrossel/carrossel_05.png" class="item" />
                </div>
            </div>
            <button id="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
                </svg>
            </button>
            <button id="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z" />
                    <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
                </svg>
            </button>
        </div>
        <div class="container-text">
            <h2>Horcodes</h2>
            <p>Nossa turma de Desenvolvimento de Sistemas 02 do Senai Horto resolvemos juntar a instituição com o nome do aplicativo que usamos (ROBO CODE), como estudamos no senai Horto, usamos apenas a nomenclatura "HORTO + ROBOCODE" e assim nasceu o "HORCODES", graças à maioria em uma votação!
                <a href="">Saiba Mais!</a>
            </p>
        </div>
    </main>
</body>

</html>

<!-- <iframe src="https://drive.google.com/file/d/1I3JxAghptE4qufvfcyHdLav9saHQ-dd4/preview" frameborder="0" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe> -->