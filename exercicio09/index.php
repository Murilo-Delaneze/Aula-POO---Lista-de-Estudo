<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <header>
        <h2>Formulário</h2>
    </header>
    <main>
        <form action="processa.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="distancia">Distancia Percorrida (Km)</label>
            <input type="number" id="distancia" name="distancia" required>
            <br>
            <label for="tempo">Tempo utilizado (Horas)</label>
            <input type="number" id="tempo" name="tempo" required>
            <br>
            <br>
            <button type="submit">Calcular</button>
        </form>
    </main>
</body>
</html>