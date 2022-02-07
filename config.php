<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbNme = 'formulario';

$conexao = new mysqli($dbHost,$dbNme,$dbPassword,$dbUsername);

// if($conexao->connect_errno)
// {
//     echo "Erro";
// }
// else
// {
//     echo "Conexao efetuada com sucesso"
// }

?>