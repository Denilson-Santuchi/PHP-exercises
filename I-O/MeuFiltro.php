<?php class MeuFiltro extends php_user_filter
{
    public $stream;

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing): int
    {
        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);
            $saida = '';

            foreach ($linhas as $linha) {
                if (stripos($linha, 'will') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketStaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketStaida);

        return PSFS_PASS_ON;
    }
}
