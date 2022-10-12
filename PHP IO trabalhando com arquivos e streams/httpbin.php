<?php

$contexto = stream_context_create([
    'http' => [
        'method' => 'POST',
        'header' => "X-from: PHP\r\ncontent-type: text/plain",
        'content' => 'Teste no corpo',

    ]
]);

echo file_get_contents("http://httpbin.org/post", false, $contexto);