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

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/admin.css">
    <title>Faepic - Verificação</title>
</head>


<body>
    <header>
        <div id="classArea">
            <img src="<?= $base; ?>/assets/images/folder.svg" alt="">
            <div id="classAreaName">Verificação</div>
        </div>
    </header>
    <main>
        <div id="photos">
        <?php 
        foreach($photos as $photo) {
            if(isset($photo)) {
                
                $photoId = $photo['id'];
                $photoCont = $photo['photo'];
                $photoClass = $photo['turma'];
                $userPhotoId = $photo['id_user'];
                $photoDesc = $photo['description'];
                $user = UserHandler::searchById($userPhotoId);
                $username = $user['username'];
                echo "
                <div class='photoAreaA'>
                <div class='photoArea'>
                    <div class='photoArea-area'>
                        <img src='$base/media/$photoCont' alt=''>
                    </div>
                    <div class='photoUserName'>$username</div>
                    <div class='photoClass'>$photoClass</div>
                    <div class='photoDesc'>$photoDesc</div>
                    <div class='photoButtons'>
                        <a class='acceptButton' href='$base/admin/aceitar/$photoId'>Aceitar</a>
                        <a class='rejectButton' href='$base/admin/recusar/$photoId'>Recusar</a>
                    </div>
                </div>
                </div>";
            }
        }
        ?>
        </div>
    </main>

    <img src="<?= $base; ?>/assets/images/wave-2.svg" alt="" class="wave">

    <script>

    </script>
</body>

</html>