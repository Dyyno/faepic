<?php 
use src\handlers\UserHandler;
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

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/photo.css">
    <title>Faepic - Foto</title>
</head>


<body>
    <header>
        <a href="<?=$base;?>/turma/<?=$photoTurmaId?>"><img src="<?=$base;?>/assets/images/close.svg" alt=""></a>
    </header>
    <main>
        <div id="imageArea">
            <img src="<?=$base;?>/media/<?=$photo->photo?>" alt="">
        </div>
        <div id="imageInfo">
            <p id="userName"><?=$photoUser['username']?></p>
            <p id="description"><?=$photo->description?></p>
        </div>
    </main>

    <img src="<?= $base; ?>/assets/images/wave-2.svg" alt="" class="wave">

    <script>
        function changeClass() {
            let curso = $('#curso').val();
            $.ajax({
                method: 'GET',
                url: '<?=$base;?>/pegar-cursos',
                data: {curso},
                success: function(result) {
                    $('#folders').html(result);
                }
            });
        }
    </script>
</body>

</html>