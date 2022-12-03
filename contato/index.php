<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- pagina "o que é o robocode ?" -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./script.js" defer></script>
    
    <link rel="stylesheet" href="../GlobalStyle.css">
    <link rel="stylesheet" href="style.css">

    <title>Contato</title>
</head>
<body>
    <?php include_once("../components/header.php") ?>
    <main>  
        <form action="https://formspree.io/f/mqkjvrag" method="POST" />
            <input class="nome" placeholder="Nome" type="nome" name="nome" >
            <input class="assunto" placeholder="Assunto" type="assunto" name="assunto" >
            <input class="email" placeholder="Email" type="email" name="email" >
            <textarea name="Mensagem" placeholder="Mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <?php include_once("../components/footer.php") ?>
</body>
</html>