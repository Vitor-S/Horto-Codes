<?php 
include("conexao.php");

if(isset($_FILES['arquivo'])){
    $mat = $_POST['mat']; // pegando o retorno do select "mat"
    // pegando a extensão do arquivo enviado (name é um atributo do $_FILES)
    // o -4 serve para contar os caracteres finais
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); 
    // novo_nome para evitar exisitr fotos com nomes duplicados
    $novo_nome = md5(time()).$extensao;
    // quando é feito um post de um arquivo, ele é estocado dentro do php
    // é preciso mover ele para fora da "memória interna" para outra pasta
    // diretorio para onde irão as fotos
    $diretorio = "../assets/quemSomos/";

    // movendo essa foto para outra pasta e alterando o nome da imagem
    // (tmp_name é um atributo do $_FILES)
    // o segundo parametro é para onde irá a imagem, colocando o "." indicamos que
    // a imagem sera estocada dentro do diretorio e "dentro" do novo_nome
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    // try catch para tratar possíveis erros do update
    try{
    $arquivo_sql = "UPDATE ALUNO SET IMAGEM = :img WHERE (MATRICULA_ALUNO = :mat)";
    $arquivo_result = $conn->prepare($arquivo_sql);
    $arquivo_result->bindParam(':img',$novo_nome, PDO::PARAM_STR);
    $arquivo_result->bindParam(':mat', $mat, PDO::PARAM_INT);
    $arquivo_result->execute();
    }
    catch (PDOException $e) {
        echo 'Error => '.$e->getMessage();
    }

}
?>

<h1>Upload fotos cards alunos</h1>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" required>
    <label for="arquivo">Arquivo:</label>
    <select name="mat" required>
        <option value=""> --- Alunos --- </option>
        <?php
        $query = $conn->query("SELECT MATRICULA_ALUNO, PRIMEIRO_NOME, ULTIMO_NOME FROM ALUNO ORDER BY PRIMEIRO_NOME ASC");
        $registros  = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach($registros as $option){ // foreach em cada registros da query
            echo "<option value=$option[MATRICULA_ALUNO]>$option[PRIMEIRO_NOME] $option[ULTIMO_NOME]</option>";
        }
        ?>
    </select>
    <button type="sumbit" value="Salvar">Salvar</button>
</form>