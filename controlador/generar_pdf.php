<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;

include("../modelo/conexion.php");

/*
========================================
CONSULTAR SENSORES
========================================
*/

$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM sensores ORDER BY id DESC"
);

/*
========================================
HTML DEL PDF
========================================
*/

$html = '

<h1 style="text-align:center;color:#2d6a4f;">
Reporte AgroVisión
</h1>

<h3 style="text-align:center;">
Reporte Inteligente de Sensores IoT
</h3>

<table
border="1"
cellpadding="10"
cellspacing="0"
width="100%"
style="border-collapse:collapse;"
>

<tr style="background:#2d6a4f;color:white;">

<th>ID</th>
<th>Nombre</th>
<th>Tipo</th>
<th>Ubicación</th>
<th>Estado</th>
<th>Valor</th>
<th>Fecha</th>

</tr>

';

/*
========================================
RECORRER DATOS
========================================
*/

while($sensor = mysqli_fetch_assoc($consulta)){

$html .= '

<tr>

<td>'.$sensor['id'].'</td>

<td>'.$sensor['nombre'].'</td>

<td>'.$sensor['tipo'].'</td>

<td>'.$sensor['ubicacion'].'</td>

<td>'.$sensor['estado'].'</td>

<td>'.$sensor['valor'].'</td>

<td>'.$sensor['fecha'].'</td>

</tr>

';

}

$html .= '</table>';

/*
========================================
CREAR PDF
========================================
*/

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

/*
========================================
DESCARGAR PDF
========================================
*/

$dompdf->stream(
    "Reporte_AgroVision.pdf",
    array("Attachment" => false)
);

?>