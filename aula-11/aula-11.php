<?php

$servidor = "localhost";
$banco = "banco_aula";
$usuario = "root";
$senha = "";

$con = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
