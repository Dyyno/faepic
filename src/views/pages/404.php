<?php 
use src\handlers\CourseHandler;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $base; ?>/assets/images/logo.svg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/error.css">
    <title>Faepic - 404</title>
</head>

<body>
    <main>
        <header>
            <img src="<?= $base; ?>/assets/images/logo-text.svg" alt="">
            
        </header>
        <div id="principal">
            <img src="<?= $base; ?>/assets/images/error.svg" alt="">
            <h1>Erro 404</h1>
            <p>Página não encontrada</p>
            <a href="<?= $base; ?>/feira">Voltar para o Hub</a>
        </div>
    </main>
    
    <img src="<?= $base; ?>/assets/images/wave-2.svg" alt="">
</body>

</html>