<h2>Adicionar Aluno</h2>

<form action="salvar-dados.php" method="POST">
    <input type="hidden" name="novo-aluno">
    <input type="text" placeholder="Nome" name="nome-aluno" maxlength="150">
    <input type="text" placeholder="Turma" name="turma" maxlength="15">
    <input type="text" placeholder="Matrícula" name="matricula" maxlength="20">

    <button type="submit">Cadastrar Aluno</button>
</form>