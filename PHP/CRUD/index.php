<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Clientes</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <h1>CRUD de Clientes</h1>

    <div>
        <h2>Cadastrar Novo Cliente</h2>
        <form action="actions/create.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>

</body>
</html>
