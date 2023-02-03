<?php

$archive = fopen('listas-tests.txt', 'w');

$line = 'will add in arquive';

fwrite($archive, $line);

fclose($archive);
