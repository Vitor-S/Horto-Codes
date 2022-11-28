<?php
include_once('../../scripts/card.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Home/css/style.css">
    <link rel="stylesheet" href="style.css">

    <title>Quem Somos</title>
</head>

<body class="body">
    <?php include_once("../../components/header.php") ?>
    <section class="left-section">
        <h2 class="section-title">Web Front-End</h2>
        <section class="group-section" id="web">
            <!-- criando os cards baseado na seção/"grupo" em questão

            Web Front-End  =  1
            Banco de Dados =  2
            Design         =  3
            Web Back-End   =  4
            Marketing      =  5
            Gestão         =  6 
            Tutoriais      =  7 
            Documentação   =  8 

            -->
            <?= createCard(1) ?>
        </section>
        <h2 class="section-title">Banco de Dados</h2>
        <section class="group-section" id="banco_de_dados">
            <?= createCard(2) ?>
        </section>
        <h2 class="section-title">Design</h2>
        <section class="group-section" id="design">
            <?= createCard(3) ?>
        </section>
        <h2 class="section-title">Web Back-End</h2>
        <section class="group-section" id="programação">
            <?= createCard(4) ?>
        </section>
    </section>

    <section class="right-section">
        <h2 class="section-title">Marketing</h2>
        <section class="group-section" id="marketing">
            <?= createCard(5) ?>
        </section>
        <h2 class="section-title">Gestão</h2>
        <section class="group-section" id="gestão">
            <?= createCard(6) ?>
        </section>
        <h2 class="section-title">Tutoriais</h2>
        <section class="group-section" id="tutoriais">
            <?= createCard(7) ?>
        </section>
        <h2 class="section-title">Documentação</h2>
        <section class="group-section" id="documentação">
            <?= createCard(8) ?>
        </section>
    </section>
    <?php include_once("../../components/footer.php") ?>

</body>

<?php include_once('../../components/popupCard/popup.php'); // precisa incluir o popup no final
    // para evitar de ele ficar com o z-index errado?> 
</html>