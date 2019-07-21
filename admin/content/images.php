<!DOCTYPE html>
<html lang="es">
<head>
    	
<style type="text/css">
.pictures:hover {
box-shadow: 0 0 10px 5px #4d4d4d;}	
.pictures {    
width: 160px;   
height: 197px;    
float: left;      
text-align: center;   	 
margin: 6px;
padding:2px;	
border-top: 1px solid #737373;    
border-left: 1px solid #737373;    
border-right: 1px solid #737373;  
border-bottom: 1px solid #737373;	    
transition: all .3s linear;    
-o-transition: all .3s linear;    
-moz-transition: all .3s linear;   
-webkit-transition: all .3s linear;
}
.captiones{  
width: 100%;     
float: left;   
color: #333; 
text-align: center;
font-size: 12px;   
font-weight: normal;  
font-weight: bold;  
padding-top:2px;
}
.captiones button{
width: 100%;
background-color: #e6e6e6;
border-color: #737373;
color: #737373; 
}
.captiones button:hover{
background-color: #808080;
border-color: #333;
color: #ffffff; 
}
.captiones button:active:hover{
background-color: #808080;
border-color: #ffffff;
color: #ffffff; 
}
.centerImage{
border-top: 1px solid #b3b3b3;    
border-left: 1px solid #b3b3b3;    
border-right: 1px solid #b3b3b3;  
border-bottom: 1px solid #b3b3b3; 
padding:3px;	
}	
</style>
	 
</head>
<body>

<?php //CONNEXIÓ A LA BASE DE DADES
include_once('./lib/connectar.php');
include_once('./lib/dates.php');
?>

    <div class="container-fluid">
			<?php
			if(isset($_POST['ver']) && !empty($_POST['ver'])){        
				print "<form method=\"POST\">";
					print "<div class='row'>";
						print "<div class='col-md-12 col-lg-12'>";
							print "<div class='panel panel-default'>"; 
																
							if(isset($_POST['ID'])){
							?>            

							<div class="modal-content">
								<div class="modal-header bg-default  text-white" style="text-align: center;font-weight: bold;">
								  <span class="Apple-style-span;" style="font-size:normal;">
								   <h6 style="text-align: center; color:#595959"><?php print $_POST['ID']?></h6>
								</div>
								<div class="modal-body">														
								<center><input class="centerImage img-responsive" type="image" style='width: 650px; height: 400px;'src="../uploads/<?php echo $_POST['ID']?>" alt="foto"/></center>  							
							</div>
							
							<?php
							}																										  
							print "<div class=\"modal-footer\">";
							print "<button type='sudmit' name='' value='' class=\"btn btn-default\" style=\"background-color:#e6e6e6 !important text-align: right;\">Close</button>";
							print "</div>";

						print "</div>";
					print "</div>";		
					print "</div>";									
				print "</form>";										
			}else{		
			?>
	
            <div class="col-lg-12">
                <h3 class="page-header">Images Gallerysssss</h3>
            </div>
            
           <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Photo Gallery
                        </div>                    
                        <!-- /.panel-heading --> 
                                                
                        <div class="panel-body">
                            <div class="dataTable_wrapper">  
                            	                           	                                                  
                        <?php // CARPETA DE LA QUE S'EXTREUEN LES IMATGES
                        $path = "../uploads/";
                        // EXTRACCIO D'IMATGES DE LA CARPETA
                        $directori = opendir($path);
                        $fitxers = array();
                        while (($file = readdir($directori)) !== false) {
                        if($file != "." && $file != "..") {
                        if(substr($file, -4) == '.jpg' || substr($file, -4) == '.png' || substr($file, -4) == '.gif') {
                                    $fitxers[] = $file;
                                }
                            }
                        }
                        closedir($directori);
                        //ORDENAR FITXERS
                        rsort($fitxers);
                        //TOTAL D'IMATGES DE LA CARPETA
                        $total_imatges=count($fitxers);
						$newArray =Array();
                        //NOMBRE D'IMATGES A MOSTRAR PER PAGINA
                        $numimg=27;
                        //EL VALOR DE LA PÀGINA ES REBRA PER GET
                        if(isset($_GET['pag'])){
                            $imatgeIni=($_GET['pag']-1)*$numimg;
                            $imatgeFi=$imatgeIni+$numimg;
                            $paginaActual=$_GET['pag'];
                            //INICIALITZAR VALORS
                        }else{
                            $imatgeIni=0;
                            $imatgeFi=$imatgeIni+$numimg;
                            $paginaActual=1;
                        }
						//POSICIONAR LES IMAGES A LA GALERIA
						
                        //DETERMINAR EL NUMERO DE PÀGINES -- CALCUL
						
						if(!isset($_POST['ver'])){
						
                        $paginaAnterior=$paginaActual-1;
                        $paginaSeguent=$paginaActual+1;
                        $paginaFinal=$total_imatges/$numimg;
                        $numPags=$total_imatges%$numimg;

						if($numPags>0) {
							  $paginaFinal = floor($paginaFinal) + 1;
						}
						if((isset($_GET['pag']) && $_GET['pag']==0) || !isset($_GET['pag'])){$first="class='disabled'";} 
						else{$first="";}

						if((isset($_GET['pag']) && $_GET['pag']==1) || !isset($_GET['pag'])){$first="class='disabled'";} 
						else{$first="";}

						if((isset($_GET['pag']) && $_GET['pag']==1) || !isset($_GET['pag'])){$actual="class='active'";} 
						else{$actual="";}
						
						print "<nav class=\"Page navigation\">";
						print "<ul class=\"nav nav-pills, pagination\">";
						print "<li ".$first."><a href=\"?sec=images&pag=1\" aria-label=\"Previous\"><span aria-hidden=\"true\">Firts</span></a></li>";
						print "<li ".$actual."><a href=\"?sec=images&pag=1\"><span aria-hidden=\"true\">1</span></a></li>";
                        
                        for($i=2;$i<=$paginaFinal;$i++){
                            if((isset($_GET['pag']) && $i==$_GET['pag'])){$actual="class='active'";}
                            else{$actual="";}
                            print "<li ".$actual."><a href=\"?sec=images&pag=".$i."\"><span> ".$i." </span></a></li>";
                        }
						}                       
						if(!isset($_POST['ver'])){
                        if(isset($_GET['pag']) && $_GET['pag']==$paginaFinal){$last="class='disabled'";}
                        else{$last="";}
						
						print "<li ".$last."><a href=\"?sec=images&pag=".$paginaFinal."\"><span>Last</span></a></li>";
						print "</ul>";
						print "</nav>";
						print "<span style=\"color:#666666\" class=\"hidden-sm hidden-xs visible-lg visible-md\">Page ".$paginaActual." of ".$paginaFinal ."</span>";	
						}						
                        ?>  
                        <?php
							if(!isset($_POST['ver'])){
								print "<form method=\"POST\">";
							    while($imatgeIni<=$imatgeFi-1){	
								if($imatgeIni>=$total_imatges) break;
								if($imatgeIni%9==0){echo "</br>";}							
								?>
                                <div class="pictures">
								<img src="../uploads/<?php echo $fitxers[$imatgeIni]?>" width="155px" height="155px" alt='<?php echo $fitxers[$imatgeIni]?>'/>								
                                <div class="captiones"><input type='hidden' name='ver' value='ver'><button type="submit" class="btn btn-info" name='ID' id='ID' value='<?php echo $fitxers[$imatgeIni]?>'>View Image</button></div>								
								</div>
								<?php					
								$imatgeIni++;
								}
								echo "<hr>";							
							print "</form>";
							}					
						?>	
                    </div>
                </div>
           </div>         
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->  
<?php } ?>
		
</body>
</html>