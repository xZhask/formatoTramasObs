<?php
require 'libraries/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
/*$archivo = $_FILES['mi-archivo']['name'];
$source = $_FILES['mi-archivo']['tmp_name'];
$directorio = '../../resources/libraries/filesExcel/';
$archivo = time() . '.xls';
$dir = opendir($directorio);
$target_path = $directorio . '/' . $archivo;
move_uploaded_file($source, $target_path);
*/
//$ruta = '../../resources/libraries/filesExcel/' . $archivo;
/* $ruta = 'files/OBS.xlsx';
$documento = IOFactory::load(($ruta));
$hojaActual = $documento->getSheet(0);
session_start();

$condition = $hojaActual->getCell("B8")->getValue();
if ($condition === 'CODIGO CPT') {
    $ultimaFila = $hojaActual->getHighestRow();
    $tabla = '';
    $cont = 0;
    for ($i = 10; $i <= $ultimaFila; $i++) {
        $coordenadas = "B" . $i;
        $celda = $hojaActual->getCell($coordenadas)->getValue();
        if (strlen($celda) < 9) {
            $celdaTipo = $hojaActual->getCell("K" . $i)->getValue();
            if (!in_array($celda, $tarifario))
                if ($celdaTipo !== 'NANDA') {
                    $cpms = $hojaActual->getCell("C" . $i)->getValue();
                    $idAtencion = $hojaActual->getCell("N" . $i)->getValue();
                    $responsable = $hojaActual->getCell("E" . $i)->getValue();
                    #armar array
                    $fila = ['idCpms' => $celda, 'cpms' => $cpms, 'idAtencion' => $idAtencion, 'responsable' => $responsable];
                    $_SESSION['lastValidation'][] = $fila;
                    $tabla .= '<tr>';
                    $tabla .= '<td>' . $celda . '</td>';
                    $tabla .= '<td>' . $cpms . '</td>';
                    $tabla .= '<td>' . $idAtencion . '</td>';
                    $tabla .= '<td>' . $responsable . '</td>';
                    $tabla .= '</tr>';
                    $cont = 1;
                }
        }
    }
    if ($cont === 0) $tabla = '<tr><td colspan="4">NO SE ENCONTRARON OBSERVACIONES</td></tr>';
    $response = $tabla;
} else {
    $cont = -1;
    $response = 'Archivo inválido';
}
#CODIGO CPT


$respuesta = ['result' => $cont, 'data' => $response];
echo json_encode($respuesta);
unlink($ruta);
break;
 */

$cod1 = '132465';
$cod2 = '132878';
$miauObj = [
    $cod1 => [
        'nombre' => 'CESAR JOSUÉ SILVA AGUILAR',
        'ipress' => 'HOSP CHICLAYO',
        'IDipress' => '132',
        'T2' => 2,
        'T1' => []
    ],
    $cod2 => [
        'nombre' => 'ROXELL CHAVEZ NAVA',
        'ipress' => 'HOSP. AREQUIPA',
        'idipress' => '987',
        'T2' => 2,
        'T1' => []
    ],
];
//$obj = json_encode($miauObj);
$nombre = $miauObj['132465']['nombre'];
//echo json_encode($miauObj[$cod1]['nombre']);
echo $nombre;
