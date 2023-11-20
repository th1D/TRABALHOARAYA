<?php
include_once "../inc/conectabd.inc.php";

$curso = "Nome do Curso";
$carga_horaria = 1500; // A carga horária do curso
$dt_inicio = '2023-11-20'; // A data de início do curso

$query = "INSERT INTO curso.tb_curso (ds_curso, nr_carga_horaria, dt_inicio)
          VALUES ('$curso', $carga_horaria, '$dt_inicio')";

if ($result = mysqli_query($link, $query)) {
    echo "Inclusão do curso realizada com sucesso";
} else {
    echo mysqli_error($link);
}

mysqli_close($link);
?>
