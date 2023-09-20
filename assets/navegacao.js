// variaveis modais
const btAdicionar = document.querySelector("[abrir-modal-adicionar]")
const modal_adicionar_livro = document.querySelector("[modal-adicionar]")
const fechar_adicionar_livro = document.querySelector("[fechar-modal-adicionar]")

// variaveis transferência de dados
const nome_livro = document.getElementById("input-nome-livro")
const autor = document.getElementById("input-autor")
const nome_aluno = document.getElementById("input-nome-aluno")
const turma_aluno = document.getElementById("input-turma-aluno")
/* 

DIARIO: 02/09/2023
Vou fazer um sistema de empréstimo apenas, catalogar daria uma complexidade a mais pro json.
Quando eu terminar o sistema de empréstimo funcional, mostro pra ela e vejo se ela vai querer catalogar ainda.

*pontos observados:
1 - poderá haver repetição de livros, mas terão ids diferentes
2 - uma pessoa pode pegar mais de um livro emprestado, mas um livro com seu id único não pode ser emprestado pra
mais de uma pessoa

****Funcionamento JSON
Na lista "Empréstimos" no json, cada elemento equivale a um empréstimo.
Cada empréstimo tem 2 caracteres inteiros, o primeiro representa o id do livro e o segundo, o id do aluno.


****Renderização
Quero que o javascript pegue a lista empréstimos e leia cada elemento
Para cada elemento lido, pegue o livro e o aluno e exiba eles na tela de forma estilizada e em grid


*/

fechar_adicionar_livro.addEventListener("click", () => {

    modal_adicionar_livro.close()
})

// dinâmica do modal de ADICIONAR LIVRO
btAdicionar.addEventListener('click', () => {
    modal_adicionar_livro.show()
})

