<?php
include '../includes/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    
    $sql = "DELETE FROM clientes WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cliente excluído com sucesso!";
    } else {
        echo "Erro ao excluir cliente: " . $conn->error;
    }
}

$conn->close();
?>
