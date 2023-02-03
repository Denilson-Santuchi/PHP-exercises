<?php

$content = trim(fgets(STDIN));

file_put_contents('lista-tests.txt', "\n$content", FILE_APPEND);
