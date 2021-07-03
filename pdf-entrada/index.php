<?php
 require '../assets/dataBase/config.php';

 require_once 'vendor/autoload.php';
 use Dompdf\Dompdf;

 $pdf = new Dompdf();
 $sql = $pdo->query("SELECT * FROM entradas");
 $ent = '<center><h1>Vizualisar Entradas</h1></center>';
 $ent .= '<table width=100%>';
 $ent .= '<thead style=background-color:grey>';
 $ent .= '<tr>';
 $ent .= '<th>ORIGEM</th>';
 $ent .= '<th>VALOR</th>';
 $ent .= '<th>DATA</th>';
 $ent .= '</tr>';
 $ent .= '</thead>';
 if($sql->rowCount() > 0){
     $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
 }
 foreach($lista as $item){
     $ent .= '<tbody>';
     $ent .= '<tr>';
     $ent .= '<td>'.$item['origem'].'</td>';
     $ent .= '<td>' .'R$ '.$item['valor'].'</td>';
     $ent .= '<td>' .date('d/m/y', strtotime($item['dia'])).'</td>';
     $ent .= '</tr>';
     $ent .= '</tbody>';
 }
 $ent .= '</table>';

 $pdf->loadHtml($ent);

 $pdf->render();

 $pdf->stream("VizualisarEntrada.pdf", array("Attachment"=>false));
?>