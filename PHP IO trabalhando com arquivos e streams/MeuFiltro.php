<?php

class MeuFiltro extends php_user_filter
{
    
    // 3 métodos 1 - onCreate 2 - onClosa 3 -

    public $stream;

    public function onCreate(): bool
    {
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }
    
    public function filter($in, $out, &$consumed, $closing): int
    {
        $saida = '';

        while ($bucket = stream_bucket_make_writeable($in)) {
            $linhas = explode("\n", $bucket->data);

            foreach ($linhas as $linha) {
                if (stripos($linha, 'parte') !== false) {
                    $saida .= "$linha\n";
                }
            }
        }

        $bucketSaida = stream_bucket_new($this->stream, $saida);
        stream_bucket_append($out, $bucketSaida);
        
        return PSFS_PASS_ON;
    }

}