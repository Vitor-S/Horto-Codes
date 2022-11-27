<?php
include_once('../../scripts/card.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="popup-wrapper-video">
        <div class="popup-container-video">
            <div class="popup-info-video">
                   <iframe class="popup-video" src="" frameborder="0" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                </div>
        </div>
    </div>

    <style>
        * {
            margin: 0;
            padding: 0px;
        }

        iframe{
            width: 100%;
            height: 100%;
        }

        .popup-wrapper-video {
            display: none;
            align-items: center;
            justify-content: center;

            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;

            background-color: rgba(20, 20, 20, 0.9);
        }

        .popup-container-video {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;

            width: 60%;
            height: 70%;
            background-color: #FFF;
        }

        .popup-info-video {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            height: 100%;
        }
    </style>
</body>
<?php include_once('../../components/popupCard/popup.php'); // precisa incluir o popup no final
    // para evitar de ele ficar com o z-index errado?> 
    
</html>