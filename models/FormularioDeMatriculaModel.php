<?php

namespace models;

class FormularioDeMatriculaModel extends Model
{
    public function matriculaAlunos()
    {
        date_default_timezone_set('America/Sao_Paulo');

        if (isset($_POST["bt_enviar"])) {
            $nome = $_POST["nome"];
            $sexo = $_POST["sexo"];
            $idade = $_POST["idade"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $observacao = $_POST["observacao"];
            $dataNascimento = $_POST["data_nascimento"];
            $responsavelRG = $_POST["responsavel_rg"];
            $responsavelCPF = $_POST["responsavel_cpf"];
            $escola = $_POST["escola"];
            $turma = $_POST["turma"];
            $serie = $_POST["serie"];
            $disponibilidadeHorario = $_POST["disponibilidade_horario"];
            $anoMatricula = $_POST["ano_matricula"];

            $sql = "INSERT INTO alunos (nome, sexo, idade, telefone, endereco, observacao, data_nascimento, responsavel_rg, responsavel_cpf, escola, turma, serie, disponibilidade_horario, ano_matricula) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $livros = \MySql::connect()->prepare($sql);
            $livros->execute(array(
                $nome, $sexo, $idade, $telefone, $endereco, $observacao, $dataNascimento, $responsavelRG, $responsavelCPF, $escola, $turma, $serie, $disponibilidadeHorario, $anoMatricula
            ));

            if (!$livros->rowCount() > 0) {
                echo "Erro durante o insert: erro em $livros";
            } else {
                echo "<script> function cadastro(){
                        alert('Cadastro realizado!')
                    }
                    cadastro();</script>";
            }
        }
    }
}
