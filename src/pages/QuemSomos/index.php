<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <!-- IMPORT LOTTIE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js" integrity="sha512-yAr4fN9WZH6hESbOwoFZGtSgOP+LSZbs/JeoDr02pOX4yUFfI++qC9YwIQXIGffhnzliykJtdWTV/v3PxSz8aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../../components/animatedButton.js" defer></script>
    <script src="script.js" defer type="module"></script>

    <title>Quem Somos</title>
</head>
<body class="body">
    <section class="half-section left-section">
        <h2 class="section-title">Web Front End</h2>
        <section class="group-section" id="web"></section>
        <h2 class="section-title">Banco de Dados</h2>
        <section class="group-section" id="banco_de_dados"></section>
        <h2 class="section-title">Design</h2>
        <section class="group-section" id="design"></section>
        <h2 class="section-title">Web Beck End</h2>
        <section class="group-section" id="programação"></section>
    </section>

    <section class="half-section right-section">
        <h2 class="section-title">Marketing</h2>
        <section class="group-section" id="marketing"></section>
        <h2 class="section-title">Gestão</h2>
        <section class="group-section" id="gestão"></section>
        <h2 class="section-title">Tutoriais</h2>
        <section class="group-section" id="tutoriais"></section>
        <h2 class="section-title">Documentação</h2>
        <section class="group-section" id="documentação"></section>
    </section>

    <div class="popup-wrapper">
        <div class="popup-container">
            <h2 class="popup-name">Vitor Silva Oliveira</h2>
            <div class="popup-info">
                <img class="popup-image" src="https://i.pinimg.com/originals/cb/1e/7d/cb1e7dbbb2cd77a1e7d78616bb2a0e03.png" alt="">
                <p class="popup-bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos est accusamus odio officiis explicabo cupiditate, quam animi. Vitae non, libero explicabo quis magni culpa neque itaque beatae officiis, harum dolores.</p>
            </div>
            <div class="social-media-container">
                <div class="animated-button-container" style="width: 60px; height: 60px;">
                    <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets6.lottiefiles.com/packages/lf20_atjsyyed.json"></animated-button>
                </div>
                <div class="animated-button-container" style="width: 80px; height: 80px;" id="github-icon">
                    <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets3.lottiefiles.com/private_files/lf30_1ldonjtk.json"></animated-button>
                </div>
                <div class="animated-button-container" style="width: 60px; height: 60px;">
                    <animated-button class="animated-button" direction="1" type="repeat" animation="https://assets9.lottiefiles.com/packages/lf20_2ks3pjua.json"></animated-button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>