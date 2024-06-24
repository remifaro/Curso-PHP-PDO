<?php

$caminhoBanco = __DIR__ . "/banco.sqlite2";
$pdo = new PDO('sqlite:'.$caminhoBanco); //dsn - string de conexão de cada um dos bancos

echo 'Conectei';
