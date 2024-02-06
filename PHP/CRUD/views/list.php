<?php include '../includes/db_config.php'; ?>

<?php
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nome</th><th>Email</th></tr>';

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['email']}</td></tr>";
    }

    echo '</table>';
} else {
    echo "Nenhum cliente cadastrado.";
}

$conn->close();
?>
