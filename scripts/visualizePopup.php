<?php
    include_once("conexao.php");
    
    // pegando valor da informação "ID" da URL e filtrando para mais segurança
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    if(!empty($id)){
        $aluno_query = "SELECT * FROM ALUNO WHERE MATRICULA_ALUNO=:id LIMIT 1";
        $aluno_result = $conn->prepare($aluno_query);
        $aluno_result->bindParam(':id',$id);
        $aluno_result->execute();

        if(($aluno_result) and ($aluno_result->rowCount() != 0)){
            $row_aluno = $aluno_result->fetch(PDO::FETCH_ASSOC);
            // criando um array com posição personalizada
            // posição "status" recebe valor "true" etc...
            $retorna = ['status' => true, 'dados' => $row_aluno]; 
        }
        else{ // debug temporário !
            echo "Erro aqui ó";
        }
    }
    else{ // caso o select retorne empty o array irá virar false
        $retorna = ['status' => false, 'msg' => 'ERRO VISUALIZE'];
    }
    // dando echo no aray retorna transformado em JSON
    // para poder manipular os dados mais facilmente no modo de objetos
    echo json_encode($retorna);
?>