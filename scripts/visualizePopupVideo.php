<?php
    include_once("conexao.php");
    
    // pegando valor da informação "ID" da URL e filtrando para mais segurança
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    
    if(!empty($id)){
        $tutor_query = "SELECT * FROM TUTORIAL WHERE ID_TUTORIAL=:id LIMIT 1";
        $tutor_result = $conn->prepare($tutor_query);
        $tutor_result->bindParam(':id',$id);
        $tutor_result->execute();

        if(($tutor_result) and ($tutor_result->rowCount() != 0)){
            $row_tutor = $tutor_result->fetch(PDO::FETCH_ASSOC);
            // criando um array com posição personalizada
            // posição "status" recebe valor "true" etc...
            $retorna = ['status' => true, 'dados' => $row_tutor]; 
        }
        else{ // debug temporário !
            echo "Erro aqui ó";
        }
    }
    else{ // caso o select retorne empty o array irá virar false
        $retorna = ['status' => false, 'msg' => 'ERRO VISUALIZE', 'id' => $id];
    }
    // dando echo no aray retorna transformado em JSON
    // para poder manipular os dados mais facilmente no modo de objetos
    echo json_encode($retorna);
    
?>