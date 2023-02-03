<?php

$lista = file('lista-tests.txt');
$lista2 = file('listas-tests.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($lista as $value) {
    $line = [trim($value), 'Sim'];

    fputcsv($arquivoCsv, $line, ';');
}

foreach ($lista2 as $value) {
    $line = [trim($value), 'Não'];

    fputcsv($arquivoCsv, $line, ';');
}

fclose($arquivoCsv);
