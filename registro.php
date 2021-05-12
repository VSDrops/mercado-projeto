<?php
# Aplicar no banco de dados
include_once("config.php");
	
#$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
#$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
#$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
#$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
#$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

$nome   = $_POST['nome'];
$email  = $_POST['email'];
$data   = $_POST['data'];
$cpf    = $_POST['cpf'];
$sexo   = $_POST['sexo'];
$cell   = $_POST['cell'];
$rua    = $_POST['logradouro'];
$num    = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep    = $_POST['cep'];

$result_webmercado = "INSERT INTO webmercado (nome, email, dataN, cpf, sexo, cell, logradouro, numero, bairro, cidade, estado, cep) VALUES ('$nome', '$email', '$data', '$cpf', '$sexo', '$cell', '$rua', '$num', '$bairro', '$cidade', '$estado', '$cep')";
$cadastro = mysqli_query($conn, $result_webmercado);




#$query = "INSERT INTO webmercardo (nome, email, dataN, cpf) VALUES ('$nome', '$email', '$data', '$cpf')";
#$cadastro = mysqli_query($conn, $query);