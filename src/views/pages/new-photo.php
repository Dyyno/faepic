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

    <link rel="stylesheet" href="<?= $base; ?>/assets/css/new-photo.css">
    <title>FaePic - Publicar</title>
</head>


<body>
    <header>
        <a href="<?=$base;?>/"><img src="<?=$base;?>/assets/images/close.svg" alt=""></a>
    </header>
    <main>
        <div id="formArea">
            <form action="<?=$base;?>/nova-foto" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?=$user->id;?>">
                <div id="descArea">
                    <h1>Adicionar Descrição</h1>
                    <textarea name="description" id="description" placeholder="Insira uma descrição aqui..."></textarea>
                    <h2>Selecionar Curso</h2>
                    <select name="curso" id="curso" onchange="changeClass()">
                        <?php
                        $data = CourseHandler::getCourses();
                        $cursoNome;
                        foreach ($data as $curso) {
                            switch ($curso['curso']) {
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
                    <select name="turma" id="turma">

                    </select>
                </div>
                <div id="photoArea">
                    <input type="file" id="image-input" name="image" accept="image/*" style="display: none;">
                    <button id="image-button">
                        Selecionar Imagem
                        <img src="<?= $base; ?>/assets/images/upload.svg" alt="">
                    </button>
                    <div id="submitArea">
                        <input type="submit" value="Publicar">
                    </div>
                </div>
            </form>
        </div>
    </main>

    <img src="<?= $base; ?>/assets/images/wave-2.svg" alt="" class="wave">

    <script>
        changeClass();
        const imageInput = document.getElementById('image-input');
        const imageButton = document.getElementById('image-button');
        const undoButton = document.getElementById('undo-button');

        imageButton.addEventListener('click', function() {
            event.preventDefault();
            imageInput.click();
        });

        imageInput.addEventListener('change', function() {
            const fileName = imageInput.value.split('\\').pop();
            imageButton.textContent = 'Selecionada: ' + fileName;
        });

        function changeClass() {
            let curso = $('#curso').val();
            $.ajax({
                method: 'GET',
                url: '<?=$base;?>/pegar-cursos-foto',
                data: {curso},
                success: function(result) {
                    $('#turma').html(result);
                }
            });
        }
    </script>
</body>

</html>