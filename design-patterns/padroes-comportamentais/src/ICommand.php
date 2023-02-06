<?php

namespace Alura\DesignPattern;

interface ICommand
{
    public function execute(GerarPedidoCommand $gerarPedido): void;
}
