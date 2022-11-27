<?php
function getTutors($id)
{
    include('../../scripts/conexao.php');

    try {
        $tuto_sql = "SELECT NOME_TUTORIAL, ID_TUTORIAL FROM TUTORIAL WHERE ID_CAT_TUTORIAL=:id";
        $tuto_result = $conn->prepare($tuto_sql);
        $tuto_result->bindParam(':id', $id, PDO::PARAM_INT);
        $tuto_result->execute();
    } catch (PDOException $e) {
        echo 'Error => ' . $e->getMessage();
    }

    while ($row_tuto = $tuto_result->fetch(PDO::FETCH_ASSOC)) {

        if ($row_tuto) { // verificação é necessária para o php funcionar!!!
            $tuto_title = $row_tuto['NOME_TUTORIAL'];
            $tuto_id = $row_tuto['ID_TUTORIAL'];
        }

        // criando componente html com echo e colocando seu valores baseado na query
        echo '<li class="tutor-title" onclick = popupVideo('.$tuto_id.')>' . $tuto_title . '</li>';
    }
}