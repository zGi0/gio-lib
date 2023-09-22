<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gibe</title>
    <link rel="stylesheet" href="assets/style.css?v=<?php echo time() ?>">
    <?php include("config.php"); ?>
</head>
<body>
    
    <?php include("assets/nav.php") ?>
    
    <main>
        <!-- coloque isso na pagina 'todos-livros.php' e 'emprestados.php' -->
        <!-- <input id="pesquisar" type="text" onchange="" placeholder="Pesquisar"> -->

        <h2>Adicionar Livro</h2>

        <form action="">
            <input type="text" placeholder="Nome do Livro" name="nome-livro" maxlength="100">
            <input type="text" placeholder="Autor" name="autor" maxlength="50">
            <textarea rows="5" cols="30" placeholder="Localização" name="local" maxlength="150"></textarea>

            <button type="submit">Cadastrar Livro</button>
        </form>
    </main>
</body>
</html>