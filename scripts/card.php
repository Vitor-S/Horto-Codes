<?php
function createCard($grupo)
{
    include("conexao.php");

    $aluno_query = "SELECT * FROM ALUNO WHERE ID_AREA=:grupo";
    $aluno_result = $conn->prepare($aluno_query);
    $aluno_result->bindParam(':grupo', $grupo);
    $aluno_result->execute();

    while ($row_aluno = $aluno_result->fetch(PDO::FETCH_ASSOC)) { // fetch em todos dados da tabela
        if ($row_aluno) { // verificação é necessária para o php funcionar!!!
            // o src é baseado no arquivo INDEX.PHP da page QUEM SOMOS !!
            $aluno_imagem = '../assets/quemsomos/' . $row_aluno['IMAGEM'];

            $aluno_mat = $row_aluno['MATRICULA_ALUNO'];

            $aluno_pnome = $row_aluno['PRIMEIRO_NOME'];
        }

        // criando componente html com echo e colocando seu valores baseado na query
        echo '<a class="card-container" onclick = personCard(' . $aluno_mat . ')>
                <img src="' . $aluno_imagem . '" alt="" class="card-img">
                <div class="card-name">' . $aluno_pnome . '</div>
            </a>';
    };

?>

    <!-- estilizando -->
    <style>
        .card-container {
            width: 150px;
            height: 150px;
            display: flex;
            justfy-content: space-evenly;
            flex-direction: column;
            align-items: center;
            border-radius: 3%;
            color: white;
            transition: 0.4s ease-out;
        }

        .card-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            clip-path: circle();
            object-position: 100% 10%;
        }

        .card-name {
            font-family: Fira Code;
            font-weight: bold;
        }

        .card-container:hover {
            scale: 1.07;
            cursor: pointer;
        }
    </style>
<?php
};
?>

<?php
function createCardSingle($mat)
{
    include("conexao.php");

    $aluno_query = "SELECT * FROM ALUNO WHERE MATRICULA_ALUNO=:mat LIMIT 1";
    $aluno_result = $conn->prepare($aluno_query);
    $aluno_result->bindParam(':mat', $mat);
    $aluno_result->execute();

    $row_aluno = $aluno_result->fetch(PDO::FETCH_ASSOC); // fetch em todos dados da tabela

    if ($row_aluno) { // verificação é necessária para o php funcionar!!!
        // o src é baseado no arquivo INDEX.PHP da page QUEM SOMOS !!
        $aluno_imagem = '../assets/quemSomos/' . $row_aluno['IMAGEM'];

        $aluno_mat = $row_aluno['MATRICULA_ALUNO'];

        $aluno_pnome = $row_aluno['PRIMEIRO_NOME'];
    }

    // criando componente html com echo e colocando seu valores baseado na query
    echo '<a class="card-container" onclick = personCard(' . $aluno_mat . ')>
                <img src="' . $aluno_imagem . '" alt="../assets/quemSomos/1adbb7af22d866a8e1c49a9034fe8bae.jpg" class="card-img">
                <div class="card-name">' . $aluno_pnome . '</div>
            </a>';
?>

    <!-- estilizando -->
    <style>
        a {
            color: white;
        }

        .card-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 3%;

            transition: 0.4s ease-out;
        }

        .card-img {
            width: 120px;
            border-radius: 50%;
        }

        .card-name {
            font-family: Fira Code;
            font-weight: bold;
        }

        .card-container:hover {
            scale: 1.07;
            cursor: pointer;
        }
    </style>
<?php
};
?>