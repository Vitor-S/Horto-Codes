<?php
include_once('../../scripts/card.php'); // incluindo card para criar os card no html
include('../../scripts/tutors.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js" defer></script>
    <script src="../../components/popupCard/popupVideo.js" defer></script>
    <link rel="stylesheet" href="../Home/css/style.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Tutoriais</title>
</head>

<?php
include_once('../../components/header.php'); // incluindo a header
?>
<body>
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
   
   
   </div>
    <?php include_once('../../components/popupCard/popup.php');
    include_once('../../components/popupCard/popupVideo.php');  // precisa incluir o popup no final
    // para evitar de ele ficar com o z-index errado?> 
</body>
</html>