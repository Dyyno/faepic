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

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/turma.css">
    <title>Faepic - <?= $turmas->turma; ?></title>
</head>


<body>
    <header>
        <a href="<?=$base;?>/"><img src="<?= $base; ?>/assets/images/arrow.svg" alt=""></a>
        <div id="classArea">
            <img src="<?= $base; ?>/assets/images/folder.svg" alt="">
            <div id="classAreaName"><?=$turmas->turma;?></div>
        </div>
    </header>
    <main>
        <div id="photos">
        <?php 
        foreach($photos as $photo) {
            if(isset($photo)) {
                if($photo['ativo'] == 'yes') {
                    $photoId = $photo['id'];
                    $photoCont = $photo['photo'];
                    $userPhotoId = $photo['id_user'];
                    $user = UserHandler::searchById($userPhotoId);
                    $username = $user['username'];
                    echo "
                    <a href='$base/foto/$photoId' class='photoAreaA'>
                    <div class='photoArea'>
                        <div class='photoArea-area'>
                            <img src='$base/media/$photoCont' alt=''>
                        </div>
                        <div class='photoUserName'>$username</div>
                    </div>
                    </a>";
                }
            }
        }
        
        ?>
        </div>
        <div id="waveArea"><img src="<?= $base; ?>/assets/images/wave-2.svg" alt="" class="wave"></div>
    </main>

    <a href="<?= $base; ?>/nova-foto">
        <div id="addPhoto"><img src="<?= $base; ?>/assets/images/add.svg" alt=""></div>
    </a>


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