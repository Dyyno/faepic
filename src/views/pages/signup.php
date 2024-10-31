<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo.svg" type="image/x-icon">

    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.css">
    <title>Login</title>
</head>
<body>
    <main>
        <div id="header">
            <a href="<?=$base;?>/login"><img src="<?=$base;?>/assets/images/arrow.svg" alt=""></a>
            <img src="<?=$base;?>/assets/images/ilust-register.svg" alt="">
        </div>
        <div id="areaLogin">
            <h1>Crie sua Conta</h1>
            <form action="<?=$base;?>/cadastro" method="post">
                <input type="text" name="username" placeholder="Nome de Usuário">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit" value="Cadastre-se">
            </form>
        </div>
    </main>
    <img src="<?=$base;?>/assets/images/wave.svg" alt="">
</body>
</html>