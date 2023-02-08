<?php

namespace Alura\Arquitetura\Dominio\Aluno;

class LogDeAlunoMatriculado
{
    public function reageAo(AlunoMatriculado $alunoMatriculado): void
    {
        fprintf(
            STDERR,
            'Aluno com CPF %s foi matriculado na data %s',
            (string) $alunoMatriculado->cpfAluno(),
            $alunoMatriculado->momento()->format('d/m/y'),
        );
    }
}
