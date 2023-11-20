<?php
include_once "../inc/conectabd.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curso = mysqli_real_escape_string($link, $_POST['curso']);
    $carga_horaria = (int)$_POST['carga_horaria'];
    $dt_inicio = $_POST['dt_inicio'];

    if (empty($curso) || empty($carga_horaria) || empty($dt_inicio)) {
        echo "Por favor, preencha todos os campos.";
    } else {
        $query = "INSERT INTO curso.tb_curso (ds_curso, nr_carga_horaria, dt_inicio)
                  VALUES ('$curso', $carga_horaria, '$dt_inicio')";

        if (mysqli_query($link, $query)) {
            echo "Inclusão do curso realizada com sucesso";
        } else {
            echo "Erro ao inserir o curso: " . mysqli_error($link);
        }
    }
}

mysqli_close($link);
?>
