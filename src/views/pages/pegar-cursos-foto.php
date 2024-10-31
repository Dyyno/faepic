<?php 
$linhas = count($data);
if ($linhas > 0) {
    foreach ($data as $d) {
        $turmaId = $d['id'];
        $turma = $d['turma'];
        echo "<option value='$turma'>$turma</option>";
    }
}
?>