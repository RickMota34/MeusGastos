<?php
require '../assets/dataBase/config.php';

require_once 'vendor/autoload.php';
use Dompdf\Dompdf;

$pdf = new Dompdf();
$sql = $pdo->query("SELECT * FROM saidas");
$html = '<center><h1>Vizualisar Saídas</h1></center>';
$html .= '<table width=100%>';
$html .= '<thead  style=background-color:grey>';
$html .= '<tr>';
$html .= '<td>Nome</td>';
$html .= '<td>Valor</td>';
$html .= '<td>Data</td>';
$html .= '</tr>';
$html .= '</thead>';
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
foreach($lista as $item){
    $html .= '<tbody>';
    $html .= '<tr>';
    $html .= '<td>'.$item['nome'].'</td>';
    $html .= '<td>R$ '.$item['valor'].'</td>';
    $html .= '<td>'.date('d/m/y', strtotime($item['dia'])).'<td>';
    $html .= '</tr>';
    $html .= '</tbody>';
}
$html .= '</table>';

$pdf->loadHtml($html);

$pdf->render();

$pdf->stream("VizualisarSaidas.pdf",array("Attachment"=>false));