<?php 
function createCarousel()
{
    include('../scripts/conexao.php');

    $carr_query = "SELECT * FROM ROBOCODE;";
    $carr_result = $conn->prepare($carr_query);
    $carr_result->execute();

    while ($row_carr = $carr_result->fetch(PDO::FETCH_ASSOC)) { // fetch em todos dados da tabela
        if ($row_carr) {
            $carr_imagem = '../assets/robo/'. $row_carr['BANNER_ROBO'];
            $carr_id = $row_carr['ID_ROBO'];
        }
        // criando componente html com echo e colocando seu valores baseado na query

        echo "<form action='../robo?id=$carr_id' method='POST'>
            <input type='hidden' name='click-robot' value=$carr_id>
            <input type='image' src=$carr_imagem class='item'>
            </form>";
    };
}

?>

<div id="wrapper">
    <div id="carousel">
        <div id="content">
            <a href="">
                <img src="../assets/robo/hor1.png" alt="" class="item">
            </a>
            <?php createCarousel(); ?>
            <a href="">
                <img src="../assets/robo/hor2.png" alt="" class="item">
            </a>
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