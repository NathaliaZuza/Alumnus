<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir perfil</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/definirPerfil.css">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png">
</head>
<body>

    <?php include('../header.php')  ?>
    <main class="boxMain boxDefinirWrapper">
        <div class="boxDefinir">
            <h1>Selecione o tipo de acesso</h1>
            <span>Por favor, selecione o perfil com o qual deseja acessar o sistema.</span>
            
            <form action="..\..\Controller\definirPapelController.php" method="post">
                <label>
                    <input type="submit" name="roleAdmin" value="admin" required>
                </label>
                <label>
                    <input type="submit" name="roleUsuario" value="usuário" required>
                </label>
            </form>
        </div>
    </main>
    <?php include('../footer.php')  ?>
</body>
</html>
