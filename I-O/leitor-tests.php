<?php

$archive = fopen('lista-tests.txt', 'r');

while (!feof($archive)) {
    $line = fgets($archive);

    echo $line;
}

fclose($archive);
