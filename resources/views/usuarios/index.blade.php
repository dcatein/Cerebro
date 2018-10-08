<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Usuários</title>
</head>
<body>
    <div class="container">
        <h1>Usuários</h1>
        <table class="table">
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $usuario->nome ?></td>
                <td><?= $usuario->login ?></td>
                <td>
                    <a href="usuarios/show/<?= $usuario->id ?>">
                    detalhes
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>
