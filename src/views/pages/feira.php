<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo.svg" type="image/x-icon">

    <link rel="stylesheet" href="<?=$base;?>/assets/css/feira.css">
    <title>Login</title>
</head>
<body>
    <main>
        <img src="<?=$base;?>/assets/images/ilust-feira.svg" alt="" id="banner">
        <div id="areaLogin">
            <h1>Acesse</h1>
            <a href="<?=$base;?>/hub">Nossos Trabalhos</a>
            <div id="withoutAccount">
                <div class="line-gradient"></div>
                <p>ou</p>
                <div class="line-gradient-inverted"></div>
            </div>
            <a href="<?=$base;?>/" id="faepic"><img src="<?=$base;?>/assets/images/faepic-branca.svg" alt=""></a>
        </div>
    </main>
    <img src="<?=$base;?>/assets/images/wave.svg" alt="">
</body>
</html>