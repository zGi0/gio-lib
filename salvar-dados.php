<?php

// todas as transações no banco de dados passarão por aqui
include("config.php");

if (isset($_POST["novo-aluno"])) // para salvar um aluno
{
    $nome = $_POST["nome-aluno"];
    $turma = $_POST["turma"];
    $matricula = $_POST["matricula"];

    $comando = "INSERT INTO alunos (nome, turma, matricula) VALUES ('{$nome}', '{$turma}', '{$matricula}')";
    $conexao->query($comando);

    print "<script> location.href='index.php'; </script>";
    die();
}

if (isset($_POST["novo-livro"])) // para salvar um livro
{
    $nome_livro = $_POST["nome-livro"];
    $autor = $_POST["autor"];
    $local = $_POST["local"];

    $comando = "INSERT INTO livros (nome_livro, autor_livro, localizacao) VALUES ('{$nome_livro}', '{$autor}', '{$local}')";
    $conexao->query($comando);
    print "<script> location.href='index.php'; </script>";
    die();
}