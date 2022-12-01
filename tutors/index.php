<?php
include_once('../scripts/card.php'); // incluindo card para criar os card no html
include('../scripts/tutors.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <script src="../components/popupCard/popupVideo.js" defer></script>

    <link rel="stylesheet" href="../GlobalStyle.css">
    <link rel="stylesheet" href="./style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.0/lottie.min.js" integrity="sha512-17otjw7eTNU9MtpB7mFfXEwB6yDjA2qjDFkKSvsywI1PRAgpyOo+cp/wPSE/1kK4fFjA9OKsZVO1tr93MGNCEw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Tutoriais</title>
</head>

<body>
    <?php
    include_once('../components/header.php'); // incluindo a header
    ?>
    <main>
        <div class="container-tutor">
            <section class="sec-install">
                <h1 class="title" id="title-install">Instalação</h1>
                    <ul class="install">
                        <?php getTutors(1); ?>
                    </ul>
                    <div class="separator" id="separator-install"></div>
            </section>
            <section class="sec-movement">
                <h1 class="title" id="title-movement">Movimentação</h1>
                    <ul class="movement">
                        <?php getTutors(2); ?>
                    </ul>
                    <div class="separator" id="separator-movement"></div>
            </section>
            <section class="sec-fire">
                <h1 class="title" id="title-fire">Disparo</h1>
                    <ul class="fire">
                        <?php getTutors(3); ?>
                    </ul>
                    <div class="separator" id="separator-fire"></div>
            </section>
            <section class="sec-track">
                <h1 class="title" id="title-track">Mira</h1>
                    <ul class="track">
                        <?php getTutors(4); ?>
                    </ul>
                    <div class="separator" id="separator-track"></div>
            </section>
            <section class="sec-ex">
                <h1 class="title" id="title-ex">Exemplos</h1>
                    <ul class="ex">
                        <?php getTutors(5); ?>
                    </ul>
                    <div class="separator" id="separator-ex"></div>
            </section>
        </div>
        <div class="animation-container">

        </div>
    </main> 

   <?php include_once('../components/popupCard/popup.php');
    include_once('../components/popupCard/popupVideo.php');  // precisa incluir o popup no final
    // para evitar de ele ficar com o z-index errado?> 
<?php include_once("../components/footer.php"); ?>
</body>
</html>