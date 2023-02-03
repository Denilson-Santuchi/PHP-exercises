<?php

require_once 'MeuFiltro.php';

$arquivo = fopen('lista-tests.txt', 'r');

stream_filter_register('filter.will', MeuFiltro::class);
stream_filter_append($arquivo, "filter.will");

echo fread($arquivo, filesize('lista-tests.txt'));
