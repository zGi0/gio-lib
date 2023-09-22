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
        <?php
            switch (@$_REQUEST["pagina"])
            {
                case "novo-livro":
                    include("novo-livro.php");
                    break;

                case "novo-aluno":
                    include("novo-aluno.php");
                    break;

                case "novo-emprestimo":
                    include("novo-emprestimo.php");
                    break;
                
                case "emprestados":
                    include("emprestados.php");
                    break;

                case "todos-livros":
                    include("todos-livros.php");
                    break;
                
                default: // vá pra pagina de novo-livro quando a pagina for carregada no começo
                    include("novo-livro.php");
                    break;
            }

        ?>
    </main>
</body>
</html>