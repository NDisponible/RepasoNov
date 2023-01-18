<?php 
require_once("c://xampp/htdocs/RepasoNov/config/db.php");
$columns = ['idAlumno','codigo','nombre','apellidos','telefono','email','direccion','idNota','idMatriculas'];
$table = "username";
$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;
$html = '';
if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>'.$row['idAlumno'].'</td>';
        $html .= '<td>'.$row['codigo'].'</td>';
        $html .= '<td>'.$row['nombre'].'</td>';
        $html .= '<td>'.$row['apellidos'].'</td>';
        $html .= '<td>'.$row['telefono'].'</td>';
        $html .= '<td>'.$row['email'].'</td>';
        $html .= '<td>'.$row['direccion'].'</td>';
        $html .= '<td>'.$row['idNota'].'</td>';
        $html .= '<td>'.$row['idMatriculas'].'</td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}
echo json_encode($html, JSON_UNESCAPED_UNICODE);
?>