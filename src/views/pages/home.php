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

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/home.css">
    <title>Faepic - Home</title>
</head>

<body>
    <main>
        <header>
            <img src="<?= $base; ?>/assets/images/logo-text.svg" alt="">
            <select name="curso" id="curso" onchange="changeClass()">
                <?php
                $data = CourseHandler::getCourses();
                $cursoNome;
                foreach ($data as $curso) {
                    switch($curso['curso']) {
                        case 'informatica':
                            $cursoNome = 'Informática';
                            break;
                        case 'analises':
                            $cursoNome = 'Análises Clínicas';
                            break;
                        case 'gerencia':
                            $cursoNome = 'Gerência em Saúde';
                            break;
                        case 'administracao':
                            $cursoNome = 'Administração';
                            break;    
                    }
                    echo '<option value="' . $curso['curso'] . '">' . $cursoNome . '</option>';
                }
                ?>
            </select>
        </header>
        <div id="folders">
            
        </div>
    </main>
    
    <img src="<?= $base; ?>/assets/images/wave-2.svg" alt="">

    <script>
        <?php 
        if ($_SESSION['flash'] == 'Foto adicionada com sucesso! Foto indo para a verificação.') {
        ?>
            alert('<?= $_SESSION['flash']; ?>');
        <?php } 
        $_SESSION['flash'] = '';
        ?>

        changeClass();
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