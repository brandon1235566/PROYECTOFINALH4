<?php

require '../vendor/autoload.php';

use Dompdf\Dompdf;

include("../modelo/conexion.php");

/*
========================================
CONSULTAR DATOS
========================================
*/

$consulta = mysqli_query(
    $conexion,
    "SELECT * FROM sensores ORDER BY id DESC"
);

/*
========================================
HTML PDF
========================================
*/

$html = '

<h1 style="color:#2d6a4f;">
📄 Reporte AgroVisión
</h1>

<p>
Sistema IoT Agrícola Inteligente
</p>

<table
width="100%"
border="1"
cellspacing="0"
cellpadding="8"
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
GENERAR PDF
========================================
*/

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream(
    "Reporte_AgroVision.pdf",
    array("Attachment" => false)
);

?>