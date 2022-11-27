<?php
include_once('../../scripts/card.php'); // incluindo card para criar os card no html
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../Home/css/style.css">
    <link rel="stylesheet" href="style.css">

    <title>Tutoriais</title>
</head>
<?php
include_once('../../components/header.php'); // incluindo card para criar os card no html
?>
<body>
    <div class="tutor-card" id="ide-installation">
        <img src="" alt="" class="tutor-image" id="ide-image">
        <h3 class="tutor-title" id="ide-title">INSTALANDO UMA IDE</h3>
    </div>
    <div class="tutor-card" id="robocode-installation">
        <img src="" alt="" class="tutor-image" id="robocode-image">
        <h3 class="tutor-title" id="robocode-title">INSTALANDO O ROBOCODE</h3>
    </div>
    <div class="tutor-card" id="basics">
        <img src="" alt="" class="tutor-image" id="basics-image">
        <h3 class="tutor-title" id="basics-title">O BÁSICO</h3>
    </div>
    <div class="tutor-card" id="movement">
        <img src="" alt="" class="tutor-image" id="movement-image">
        <h3 class="tutor-title" id="movement-title">MOVMENTAÇÃO</h3>
    </div>
    <div class="tutor-card" id="aim">
        <img src="" alt="" class="tutor-image" id="aim-image">
        <h3 class="tutor-title" id="aim-title">MIRANDO</h3>
    </div>
    <div class="tutor-card" id="shoot">
        <img src="" alt="" class="tutor-image" id="shoot-image">
        <h3 class="tutor-title" id="shoot-title">ATIRANDO</h3>
    </div>
    <div class="tutor-card" id="examples">
        <img src="" alt="" class="tutor-image" id="examples-image">
        <h3 class="tutor-title" id="examples-title">EXEMPLOS</h3>
    </div>

    <?php include_once('../../components/popupCard/popup.php'); // precisa incluir o popup no final
    // para evitar de ele ficar com o z-index errado?> 
</body>
</html>