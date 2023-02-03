<?php 

$arquivo = fopen('lista-tests.txt', 'r');

stream_filter_append($arquivo, "string.toupper");

echo fread($arquivo, filesize('lista-tests.txt'));
