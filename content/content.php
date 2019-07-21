
<?php

	include_once('./admin/lib/connectar.php');
	include_once('./admin/lib/dates.php');

	//NOMBRE REGISTRES A MOSTRAR PER PAGINA
	
	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY ID ASC" );
	$stmt->execute();
	$total = $stmt->rowCount();
	$numimg=8;
	
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
	
	$stmt=$conn->prepare("SELECT * FROM post where Permission = '1' ORDER BY data desc LIMIT :numero OFFSET :regini");
	$stmt->bindParam(':numero', $numimg, PDO::PARAM_INT);
	$stmt->bindParam(':regini', $regIni, PDO::PARAM_INT);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	    //SORTIR DEL BICLE EN CAS DE QUE ES SUPERI EL NOMBRE D'IMATGES		 
	    if($row['Permission']==1){
		if($regIni>=$total) break;	
?>

<!----------------------Thumb------------------->

<div class='post-outer'>
<div class='post hentry'>

<h3 class='post-title entry-title'>
<?php print "<a href=\"?sec=index_input&id=$row[ID]\">$row[Title]</a>";?>
</h3>

<div class='post-body entry-content'>
<div id="summary<?php print $row['ID']?>">


<table align="center" cellpadding="0" cellspacing="0" class="tr-caption-container" style="margin-left: auto; margin-right: auto; text-align: center;">
<tbody>
<tr><td style="text-align: center;"><a href="uploads/<?php print $row['Image_1'] ?>" imageanchor="1" style="margin-left: auto; margin-right: auto;"><img alt="" border="0" height="122" src="uploads/<?php print $row['Image_1']?>" title="" width="400" /></a></td></tr>
<tr><td class="tr-caption" style="text-align: center;"><span class="Apple-style-span" style="font-size: small;"><?php print $row['Title'] ?>&nbsp;</span></td></tr>
</tbody></table><br />
</div>
<script type='text/javascript'>createSummaryAndThumb("summary<?php print $row['ID'] ?>");</script>
</div>
</div>
</div>

<!-------------------End Thumb----------------->
<?php } ?>
<?php } ?>

</div>    
</div>

<!----------------------Older Post Button-----Newer Post Button-------------->

<?php
	print "<div class='blog-pager' id='blog-pager'>";
	//Newer Post Button
	if ($paginaAnterior > 0 && $paginaActual <= $paginaFinal) {	 
	print "<span id='blog-pager-newer-link'>";
	print "<a class=\"blog-pager-newer-link\" href=\"?sec=content&pag=".$paginaAnterior."\" id=\"Blog1_blog-pager-newer-link\" title=\"Newer Post\">Newer Post</a>";
	print "</span>";
	}
	
	//Older Post Button
	if ($paginaActual > 0 && !($paginaActual >= $paginaFinal)) {
	print "<span id='blog-pager-older-link'>";
	print "<a class=\"blog-pager-older-link\" href=\"?sec=content&pag=".$paginaSeguent."\" id=\"Blog1_blog-pager-older-link\" title=\"Older Posts\">Older Posts</a>";
	print"</span>";
	}
	print "</div>";
?>
	

