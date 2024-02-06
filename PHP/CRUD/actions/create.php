<?php
include '../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . $conn->error;
    }
}

$conn->close();
?>
