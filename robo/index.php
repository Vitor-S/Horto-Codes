<?php
include('../scripts/conexao.php');
include('../scripts/card.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $robo_query = "SELECT * FROM ROBOCODE WHERE ID_ROBO=:id LIMIT 1";
    $robo_result = $conn->prepare($robo_query);
    $robo_result->bindParam(':id', $id);
    $robo_result->execute();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- pagina "robôs" -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../GlobalStyle.css">
    <link rel="stylesheet" href="./style.css">

    <title>Robôs</title>
</head>

<body>
    <?php include_once("../components/header.php") ?>
    <main>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            if (($robo_result) and ($robo_result->rowCount() != 0)) {
                $row_robo = $robo_result->fetch(PDO::FETCH_ASSOC);
            }
        ?>
            <div class="container-robo">
                <img src="<?php echo ('../assets/robo/' . $row_robo['IMAGEM_ROBO']); ?>" alt="" class="img-robo">
                <h1 class="nome-robo"><?php echo $row_robo['NOME_ROBO']; ?></h1>
                <p class="des-robo"><?php echo $row_robo['DESCRICAO_ROBO']; ?></p>
            </div>
            <h2 class="autores-robo">Autores Rôbo</h2>
            <div class="container-autores">
                <?php createCardSingle($row_robo['MATRICULA_ALUNO']);
                createCardSingle($row_robo['MATRICULA_ALUNO_2']) ?>
            </div>
        <?php
        };
        ?>


    </main>
    <?php include_once("../components/footer.php"); ?>
</body>
<?php include_once('../components/popupCard/popup.php'); ?>

</html>