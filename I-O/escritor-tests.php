<?php

$archive = fopen('lista-tests.txt', 'a');

$line = "\nwill add in arquive";

fwrite($archive, $line);

fclose($archive);
