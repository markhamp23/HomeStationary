<?php //CONNEXIÓ A LA BASE DE DADES
include_once('../../admin/lib/connectar.php');
include_once('../../admin/lib/dates.php');

$stmt=$conn->prepare('SELECT * FROM noticies ORDER BY Id ASC');
$stmt->execute();
$total = $stmt->rowCount();


//NOMBRE REGISTRES A MOSTRAR PER PAGINA
$numimg=10;
//EL VALOR DE LA PÀGINA ES REBRA PER GET
if(isset($_GET['pag'])){
      $regIni=($_GET['pag']-1)*$numimg;
      $regFi=$regIni+$numimg;
      $paginaActual=$_GET['pag'];
      //INICIALITZAR VALORS
}else{
      $regIni=0;
      $regFi=$regIni+$numimg;
      $paginaActual=1;
      }

//DETERMINAR EL NUMERO DE PÀGINES -- CALCUL
$paginaAnterior=$paginaActual-1;
$paginaSeguent=$paginaActual+1;
$paginaFinal=$total/$numimg;
$numPags=$total%$numimg;
if($numPags>0) {
      $paginaFinal = floor($paginaFinal) + 1;
}

print "<nav aria-label=\"Page navigation\">";
print "<ul class=\"pagination\">";
if((isset($_GET['pag']) && $_GET['pag']==1) || !isset($_GET['pag'])){$first="class='disabled'";}
else{$first="";}
print "<li ".$first."><a href=\"?sec=imatges&pag=1\" aria-label=\"Previous\"><span aria-hidden=\"true\">Primera</span></a></li>";
//if($paginaActual>1) print "<li><a href=\"?sec=imatges&pag=".$paginaAnterior."\" aria-label=\"Previous\"><span aria-hidden=\"true\">&laquo;</span></a></li>";
for($i=1;$i<=$paginaFinal;$i++){
      if((isset($_GET['pag']) && $i==$_GET['pag'])){$actual="class='active'";}
      else{$actual="";}
      print "<li ".$actual."><a href=\"?sec=imatges&pag=".$i."\">".$i."</a></li>";
}
//if($paginaActual<$paginaFinal) print "<li><a href=\"?sec=imatges&pag=".$paginaSeguent."\" aria-label=\"Next\"><span aria-hidden=\"true\">&raquo;</span></a>";
if(isset($_GET['pag']) && $_GET['pag']==$paginaFinal){$last="class='disabled'";}
else{$last="";}
print "<li ".$last."><a href=\"?sec=imatges&pag=".$paginaFinal."\" aria-label=\"Next\"><span aria-hidden=\"true\">Darrera</span></a>";
print "</li>";
print "</ul>";
print "</nav>";
print "<strong>Pàgina ".$paginaActual." de ".$paginaFinal ."</strong>";
?>

<?php
$stmt=$conn->prepare('SELECT * FROM noticies ORDER BY Id ASC LIMIT :numero OFFSET :regini');
$stmt->bindParam(':numero', $numimg, PDO::PARAM_INT);
$stmt->bindParam(':regini', $regIni, PDO::PARAM_INT);
$stmt->execute();
while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
     //SORTIR DEL BICLE EN CAS DE QUE ES SUPERI EL NOMBRE D'IMATGES
     if($regIni>=$total) break;
     if($regIni%10==0){echo "<hr>";}
	echo $data['Name'];
	$regIni++;

echo "<hr>";
}?>  