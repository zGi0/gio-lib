<h2>Adicionar Livro</h2>

<form action="salvar-dados.php" method="POST">
    <input type="hidden" name="novo-livro">
    <input type="text" placeholder="Nome do Livro" name="nome-livro" maxlength="150">
    <input type="text" placeholder="Autor" name="autor" maxlength="50">
    <textarea rows="5" cols="30" placeholder="Localização" name="local" maxlength="150"></textarea>

    <button type="submit">Cadastrar Livro</button>
</form>