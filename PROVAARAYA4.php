<?php
include_once "../inc/conectabd.inc.php";

$id_curso_para_excluir = 1; // ID do curso a ser excluído

$query = "DELETE FROM curso.tb_curso WHERE id_curso = $id_curso_para_excluir";

if ($result = mysqli_query($link, $query)) {
    echo "Exclusão do curso realizada com sucesso";
} else {
    echo "Erro ao excluir o curso: " . mysqli_error($link);
}

mysqli_close($link);
?>
