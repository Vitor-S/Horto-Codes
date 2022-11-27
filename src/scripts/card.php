<?php 
    function createCard($grupo){
        include("conexao.php");

        $aluno_query = "SELECT * FROM ALUNO WHERE ID_AREA=:grupo";
        $aluno_result = $conn->prepare($aluno_query);
        $aluno_result->bindParam(':grupo',$grupo);
        $aluno_result->execute();

    while($row_aluno = $aluno_result->fetch(PDO::FETCH_ASSOC)){ // fetch em todos dados da tabela
        if($row_aluno){ // verificação é necessária para o php funcionar!!!
            // o src é baseado no arquivo INDEX.PHP da page QUEM SOMOS !!
            $aluno_imagem = '../../assets/quemSomos/'.$row_aluno['IMAGEM'];

            $aluno_mat = $row_aluno['MATRICULA_ALUNO'];
    
            $aluno_pnome = $row_aluno['PRIMEIRO_NOME'];
        }

        // criando componente html com echo e colocando seu valores baseado na query
        echo '<a class="card-container" onclick = personCard('.$aluno_mat.')>
                <img src="'.$aluno_imagem.'" alt="Imagem do aluno" class="card-img">
                <div class="card-name">'.$aluno_pnome.'</div>
            </a>';
    };

    ?>
    
<!-- estilizando -->
<style>
    .card-container{
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 3%;

        transition: 0.4s ease-out;
    }
        
    .card-img{
        width: 120px;
        border-radius: 50%;
    }

    .card-name{
        font-family: Fira Code;
        font-weight: bold;
    }

    .card-container:hover{
        scale: 1.07;
        cursor: pointer;
    }
</style>
<?php    
    };
?>

