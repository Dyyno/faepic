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
        <img src="<?=$base;?>/assets/images/ilust-login.svg" alt="">
        <div id="areaLogin">
            <h1>Faça o Login</h1>
            <form action="<?=$base;?>/login" method="post">
                <input type="text" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <input type="submit" value="Login">
            </form>
            <div id="withoutAccount">
                <div class="line-gradient"></div>
                <p>Ainda não tem uma conta?</p>
                <div class="line-gradient-inverted"></div>
            </div>
            <a href="<?=$base;?>/cadastro">Cadastre-se</a>
        </div>
    </main>
    <img src="<?=$base;?>/assets/images/wave.svg" alt="">
</body>
</html>