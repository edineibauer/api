<?php
$key = md5($dados['pastas_de_acesso'] . strtotime('now'));

$up = new \ConnCrud\Update();
$up->exeUpdate(PRE . "api_chaves", ["chave" => $key], "WHERE id = :id", "id={$dados['id']}");