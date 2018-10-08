<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Usuario</title>
</head>
<body>
    <div class="container">
        <h1><?= $usuario->nome ?></h1>
        <ul>
            <li>
                <?= $usuario->login ?>
            </li>
            <li>
                <?= $usuario->idade ?>
            </li>
            <li>
                <?= $usuario->email ?>
            </li>
        </ul>
    </div>
</body>
</html>
