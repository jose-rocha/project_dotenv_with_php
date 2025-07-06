<?php

// ====================================================================
// TODO:  Não esquecer de criar um arquivo .env se não ao executar irá gerar um erro
// ====================================================================

// FIXME: Verificar se o caminho do autoload está correto
// NOTE: Este projeto usa vlucas/phpdotenv para gerenciar variáveis de ambiente
// WARNING: Sem o arquivo .env, a aplicação irá falhar

require_once '../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// var_dump($dotenv);
// var_dump($_ENV['USER']);
var_dump($_ENV);