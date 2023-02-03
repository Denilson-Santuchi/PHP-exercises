<?php

/* saida normal não verbosa
$content = fopen('php://stdout', 'w'); */

/* saida de erro
$content = fopen('php://stderr', 'w'); */

fwrite(STDOUT, 'Hello Word!');