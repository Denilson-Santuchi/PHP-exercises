<?php

$lista = file('lista-tests.txt');
$lista2 = file('listas-tests.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($lista as $value) {
    $line = [trim(mb_convert_encoding($value, 'Windows-1252', 'UTF-8')), 'Sim'];

    fputcsv($arquivoCsv, $line, ';');
}

foreach ($lista2 as $value) {
    $line = [trim(mb_convert_encoding($value, 'Windows-1252', 'UTF-8')), 'Não'];

    fputcsv($arquivoCsv, $line, ';');
}

fclose($arquivoCsv);
