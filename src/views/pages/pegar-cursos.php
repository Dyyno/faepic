<?php 
use src\handlers\PhotoHandler;
$linhas = count($data);
if ($linhas > 0) {
    foreach ($data as $d) {
        $turmaId = $d['id'];
        $turma = $d['turma'];
        echo <<<HTML
            <a href="{$base}/turma/{$turmaId}" class="folderAreaA">
                <div class="folderArea">
                    <div class="folder">
            HTML;
            $photos = PhotoHandler::getPhotosByClass($turma);
            if (count($photos) == 0) {
                for($i = 0; $i < 4; $i++) { 
                    echo "<div class='emptyTotal'></div>";
                }
            } else {
                for($i = 0; $i < 4; $i++) {
                    if(isset($photos[$i])) {
                        if($photos[$i]['ativo'] == 'yes') {
                            $foto = $photos[$i]['photo'];
                            echo "<img src='$base/media/$foto' alt=''>";
                        } else {
                            echo "<div class='empty'></div>";
                        }
                    } else {
                        echo "<div class='empty'></div>";
                    }
                }
            }
            echo <<<HTML
                    </div>
                    <div class="folderName">{$turma}</div>
                </div>
            </a>
            HTML;
    }

}
?>