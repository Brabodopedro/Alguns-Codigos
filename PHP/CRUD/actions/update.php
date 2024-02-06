<?php
include '../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    
    $sql = "UPDATE clientes SET nome='$nome', email='$email' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente: " . $conn->error;
    }
}

$conn->close();
?>
