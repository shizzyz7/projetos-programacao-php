<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'login';

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_error) {
    die("Não deu certo fazer a conexão");
}
?>