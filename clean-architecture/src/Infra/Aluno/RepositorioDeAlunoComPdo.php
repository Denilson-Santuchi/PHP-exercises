<?php

namespace Alura\Arquitetura\Infra\Aluno;

use Alura\Arquitetura\Dominio\Aluno\{
    RepositorioDeAlunos,
    Aluno,
    AlunoNaoEncontrado,
    Cpf,
    Telefone
};

class RepositorioDeAlunoComPdo implements RepositorioDeAlunos
{
    private \PDO $conexao;

    public function __construct(\PDO $conexao)
    {
        $this->conexao = $conexao;
    }

    public function adicionar(Aluno $aluno): void
    {
        $sql = 'INSERT INTO alunos VALUES (:cpf, :nome, :email);';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue('cpf', $aluno->cpf());
        $stmt->bindValue('nome', $aluno->nome());
        $stmt->bindValue('email', $aluno->email());
        $stmt->execute();

        $sql = 'INSERT INTO telefones VALUES (:ddd, :numero, :cpf_aluno);';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue('cpf_aluno', $aluno->cpf());

        /** @var Telefone $telefone */
        foreach ($aluno->telefones() as $telefone) {
            $stmt->bindValue('ddd', $telefone->ddd());
            $stmt->bindValue('numero', $telefone->numero());
            $stmt->execute();
        }
    }

    public function buscarPorCpf(Cpf $cpf): Aluno
    {
        $sql = '
            SELECT cpf, nome, email, ddd, numero as numro_telefone
              FROM alunos
            LEFT JOIN telefones ON telefones.cpf_alunos = aluno.cpf
              WHERE alunos.cpf = ?;
        ';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, (string) $cpf);
        $stmt->execute();

        $dadosAluno = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if (count($dadosAluno) === 0) {
            throw new AlunoNaoEncontrado($cpf);
        }

        return $this->mapearAluno($dadosAluno);
    }

    private function mapearAluno(array $dadosAluno): Aluno
    {
        $primeiraLinha = $dadosAluno[0];
        $aluno = Aluno::comCpfNomeEEmail($primeiraLinha['cpf'], $primeiraLinha['nome'], $primeiraLinha['email']);
        $telefones = array_filter($dadosAluno, fn ($linha) => $linha['ddd'] !== null && $linha['numero_telefone'] !== null);
        foreach ($telefones as $linha) {
            $aluno->adicionarTelefone($linha['ddd'], $linha['numero_telefone']);
        }

        return $aluno;
    }
}
