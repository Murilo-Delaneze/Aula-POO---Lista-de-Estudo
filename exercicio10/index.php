<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Agendamento de Manutenção</title>
</head>
<body>
    <h2>Agendamento de Manutenção</h2>
    <form action="processa.php" method="POST">
        <label>Nome do responsável:</label><br>
        <input type="text" name="responsavel" required>
        <br>
        <label>Nome do equipamento:</label><br>
        <input type="text" name="equipamento" required>
        <br>
        <label>Quantidade de equipamentos:</label><br>
        <input type="number" name="quantidade" required>
        <br>
        <label>Tipo de serviço:</label>
        <br>
        <select name="tipo_servico" required>
            <option value="Preventiva">Preventiva</option>
            <option value="Corretiva">Corretiva</option>
            <option value="Instalacao">Instalação</option>
        </select>
        <br><br>
        <button type="submit">Calcular Tempo Estimado</button>
    </form>
</body>
</html>
