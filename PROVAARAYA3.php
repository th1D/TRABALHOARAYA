<?php
include_once "../inc/conectabd.inc.php";

$query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM curso.tb_curso";

$result = mysqli_query($link, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        echo "<h2>Cursos Disponíveis</h2>";
        echo "<table border='1'>
              <tr>
                <th>ID</th>
                <th>Curso</th>
                <th>Carga Horária</th>
                <th>Data de Início</th>
              </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id_curso'] . "</td>";
            echo "<td>" . $row['ds_curso'] . "</td>";
            echo "<td>" . $row['nr_carga_horaria'] . "</td>";
            echo "<td>" . $row['dt_inicio'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum curso encontrado.";
    }

    mysqli_free_result($result);
} else {
    echo "Erro ao executar a consulta: " . mysqli_error($link);
}

mysqli_close($link);
?>
