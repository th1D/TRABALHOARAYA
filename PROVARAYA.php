<?php
include_once "../inc/conectabd.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id_curso'])) {
    $id_curso_para_excluir = $_GET['id_curso'];

    $query = "SELECT * FROM curso.tb_curso WHERE id_curso = $id_curso_para_excluir";
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "<h3>Você está prestes a excluir o curso: " . $row['ds_curso'] . "</h3>";
        echo "<p>Tem certeza que deseja excluir?</p>";
        echo "<a href='exclusao_curso.php?id_curso=" . $row['id_curso'] . "&confirm=true'>Sim</a>";
        echo " | ";
        echo "<a href='lista_cursos.php'>Não</a>";
    } else {
        echo "Curso não encontrado.";
    }

    mysqli_free_result($result);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['confirm']) && $_GET['confirm'] == "true") {
    $id_curso_para_excluir = $_GET['id_curso'];

    $query = "DELETE FROM curso.tb_curso WHERE id_curso = $id_curso_para_excluir";

    if (mysqli_query($link, $query)) {
        echo "Exclusão do curso realizada com sucesso";
    } else {
        echo "Erro ao excluir o curso: " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
